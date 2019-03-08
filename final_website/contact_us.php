<?php
if(isset($POST['contact_name'])&& isset($POST['contact_email'])&& isset($POST['contact_text'])){
	$contact_name=$_POST['contact_name'];
	$contact_email=$_POST['contact_email'];
	$contact_text=$_POST['contact_text'];
	if(!empty($contact_name)&&!empty($contact_email)&&!empty($contact_text)){
		if(strlen($contact_name)>25||strlen($contact_email)>50||strlen($contact_text)>1000){
			echo'maxlength for some field';
		}else{
			$to='speedyboyxxx@gmail.com';
			$subject='contact form sumitted';
			$body=$contact_name."\n".$contact_text;
			$headers='Form:'.$contact_email;
			if(@mail($to,$subject,$body,$headers)){
				echo'thanks for contacting us. we will be in touch soon';
			}else{
				echo'sorry an error occure';
			}
		}
	}else{
		echo'all fields are required';

	}
}
?>
<form action="index.php" method="POST">
Name:<br> <input type="text" name="contact_name" maxlength="25"><br><br>
Email adress:<br> <input type="text" name="contact_email" maxlength="50"><br><br>
Message:<br>
<textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea><br><br>
<input type="submit" value="send">
</form>
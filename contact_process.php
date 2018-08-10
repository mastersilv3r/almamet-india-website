<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if($name || $email || 1)
{
	$pfw_header = "From: noreply@gmail.com";
	$pfw_subject = "You have received a website enquiry from $name";
	$pfw_email_to = "rajesh@mindgrep.com";
	
	$pfw_message = "\nWebsite Enquiey Form\n\n\n";
	$pfw_message.= "FULL NAME: $name \n\n";
	$pfw_message.= "EMAIL: $email \n\n";
	$pfw_message.= "PHONE: $phone \n\n";
	$pfw_message.= "MESSAGE: $message \n";
	$pfw_message.= "\n\n========== END OF EMAIL ==========\n";
	
	@mail($pfw_email_to,$pfw_subject,$pfw_message,$pfw_header);
	header('Location: thankyou.html');

	// if email was successfully send
    // echo 'Thank you for contacting us. We will get in touch with you very soon.';
}
else
header('Location: http://www.almamet-india.com/contact.html');
 ?>
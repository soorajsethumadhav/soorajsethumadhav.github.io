<?php
if(isset($_POST['submit'])) {

	$to = "mail@iyersintellect.com"; 
	$subject = "Course Enquiry";
	$name_field = $_POST['name'];
	$email_field = $_POST['email'];
	$phone_field = $_POST['phone'];
	$message = $_POST['message'];
	$dropdown = $_POST['drop_down'];

	
	
	$body = "From: $name_field\n E-Mail: $email_field\n Phone: $phone_field\n $check_msg Course: $dropdown\n Message:\n $message\n";
$mail_status = mail($to, $subject, $body);
	if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for the message. We will contact you shortly.');
  window.location ='index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Message sending failed.');
  window.location = 'index.html';
 </script>
<?php
}}
?>
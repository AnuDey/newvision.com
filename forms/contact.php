<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// $message_sent = false;
// if(isset($_POST['email']) && $_POST['email'] !=''){
  
//   if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
  $username = $_POST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  
  // $to = "umadey.98@gmail.com";
  // $body = "";
  
  // $body .= "Form: ".$username. "\r\n";
  // $body .= "Email: ".$email. "\r\n";
  // $body .= "Message: ".$message. "\r\n";
  // if(empty($email))
  //   {
  //     echo "Please fill all the fields";
  //   }
  //   else
  //   {
      mail("umadey.98@gmail.com",$message, "From: $username <$email>");
      echo "<script type='text/javascript'>alert('your message sent successfully')</script>";
      //window.history.log(-1);
    // }
    ?>

<!-- // $message_sent = true;
// }
// else{
//   $invalid_class_name = "form-invalid";
// }
// }

// $to = "umadey.98@gmail.com";
// $form_name = $_POST['name'];
// $form_email = $_POST['email'];
// $subject = $_POST['subject'];
// $msg = $_POST['message'];
// $headers = "Form : $form_email";

// mail($to,$form_name,$subject,$msg,$headers);
//  echo "Mail sent.";
// Replace contact@example.com with your real receiving email address
// $receiving_email_address = 'umadey.98@gmail.com';

// if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//   include( $php_email_form );
// } else {
//   die( 'Unable to load the "PHP Email Form" Library!');
// }

// $contact = new PHP_Email_Form;
// $contact->ajax = true;

// $contact->to = $receiving_email_address;
// $contact->from_name = $_POST['name'];
// $contact->from_email = $_POST['email'];
// $contact->subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$contact->smtp = array(
  'host' => 'example.com',
  'username' => 'example',
  'password' => 'pass',
  'port' => '587'
);
*/

// $contact->add_message( $_POST['name'], 'From');
// $contact->add_message( $_POST['email'], 'Email');
// $contact->add_message( $_POST['message'], 'Message', 10);

// echo $contact->send();
 -->

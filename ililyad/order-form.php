<?php
//if "email" variable is filled out, send email
  
  //Email information
  //$admin_email = "info@iliadneuro.com";
$admin_email = "fratkit@iliadneuro.com";
//$admin_email = "msuresh@simhasoft.com";

 
  //$subject = $_POST['subject'];
 // $comment = $_POST['comment'];
$result="";
  $author = trim($_POST['author']);
  $firstname = trim($_POST['firstname']);
  $lastname = trim($_POST['lastname']);
  $organization = trim($_POST['organization']);
  $address = trim($_POST['address']);
  $email = trim($_POST['email']);
  $city = trim($_POST['city']);
  $state = trim($_POST['state']);
  $zipcode = trim($_POST['zipcode']);
  $country = trim($_POST['country']);
  $telephone = trim($_POST['telephone']);
  $testkits = trim($_POST['testkits']);
  $message = trim($_POST['message']);
  if(!empty($author)&& !empty($firstname) && !empty($lastname) && !empty($organization) && !empty($address) && !empty($email) && !empty($city) && !empty($state) && !empty($zipcode) && !empty($country) && !empty($telephone) && !empty($testkits)){
  $msg = "I am A:". str_repeat('', 2) . $author . "\n" . "First Name:" .str_repeat('', 2) . $firstname ."\n" . "Last Name:" .str_repeat('', 2) . $lastname ."\n". "Physicians Office/Organization:" .str_repeat('', 2) . $organization ."\n". "Address:".str_repeat('', 2) .$address ."\n"."Email:".str_repeat('', 2) . $email ."\n"."City:".str_repeat('', 2) . $city ."\n". "State:".str_repeat('', 2) . $state ."\n"."Zip Code:".str_repeat('', 2) . $zipcode ."\n". "Country:".str_repeat('', 2) . $country ."\n"."Telephone #:".str_repeat('', 2) . $telephone ."\n"."# of Test Kits:".str_repeat('', 2) . $testkits ."\n"."Message:".str_repeat('', 2) .  $message ;
  $msg = wordwrap($msg);

//mail($admin_email, "Order a Kit " , $msg,  "From:" . $email);

$mailHandle=mail($admin_email, "Order a Kit " , $msg,  "From:" . $email);
  //send email
  if($mailHandle)
  {
    $result ="Email is Sent. order process is  completed";
    
  }
 else{
 $result = "Email is not sent. order process is  not completed";
 }

}
else{
 // $result ="Incorrect Data. order process is  not completed ";
header("Location: order-a-kit.html");
}
echo json_encode( $result );
  
  
  //Email response
  //echo "Thank you for contacting us!";


  //if "email" variable is not filled out, display the form
  // else  {
?>
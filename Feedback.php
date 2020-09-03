<?php
  $name = $_POST{'name'};
  $visitor_email = $_POST{'email'};
  $message = $_POST{'message'}


  $email_form = 'homeworksitecollect2020@gmail.com'

  $email_subject = 'Feedback Submission'

  $email_body = "User_Name: $name.\n".
                  "User_Visitor: $Visitor_email.\n".
                    "User_Message: $message.\n";

  $to = "asunakirito211@gmail.com";

  $headers = "from: $email_form \r\n";

  $headers = "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: Feedback.html");

                  
?>

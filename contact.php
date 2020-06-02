<?php
    $name = $_POST['name'];
    $cust_email = $_POST['email'];
    $cust_phone = $_POST['phone'];
    $message = $_POST['message'];



    $email_from = 'herbarium.com';
    
    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n",
                    "User Email: $cust_email.\n",
                        "User Phone Number: $cust_phone.\n"
                            "User Message: $message.\n";

    $to = "jasnajwa98@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $cust_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: inquiry.html");



?>

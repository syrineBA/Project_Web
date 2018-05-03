<?php

if (isset($_POST['submit'])) {
    $from = $_POST['email'];
    $subject = $_POST['msg'];
    $message = getRequestURI();
    $to = "syrineba1607@gmail.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>

<?php


if(isset($_POST['submit'])){
echo "hello";
    $msg='Email: ' .$_POST['email'] . "\n".'Message: ' .$_POST['msg'];
    mail('syrineba1607@gmail.com','contact Us',$msg);
header('location: ../../index.php');
}else {
header('location: ../../contact.php');
exit(0);}
?>



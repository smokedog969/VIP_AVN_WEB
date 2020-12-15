<?php
var_dump($_POST);

mail(
    "steffen.schafrik@googlemail.com",
     "Es gibt eine neue Anfrage",
     "Email: {$_POST['email']}, Name: {$_POST['name']}, Message: {$_POST['message']}" );

     header("Location: index.php?contacted=1");
?>
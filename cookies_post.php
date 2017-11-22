<?php
    $posttime = time();
    setcookie('nome',$_POST['nome'],time()+(3600*24*7));
    
    header("Location: http://robertoarnoldi.altervista.org/cookies.php");
?>
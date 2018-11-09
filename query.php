<?php

       $value = $_GET['q'];
       setcookie('question',$value,time() + (86400 * 30), "/");
       
        	 //$net = $_COOKIE['question'];
             //echo "<script>alert('$net')</script>";
             header('Location: search.php'); 
     
?>
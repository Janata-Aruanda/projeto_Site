<?php

    function sendEmail($text){

              
        $key =  "nVvsFuwHq3MBKFKu";
        $server = "gnp9vkep";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://mailosaur.com/api/messages?server={$server}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"to\":\"janataaruanda@gmail.com\",\"text\":\"{$text}\",\"send\":true}");
        curl_setopt($ch, CURLOPT_USERPWD, 'api' . ':' . $key);
    
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }else{
            echo '<script> alert("Verifique seu email,para acessar o link da redefinição da senha! ")</script>';
            header("Location: index.php");  
        }
        curl_close($ch);
  
    };
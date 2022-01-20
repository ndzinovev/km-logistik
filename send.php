<?php

$hel_bot = $_POST["usernamef"];
    
     
    if(empty($hel_bot)){     
           
        $message  = "Имя пользователя: " . $_POST['username'] . "<br/>";
        $message .= "Телефон: " . $_POST['userphone'] . "<br/>";
        $message .= "E-mail: " . $_POST['usermail'] . "<br/>";
        $message .= "Текст письма: " . $_POST['usermessage'];     
                        
        send_mail($message); 
    }
    else {
        header("Location:http://km-logistika.tmweb.ru/index.html");
    };   
                 
    function send_mail($message){
        
        $mail_to = "nfrezerv@yandex.ru"; // почта, на которую придет письмо
        // km-logis@yandex.ru, elena@platbars.ru           .$_SERVER['HTTP_REFERER']
        $subject = 'Обратная связь с сайта: Фулфилмент для маркетплейсов '; 
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; 
        //$mail_header.= "From: Сайт Фулфилмент для маркетплейсов <informer@$server>\r\n";
                
       mail($mail_to, $subject, $message, $headers);
            
    }



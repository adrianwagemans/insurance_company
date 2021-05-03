<?php 

    if(isset($_post['submit'])){
        $name = $_post['name'];
        $mailFrom = $_post['email'];
        $mailto = "elmailbigfoot@gasdasd.com";
        $message = $_post['message'];
        $subject = $_post['Betreff'];
        $headers = "from : ".$mailFrom;
        $txt = "you have recive a mail from ".$name./n/n.$message

        mail($mailto, $subject, $txt, $headers);4

        header("location: contact.php ? mailSend" );
    }
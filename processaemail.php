<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"> 
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <body>
        <?php
        require("sendgrid-php-master/sendgrid-php.php");


        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $timsg = $_POST['timsg'];
        $msg = $_POST['msg'];

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("victorarthuralvesdasilva@gmail.com", "FAWF FAW");// email de alguém
        $email->setSubject("WFAWFAWFA"); //titulo
        $email->addTo("gamejaffthelink@gmail.com", "ExaAWFFAmple FWFAWA");  // email para o dono do site
        $email->addContent("text/plain", "and easy to do anywhere, even with PHP"); //texto da msg
        $email->addContent(
            "text/html", "<strong>$timsg and easy to do anywhere, even with PHP</strong>" //texto da msg
        );
        $sendgrid = new \SendGrid(getenv('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'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
        ?>
    </body>
</html>
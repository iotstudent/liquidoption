<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername("promisebeeceo@gmail.com")
    ->setPassword("godandme");

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendEmail($userEmail,$trade_plan,$end_date,$trader_fname,$trader_lname)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Test mail</title>
      <style>
        body{
          background-color:blue;
         }
        .wrapper {
          margin:50px;
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
        
      </style>
    </head>

    <body>
      <div class="wrapper">
      <p>Dear <span style="text-transform:capitalize;">'.$trader_lname.' '.$trader_fname.'</span> </p>
      <p>
       your investment on our platform. which is the '.$trade_plan.' plan  would be ready on the '.$end_date.'
       please kindly reply this email with your prefered payment platform and details.
       <ol>
          <li>Bitcoin</li>
          <li>Bank transfer</li>
       </ol>
      </p>  
     
      </div>
    </body>

    </html>';

    // Create a message
    $message = (new Swift_Message('Investment Notification'))
        ->setFrom("promisebeeceo@gmail.com")
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
       
    } else {
        
        return false;
    }
}

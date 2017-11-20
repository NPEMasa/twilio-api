<?php
require_once 'path/to/your/autoload.php'; 
use Twilio\Rest\Client;

if(empty($_GET['msg'])){
  $msg = "This message is Twilio test msg's.";
}else{
  $msg = htmlspecialchars($_GET['msg']);
}

$sid = "<your twilio API sid>";
$token = "<your twilio API token id>";
$client = new Client($sid, $token);

$client->messages
    ->create(
        "+<send to phone number>",
        array(
            "from" => "+<from twilio number>",
            "body" => $msg,
        )
    );

echo $client;

?>

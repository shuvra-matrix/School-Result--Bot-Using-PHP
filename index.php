<?php

include "db.php";

$input = file_get_contents('php://input');
$data = json_decode($input);

$TOKEN = "1938656199:AAGEcOUNta3yqFSC2geIr3vKCgsREY021TQ";

$TEXT = "hello Shuvra";
$CHAT_ID = $data->message->chat->id;
$message = $data->message->text;
if ($message == '/start') {
    $msg = "Welcome. %OAPlease enter your roll Number";
} else {
    $msg = "Other message";
}

$URL = "https://api.telegram.org/bot$TOKEN/sendMessage?chat_id=$CHAT_ID&text=$msg";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result, true);
curl_close($ch);
echo "<pre></pre>";
print_r($result);

?>






https://api.telegram.org/bot1938656199:AAGEcOUNta3yqFSC2geIr3vKCgsREY021TQ/setWebhook?url=http://shuvraproject.epizy.com/index.php
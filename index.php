<?php

include "db.php";

$input = file_get_contents('php://input');
$data = json_decode($input);
$TOKEN = "1938656199:AAGEcOUNta3yqFSC2geIr3vKCgsREY021TQ";

$CHAT_ID = $data->message->chat->id;
$message = $data->message->text;
$first_name = $data->message->from->first_name;


if ($message == '/start') {
    $msg = "Welcome $first_name. %0APlease enter your roll Number";
} else {
    $message = mysqli_real_escape_string($connect,$message);
    $query = "SELECT * FROM students WHERE roll_no='$message'";
    $result = mysqli_query($connect,$query) ;
    $row = mysqli_fetch_assoc($result);
    if($row)
    {   $name = $row['name'];
        $msg = "Hi $name";
    }
    else
    {
        $msg = "Invalid Roll Number";
    }
}

$URL = "https://api.telegram.org/bot$TOKEN/sendMessage?chat_id=$CHAT_ID&text=$msg";
file_get_contents($URL);

?>




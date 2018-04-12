include("Telegram.php");
date_default_timezone_set("asia/tehran");
// Set the bot TOKEN
$bot_id = "555177137:AAEJu_mOjCPq8BJbtQbULQMmN_SOjUrjQFI";
// Instances the class
$telegram = new Telegram($bot_id);
$text = $telegram->Text();
$username = $telegram->Username();
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID();
$user_id = $telegram->UserID();
$chat_id = $telegram->ChatID();
if(!is_null($text) && !is_null($chat_id)){
$content = array('chat_id' => $chat_id, 'text' => $user_id);
$telegram->sendMessage($content);
}

<?php
$db = new SQLite3('messages.db');

$result = $db->query('SELECT text FROM messages');
$messages = [];
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    $messages[] = $row;
}
echo json_encode($messages);
?>

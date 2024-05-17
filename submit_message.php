<?php
$db = new SQLite3('messages.db');

$data = json_decode(file_get_contents('php://input'), true);
$text = $data['text'];

if ($text) {
    $stmt = $db->prepare('INSERT INTO messages (text) VALUES (:text)');
    $stmt->bindValue(':text', $text, SQLITE3_TEXT);
    $stmt->execute();
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>

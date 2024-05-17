<?php
$db = new SQLite3('messages.db');

$db->exec('CREATE TABLE IF NOT EXISTS messages (id INTEGER PRIMARY KEY, text TEXT)');

echo "Database initialized.";
?>

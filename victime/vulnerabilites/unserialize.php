<?php
class User
{


    public function __construct()
    {
        echo "User constructed<br>";
    }

    public function dangerousFunction()
    {
        echo "<br>Dangerous function triggered<br>";
    }

    public function __destruct()
    {
        $this->dangerousFunction();
        echo "<br>User destructed<br>";
    }
}
//O:4:"User":1:{s:10:"Username";s:4:"Toto";}

$user = $_GET['user'];

$unserialized = unserialize($user);
// $toto = new User();
// $serialized = serialize($toto);
// echo $serialized;

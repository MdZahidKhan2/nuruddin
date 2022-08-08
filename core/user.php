<?php

include 'database.php';
class user extends database{
    
    public function saveUser($name,$user,$password)
    {
        $sql "INSERT INTO user (username,password,email) VALUES ('$name','$password','$email')";
        $this->dataWrite($sql);
    }
}


?>
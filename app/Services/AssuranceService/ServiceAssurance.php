<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/Assurance.php');
require_once('InterfaceAssurance.php');

class ServiceAssurance extends DataBase implements InterfaceAssurance{
    function addAssurance(Assurance $assurance){
        $pdo = $this->connection();
    }
}


?>
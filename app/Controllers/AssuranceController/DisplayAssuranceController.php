<?php


require_once('../../Services/AssuranceService/InterfaceAssurance.php');
require_once('../../Services/AssuranceService/ServiceAssurance.php');

$displayAssur = new ServiceAssurance();

$AssuranceData = $displayAssur->displayAssurance();


?>
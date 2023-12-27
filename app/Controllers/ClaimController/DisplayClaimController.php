<?php


require_once('../../Services/ClaimService/InterfaceClaim.php');
require_once('../../Services/ClaimService/ServiceClaim.php');

$dispalyClaim = new ServiceClaim();

$claimData = $dispalyClaim->displayClaim();

?>
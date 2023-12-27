<?php

interface InterfaceClaim {
    function addClaim(Claim $claim);
    function updateClaim(Claim $claim);
    function deleteClaim($id);
    function displayClaim();
   
   
}
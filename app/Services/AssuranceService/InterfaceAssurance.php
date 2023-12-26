<?php

interface InterfaceAssurance {
    function addAssurance(Assurance $assurance);
    function updateAssurance(Assurance $assurance);
    function deleteAssurance($id);
    function displayAssurance();
    function displayAssuranceById($id);
   
}
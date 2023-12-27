<?php

interface InterfaceClient {
    function addClient(Client $client);
    function updateClient(Client $client);
    function deleteClient($id);
    function displayClient();
    function displayClientById($id);
   
}
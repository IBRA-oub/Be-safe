<?php
require_once('../../Models/Assurance.php');
require_once('../../Services/AssuranceService/InterfaceAssurance.php');
require_once('../../Services/AssuranceService/ServiceAssurance.php');

echo'ff';



if(isset($_POST['update'])){
    
    echo'bb';  
    $Assurance_ID = $_POST['Assurance_ID'];
    $Name = $_POST['Name'];
    
    $nomImage = $_FILES['Logo']['name'];
    $tmpImage = $_FILES['Logo']['tmp_name'];
    
    $path = "../../../public/uploads/";
    
    $Logo = $path .  $nomImage ;
    
     //for checking if the image was uploaded
     $result = move_uploaded_file($tmpImage , $Logo);
    
    try{
        
        $Assurence = new Assurance($Name,$Logo);
        $Assurence->setAssurance_ID($Assurance_ID);
        
        $serviceAssurUpd = new ServiceAssurance();
        $serviceAssurUpd->updateAssurance($Assurence);
        
        
        
        header('location:../../Views/assurance/dispalyAssurance.php');
        
        }catch(PDOException $e){
            
            die($e->getMessage());
        }
}





?>
<?php
require_once('connect.php');
if(isset($_GET['id'])){
    $Id= $_GET['id'];
    $req="DELETE FROM message WHERE id=$Id";
    $result=mysqli_query($conn,$req);
    if($result){
        echo "Suppression réussie";
        header('location:afficher.php');
    } else {
        echo "Suppression échouée";

    }
}
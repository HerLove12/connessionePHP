<?php
    include "connessione.php";
    

    var_dump($_POST["attori"]);

    $idx = (int)$_POST['attori'];
    $qx = "DELETE FROM attori WHERE CodAttore = $idx";
    $conn->query($qx) or die($conn->error);
        if($conn->affected_rows>0){
            echo "attore eliminato con successo";
        }
        else{
            header("Location: errore.html");
        }
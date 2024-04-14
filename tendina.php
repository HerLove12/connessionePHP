<?php
include_once("connessione.php");

$query = "SELECT * FROM attori";
$result = $conn->query($query);

echo"<h1>ELIMINA ATTORI</h1><br>";
echo"<form action=\"elimina.php\" method=\"post\">";

    echo "<select name=\"attori\" style=\"width: 100%\">";
    // Loop through each row and create an option tag
    while ($row = $result->fetch_assoc()) {
        $id = $row['CodAttore'];
        $name = $row['Nome'];
        var_dump($id);
        var_dump($name);
        echo "<option value=\"$id\">$id - $name</option>";
    }

    // Close the select tag
    echo "</select>";
    echo "<input type=\"submit\" value=\"invia\">";
echo "</form>";

<?php
include_once("connessione.php");

$conn->query("INSERT INTO attori(Nome, AnnoNascita, Nazionalita) VALUES ('".$_POST['nome']."', '".(int)$_POST['anno']."', '".$_POST['nazionalita']."')");
if ($conn->affected_rows <= 0) {
  header("Location: /errore.html");
}
else {
  echo "Inserimento avvenuto con successo!";
  echo "<h1>dati attore:</h1>"."<br>";
    echo "Nome: ". $_POST['nome'] ."<br>";
    echo "Anno di nascita: ".$_POST['anno']."<br>";
    echo "Nazionalità: ".$_POST['nazionalita']."<br>";
  echo "<br>";
  echo "numero attori: ". $conn->query("SELECT COUNT(*) FROM attori")->fetch_row()[0] . "<br>";
  echo "<a href='index.html'>Torna alla home</a>";
}
<?php
include_once("connessione.php");

$nf = $_POST['nome_film'];
$anno = (int)$_POST['anno_attore'];

$result = $conn->query("SELECT * FROM attori 
    JOIN recita ON attori.CodAttore = recita.CodAttore
    JOIN film ON film.CodFilm = recita.CodFilm
    WHERE film.Titolo LIKE \"$nf\" AND attori.AnnoNascita < $anno ORDER BY attori.Nome ASC") or die($conn->error);

echo "<table style=\"box-sizing: border-box; border-collapse:collapse; border:solid black 1px\">";
echo "<tr style=\"border:solid black 1px\"><th>Nome</th><th>Anno di Nascita</th><th>Nazionalita</th><th>Titolo film</th></tr>";
while($row = $result->fetch_assoc()) {
    echo "<tr style=\"border:solid black 1px\">";
    echo "<td>Attore: ".$row['Nome']."</td>";
    echo "<td>Anno di nascita: ".$row['AnnoNascita']."</td>";
    echo "<td>Nazionalità: ".$row['Nazionalita']."</td>";
    echo "<td>Film: ".$row['Titolo']."</td>";
    echo "</tr>";
}
echo "</table>";

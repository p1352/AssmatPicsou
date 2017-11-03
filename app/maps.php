<?php 
include ('./connect_db.php');

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<', '&lt;', $htmlStr);
    $xmlStr=str_replace('>', '&gt;', $xmlStr); 
    $xmlStr=str_replace('"', '&quot;', $xmlStr);
    $xmlStr=str_replace("'", '&#39;', $xmlStr);
    $xmlStr=str_replace("&", '&amp;', $xmlStr);
    return $xmlStr;
}

// Requete pour récupérer toute la table
$query = "SELECT * FROM `TABLE 6` WHERE 1";
$result = $connexion->query($query);
if (!$result) {
    die('Query invalide :' . mysql_error());
}
header ("Content-type:text/xml");

// Démarrage du fichier XML
echo '<markers>';

// Itération des lignes et création du contenu XML 
while ($row = $result->fetch()){
    echo '<marker '; 
    echo 'name="' . parseToXML($row['Name']). '"'; 
    echo ' address="' . parseToXML($row['Adresse']).' ' . parseToXML($row['CP']). ' ' . parseToXML($row['Ville']) . ' " ';
    echo ' lat="' . $row['Y'] . '"';
    echo ' lng="' . $row['X']. '"';
    echo ' type="'. $row['Pays'].'"';
    echo ' date="'. $row['Date'].'"';
    echo ' objet="'. parseToXML($row['Objet']) . '"'; 
    echo ' description="'. parseToXML($row['description']). '"'; 
    echo '></marker>' ;

}

// Fin du doc XML
echo '</markers>';
$result->closeCursor();
?>

<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'ROUSSEL';
$password = '02/08/2004';
$bdd = 'ROUSSEL_biblio';

try {
    $monPdo = new PDO("mysql:$hostnom; dbname=$bdd; charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e-›getMessage();
    $monPdo = null;
}
?>
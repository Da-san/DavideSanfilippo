<?php
/**
 * Created by PhpStorm.
 * User: davidesanfilippo
 * Date: 30/08/15
 * Time: 16:19
 */

$prezzo = $_POST['prezzo'];
$iva = $_POST['iva'];

$subtotale = $prezzo * 100;
$subiva = $iva + 100;
$totale = $subtotale / $subiva;

echo $totale . " Euro";
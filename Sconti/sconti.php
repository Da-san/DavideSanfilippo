<?php
/**
 * Created by PhpStorm.
 * User: davidesanfilippo
 * Date: 30/08/15
 * Time: 16:19
 */

$prezzo = $_POST['prezzo'];
$sconto = $_POST['sconto'];
$subtotale = ($prezzo*$sconto)/100;
$totale = $prezzo - $subtotale;
echo $totale . " Euro";
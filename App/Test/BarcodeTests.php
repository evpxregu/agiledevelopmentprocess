<?php


require('../Barcode.php');
// Tests that check if we recive correct barcode info from database.

assert(getResult('ean_13','5119417807081') == 'wood,burn it','value should be equal to eachother');

assert(getResult('ean_13','5119417807111') == 'boy we did it', 'unexpcted result' );

assert(getResult('ean_13', '7340116870030') == 'pant', 'do not recive corret info');

assert(getResult('ean_13', '15') == '20', 'Error test 1');

echo "if you only se this, all test passed. \n Good job! :D";

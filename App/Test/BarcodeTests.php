<?php


require('../Barcode.php');

assert(getResult('ean_13','5119417807081') == 'wood,burn it','value should be equal to eachother');


assert(getResult('ean_13','5119417807111') == 'could not find any information', 'unexpcted result' );

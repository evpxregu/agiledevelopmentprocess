<?php
//lets start with some validation of the submitted parameters
$code_type = filter_input(INPUT_POST,'code_type',FILTER_SANITIZE_SPECIAL_CHARS);
$code_number = filter_input(INPUT_POST,'code_number',FILTER_SANITIZE_SPECIAL_CHARS);

//todo: move all of this to some nice MVC controller like structure which is actually database backed. 
//For now we are just going to give some data back for my package of "stroopwafelen" which is the only thing i have for testing

if($code_type === 'ean_13' && $code_number === '5410091692278')
{
    //note RH: return HTML so we can later switch to an android application easier using some webviewer or an AJAX or support for a version for jsblock users with degraded experience.
    echo "My test product information, set from barcode.php, can contain dynamic HTML "  . rand(0,100000);
}
else
{
    http_response_code(404); //note RH; set status code in an attempt to use a rest like structure
    echo 'could not find any information';
}
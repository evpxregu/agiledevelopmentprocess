<?php
//lets start with some validation of the submitted parameters
$codetype = filter_input(INPUT_POST,'code_type',FILTER_SANITIZE_SPECIAL_CHARS);
$codenumber = filter_input(INPUT_POST,'code_number',FILTER_SANITIZE_SPECIAL_CHARS);

//todo: move all of this to some nice MVC controller like structure which is actually database backed. 
//For now we are just going to give some data back for my package of "stroopwafelen" which is the only thing i have for testing

function getResult($code_type,$code_number){
    
    if($code_type === 'ean_13' && $code_number === '5410091692278')
    {
        //note RH: return HTML so we can later switch to an android application easier using some webviewer or an AJAX or support for a version for jsblock users with degraded experience.
        return "My test product information, set from barcode.php, can contain dynamic HTML "; //removed .rand(0,10000)
    }

    else if ($code_type === 'ean_13' && $code_number === '0856991004103') {
        return "N!ck's kexbar! sort as plastics!"; 
    }

    else if ($code_type === 'ean_13' && $code_number === '5449000131836') {
        return "Coca Cola ZERO! sort as plastics!"; 
    }
    
    else if ($code_type === 'ean_13' && $code_number === '7311250004346') {
        echo "General XR White sort as plastic!"; 
    }

    else if ($code_type === 'ean_13' && $code_number === '7311250004551') {
        echo "General XR Original sort as plastic!"; 
    }

    else if($code_type === 'ean_13' && $code_number === '5119417807081')
    {
        return 'wood,burn it';
    }
    else if($code_type ==='ean_13' && $code_number === '9780201379624')
    {
        return 'super huge barcode';
    }
    else
    {
        return 'could not find any information';
    }

}
$result = getResult($codetype,$codenumber);
if($result ==='could not find any information')
{
    http_response_code(404);
    
}
echo $result;
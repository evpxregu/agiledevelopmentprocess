<?php // 
$error = $barcode = $name = '';
if (isset($_POST["submit"]))   
    {
    // 1. Validating Barcode Value
    // 1.a. Error Scenario 1 : 
    if(empty($_POST["newbarcode"]))
        {
            $error .= "<p>Please Enter Barcode</p>";
        }
    else
        {
            $barcode = $_POST["newbarcode"];
    // 1.b. Error Scenario 2 :
            $min = 3;
            if(!preg_match('/^[0-9]{'.$min.',}$/', $barcode))
            {
                $error .= "<p>Barcode Should Contain Numbers Only (At least $min Digits)</p>";
            }
        }
    // 2.a. Validating Product Name (1 Scenario): 
    if(empty($_POST["newname"]))
        {
            $error .= "<p>Please Enter Product Name</p>";
        }
    else
        {
            $name = $_POST["newname"];
            $name = trim($name);
        }
    
    // 3. Taking Action Given That All Fields Are Valid :)
    // Opening the CSV file, and adding the barcode and new item name to it
    if($error == '')
    {
        $csv = fopen("db.csv", "a");
        $n = count(file("db.csv"));
        
        $line = array(
            'id' => $n,
            'barcode' => $barcode,
            'name' => $name
        );
        
        fputcsv($csv, $line);
        $error = "Item Successfully Added </br>".$barcode." : ".$name;
        // Reset values
        $name = $barcode = '';
    }
    
 
        ?>
<script type="text/javascript">
    setTimeout(function () {
   window.location.href= "http://localhost/agiledevelopmentprocess/App/"; // the redirect goes here

},5000);

//window.location = "http://localhost/agiledevelopmentprocess/App/";
</script>      
    
    <?php
    
    
    
    // Reset variables
    
}

?>



<!DOCTYPE html>
<html lang ="en">
    
    <head>
        <style type="text/css">
            #prompt {
                padding: 100px 0;
                width: 50%;
                height: 50%;
                margin: 0 auto;
        </style>
    </head>
    
    <body>      
            <div id = "prompt" class = "container">
                <?php echo ("<h1>".$error."</h1>") ; ?>
            </div>
    </body>
        
</html>
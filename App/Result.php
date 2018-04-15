<?php
$barCode = $_GET['barcode'];
echo "Recycle as: ";

//TODO: Change cases to some actual products we can use for testing
switch ($barCode) {
    case 0:
        echo "Plastic";
        break;
    case 1:
        echo "Metal";
        break;
    case 2:
        echo "Glass";
        break;
    default:
        echo "Unkown";
        break;
}
?>


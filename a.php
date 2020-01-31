<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link = substr($actual_link, strpos($actual_link, "?") + 1);    

include 'simple_html_dom.php';

// Create DOM from URL
$html = file_get_html($actual_link);

if($html != ""){
    // Find all images
    $copertinaImg = $html->find('.td-modal-image')[1];
    $contenutoTxt = $html->find('.td-post-content p');
    echo $copertinaImg;
    foreach ($contenutoTxt as $bloccoTxt){ 
        echo $bloccoTxt;
        } 
} else {
    echo "Nessun articolo trovato";
}




?>



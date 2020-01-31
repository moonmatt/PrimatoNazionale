<?php

include 'simple_html_dom.php';

// Create DOM from URL
$html = file_get_html("https://www.ilprimatonazionale.it/");

if($html != ""){
    // Find all images
    $copertinaPost = $html->find('.td-slide-meta a');
    $copertinaTag = $copertinaPost[0]; // CATEGORIA
    $copertinaTitleDiv = $copertinaPost[1]; // BLOCCO DEL TITOLO
    $copertinaAutor = $copertinaPost[2]; // AUTORE
    $copertinaComments = $copertinaPost[3]; // NUMERO COMMENTI
    $copertinaDate = $html->find('.entry-date')[0]; // DATA DEL POST

    $copertinaLink = htmlspecialchars($copertinaTitleDiv, ENT_QUOTES); // LINK ARTICOLO
    $copertinaLink = substr($copertinaLink, strpos($copertinaLink, "=") + 7);    
    $copertinaLink = substr($copertinaLink, 0, strpos($copertinaLink, 'rel') - 7);

    $copertinaTitle = new SimpleXMLElement($copertinaTitleDiv); //TITOLO PULITO
    // echo "<a href='http://localhost/PrimatoNazionale/a?".$copertinaLink."'>".$copertinaTitle."</a>";



    $prova = $html->find('.td_block_wrap td_flex_block_1');
    echo $prova[0];
}
?>
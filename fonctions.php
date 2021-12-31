<?php
function total($articles){
    $total = 0;
    foreach ($articles as $cle){
        $total = $total + $cle[3];
    }
    return $total;
}
?>

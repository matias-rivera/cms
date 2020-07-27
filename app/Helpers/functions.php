<?php
function getPostsRowsNumber($count){
    $rows = 0;
    $items = $count;
    $substractFour = false;
    while ($items > 0) {
        if($substractFour){
            $items= $items - 4;
            $substractFour = false;
        }
        else{
            $items= $items - 3;
            $substractFour = true;
        }
        $rows++;
    }

    return $rows;

}


<?php  
    $dest = $_GET['dest'];
    $data = $_GET['data'];
    $exist = file_get_contents("../questions/" . $dest . ".txt");
    $tempArray = json_decode($exist);
    $incomingArray = json_decode($data);
    $mergedArray = array_merge_recursive($tempArray, $incomingArray);
    $writeArray = json_encode($mergedArray);
    file_put_contents("../questions/" . $dest . ".txt", $writeArray);
?>
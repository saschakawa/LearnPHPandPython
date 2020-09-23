<?php 

if (isset($_POST['value'])) {
    $data = $_POST['value'];
    echo "Solution:   ".$data;
    $save = fopen ("save.txt", "a");
    fwrite ($save, $data."\n");
    fclose ($save);
}
?>


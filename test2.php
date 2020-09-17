<?php
    function fibunacci($n) {
        $wert1 = 0;
        $wert2 = 1;
        for($i = 0; $i < $n; $i++) {
            $wert3= $wert1 + $wert2;
            $wert1 = $wert2;
            $wert2 = $wert3;
            echo $wert3."<br>";
        }
    }
     
    fibunacci(10);
}
?>
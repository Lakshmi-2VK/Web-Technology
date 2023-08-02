<?php
    if(isset($_POST['submit'])) {
        $field1 = $_POST['field1'];
        $field2 = $_POST['field2'];
        $field3 = $_POST['field3'];
        
        echo "Data transmitted from Field 1 to Field 2: $field1<br>";
        echo "Data transmitted from Field 2 to Field 3: $field2<br>";
        echo "Data transmitted from Field 3 to Output: $field3";
    }
    ?>
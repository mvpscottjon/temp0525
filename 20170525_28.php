<?php

//
//直接讀檔案成陣列
$file = file("test.txt");
foreach ($file as $line){
    echo "==>$line";
}

//
////字串
//$filetext= file_get_contents("test.txt");
//
//echo "{$filetext}";


$data = file("excel.csv");
?>
<table border="1" width="100%">

    <tr>
        <th>f1</th>
        <th>f2</th>
        <th>f3</th>
        <th>f4</th>

        <?php
        $data = file("excel.csv");



        foreach ($data as $line){
            $fields = explode(",","$line");
            echo "<tr>";
            foreach ($fields as $field){
                echo "<td>$field</td>";
            }
            echo "</tr>";

        }
        ?>


    </tr>


</table>

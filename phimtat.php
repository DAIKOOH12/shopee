<?php
    $connection=mysqli_connect("localhost","root","","shoping");
    function show($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
?>
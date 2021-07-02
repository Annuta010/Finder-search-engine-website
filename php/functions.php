<?php 

global $query = ""SELECT * FROM `news`"";
global $results = [];

function dbSelect($query) {
    $mysqli = new mysqli("localhost", "root", "", "finder");
    $res = $mysqli->query($query);
    while ($result = mysqli_fetch_assoc($res)) {
        array_push($results, $result);
    }
    $mysqli->close();
}


?>
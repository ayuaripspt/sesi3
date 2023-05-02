<?php
    $mhs = array(
        array("Melli", "2201010311", "Kalimantan"),
        array("Alpis","2102020334", "Bima"),
        array("Prayu", "2201010426", "Madura"),
        array("Ayu", "2201010324", "Labuan Bajo"),
        array("Kade", "2201010345", "Jember"),
        array("Vina", "2201010724", "Sumbawa"),
        array("Intan", "2201010464", "Banyuwangi"),
        array("Dinan", "2201010574", "Papua"),
    );
    header("Content-Type: application/json");
    echo json_encode ($mhs);

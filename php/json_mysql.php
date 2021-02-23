<?php
    $connect = mysqli_connect("localhost", "root", "estagio", "pdoposts");

    $filename = "sensor_data.json";

    $data = file_get_contents($filename);

    $array = json_decode($data, true);

    foreach($array as $row) {
        $sql = "INSERT INTO sensor(currentDate, prediction) VALUES ('".$row["currentDate"]."', '".$row["prediction"]."')";

        mysqli_query($connect, $sql);
    }

    echo "Os dados do sensor foram inseridos";
?>
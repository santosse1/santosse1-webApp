<?php
include 'db_connection.php';

if (isset($_POST["submit"])) {
    $genderu = $_POST["genderu"];
    $matricule = $_POST["matricule"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $observation = $_POST["observation"];
    $accesArray = isset($_POST["acces"]) ? $_POST["acces"] : [];
    $acces = implode(",", $accesArray);

    $query = "INSERT INTO tb_datas VALUES('' , '$genderu', '$matricule', '$nom', '$prenom', '$observation', '$acces')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data Inserted Successfully');</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    header("location:index.php");
    exit();
}
mysqli_close($conn);

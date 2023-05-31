<?php
function request($mailprof){
    session_start();
    $conn = new mysqli("localhost", "root", "", "pfe");
    $x = $_SESSION["username"];
    $req2 = "SELECT stage FROM etudiant WHERE mail = '$x'";
    $resil = $conn->query($req2);

    if ($resil->num_rows > 0) {
        $req1 = "SELECT nom_etud, prenom_etud, filiere, mail, stage FROM etudiant WHERE mail = '$x'";
        $res = $conn->query($req1);

        if ($res->num_rows > 0) {
            $ligne = $res->fetch_array();
            $nom = $ligne[0];
            $prenom = $ligne[1];
            $filiere = $ligne[2];
            $mail = $ligne[3];
            $stage = $ligne[4];
        }

        $checkQuery = "SELECT mail FROM professeur WHERE mail = '$mailprof'";
        $checkResult = $conn->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            $req = "INSERT INTO requests VALUES ('$nom', '$prenom', '$filiere', '$mail', '$stage', '$mailprof')";

            if ($conn->query($req) === TRUE) {
                echo "Request successfully created.";
            } else {
                echo "Error inserting request: " . $conn->error;
            }
        } else {
            echo "Invalid mailprof value.";
        }
    }
}

if (isset($_GET['email'])) {
    $mail = $_GET['email'];
    request($mail);
} else {
    echo "Email parameter is missing.";
}
?>
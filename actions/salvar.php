<?php
include_once("../config/database/database.php");

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $sala = $_POST['sala'];
    $descricao = $_POST['desc'];
    $reservador = $_POST['reservador'];
    $data_hora_input = $_POST['data_hora'];

    // Formata a data e hora para o formato aceito pelo MySQL
    $data_hora = date('Y-m-d H:i:s', strtotime($data_hora_input));

    $sql = "INSERT INTO salas(salas, descr, reservador, data_criacao) VALUES ('$sala', '$descricao', '$reservador', '$data_hora')";
    $con->query($sql);

    header("Location: ../index.php");
    exit();
}
?>

<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $salas = $_POST['sala'];
    $descr = $_POST['descr'];
    $nome = $_POST['reservador'];
    $data_hora_input = $_POST['datahora'];


    $data_hora = date('Y-m-d H:i:s', strtotime($data_hora_input));

    $sql = "UPDATE salas SET salas='$salas', descr='$descr', reservador='$nome',data_criacao='$data_hora' WHERE id = ".$_GET['id'];

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}

$sql ="SELECT * FROM salas WHERE id = ".$_GET['id'];
$rows = $con->query($sql);
if($rows->num_rows > 0){
    $row = $rows->fetch_assoc();
    $salas = $row['salas'];
    $descr = $row['descr'];
    $nome = $row['reservador'];
    $data = $row['data_criacao'];
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<form method="POST">
    <div class="container" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar reserva</h1>
      </div>
      <div class="modal-body">
      <div class="mb-3 form-floating">
        <input name="sala" type="text" value="<?=$salas?>" class="form-control" id="exampleFormControlInput1" placeholder="" value="" required>
        <label for="exampleFormControlInput1">Sala</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="descr" type="text" value="<?=$descr?>" class="form-control" id="exampleFormControlInput2" placeholder="" value="" required>
        <label for="exampleFormControlInput2">Descrição</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="reservador" value="<?=$nome?>" type="text" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
        <label for="exampleFormControlInput3">Reservador</label>
      </div>
      <div class="mb-3 form-floating">
        <input type="datetime-local" value="<?=$data?>" class="form-control" id="dataHora" name="datahora" required>
        <label for="dataHora" class="form-label">Data e Hora</label>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
          <i class="bi bi-person-badge"></i>
          Salvar alterações
        </button>
      </div>
    </div>
  </div>
</div>
</form>
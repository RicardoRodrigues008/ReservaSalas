<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require_once('./config/database/database.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva de Salas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-100">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Sistema de Reserva de Salas</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reservaModal">
          Reservar Sala
        </button>
          <!-- Modal de Reserva -->
            <div class="modal fade" id="reservaModal" tabindex="-1" aria-labelledby="reservaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="reservaModalLabel">Reservar Sala</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                  <!-- Formulário de reserva -->
                  <form action="/actions/salvar.php" method="POST">
                    <div class="mb-3">
                      <label for="nomeUsuario" class="form-label">Seu nome</label>
                      <input type="text" class="form-control" id="nomeUsuario" name="reservador" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3">
                      <label for="sala" class="form-label">Sala</label>
                      <input type="text" class="form-control" id="sala" name="sala" placeholder="Ex: Sala A101">
                    </div>
                    <div class="mb-3">
                      <label for="desc" class="form-label">Descrição</label>
                      <input type="text" class="form-control" id="desc" name="desc" placeholder="Ex: Frank quer dar aula">
                    </div>
                    <div class="mb-3">
                      <label for="dataHora" class="form-label">Data e Hora</label>
                      <input type="datetime-local" class="form-control" id="dataHora" name="data_hora" required>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Confirmar Reserva</button>
                  </form>



                </div>
              </div>
            </div>
        </div>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Sala</th>
                        <th class="w-2/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Reservado por</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data e Hora</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once('./config/database/database.php');
                    $sql = "SELECT * FROM salas ORDER BY id";
                    $rows = $con->query($sql);
                    if ($rows->num_rows > 0) {
                    while ($row = $rows->fetch_assoc()) {
                        echo '
                                <tr class="border-b">
                                    <td class="py-2 px-4 text-sm text-gray-700">' . $row['salas'] . '</td>
                                    <td class="py-2 px-4 text-sm text-gray-700">' . $row['descr'] . '</td>
                                    <td class="py-2 px-4 text-sm text-gray-700">' . $row['reservador'] . '</td>
                                    <td class="py-2 px-4 text-sm text-gray-700">' . $row['data_criacao'] . '</td>
                                    <td class="text-sm text-gray-700 d-flex flex-row">
                                        <a  class="btn btn-danger" href="actions/deletar.php?id='.$row['id'].'">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a class="btn btn-primary" href="actions/editar.php?id='.$row['id'].'">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        </td>
                                </tr>';
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
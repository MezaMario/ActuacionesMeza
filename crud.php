<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro y Lista</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao9Y2z1tcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #f4f6f9;
    }

    .container {
      max-width: 1200px;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .card-header {
      background: linear-gradient(90deg, #007bff, #00bcd4);
      color: white;
      font-weight: bold;
      border-radius: 15px 15px 0 0;
      text-align: center;
      padding: 15px;
    }

    .form-label {
      font-weight: 600;
      color: #343a40;
    }

    .btn {
      margin-right: 8px;
    }

    .btn-info {
      background-color: #00bcd4;
      border: none;
    }

    .btn-info:hover {
      background-color: #00a9c0;
    }

    .btn-secondary {
      background-color: #6c757d;
    }

    .table th, .table td {
      vertical-align: middle;
    }

    .row {
      margin-top: 40px;
    }

    /* Separación visual más clara */
    @media (min-width: 768px) {
      .col-md-5 {
        border-right: 1px solid #dee2e6;
        padding-right: 30px;
      }

      .col-md-7 {
        padding-left: 30px;
      }
    }
  </style>
</head>
<body>
  <div id="navbar-container"></div>
  <div class="container mt-5">
    <div class="row">
      <!-- Formulario -->
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            Registro de Información
          </div>
          <div class="card-body">
            <form action="insertar.php" method="POST">
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido" required>
              </div>
              <div>
                <input class="btn btn-info" type="submit" value="Insertar" name="action">
                <input class="btn btn-secondary" type="submit" value="Actualizar" name="action">
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Lista -->
      <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            Lista de Usuarios
          </div>
          <div class="card-body">
            <table class="table table-bordered table-hover">
              <thead class="table-light">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Juan</td>
                  <td>Pérez</td>
                  <td>
                    <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-pen-fill"></i></a>
                    <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                  </td>
                </tr>
                <!-- Puedes agregar más filas dinámicamente con PHP -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFY1zclABN1+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous"></script>
    
  <script src="navbar.js"></script>
</body>
</html>

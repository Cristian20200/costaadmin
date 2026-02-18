<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Costadmin | Acceso Administrador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="bg-light">
  <div class="container py-5">
    <a href="index.php" class="btn btn-link ps-0">← Volver al inicio</a>
    <div class="row g-4 align-items-start">
      <div class="col-lg-4">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4">
            <h1 class="h4 fw-bold">Panel Administrador</h1>
            <p class="text-muted small">Acceso para Super Admin, financiero, operativo y soporte.</p>
            <form>
              <div class="mb-3">
                <label class="form-label">Correo</label>
                <input type="email" class="form-control" placeholder="admin@costadmin.com">
              </div>
              <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" placeholder="********">
              </div>
              <button type="button" class="btn btn-dark w-100">Ingresar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4">
            <h2 class="h5 fw-bold">Vista previa del dashboard</h2>
            <div class="row g-3 mb-4">
              <div class="col-md-4"><div class="objective"><div class="p-3"><small>Total apartamentos</small><h3 class="h5 mb-0">126</h3></div></div></div>
              <div class="col-md-4"><div class="objective"><div class="p-3"><small>Ingresos del mes</small><h3 class="h5 mb-0">$148.000.000</h3></div></div></div>
              <div class="col-md-4"><div class="objective"><div class="p-3"><small>Utilidad neta</small><h3 class="h5 mb-0">$96.300.000</h3></div></div></div>
            </div>
            <div class="table-responsive">
              <table class="table table-sm align-middle">
                <thead>
                  <tr><th>Módulo</th><th>Estado</th><th>Última acción</th></tr>
                </thead>
                <tbody>
                  <tr><td>Gestión de propiedades</td><td><span class="badge bg-success">Activo</span></td><td>3 apartamentos actualizados</td></tr>
                  <tr><td>Módulo financiero</td><td><span class="badge bg-warning text-dark">Pendiente</span></td><td>2 pagos por conciliar</td></tr>
                  <tr><td>Control operativo</td><td><span class="badge bg-info text-dark">En proceso</span></td><td>5 mantenimientos abiertos</td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

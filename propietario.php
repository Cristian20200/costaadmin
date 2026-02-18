<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Costadmin | Acceso Propietario</title>
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
            <h1 class="h4 fw-bold">Panel Propietario</h1>
            <p class="text-muted small">Accede a tu estado financiero, documentos y soporte.</p>
            <form>
              <div class="mb-3">
                <label class="form-label">Documento o correo</label>
                <input type="text" class="form-control" placeholder="CC / correo">
              </div>
              <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" placeholder="********">
              </div>
              <button type="button" class="btn btn-primary w-100">Ingresar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm border-0">
          <div class="card-body p-4">
            <h2 class="h5 fw-bold">Resumen de transparencia 24/7</h2>
            <div class="row g-3 mb-4">
              <div class="col-md-4"><div class="objective"><div class="p-3"><small>Ingresos del mes</small><h3 class="h5 mb-0">$8.400.000</h3></div></div></div>
              <div class="col-md-4"><div class="objective"><div class="p-3"><small>Gastos del mes</small><h3 class="h5 mb-0">$1.250.000</h3></div></div></div>
              <div class="col-md-4"><div class="objective"><div class="p-3"><small>Utilidad neta</small><h3 class="h5 mb-0">$7.150.000</h3></div></div></div>
            </div>

            <h3 class="h6 fw-bold">Documentos disponibles</h3>
            <ul>
              <li>Liquidación mensual - Enero 2026 (PDF)</li>
              <li>Contrato vigente del apartamento (PDF)</li>
              <li>Facturas de mantenimiento (ZIP)</li>
              <li>Evidencias fotográficas antes/después</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

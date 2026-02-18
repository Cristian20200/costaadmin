<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Costadmin | Administración patrimonial e inmobiliaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Costadmin S.A.S.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#empresa">Empresa</a></li>
          <li class="nav-item"><a class="nav-link" href="#objetivos">Objetivos</a></li>
          <li class="nav-item"><a class="nav-link" href="#modulos">Módulos</a></li>
          <li class="nav-item"><a class="nav-link" href="#seguridad">Seguridad</a></li>
          <li class="nav-item"><a class="btn btn-outline-light btn-sm mt-1 mt-lg-0" href="admin.php">Acceso Admin</a></li>
          <li class="nav-item"><a class="btn btn-primary btn-sm mt-1 mt-lg-0" href="propietario.php">Acceso Propietario</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="hero text-white">
    <div class="container py-5">
      <div class="row align-items-center g-4 py-5">
        <div class="col-lg-7">
          <span class="badge bg-info text-dark mb-3">Transparencia 100% digital</span>
          <h1 class="display-5 fw-bold">Administración patrimonial inmobiliaria con control total 24/7</h1>
          <p class="lead mt-3">Costadmin maximiza la rentabilidad de los apartamentos mediante gestión operativa integral, control financiero detallado y evidencia documental verificable en tiempo real.</p>
          <div class="d-flex flex-wrap gap-2 mt-4">
            <a href="admin.php" class="btn btn-light btn-lg">Ir al panel administrador</a>
            <a href="propietario.php" class="btn btn-outline-light btn-lg">Ir al panel propietario</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card shadow-lg border-0 stat-card">
            <div class="card-body p-4">
              <h5 class="fw-bold mb-3">Indicadores ejemplo</h5>
              <div class="d-flex justify-content-between mb-2"><span>Rentabilidad promedio</span><strong>+15.4%</strong></div>
              <div class="d-flex justify-content-between mb-2"><span>Disponibilidad plataforma</span><strong>99.95%</strong></div>
              <div class="d-flex justify-content-between mb-2"><span>Documentación digital</span><strong>100%</strong></div>
              <div class="d-flex justify-content-between"><span>Tiempo de respuesta</span><strong>&lt; 2h</strong></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section id="empresa" class="py-5">
      <div class="container">
        <h2 class="section-title">¿Qué es Costadmin?</h2>
        <p>Costadmin S.A.S. es una empresa especializada en administración patrimonial e inmobiliaria. Su enfoque es hacer crecer el patrimonio del propietario con trazabilidad digital, transparencia total en ingresos/gastos/utilidades y seguimiento permanente desde una plataforma web.</p>

        <div class="row g-4 mt-2">
          <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <h3 class="h5 fw-bold">Misión</h3>
                <p>Brindar una administración integral, transparente y tecnológica para maximizar la rentabilidad de cada propietario, con control financiero en tiempo real, evidencia documentada y acompañamiento 24/7.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <h3 class="h5 fw-bold">Visión 2030</h3>
                <p>Consolidarnos como líderes en Colombia en administración patrimonial inmobiliaria digital, reconocidos por transparencia financiera, automatización tecnológica y crecimiento sostenible del patrimonio de nuestros clientes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="objetivos" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title">Objetivos estratégicos</h2>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6"><div class="objective p-3 h-100"><h3 class="h6">Financiero</h3><p>Aumentar rentabilidad mínima anual del 15% y optimizar costos operativos con control digital.</p></div></div>
          <div class="col-lg-3 col-md-6"><div class="objective p-3 h-100"><h3 class="h6">Tecnológico</h3><p>Plataforma 24/7 con disponibilidad superior al 99% y reportes financieros automáticos en tiempo real.</p></div></div>
          <div class="col-lg-3 col-md-6"><div class="objective p-3 h-100"><h3 class="h6">Operativo</h3><p>Respuesta a propietarios en menos de 2 horas y documentación digital completa de ingresos/egresos.</p></div></div>
          <div class="col-lg-3 col-md-6"><div class="objective p-3 h-100"><h3 class="h6">Transparencia</h3><p>Acceso permanente a estados financieros, contratos, facturas y evidencias de mantenimiento.</p></div></div>
        </div>
      </div>
    </section>

    <section id="modulos" class="py-5">
      <div class="container">
        <h2 class="section-title">Estructura de plataforma Costadmin</h2>
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body">
                <h3 class="h4 fw-bold">🔐 Panel Administrador</h3>
                <ul>
                  <li>Dashboard con KPIs (ingresos, gastos, utilidad, ocupación, alertas).</li>
                  <li>Gestión de propiedades, propietarios y contratos.</li>
                  <li>Módulo financiero: ingresos, gastos, conciliación y liquidación PDF.</li>
                  <li>Evidencias y documentación con historial trazable.</li>
                  <li>Notificaciones, reportes avanzados y control operativo.</li>
                  <li>Usuarios internos por roles (RBAC completo).</li>
                </ul>
                <a href="admin.php" class="btn btn-dark">Entrar al acceso administrador</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card h-100 shadow-sm border-0">
              <div class="card-body">
                <h3 class="h4 fw-bold">👤 Panel Propietario</h3>
                <ul>
                  <li>Dashboard personal con ingresos, gastos, utilidad y ocupación.</li>
                  <li>Estado financiero detallado y descarga de liquidaciones.</li>
                  <li>Centro documental: contratos, facturas y evidencias.</li>
                  <li>Comunicación directa y tickets de soporte.</li>
                  <li>Reportes de rentabilidad y proyección financiera anual.</li>
                </ul>
                <a href="propietario.php" class="btn btn-primary">Entrar al acceso propietario</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm mt-4">
          <div class="card-body">
            <h3 class="h5 fw-bold">🧠 Funcionalidades avanzadas empresariales</h3>
            <p class="mb-0">Pasarelas de pago, firma digital certificada, integración bancaria API, control de mora automático, multi-moneda con TRM diaria, backups automáticos, auditoría de movimientos, control antifraude y metas patrimoniales.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="seguridad" class="py-5 bg-light">
      <div class="container">
        <h2 class="section-title">Seguridad y diferenciador</h2>
        <div class="row g-4">
          <div class="col-lg-7">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body">
                <h3 class="h5 fw-bold">Seguridad del sistema</h3>
                <ul class="mb-0">
                  <li>Encriptación de contraseñas y control de sesiones.</li>
                  <li>Bitácora de auditoría y acceso por roles.</li>
                  <li>Respaldo diario y SSL obligatorio.</li>
                  <li>Buenas prácticas contra inyecciones SQL.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="card h-100 border-0 shadow-sm highlight-card">
              <div class="card-body">
                <h3 class="h5 fw-bold">Diferenciador Costadmin</h3>
                <p class="mb-1">✔ Transparencia digital real</p>
                <p class="mb-1">✔ Evidencia documental verificable</p>
                <p class="mb-1">✔ Reportes automáticos</p>
                <p class="mb-1">✔ Control patrimonial estratégico</p>
                <p class="mb-0">✔ Visión de crecimiento financiero</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="py-4 bg-dark text-white-50">
    <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
      <small>© <?php echo date('Y'); ?> Costadmin S.A.S. | Administración patrimonial e inmobiliaria.</small>
      <small>Stack recomendado: HTML, CSS, Bootstrap, PHP, MySQL y JavaScript.</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

<!doctype html>
<?php include_once "functions.php"; ?>
<?php include "./componentes/head.php"; ?>

<body>
  <div class="container-fluid"><!-- container universal -->

    <?php include "./componentes/header.php"; ?>

    <!-- Sección con columnas -->
    <section class="row">
      <!-- Columna 1 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Torta">
          <div class="card-body">
            <h5 class="card-title">Tortas personalizadas</h5>
            <p class="card-text">Diseñadas a tu gusto para cada ocasión especial.</p>
          </div>
        </div>
      </div>

      <!-- Columna 2 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Cupcakes">
          <div class="card-body">
            <h5 class="card-title">Cupcakes</h5>
            <p class="card-text">Pequeños y deliciosos, ideales para compartir.</p>
          </div>
        </div>
      </div>

      <!-- Columna 3 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
          <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Postres">
          <div class="card-body">
            <h5 class="card-title">Postres artesanales</h5>
            <p class="card-text">Endulzamos tus momentos con calidad casera.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
     <?php include "./componentes/footer.php"; ?>
  </div>

  <!-- boostrap script js -->
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
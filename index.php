<!DOCTYPE html>
<html lang="es">
  <!-- head -->
  <head>
    <?php
      $sRutaAssets = "";
      $sTitle = "Inicio";
      require_once('./templates/head.php');
    ?>
  </head>
  <body>    
    <div class="container pt-3">
      <div class="card">
        <div class="card-header text-center">
          <h4 class="text-info">Bienvenidos</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 text-primary text-center">
                <h6 class="text-info">Datos Del Aspirante</h6>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-start pt-2">
            <div class="bd-highlight pr-3">
              <dl>
                <dt class="text-info">Nombre:</dt>
                <dd class="text-primary">Nestor Alejandro Quintero Cardozo</dd>
              </dl>
            </div>
            <div class="bd-highlight pr-3">
              <dl>
                <dt class="text-info">Email:</dt>
                <dd class="text-primary">alejoquintecar@gmail.com</dd>
              </dl>
            </div>
            <div class="bd-highlight pr-3">
              <dl>
                <dt class="text-info">Télefono:</dt>
                <dd class="text-primary">
                  <span class="text-dark">+57</span> 322 418 0840
                </dd>
              </dl>
            </div>
            <div class="bd-highlight pr-3">
              <dl>
                <dt class="text-info">País:</dt>
                <dd class="text-primary">Colombia</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="card-footer text-center">       
          <button type="button" class="btn btn-outline-warning" id="btnDireccionarPrueba" data-direccionar-prueba="2">
              Prueba <i class="fas fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Js -->
    <?php
      $sRutaJsTemplate = "assets/js/inicio/index";
      require_once('./templates/body_footer.php');
    ?>
  </body>
</html>
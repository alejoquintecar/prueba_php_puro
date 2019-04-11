<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- head -->
    <?php
      $sRutaAssets = "../../";
      $sTitle = "Prueba";
      require_once('../head.php');
    ?>

  </head>
 
  <body>    
    <div class="container pt-3">
      <div class="card">
        <div class="card-header text-center">
          <h4 class="text-info">Bienvenidos</h4>
        </div>
        <div class="card-body">
          <div class="scroll-auto"> 
            <table class="table table-sm table-striped table-hover">
              <thead>
                <tr class="text-center text-primary">
                  <th colspan="4">
                    <h5>Colaboradores</h5>
                  </th>
                </tr>
                <tr class="text-info">
                  <th scope="col">Nombre</th>
                  <th scope="col">Sueldo Base</th>
                  <th scope="col">Area</th>
                  <th scope="col">Sueldo Final</th>
                </tr>
              </thead>
              <tbody id="tblBodyColaboradores">
                <tr class="text-center" id="trRemoveSearch">
                  <td colspan="4">
                    <button type="button" class="btn btn-outline-info btn-sm" id="btnSearch-registros" data-direccionar="prueba">
                      Buscar <i class="fas fa-search"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-center">       
          <div class="d-flex flex-wrap justify-content-center">
            <div class="bd-highlight pr-3 pt-2">
              <button type="button" class="btn btn-outline-success btn-sm" id="btnBuevo-registro" data-direccionar="prueba">
                Nuevo Colaborador <i class="fas fa-users"></i>
              </button>
            </div>
            <div class="bd-highlight pr-3 pt-2">
              <button type="button" class="btn btn-outline-warning btn-sm" id="btnEditar-registro" data-direccionar="prueba">
                Editar Colaborador <i class="fas fa-users"></i>
              </button>
            </div>
            <div class="bd-highlight pr-3 pt-2">
              <button type="button" class="btn btn-outline-danger btn-sm" id="btnRemover-registro" data-direccionar="prueba">
                Remover Colaborador <i class="fas fa-users"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Js -->
    <?php
      $sRutaJsTemplate = "assets/js/prueba/index";
      require_once('../body_footer.php');
    ?>
  </body>
</html>
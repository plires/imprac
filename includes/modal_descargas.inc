<?php
  
  $errorsDownload['email_download'] = '';
  $emailDownload = '';

  /*Si el post viene por el formulario de download*/
  if (isset($_POST['descarga'])){
    include ('validaciones/funciones_validar.php');

    if (!comprobar_email($_POST['email_download'])){
      $errorsDownload['email_download']='Ingresa un email valido';
    } else {
      $emailDownload = $_POST['email_download'];
    }

    if (!$errorsDownload['email_download'] == 'Ingresa un email valido'){
      include_once("php/conexion-download.php");
    }

  }

?>

<!-- Modal Descargas -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title bold" id="exampleModalLabel">DESCARGA</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <p class="color_principal bold">
            Coloque su email y la descarga comenzará automaticamente.
          </p>
          <div class="form-group">
            <label for="email_download" class="col-form-label">Su email:</label>
            <input
              id="email_download"
              name="email_download"
              type="email"
              class="form-control"
            />
            <span class="error"
              ><?php echo $errorsDownload['email_download']; ?></span
            >
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Cancelar
          </button>
          <button
            id="descarga"
            name="descarga"
            type="submit"
            class="btn_descargas"
          >
            Descargar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Descargas end-->

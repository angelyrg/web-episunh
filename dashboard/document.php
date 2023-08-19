<?php
include_once("layouts/head.php");
?>
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Documentos</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Documentos listar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row d-flex justify-content-between align-items-center mx-2">
                        <h5>Documentos</h5>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_documents" data-whatever="@getbootstrap">
                            <i class="feather icon-plus-circle"></i> Nuevo
                        </button>
                    </div>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover" id="documents_table">
                            <thead>
                                <tr>
                                    <th>Nombre del Documento</th>
                                    <th>Descripción</th>
                                    <th>Tipo de Documento</th>
                                    <th>Link</th>
                                    <th>Fecha de Aprobación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody id="documents_table_body"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

<!-- MODAL: NUEVO DOCUMENTO -->
<div class="modal fade" id="modal_create_documents" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
            </div>
            <form method="POST" id="form_create_documents" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="documents_name" class="col-form-label">Nombre del Documento:</label>
                        <input type="text" class="form-control" name="documents_name" id="documents_name" placeholder="Ingrese Nombre del Documento" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Ingrese Descripción del Documento" required>
                    </div>
                    <div class="form-group">
                        <label for="type_document" class="col-form-label">Tipo del Documento:</label>
                        <select class="form-control" onchange="saveDoc()" name="type_document" id="type_document" required>
                            <option value="" >Ingrese el Tipo de Documento</option>
                            <option value="gestion">Documento de Gestión</option>
                            <option value="regulation_formats">Reglamentos y Formatos</option>
                            <option value="mof_rof">MOF / ROF</option>
                            <option value="bienestar">Reglamento de Bienestar Universitario</option>
                            <option value="otros">Otros Documentos</option>
                        </select>
                        <div class="form-group">
                            <label for="link" class="col-form-label">Link:</label>
                            <input type="file" class="form-control" name="link" id="link" accept=".pdf" required>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-form-label">Fecha de Aprobación</label>
                            <input type="Date" class="form-control" name="date" id="date" placeholder="Nombre del Documento" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn  btn-primary">Guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<script>
function saveDoc() {
  // Get the country from the select element
  var country = document.getElementById('type_document').value;

  // Save the country to the database
  // ...
}
</script>

<?php
include_once("layouts/footer.php");
?>
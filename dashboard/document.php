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
                                    <th>Tipo</th>
                                    <th>Archivo</th>
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
                        <label for="document_name" class="col-form-label">Nombre del Documento: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="document_name" id="document_name" placeholder="Reglamento Académico" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Descripción: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Resolución N° 088-2019-R-UNH" required>
                    </div>
                    <div class="form-group">
                        <label for="type_document" class="col-form-label">Tipo del Documento: <span class="text-danger">*</span></label>
                        <select class="form-control" name="type_document" id="type_document" required>
                            <option value="" disabled selected>-- Seleccione --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="document_file" class="col-form-label">Archivo (.pdf): <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="document_file" id="document_file" accept=".pdf" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="btn_guardar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL: EDITAR DOCUMENTO -->
<div class="modal fade" id="modal_edit_document" tabindex="-1" role="dialog" aria-labelledby="editModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
            </div>
            <form method="POST" id="form_edit_document" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="document_id" id="document_id">
                    <div class="form-group">
                        <label for="document_name_edit" class="col-form-label">Nombre del Documento: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="document_name_edit" id="document_name_edit" required>
                    </div>
                    <div class="form-group">
                        <label for="description_edit" class="col-form-label">Descripción: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="description_edit" id="description_edit" required>
                    </div>
                    <div class="form-group">
                        <label for="type_document_edit" class="col-form-label">Tipo del Documento: <span class="text-danger">*</span></label>
                        <select class="form-control" name="type_document_edit" id="type_document_edit" required></select>
                    </div>
                    <div class="form-group">
                        <label for="document_file_edit" class="col-form-label">Archivo (.pdf):</label>
                        <input type="file" class="form-control" name="document_file_edit" id="document_file_edit" accept=".pdf" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn_cancel_edit">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="btn_actualizar">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL: ELIMINAR DOCUMENTO -->
<div class="modal fade" id="modal_delete_document" tabindex="-1" role="dialog" aria-labelledby="deleteModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar Documento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_delete_document" >
				<div class="modal-body">
					<div class="form-group">
						<label for="document_id_delete">¿Estás seguro de eliminar el documento <span id="document_name_delete" class="text-info"></span>?</label>
						<input type="hidden" class="form-control" name="document_id_delete" id="document_id_delete" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-danger" id="btn_eliminar">Eliminar</button>
				</div>
			</form>
		</div>
	</div>
</div>


<script>
    //Carga la lista de dcumentos  al cargar la página
    $(document).ready(function() {
        getAllDocuments();
    });

    //Guardar registro (CREATE)
    $("#form_create_documents").submit(function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        $.ajax({
            url: "app/document.create.php",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
                console.log("Saving...");
                $("#btn_guardar").attr("disabled", true);
                $("#btn_guardar").text("Guardando...");                
            },
            success: function(resp) {
                console.log("Success...");
                console.log(resp);
                let result = parseInt(resp)

                if (result = 1) {
                    $("#form_create_documents")[0].reset();
                    $('#modal_create_documents').modal('hide');
                    getAllDocuments();

                } else if (result = 0) {
                    console.log("No se pudo guardar el registro");

                } else {
                    console.log("Ocurrió otro error");
                    console.log(resp);
                }
            },
            complete: function(){
                $("#btn_guardar").removeAttr("disabled");
                $("#btn_guardar").text("Guardar");
            }
            
        });
    });

    //Actualizar registro (UPDATE)
    $("#form_edit_document").submit(function(e) {
        e.preventDefault();
        const formData = new FormData(this);
        $.ajax({
            url: "app/document.update.php",
            type: 'POST',
            data: formData,
            // cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
                $("#btn_cancel_edit").attr("disabled", true);
                $("#btn_actualizar").attr("disabled", true);
                $("#btn_actualizar").text("Guardando...");
            },
            success: function(resp) {
                console.log(resp);
                let result = parseInt(resp)

                if (result == 1) {
                    $("#form_edit_document")[0].reset();
                    $('#modal_edit_document').modal('hide');
                    getAllDocuments();

                } else if (result == 0) {
                    console.log("No se pudo guardar el registro");

                } else {
                    console.error("Ocurrió otro error :(", resp);
                }
            },
            complete: function(){
                $("#btn_cancel_edit").removeAttr("disabled");
                $("#btn_actualizar").removeAttr("disabled");
                $("#btn_actualizar").text("Guardar");
            }            
        });
    });

    //Eliminar registro (DELETE)
    $("#form_delete_document").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "app/document.disable.php",
            type: 'POST',
            data: $("#form_delete_document").serialize(),
            beforeSend: function(){
                $("#btn_eliminar").attr("disabled", true);
                $("#btn_eliminar").text("Eliminando...");
            },
            success: function(resp) {
                let result = parseInt(resp)
                if (result == 1) {
                    $('#modal_delete_document').modal('hide');
                    getAllDocuments();
                } else if (result == 0) {
                    console.log("No se pudo eliminar el documento");
                } else {
                    console.error("Ocurrió un error :(", resp);
                }
            },
            complete: function(){
                $("#btn_cancel_edit").removeAttr("disabled");
                $("#btn_actualizar").removeAttr("disabled");
                $("#btn_actualizar").text("Guardar");
            }
        });
    });


    // ====FUNCIONES==== //

    // Obtener todos los registros (READ)
    function getAllDocuments() {
        getCategories();
        $.ajax({
            url: "app/document.get_all.php",
            success: function(resp) {
                $("#documents_table_body").html("");

                const data = JSON.parse(resp);

                for (let i in data) {
                    const tr = "<tr>" +
                        "<td>" + data[i].name_doc + "</td>" +
                        "<td>" + data[i].description + "</td>" +
                        "<td>" + data[i].cat_id + "</td>" +
                        "<td><a class='btn btn-sm btn-outline-secondary' href='../upload/docs/" + data[i].file + "' target='_blank' >Ver documento</a></td>" +
                        "<td>" +
                            '<button type="button" class="btn btn-sm btn-warning" onclick="updateEditModal(' + data[i].id + ', \'' + data[i].name_doc + '\', \'' + data[i].description + '\', ' + data[i].cat_id + ')" ><i class="feather icon-edit-2"></i></button> ' +
                            '<button type="button" class="btn btn-sm btn-danger" onclick="updateDeleteModal(' + data[i].id + ', \'' + data[i].name_doc + '\')" data-toggle="modal" data-target="#modal_delete_document" data-whatever="@getbootstrap"><i class="feather icon-trash-2"></i></button>'
                        "</td>" +
                    "</tr>";
                    $("#documents_table_body").append(tr);
                }
            }
        });
        
    }

    function getCategories() {
        $.ajax({
            url: "app/doc_category.get_all.php",
            success: function(resp) {
                const data = JSON.parse(resp);
                let options_categories = `<option value="" disabled selected>-- Seleccione --</option>`;

                for (let i in data) {
                    options_categories += `<option value="${data[i].id}">${data[i].category_name}</option>`;
                }
                $("#type_document").html(options_categories);
                $("#type_document_edit").html(options_categories);
            }
        });
    }

    //Actualiza la info del registro en el modal para eliminar
    function updateEditModal(id, doc_name, doc_description, doc_type) {
        $("#document_id").val(id);
        $("#document_name_edit").val(doc_name);
        $("#description_edit").val(doc_description);
        $("#type_document_edit").val(doc_type);
        $('#modal_edit_document').modal('show');
    }

    //Actualiza la info del registro en el modal para eliminar
    function updateDeleteModal(id, doc_name) {
        $("#document_id_delete").val(id);
        $("#document_name_delete").html(doc_name);
    }
</script>


<?php
include_once("layouts/footer.php");
?>
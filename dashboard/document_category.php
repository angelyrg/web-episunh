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
                        <h5 class="m-b-10">Categorías</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Documentos > Categorías</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="row d-flex justify-content-between align-items-center mx-2">
                        <h5>Categorías</h5>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_create_categories" data-whatever="@getbootstrap">
                            <i class="feather icon-plus-circle"></i> Nuevo
                        </button>
                    </div>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover" id="categories_table">
                            <thead>
                                <tr>
                                    <th>Categoría</th>
                                    <th>Descripción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody id="categories_table_body"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->
</div>

<!-- MODAL: NUEVO CATEGORY -->
<div class="modal fade" id="modal_create_categories" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
            </div>
            <form method="POST" id="form_create_categories">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="category_name" class="col-form-label">Nombre del Documento:</label>
                        <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Ej. Documentos de Gestión" required>
                    </div>
                    <div class="form-group">
                        <label for="category_description" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="category_description" id="category_description">
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

<!-- MODAL: EDIT CATEGORY -->
<div class="modal fade" id="modal_edit_categories" tabindex="-1" role="dialog" aria-labelledby="editModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Categoría</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
            </div>
            <form method="POST" id="form_edit_categories" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="category_id" id="category_id">
                    <div class="form-group">
                        <label for="category_name_edit" class="col-form-label">Categoría:</label>
                        <input type="text" class="form-control" name="category_name_edit" id="category_name_edit" required>
                    </div>
                    <div class="form-group">
                        <label for="description_edit" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="description_edit" id="description_edit" placeholder="Ej. Resolución N° 088-2019-R-UNH">
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

<!-- MODAL: ELIMINAR CATEGORÍA -->
<div class="modal fade" id="modal_delete_category" tabindex="-1" role="dialog" aria-labelledby="deleteModal" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Eliminar Categoría</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
			</div>
			<form method="POST" id="form_delete_category" >
				<div class="modal-body">
					<div class="form-group">
						<label for="">¿Estás seguro de eliminar la categoría <span id="category_name_delete" class="text-info"></span>?</label>
                        <br>
                        <small>Esta acción también quitará a los documentos que pertenezcan a esta categoría.</small>
						<input type="hidden" class="form-control" name="category_id_delete" id="category_id_delete" required>
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
        getAllCategories();
    });

    //Guardar registro de Categoría (CREATE)
    $("#form_create_categories").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "app/doc_category.create.php",
            type: 'POST',
            data: $("#form_create_categories").serialize(),
            success: function(resp) {
                console.log(resp);
                let result = parseInt(resp)

                if (result = 1) {
                    $("#form_create_categories")[0].reset();
                    $('#modal_create_categories').modal('hide');
                    getAllCategories();

                } else if (result = 0) {
                    console.log("No se pudo guardar el registro");

                } else {
                    console.log("Ocurrió otro error :(", resp);
                }
            }
        });
    });

    //Editar  Categoría (UPDATE)
    $("#form_edit_categories").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "app/doc_category.update.php",
            type: 'POST',
            data: $("#form_edit_categories").serialize(),
            success: function(resp) {
                let result = parseInt(resp)

                if (result == 1) {
                    $("#form_edit_categories")[0].reset();
                    $('#modal_edit_categories').modal('hide');
                    getAllCategories();

                } else if (result == 0) {
                    console.log("No se pudo guardar el registro");

                } else {
                    console.log("Ocurrió otro error :(", resp);
                }
            }
        });
    });

    //Eliminar registro (DELETE)
    $("#modal_delete_category").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "app/doc_category.disable.php",
            type: 'POST',
            data: $("#form_delete_category").serialize(),

            success: function(resp) {
                console.log(resp);
                let result = parseInt(resp)
                if (result == 1) {
                    $('#modal_delete_category').modal('hide');
                    getAllCategories();
                } else if (result == 0) {
                    console.log("No se pudo eliminar la categoría");
                } else {
                    console.error("Ocurrió un error :(", resp);
                }
            }
        });
    });


    // ====FUNCIONES==== //

    // Obtener todos los registros de los anuncios (READ)
    function getAllCategories() {
        $.ajax({
            url: "app/doc_category.get_all.php",
            success: function(resp) {
                $("#categories_table_body").html("");

                const data = JSON.parse(resp);

                for (let i in data) {
                    const tr = "<tr>" +
                        "<td>" + data[i].category_name + "</td>" +
                        "<td>" + data[i].cat_description + "</td>" +
                        "<td>" +
                            '<button type="button" class="btn btn-sm btn-warning" onclick="updateEditModal(' + data[i].id + ', \'' + data[i].category_name + '\', \'' + data[i].cat_description + '\' )" ><i class="feather icon-edit-2"></i></button> ' +
                            '<button type="button" class="btn btn-sm btn-danger" onclick="updateDeleteModal(' + data[i].id + ', \'' + data[i].category_name + '\')" data-toggle="modal" data-target="#modal_delete_category" data-whatever="@getbootstrap"><i class="feather icon-trash-2"></i></button>'
                        "</td>" +
                    "</tr>";
                    $("#categories_table_body").append(tr);
                }
            }
        });
    }

    //Actualiza la info del registro en el modal para eliminar
    function updateDeleteModal(id, category_name) {
        $("#category_id_delete").val(id);
        $("#category_name_delete").html(category_name);
    }

    //Actualiza la info del registro en el modal para eliminar
    function updateEditModal(id, name, description) {
        $("#category_id").val(id);
        $("#category_name_edit").val(name);
        $("#description_edit").val(description);
        $('#modal_edit_categories').modal('show');
    }
</script>

<?php
include_once("layouts/footer.php");
?>
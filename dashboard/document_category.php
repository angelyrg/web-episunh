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

<!-- MODAL: NUEVO DOCUMENTO -->
<div class="modal fade" id="modal_create_categories" tabindex="-1" role="dialog" aria-labelledby="createModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar"><span aria-hidden="true">×</span></button>
            </div>
            <form method="POST" id="form_create_categories" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="document_name" class="col-form-label">Nombre del Documento:</label>
                        <input type="text" class="form-control" name="document_name" id="document_name" placeholder="Reglamento Académico" required>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Descripción:</label>
                        <input type="text" class="form-control" name="description" id="description" placeholder="Resolución N° 088-2019-R-UNH">
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
    //Carga la lista de dcumentos  al cargar la página
    $(document).ready(function() {
        getAllCategories();
    });

    //Guardar registro (CREATE)
    $("#form_create_categories").submit(function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        $.ajax({
            url: "app/document.create.php",
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
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
                    console.log("Ocurrió otro error");
                    console.log(resp);
                }

            }
        });
    });

    //Eliminar registro (DELETE)
    $("#form_delete_authority").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "app/authority.disable.php",
            type: 'POST',
            data: $("#form_delete_authority").serialize(),

            success: function(resp) {
                console.log(resp);

                let result = parseInt(resp)
                if (result = 1) {
                    $('#modal_delete_authority').modal('hide');
                    getAllCategories();
                } else if (result = 0) {
                    console.log("No se pudo eliminar la noticia");
                } else {
                    console.log(resp);
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
                            '<button type="button" class="btn btn-sm btn-danger" onclick="updateDeleteModal(' + data[i].id + ', \'' + data[i].category_name + '\')" data-toggle="modal" data-target="#modal_delete_authority" data-whatever="@getbootstrap"><i class="feather icon-trash-2"></i></button>'
                        "</td>" +
                    "</tr>";
                    $("#categories_table_body").append(tr);
                }
            }
        });
    }

    //Actualiza la info del registro en el modal para eliminar
    function updateDeleteModal(id, new_name) {
        $("#authority_id-delete").val(id);
        $("#authority_name-delete").html(new_name);
    }
</script>


<?php
include_once("layouts/footer.php");
?>
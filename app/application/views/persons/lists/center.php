<h2>Lista del centro de día de <?= $centerName ?></h2>
<div class="adv-table">
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable" id="search-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apodo</th>
                    <th>Apellido</th>
                    <th>Genero</th>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($persons as $p) { ?>
                    <tr>
                        <td><?php echo $p["name"] ?></td>
                        <td><?php echo ($p["nickname"]) ? '"' . $p["nickname"] . '"' : '' ?></td>
                        <td><?php echo $p["lastname"] ?></td>
                        <td><?php echo ($p["gender"]) ? "<i class='fa fa-male blue'></i> Hombre" : "<i class='fa fa-female red'></i> Mujer" ?></td>
                        <td><a href="/Persons/view/<?php echo $p["id"] ?>"><i class='fa fa-eye'></i> Ver</a></td>
                        <td><a href="/Persons/edit/<?php echo $p["id"] ?>"><i class='fa fa-edit'></i> Editar</a></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    .red{color:red;}
    .blue{color:blue;}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function (event) {
        $('#search-table').dataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero << ",
                    "sLast": " Último >> ",
                    "sNext": " Siguiente> ",
                    "sPrevious": " <Anterior "
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>
<br>
<br>
<br>

<header class="panel-heading">
    <h1>Enfermedades <a href="/diseases/edit" class="btn btn-success"><i class='fa fa-plus'></i> Crear Nueva enfermedad</a><br/></h1>

    <hr class="hrspacing"/>
</header>

<div class="adv-table">
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable dt-responsive" id="search-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Activo</th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($diseases as $p) { ?>
                    <tr>
                        <td><?php echo $p["disease_name"] ?></td>
                        <td><?php echo ($p["is_active"]==1) ? "<i class='fa fa-pause'></i> Activo" : "<i class='fa fa-play'></i> Inactivo" ?></td>
                        <td><a href="/diseases/edit/<?php echo $p["id"] ?>"><i class='fa fa-edit'></i> Editar</a></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>

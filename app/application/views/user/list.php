<header class="panel-heading">
    <h1>Usuarios <a href="/users/create" class="btn btn-success"><i class='fa fa-plus'></i> Crear Nuevo usuario</a><br/></h1>

    <hr class="hrspacing"/>
</header>

<div class="adv-table">
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable dt-responsive" id="search-table">
            <thead>
                <tr>
                    <th>Nombre de usuario</th>
                    <th>Email</th>
                    <th>Activo</th>
                    <th>Tipo</th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $p) { ?>
                    <tr>
                        <td><?php echo $p["username"] ?></td>
                        <td><?php echo $p["email"] ?></td>
                        <td><?php echo ($p["is_confirmed"]==1) ? "<i class='fa fa-pause'></i> Activo" : "<i class='fa fa-play'></i> Inactivo" ?></td>
                        <td><?php echo ($p["is_admin"]==1) ? "<i class='fa fa-user-secret'></i> Administrador" : "<i class='fa fa-user'></i> Normal" ?></td>
                        <td><a href="/users/edit/<?php echo $p["id"] ?>"><i class='fa fa-edit'></i> Editar</a></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>
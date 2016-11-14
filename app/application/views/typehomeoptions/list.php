<header class="panel-heading">
    <h1>Opciones de "<?=$typehome["name"]?>" 
        <a href="/typeshomesoptions/create/<?=$typehome["id"]?>" class="btn btn-success"><i class='fa fa-plus'></i> Crear Nueva opcion</a>
        <a href="/typeshomes" class="btn btn-info"><i class='fa fa-rotate-left'></i> Volver</a>
        <br/>
    </h1>

    <hr class="hrspacing"/>
</header>

<div class="adv-table">
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable dt-responsive" id="search-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Activa</th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($typehomesoptions as $p) {?>
                    <tr>
                        <td><?php echo $p["name"] ?></td>
                        <td><?php echo ($p["active"]=="1") ? "<i class='fa fa-pause'></i> Activo" : "<i class='fa fa-play'></i> Inactivo" ?></td>
                        <td><a href="/typeshomesoptions/edit/<?php echo $p["typehomeparent"] ?>/<?php echo $p["id"] ?>"><i class='fa fa-edit'></i> Editar</a></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>

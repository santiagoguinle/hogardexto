<header class="panel-heading">
    <h1>Tipos de vivienda <a href="/typeshomes/edit" class="btn btn-success"><i class='fa fa-plus'></i> Crear Nuevo tipo de vivienda</a><br/></h1>

    <hr class="hrspacing"/>
</header>

<div class="adv-table">
    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered dataTable dt-responsive" id="search-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Modo</th>
                    <th>Activo</th>
                    <th> </th>
                    <th> </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($typehomes as $p) { ?>
                    <tr>
                        <td><?php echo $p["name"] ?></td>
                        <td><?php echo $modes[$p["mode"]] ?></td>
                        <td><?php echo ($p["active"]) ? "<i class='fa fa-pause'></i> Activo" : "<i class='fa fa-play'></i> Inactivo" ?></td>
                        <td><a href="/typeshomes/edit/<?php echo $p["id"] ?>"><i class='fa fa-edit'></i> Editar</a></td>
                        <td> <?php if ($p["mode"] == 1) { ?> 
                                <a href="/typeshomesoptions/listof/<?php echo $p["id"] ?>"><i class='fa fa-eye'></i> Ver Opciones</a>
                            <?php } ?></td>                        
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>

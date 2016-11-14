<?php
$this->load->helper("form");
?>
<form class="form-horizontal" method="post"  action="" enctype="multipart/form-data" >
    <header class="panel-heading">
        <h1> Edicion de tipo de vivienda
            <a href="/typeshomes" class="btn btn-info"><i class='fa fa-rotate-left'></i> Volver</a>
        </h1> 
        <hr class="hrspacing"/>
    </header>
    <section class="panel">
        <div class="panel-body">


            <div class="form-group">
                <label class="col-sm-3 control-label ">Nombre de tipo de vivienda: </label>
                <div class="col-sm-6">
                    <?php echo form_input("typehome[name]", $typehome["name"], 'class="form-control"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label ">Modo de seleccion: </label>
                <div class="col-sm-6">
                    <?php echo form_dropdown("typehome[mode]", $optionsModes, $typehome["mode"], 'class="form-control"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label ">Activo: </label>
                <div class="col-sm-6">
                    <input id="typehome[active]" name="typehome[active]"data-handle-width="100" type="checkbox" data-on-text="Si" data-off-text="No" value="1" <?= ($typehome["active"]) ? 'checked="checked"' : "" ?> class="bootstrap-switch" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label "> </label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info"><i class='fa fa-save'></i> Guardar</button>
                </div>
            </div>
        </div>
    </section>
</form>

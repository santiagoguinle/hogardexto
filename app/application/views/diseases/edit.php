<?php
$this->load->helper("form");
?>
<form class="form-horizontal" method="post"  action="" enctype="multipart/form-data" >
    <header class="panel-heading">
        <h1> Edicion de enfermedad
            <a href="/diseases" class="btn btn-info"><i class='fa fa-rotate-left'></i> Volver</a>
        </h1> 
        <hr class="hrspacing"/>
    </header>
    <section class="panel">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label ">Nombre de tipo de vivienda: </label>
                <div class="col-sm-6">
                    <?php echo form_input("disease[disease_name]", $disease["disease_name"], 'class="form-control"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label ">Activo: </label>
                <div class="col-sm-6">
                    <input id="disease[is_active]" name="disease[is_active]" data-handle-width="100" type="checkbox" data-on-text="Si" data-off-text="No" value="1" <?= ($disease["is_active"]) ? 'checked="checked"' : "" ?> class="bootstrap-switch" />
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

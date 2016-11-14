<script>
    var avatar = '/img/avatar/<?=$person["avatar"]?>';
</script>
<div class="row">
    <div class="col-md-3">
        <div id="kv-avatar-errors" class="center-block" style="width:800px;display:none"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Avatar: </label>
            <div class="col-sm-3 hidden-sm"></div>
            <div class="col-sm-3">
                <div class="kv-avatar center-block" style="width:200px">
                    <input id="avatar" name="avatar" type="file" class="file-loading" accept="image/*">
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <div class="col-md-9">

        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Centro Barrial de referencia: </label>
            <div class="col-sm-6">
                <?php echo form_dropdown("person[center]", $optionsCenter, $person["center"], 'class="form-control"'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Nombre completo: </label>
            <div class="col-sm-3">
                <?php echo form_input("person[name]", $person["name"], 'class="form-control" placeholder="Nombre"'); ?>
            </div>
            <div class="col-sm-2">
                <?php echo form_input("person[nickname]", $person["nickname"], "class=\"form-control\" placeholder='\"Apodo\"' "); ?>

            </div>
            <div class="col-sm-3">
                <?php echo form_input("person[lastname]", $person["lastname"], 'class="form-control" placeholder="Apellido"'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Genero de nacimiento: </label>
            <div class="col-sm-6">
                <input id="person[gender]" name="person[gender]" data-handle-width="100" type="checkbox" data-on-text="<i class='fa fa-male'></i> Hombre" data-off-text="<i class='fa fa-female'></i> Mujer" data-off-color="danger" value="1" <?= ($person["gender"]) ? 'checked="checked"' : "" ?> class="bootstrap-switch" />
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg  hidden-md">Fecha de nacimiento: </label>
            <div class="col-sm-6">
                <?php echo form_input("person[birthdate]", $person["birthdate"], 'class="form-control datepicker" placeholder="1988-12-22 (Nacimiento)"'); ?>
            </div>
        </div>
    </div>
</div>
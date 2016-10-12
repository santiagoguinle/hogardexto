  

<div class="form-group">
    <label class="col-sm-3 control-label">Telefono de referencia: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[reference_tel]", $person["reference_tel"], 'class="form-control"'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Nombre de referencia: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[reference_name]", $person["reference_name"], 'class="form-control"'); ?>
    </div>
</div>  
<div class="form-group">
    <label class="col-sm-3 control-label">Conformacion familiar: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[family]", $person["family"], 'class="form-control"'); ?>
    </div>
</div>
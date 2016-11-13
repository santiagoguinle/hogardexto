<div class="form-group">
    <label class="col-sm-3 control-label">Colegio Primario: </label>
    <div class="col-sm-6">
        <?php echo form_dropdown("person[education_primary]", $optionsEducation, $person["education_primary"], 'class="form-control"'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Colegio Secundario: </label>
    <div class="col-sm-6">
        <?php echo form_dropdown("person[education_secondary]", $optionsEducation, $person["education_secondary"], 'class="form-control"'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Tiene Oficio?: </label>
    <div class="col-sm-6">
        <input name="person[has_occupation]" class="bootstrap-switch" id="has_occupation" type="checkbox" data-on-text="Si" value="1" data-off-text="No" data-off="danger" <?= $person["has_occupation"] ? 'checked="checked"' : "" ?>>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Descripcion del oficio: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[occupation]", $person["occupation"], 'class="form-control" id="occupation" ' . (($person["occupation"]) ? 'readonly="readonly"' : '')); ?>
    </div>
</div>




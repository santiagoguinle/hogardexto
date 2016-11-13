
<div class="form-group">
    <label class="col-sm-3 control-label">Tiene Trabajo?: </label>
    <div class="col-sm-6">
        <input name="person[has_work]" class="bootstrap-switch" id="has_work" type="checkbox" data-on-text="Si" value="1" data-off-text="No" data-off="danger" <?= $person["has_work"] ? 'checked="checked"' : "" ?>>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Descripcion del trabajo: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[work_description]", $person["work_description"], 'class="form-control" id="work" ' . (($person["work_description"]) ? 'readonly="readonly"' : '')); ?>
    </div>
</div>

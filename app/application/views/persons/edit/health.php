<?php foreach ($diseases as $disease) { ?>
    <div class="form-group">
        <label class="col-sm-3 control-label"><?= $disease["name"] ?>: </label>
        <div class="col-sm-6">
            <input name="person[diseases][]" class="bootstrap-switch" type="checkbox" data-on-text="Si" value="<?= $disease["id"] ?>" data-off-text="No" data-off="danger" <?= hasDisease($disease, $person) ? 'checked="checked"' : "" ?>>
        </div>
    </div>
<?php } ?>

<div class="form-group">
    <label class="col-sm-3 control-label">Otra enfermedad: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[other_diseases]", $person["other_diseases"], 'class="form-control"'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Tratamientos: </label>
    <div class="col-sm-6">
        <?php echo form_textarea("person[treatments]", $person["treatments"], 'class="form-control"'); ?>
    </div>
</div>

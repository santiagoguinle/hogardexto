<?php foreach ($diseases as $disease) { ?>
    <div class="form-group">
        <label class="col-sm-3 control-label"><?= $disease["name"] ?>: </label>
        <div class="col-sm-6">
            <?= hasDisease($disease, $person) ? 'Si' : "No" ?>
        </div>
    </div>
<?php } ?>

<div class="form-group">
    <label class="col-sm-3 control-label">Otra enfermedad: </label>
    <div class="col-sm-6">
        <?php echo $person["other_diseases"] ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Tratamientos: </label>
    <div class="col-sm-6">
        <?php echo $person["treatments"] ?>
    </div>
</div>

<?php
$person["education_primary"]=(isset($person["education_primary"]))?$person["education_primary"]:0;
$person["education_secondary"]=(isset($person["education_secondary"]))?$person["education_secondary"]:0;
?>
<div class="form-group">
    <label class="col-sm-3 control-label">Colegio Primario: </label>
    <div class="col-sm-6">
        <?php echo $optionsEducation[$person["education_primary"]]?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Colegio Secundario: </label>
    <div class="col-sm-6">
        <?php echo $optionsEducation[$person["education_secondary"]] ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Tiene Oficio?: </label>
    <div class="col-sm-6">
        <?php $person["has_occupation"] ? 'Si' : "No" ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Descripcion del oficio: </label>
    <div class="col-sm-6">
        <?php echo $person["occupation"]?>
    </div>
</div>




<?php
$person["criminal_situation"]=(isset($person["criminal_situation"]))?$person["criminal_situation"]:0;
?>
<div class="form-group">
    <label class="col-sm-3 control-label">Situación actual: </label>
    <div class="col-sm-6">
        <?php echo $optionsJudicial[$person["criminal_situation"]] ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Antecedentes penales: </label>
    <div class="col-sm-6">
        <?php echo $person["criminal_record"] ?>
    </div>
</div>
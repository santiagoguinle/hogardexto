<?php foreach ($benefits as $benefit) { ?>
    <div class="form-group">
        <label class="col-sm-3 control-label"><?= $benefit["name"] ?>: </label>
        <div class="col-sm-6">
            <?= hasBenefit($benefit, $person) ? 'Si' : "No" ?>
        </div>
    </div>
<?php } ?>

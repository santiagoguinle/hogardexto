<?php 

foreach ($benefits as $benefit) { ?>
    <div class="form-group">
        <label class="col-sm-3 control-label"><?= $benefit["name"] ?>: </label>
        <div class="col-sm-6">
            <input name="person[benefits][]" class="bootstrap-switch" type="checkbox" data-on-text="Si" value="<?= $benefit["id"] ?>" data-off-text="No" data-off="danger" <?= hasBenefit($benefit, $person) ? 'checked="checked"' : "" ?>>
        </div>
    </div>
<?php } ?>

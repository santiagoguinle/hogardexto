<div class="form-group">
    <label class="col-sm-3 control-label">Tipo de vivienda: </label>
    <div class="col-sm-6">
        <?php echo form_dropdown("person[typehomeid]", $optionsTypehome, $person["typehomeid"], 'class="form-control" id="typehomeid"'); ?>
    </div>
</div>
<?php
foreach ($typesHomes as $typehome) {
    if ($typehome["mode"] == TypeHome::MODE_OPTIONS) {
        ?>
        <div class="form-group typehomefield" id="typehomeid_<?=$typehome["id"]?>">
            <label class="col-sm-3 control-label"><?=$typehome["name"]?>: </label>
            <div class="col-sm-6">
                <?php
                $options = array("" => "");
                foreach ($typehome["options"] as $opt)
                    $options[$opt["id"]] = $opt["name"];
                echo form_dropdown("person[typehomeoptionid][" . $typehome["id"] . "]", $options, $person["typehomeoptionid"], 'class="form-control"');
                ?>
            </div>
        </div>

    <?php } elseif ($typehome["mode"] == TypeHome::MODE_COMPLETE) {
        ?>
        <div class="form-group typehomefield" id="typehomeid_<?=$typehome["id"]?>">
            <label class="col-sm-3 control-label"><?=$typehome["name"]?>: </label>
            <div class="col-sm-6">
                <?php echo form_input("person[address][" . $typehome["id"] . "]", $person["address"], 'class="form-control" id="address" '); ?>
            </div>
        </div>

        <?
    }
}
?>

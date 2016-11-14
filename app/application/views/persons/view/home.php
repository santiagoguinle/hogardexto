<div class="form-group">
    <label class="col-sm-3 control-label">Tipo de vivienda: </label>
    <div class="col-sm-6">
        <?php echo $optionsTypehome[$person["typehomeid"]] ?>
    </div>
</div>
<?php
foreach ($typesHomes as $typesHome) {
    if ($typesHome["id"] == $person["typehomeid"])
        break;
}

if ($typesHome["id"] == $person["typehomeid"] and $typesHome["mode"] == TypeHome::MODE_OPTIONS) {
    ?>
    <div class="form-group typehomefield" >
        <label class="col-sm-3 control-label"><?= $typesHome["name"] ?>: </label>
        <div class="col-sm-6">
            <?php
            $options = array("" => "");
            foreach ($typesHome["options"] as $opt) {
                $options[$opt["id"]] = $opt["name"];
            }
            echo (isset($options[$person["typehomeoptionid"]])) ? $options[$person["typehomeoptionid"]] : "";
            ?>
        </div>
    </div>

<?php } elseif ($typesHome["id"] == $person["typehomeid"] and $typesHome["mode"] == TypeHome::MODE_COMPLETE) {
    ?>
    <div class="form-group typehomefield" >
        <label class="col-sm-3 control-label"><?= $typesHome["name"] ?>: </label>
        <div class="col-sm-6">
            <?php echo $person["address"]; ?>
        </div>
    </div>

    <?
}
?>

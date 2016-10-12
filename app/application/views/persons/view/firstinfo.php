<?php

$person["center"]=(isset($person["center"]))?$person["center"]:0;
?>

<div class="row">
    <div class="col-md-3">
        <div id="kv-avatar-errors" class="center-block" style="width:800px;display:none"></div>
        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Avatar: </label>
            <div class="col-sm-12">
                <div  style="width:200px">
                    <div class="file-preview">
                        <?php if (is_file("../uploads/avatars/".$person["avatar"]) ) { ?>
                        <img src="/img/avatar/<?=$person["avatar"]?>" style="width: 100%" />
                        <?php } else {?>
                            <img src="/js/plugins/fileinput/img/default_avatar_male.jpg" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">

        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Cemtro Barrial de referencia: </label>
            <div class="col-sm-6">
                <?php echo $optionsCenter[$person["center"]]?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Nombre completo: </label>
            <div class="col-sm-3">
                <?php echo $person["name"]?>
            </div>
            <div class="col-sm-2">
                <?php echo ($person["nickname"])?'"'.$person["nickname"].'"':'' ?>
            </div>
            <div class="col-sm-3">
                <strong><?php echo $person["lastname"] ?></strong>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg hidden-md">Genero de nacimiento: </label>
            <div class="col-sm-6">
                <?php echo ($person["gender"]) ? 'Hombre' : "Mujer" ?>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 control-label hidden-lg  hidden-md">Fecha de nacimiento: </label>
            <div class="col-sm-6">
                <?php echo $person["birthdate"] ?>
            </div>
        </div>
    </div>
</div>
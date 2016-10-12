
<div class="form-group">
    <label class="col-sm-3 control-label">Tiene Trabajo?: </label>
    <div class="col-sm-6">
         <?php echo $person["has_work"] ? 'Si' : "No" ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Descripcion del trabajo: </label>
    <div class="col-sm-6">
        <?php echo $person["work_description"]?>
    </div>
</div>

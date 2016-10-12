<div class="form-group">
    <label class="col-sm-3 control-label">Fecha de Primer contacto con Hogar de Cristo: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[firstdate]", $person["firstdate"], 'class="form-control datepicker" placeholder="____-__-__"'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Cuil: </label>
    <div class="col-sm-6">
        <?php echo form_input("person[cuil]", $person["cuil"], 'class="form-control" placeholder="__-________-_" data-mask="99-99999999-9" id="person_cuil"'); ?>
    </div>
</div>


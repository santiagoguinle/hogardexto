<div class="form-group">
    <label class="col-sm-3 control-label">Situación actual: </label>
    <div class="col-sm-6">
        <?php echo form_dropdown("person[criminal_situation]", $optionsJudicial, $person["criminal_situation"], 'class="form-control"'); ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Antecedentes penales: </label>
    <div class="col-sm-6">
        <?php echo form_textarea("person[criminal_record]", $person["criminal_record"], 'class="form-control"'); ?>
    </div>
</div>
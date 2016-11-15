<?php
$this->load->helper("form");
?>
<form class="form-horizontal" method="post"  action="" enctype="multipart/form-data" >
    <header class="panel-heading">
        <h1> Edicion de Usuario
            <a href="/users/listing" class="btn btn-info"><i class='fa fa-rotate-left'></i> Volver</a>
        </h1> 
        <hr class="hrspacing"/>
    </header>
    <section class="panel">
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3 control-label ">Nombre de usuario: </label>
                <div class="col-sm-6">
                    <?php echo form_input("user[username]", $user->username, 'class="form-control"'); ?>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label ">Password: </label>
                <div class="col-sm-6">
                    <?php echo form_password("password", "", 'class="form-control" placeholder="Completar solo para cambiar"'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label ">Email: </label>
                <div class="col-sm-6">
                    <?php echo form_input("user[email]", $user->email, 'class="form-control"'); ?>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 control-label ">Activo: </label>
                <div class="col-sm-6">
                    <input id="user[is_confirmed]" name="user[is_confirmed]" data-handle-width="100" type="checkbox" data-on-text="Si" data-off-text="No" value="1" <?= ($user->is_confirmed) ? 'checked="checked"' : "" ?> class="bootstrap-switch" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label ">Tipo: </label>
                <div class="col-sm-6">
                    <input id="user[is_admin]" name="user[is_admin]" data-handle-width="100" type="checkbox" data-on-text="Administrador" data-off-text="Normal" value="1" <?= ($user->is_admin) ? 'checked="checked"' : "" ?> class="bootstrap-switch" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label "> </label>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-info"><i class='fa fa-save'></i> Guardar</button>
                </div>
            </div>
        </div>
    </section>
</form>

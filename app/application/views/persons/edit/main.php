<?php
$this->load->helper("form");
?>
<form class="form-horizontal" method="post"  action="" enctype="multipart/form-data" >
    <header class="panel-heading">
        <h1> Edicion de Personas <button type="submit" class="btn btn-info"><i class='fa fa-save'></i> Guardar</button></h1> 
        <hr class="hrspacing"/>
    </header>
    <section class="panel">
        <div class="panel-body">
            <?php $this->load->view("persons/edit/firstinfo") ?>
        </div>

        <div class="panel-heading tab-bg-dark-navy-blue ">
            <ul class="nav nav-tabs">
                <li >
                    <a data-toggle="tab" href="#home"><i class="fa fa-fw fa-home"></i> Vivienda</a>
                </li>
                <li class="active">
                    <a data-toggle="tab" href="#personal"><i class="fa fa-fw fa-male"></i> Personal</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#governant"><i class="fa fa-fw fa-gavel"></i> Judicial</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#social"><i class="fa fa-fw fa-group"></i> Social</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#benefits"><i class="fa fa-fw fa-money"></i> Beneficios</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#health"><i class="fa fa-fw fa-stethoscope"></i> Salud</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#education"><i class="fa fa-fw fa-book"></i> Educacion</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#workinfo"><i class="fa fa-fw fa-suitcase"></i> Laboral</a>
                </li>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                <div id="home" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/home") ?>
                    </div>
                </div>
                <div id="personal" class="tab-pane active">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/personal") ?>
                    </div>
                </div>
                <div id="governant" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/governant") ?>
                    </div>
                </div>
                <div id="social" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/social") ?>
                    </div>
                </div>
                <div id="benefits" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/benefit") ?>
                    </div>
                </div>
                <div id="health" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/health") ?>
                    </div>
                </div>
                <div id="education" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/education") ?>
                    </div>
                </div>
                <div id="workinfo" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/edit/work") ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-info"><i class='fa fa-save'></i> Guardar</button>
                </div>
            </div>
    </section>
</form>

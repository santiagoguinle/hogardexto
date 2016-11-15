<?php
$this->load->helper("form");
?>
<div class="form-horizontal" >
    <header class="panel-heading">
        <h1> Ficha personal </h1>
        <hr class="hrspacing"/>
    </header>
    <section class="panel">
        <div class="panel-body">
            <?php $this->load->view("persons/view/firstinfo") ?>
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
                        <?php $this->load->view("persons/view/home") ?>
                    </div>
                </div>
                <div id="personal" class="tab-pane active">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/personal") ?>
                    </div>
                </div>
                <div id="governant" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/governant") ?>
                    </div>
                </div>
                <div id="social" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/social") ?>
                    </div>
                </div>
                <div id="benefits" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/benefit") ?>
                    </div>
                </div>
                <div id="health" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/health") ?>
                    </div>
                </div>
                <div id="education" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/education") ?>
                    </div>
                </div>
                <div id="workinfo" class="tab-pane">
                    <div class="panel-body">
                        <?php $this->load->view("persons/view/work") ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="button" class="btn btn-info" onclick="window.location.href = '/persons/edit/<?= $person["id"] ?>'"><i class='fa fa-save'></i> Editar</button>
                </div>
            </div>
    </section>
</div>

<style>
    @media (min-width: 768px){
        .form-horizontal .control-label {
            padding-top: 0px;
        }
    }
</style>

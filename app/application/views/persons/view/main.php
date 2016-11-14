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
                    <a data-toggle="tab" href="#home">Vivienda</a>
                </li>
                <li class="active">
                    <a data-toggle="tab" href="#personal">Personal</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#governant">Judicial</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#social">Social</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#health">Salud</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#education">Educacion</a>
                </li>
                <li class="">
                    <a data-toggle="tab" href="#workinfo">Laboral</a>
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

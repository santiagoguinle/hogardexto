<?php
$this->load->helper("form");
?>
<form class="form-horizontal" method="post"  action="" enctype="multipart/form-data" >
    <header class="panel-heading">
        <h1> Edicion de Personas </h1>
        <hr class="hrspacing"/>
    </header>
    <section class="panel">
        <div class="panel-body">
            <?php $this->load->view("persons/edit/firstinfo") ?>
        </div>

        <div class="panel-heading tab-bg-dark-navy-blue ">
            <ul class="nav nav-tabs">
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

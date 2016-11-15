<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Hogar de Cristo - Panel de Administracion</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />

        <!-- css -->
        <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('css/plugins/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('css/plugins/bootstrap-switch.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('css/plugins/bootstrap-datepicker/datepicker.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('css/sb-admin.css') ?>" rel="stylesheet" />

        <link href="<?= base_url('js/plugins/advanced-datatable/css/jquery.dataTables.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('js/plugins/advanced-datatable/css/responsive.dataTables.min.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('js/plugins/fileinput/css/fileinput.min.css') ?>" rel="stylesheet" />

        <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" />

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <!--header id="site-header"-->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                                Hogar de Cristo
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <ul class="nav navbar-right top-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                                    <ul class="dropdown-menu message-dropdown">
                                        <li class="message-preview">
                                            <a href="#">
                                                <div class="media">
                                                    <span class="pull-left">
                                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                                    </span>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><strong>John Smith</strong>
                                                        </h5>
                                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="message-preview">
                                            <a href="#">
                                                <div class="media">
                                                    <span class="pull-left">
                                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                                    </span>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><strong>John Smith</strong>
                                                        </h5>
                                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="message-preview">
                                            <a href="#">
                                                <div class="media">
                                                    <span class="pull-left">
                                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                                    </span>
                                                    <div class="media-body">
                                                        <h5 class="media-heading"><strong>John Smith</strong>
                                                        </h5>
                                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="message-footer">
                                            <a href="#">Read All New Messages</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                                    <ul class="dropdown-menu alert-dropdown">
                                        <li>
                                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                                        </li>
                                        <li>
                                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">View All</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#"><i class="fa fa-user"></i> <?= $_SESSION['username'] ?></a>
                                </li>
                            </ul>
                        </ul>
                    </div><!-- .navbar-collapse -->
                </div><!-- .container-fluid -->


                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <!--li >
                            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Graficos</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Listado completo</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Modificar mis datos </a>
                        </li>
                        <li>
                            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                        </li>
                        <li>
                            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Configuraciones</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Reportes <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown Item</a>
                                </li>
                            </ul>
                        </li-->
                        <li >
                            <a href="<?= base_url("/persons/create") ?>"><i class="fa fa-fw fa-user-plus"></i> Agregar Persona</a>
                        </li>
                        <li >
                            <a href="<?= base_url("/persons/search") ?>"><i class="fa fa-fw fa-search"></i> Buscador</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-hospital-o"></i> Lista Por Centro <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="/donbosco">Don Bosco</a>
                                </li>
                                <li>
                                    <a href="/sanjose">San José</a>
                                </li>
                                <li>
                                    <a href="/sanfrancisco">San Francisco</a>
                                </li>
                                <li>
                                    <a href="/juanpabloii">Juan Pablo II</a>
                                </li>
                                <li>
                                    <a href="/hurtado">Hurtado</a>
                                </li>
                            </ul>
                        </li-->
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensajes (Prox...)</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#confs"><i class="fa fa-fw fa-gear"></i> Configuracion<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="confs" class="collapse">
                                <li>
                                    <a href="/typeshomes"><i class="fa fa-fw fa-home"></i> Tipo de vivienda</a>
                                </li>
                                <li>
                                    <a href="/benefits"><i class="fa fa-fw fa-money"></i> Beneficios</a>
                                </li>
                                <li>
                                    <a href="/diseases"><i class="fa fa-fw fa-stethoscope"></i> Enfermedades</a>
                                </li>
                                <li>
                                    <a href="/users/listing"><i class="fa fa-fw fa-user"></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= base_url('logout') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </div>


            </nav><!-- .navbar -->
            <!--/header><!-- #site-header -->


            <div id="page-wrapper">
                <!--main id="site-content" role="main"-->

                <?php if (isset($_SESSION)) : ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <?php // var_dump($_SESSION); ?>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .container -->
                <?php endif; ?>
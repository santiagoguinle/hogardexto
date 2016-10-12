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
        
        <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('js/plugins/fileinput/css/fileinput.min.css') ?>" rel="stylesheet" />

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header id="site-header">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= base_url() ?>">
                            
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url('register') ?>">Registrarse</a></li>
                            <li><a href="<?= base_url('login') ?>">Entrar</a></li>
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
                        <li class="active">
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Nueva Persona</a>
                        </li>
                    </ul>
                </div>


            </nav><!-- .navbar -->
        </header><!-- #site-header -->

        <main id="site-content" role="main">

            <?php if (isset($_SESSION)) : ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <?php // var_dump($_SESSION); ?>
                        </div>
                    </div><!-- .row -->
                </div><!-- .container -->
            <?php endif; ?>
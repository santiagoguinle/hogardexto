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
        <!--link href="<?= base_url('css/sb-admin.css') ?>" rel="stylesheet" /-->

        <link href="<?= base_url('css/style.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('js/plugins/fileinput/css/fileinput.min.css') ?>" rel="stylesheet" />

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper" style="padding-left:0px;">
            <nav class="navbar navbar-inverse " role="navigation">
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

            </nav><!-- .navbar -->


            <div id="page-wrapper">


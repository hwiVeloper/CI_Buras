<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Informations -->
    <meta http-equiv="Content-Type" context="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom_style.css') ?>">

    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Custom Style -->
    <style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/jejugothic.css);

    html, body {
      font-family: 'Jeju Gothic';
    }

    body {
      padding-top: 2.5em;
      font-size: 0.9rem;
    }

    footer {
      bottom: 0;
      position: fixed;
      width:100%;
      background-color: #f7f7f9;
      margin-top: 3em;
      padding: 1em 1.5em;
      /*text-align: center;*/
      color: #333;
      font-size: 0.75em;
    }

    .img-rounded {
      border: 0px;
      border-radius: 50%;
      -webkit-transition: all .2s ease-in-out;
      -o-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
      max-width: 100%;
      height: auto;
    }

    #user-menu {
      margin-bottom: 0em;
    }
    </style>

    <!-- title -->
    <title>Buras</title>
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="container-fluid">
      <nav class="navbar navbar-fixed-top navbar-light bg-faded" role="navigation">
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
        <!-- User Account Information -->
        <ul class="nav navbar-nav pull-xs-right" style="float:right">
          <li class="nav-item">
            <div class="dropdown">
              <a class="dropdown-toggle nav-link" id="user-menu" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" href="#">
                <span class="hidden-xs-down"><?=$this->session->userdata('user_name')?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="user-menu" style="width:300px;">
                <div class="col-md-12 col-xs-12" style="padding:1rem;">
                  <p class="text-left"><strong><?=$this->session->userdata('user_name')?> (<?=$this->session->userdata('user_id')?>)</strong></p>
                  <p class="text-left small" style="margin-bottom:0;">
                    <?=$this->session->userdata('user_season')?> 기<br>
                    <?=$this->session->userdata('user_email')?></p>
                </div>
                <div class="col-md-12 dropdown-divider"></div>
                <div class="col-md-12">
                  <a href="#" class="btn btn-primary btn-block btn-sm">내정보</a>
                </div>
                <div class="col-md-12" style="margin-top:0.25em">
                  <a href="<?=base_url('Login/logout')?>" class="btn btn-danger btn-block btn-sm">로그아웃</a>
                </div>
              </div>
            </div>
    <?php
            // }
    ?>
          </li>
        </ul>
        <div class="collapse navbar-toggleable-md" id="navbarResponsive">
          <a class="navbar-brand" href="#">
            <!-- <img src="" alt="" width="88px" height="45px"/> -->
            LOGO
          </a>
          <ul class="nav navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?=base_url('Main')?>">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('Member')?>">MEMBER</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RENTAL</a>
              <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                <a class="dropdown-item" href="<?=base_url('Product/list')?>">PRODUCTS</a>
                <a class="dropdown-item" href="<?=base_url('Rental/my')?>">MY RENTAL</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MEDIA</a>
              <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                <a class="dropdown-item" href="#">VIDEOS</a>
                <a class="dropdown-item" href="#">GALLERY</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="responsiveNavbarDropdown"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BOARD</a>
              <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                <a class="dropdown-item" href="<?=base_url('Board/1')?>">공지사항</a>
                <a class="dropdown-item" href="<?=base_url('Board/2')?>">회계보고</a>
                <a class="dropdown-item" href="<?=base_url('Board/3')?>">문서창고</a>
                <a class="dropdown-item" href="<?=base_url('Board/4')?>">자료실</a>
              </div>
            </li>
            <?php if($this->session->userdata >= 8) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/Main')?>" target="_blank">ADMIN</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container-fluid" style="padding-top: 3.0em; padding-bottom: 3.5em;">

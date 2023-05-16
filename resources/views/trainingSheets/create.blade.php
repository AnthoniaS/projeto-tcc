<?php
use Kreait\Firebase\Factory;

$factory = (new Factory)
?>
<!------ Include the above in your HEAD tag ---------->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 --><script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <!-- Forked from www  .j a  va  2 s  . c  o m-->
<!--  <link rel="stylesheet" type="text/css"
  href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">
 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Navegador em tabela HTML</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<style>
 {
    font-family:Consolas
}

.table .tabelaEditavel {
    border-bottom: 1px solid #ddd;
    width:100%
}

.table .tabelaEditavel td {
    border-bottom: 1px solid #ddd;
}

.table .tabelaEditavel .celulaEmEdicao {
    padding: 0;
}

.tabelaEditavel .celulaEmEdicao input[type=text]{
    width:100%;
    border:3;
}


a:focus,a:hover,a{
    outline:none;
    text-decoration: none;
}
li,ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
.header-top i {
    font-size: 18px;
}
.bg-image {
    background: url(../images/background-login.jpg) no-repeat 0 0 / cover;
    position: relative;
    width: 100%;
    height: 100vh;
    display: table;
}

.login-header {
    display: inline-block;
    width: 100%;
    background: #0e1a35;
}

.login-signup {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
}

.login-logo img {
    cursor: pointer;
    max-width: 171px;
    padding: 23px 15px 22px;
    width: 100%;
}

.login-header .navbar-right {
    margin-right: 0px;
}

.login-header .nav-tabs > li.active > a,
.login-header .nav-tabs > li.active > a:focus,
.login-header .nav-tabs > li.active > a:hover {
    background-color: transparent;
    border: none;
    color: #fff;
}

.login-header .nav-tabs > li > a {
    border: medium none;
    border-radius: 0;
    font-size: 14px;
    font-weight: 500;
    line-height: 48px;
    padding: 15px 30px;
    color: #fff;
}

.login-header .nav-tabs {
    border-bottom: none;
}

.login-header .nav-tabs > li {
    margin-bottom: 0px;
}

.login-header .nav > li > a:focus,
.login-header .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.login-header .nav-tabs > li.active {
    border-bottom: 6px solid #5584ff;
}

.login-inner h1 {
    color: #8492af;
    font-size: 48px;
    font-weight: 300;
    text-align: center;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-inner h1 span {
    color: #5584ff;
}

.login-form {
    text-align: center;
}

.login-form input {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border-color: -moz-use-text-color -moz-use-text-color #d4d9e3;
    border-image: none;
    border-style: none none solid;
    border-width: medium medium 1px;
    font-size: 13px;
    font-weight: 300;
    width: 100%;
    color: #8492af;
    padding: 15px 50px;
    font-size: 17px;
    max-width: 550px;
}

.login-form label {
    margin-bottom: 30px;
    width: 100%;
}

.user input {
    background: rgba(0, 0, 0, 0) url("../images/user.png") no-repeat scroll 7px 12px;
}

.pass input {
    background: rgba(0, 0, 0, 0) url("../images/password.png") no-repeat scroll 7px 12px;
}

.mail input {
    background: rgba(0, 0, 0, 0) url("../images/mail.png") no-repeat scroll 4px 12px;
}

.login-signup .tab-content {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
    display: inline-block;
    margin-top: -8px;
    width: 100%;
}

.form-btn {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-weight: 400;
    max-width: 250px;
    padding: 10px 0;
    position: relative;
    width: 100%;
    margin: 40px 0;
    box-shadow: 0 2px 8px #d2d2d2;
    -moz-box-shadow: 0 2px 8px #d2d2d2;
    -webkit-box-shadow: 0 2px 8px #d2d2d2;
}

.form-btn::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 17px;
    top: 9px;
}

.form-details {
    padding: 35px 0;
}

.tab-content .tab-pane {
    padding: 70px 0;
}


/*Login Signup Page*/


/*Home Page*/

.home {
    background: #f6f7fa;
}

#navigation {
    background: #ffffff;
}

#navigation {
    padding: 0;
}

.display-table {
    display: table;
    padding: 0;
    height: 100%;
    width: 100%;
}

.display-table-row {
    display: table-row;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    float: none;
    height: 100%;
}

.v-align {
    vertical-align: top;
}
.logo img {
    max-width: 135px;
    padding: 16px 0 17px;
    width: 100%;
}

.header-top {
    margin: 0;
    padding-top: 2px;
}

.header-top img {
    border-radius: 50%;
    max-width: 48px !important;
    width: 100%;
}

.add-project {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 27px 10px 45px;
    position: relative;
}

.header-rightside .nav > li > a:focus,
.header-rightside .nav > li > a:hover {
    background: none;
    text-decoration: none;
}

.add-project::before {
    background: rgba(0, 0, 0, 0) url("../images/plus.png") no-repeat scroll 0 0;
    content: "";
    ;
    height: 12px;
    left: 17px;
    position: absolute;
    top: 12px;
    width: 12px;
}

.add-project:hover {
    color: #ffffff;
}

.header-top i {
    color: #0e1a35;
}

.icon-info {
    position: relative;
}
.navi i {
    font-size: 20px;
}
.label.label-primary {
    border-radius: 50%;
    font-size: 9px;
    left: 8px;
    position: absolute;
    top: -9px;
}

.icon-info .label {
    border: 2px solid #ffffff;
    font-weight: 500;
    padding: 3px 5px;
    text-align: center;
}

.header-top li {
    display: inline-block;
    text-align: center;
}

.header-top .dropdown-toggle {
    color: #0e1a35;
}

.header-top .dropdown-menu {
    border: medium none;
    left: -85px;
    padding: 17px;
}
.view {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
    padding: 10px 15px;
}

.navbar-content > span {
    font-size: 13px;
    font-weight: 700;
}

.img-responsive {
    width: 100%;
}
#navigation{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

header {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
    display: inline-block !important;
    line-height: 23px;
    padding: 15px;
    transition: all 0.5s ease 0s;
    width: 100%;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.logo {
    text-align: center;
}

.navi a {
    border-bottom: 1px solid #0d172e;
    border-top: 1px solid #0d172e;
    color: #ffffff;
    display: block;
    font-size: 17px;
    font-weight: 500;
    padding: 28px 20px;
    text-decoration: none;
}

.navi i {
    margin-right: 15px;
    color: #5584ff;
}

.navi .active a {
    background: #122143;
    border-left: 5px solid #5584ff;
    padding-left: 15px;
}

.navi a:hover {
    background: #122143 none repeat scroll 0 0;
    border-left: 5px solid #5584ff;
    display: block;
    padding-left: 15px;
}

.navbar-default {
    background-color: #ffffff;
    border-color: #ffffff;
}

.navbar-toggle {
    border: none;
}

.navbar-default .navbar-toggle:focus,
.navbar-default .navbar-toggle:hover {
    background-color: rgba(0, 0, 0, 0);
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #0e1a35;
}

/* aqui */
input[type="number"] {
  width: 50px;
}
label {
  font-weight: bold;
  margin-left: 10px;
}
div.item {
  border: 1px solid black;
  padding: 10px;
  margin: 5px;
}
/* aqui */

.circle-logo {
    margin: 0 auto;
    max-width: 30px !important;
    text-align: center;
}
.hidden-xs{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.user-dashboard {
    padding: 0 20px;
}

.user-dashboard h1 {
    color: #0e1a35;
    font-size: 30px;
    font-weight: 500;
    margin: 0;
    padding: 21px 0;
}
.sales {
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #d4d9e3;
    display: inline-block;
    padding: 15px;
    width: 100%;
}
.sales button {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: 1px solid #dadee7;
    border-radius: 100px;
    font-size: 15px;
    letter-spacing: 0.5px;
    padding-right: 32px;
    color: #0e1a35;
}

.sales button::before {
    content: "";
    font-family: FontAwesome;
    position: absolute;
    right: 12px;
    top: 11px;
}
.sales  .btn-group {
    float: right;
}
.sales h2 {
    color: #8492af;
    float: left;
    font-size: 21px;
    font-weight: 600;
    margin: 0;
    padding: 9px 0 0;
}
.btn.btn-secondary.btn-lg.dropdown-toggle > span {
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.5px;
}
.sales .dropdown-menu{
    margin: 0px;
    padding: 0px;
    border: 0px;
    border-radius: 8px;
    width: 100%;
    color: #0e1a35;
}
.sales .btn-group.open .dropdown-toggle, .btn.active, .btn:active{
    box-shadow: none;
}
.sales .dropdown-menu > a {
    color: #0e1a35;
    display: inline-block;
    font-weight: 800;
    padding: 9px 0;
    text-align: center;
    width: 100%;
}
#my-cool-chart svg {
    width: 100%;
}
.sales .dropdown-menu > a:hover{
    color: #5584FF;   
}
.shield-buttons {
    display: none;
}
.close, .close:focus, .close:hover {
    color: #fff;;
    opacity: 1;
    text-shadow: none;
}
.modal-body input {
    border: 1px solid #d4d9e3;
    font-size: 14px;
    font-weight: 300;
    margin: 5px 0;
    padding: 14px 10px;
    width: 100%;
    color: #8492af;
}
.modal-body textarea {
    border: 1px solid #d4d9e3;
    font-size: 14px;
    font-weight: 300;
    height: 200px;
    margin-top: 5px;
    padding: 9px 10px;
    width: 100%;
    color: #8492af;
}
.modal-header.login-header h4 {
    color: #ffffff;
}
.modal-footer .add-project {
    background: #5584ff none repeat scroll 0 0;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px;
    position: relative;
}
.modal-footer .add-project::before{display: none;}
.modal-footer {
    border: 0 none;
    padding: 10px 15px 26px;
    text-align: right;
}
.cancel {
    background: #0E1A35     ;
    border: medium none;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 30px;
    position: relative;
    
}
.modal{
    top: 20%; 
}
.modal-header .close {
    margin-top: 2px;
}

.modal-header.login-header {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
/*Main CSS*/






@media only screen and (max-device-width: 767px) {
    .login-logo img {
        margin: 0 auto;
    }
    .login-details .nav-tabs > li {
        text-align: center;
        width: 50%;
    }
    .login-signup .login-inner h1 {
        font-size: 26px;
        margin-bottom: 0;
        margin-top: 10px;
    }
    .login-inner .login-form input {
        font-size: 15px;
        max-width: 100%;
        padding: 15px 45px;
    }
    .login-inner .form-details {
        padding: 25px;
    }
    .login-inner .login-form label {
        margin-bottom: 20px;
        width: 100%;
    }
    .login-inner .form-btn {
        margin: 0;
        max-width: 180px;
    }
    .tab-content .tab-pane {
        padding: 20px 0;
    }
    #navigation .navi a {
        font-size: 14px;
        padding: 20px;
        text-align: center;
    }
    #navigation .navi i {
        margin-right: 0px;
    }
    #navigation .navi a:hover,
    #navigation .navi .active a {
        background: #122143 none repeat scroll 0 0;
        border-left: none;
        display: block;
        padding-left: 20px;
    }
    header .header-top img {
        max-width: 38px !important;
    }
    .v-align header {
        padding: 12px 15px;
    }
    header .header-top li {
        padding-left: 13px;
        padding-right: 6px;
    }
    .navbar-default .navbar-toggle {
        border-color: rgba(0, 0, 0, 0);
    }
    .navbar-header .navbar-toggle {
        float: left;
        margin: 0;
        padding: 0;
        top: 12px;
    }
    button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            outline: medium none;
    }
    .user-dashboard .sales h2 {
        color: #8492af;
        float: left;
        font-size: 14px;
        font-weight: 600;
        margin: 0;
        padding: 13px 0 0;
}
    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 11px;
}
    .user-dashboard .sales button {
        font-size: 11px;
        padding-right: 23px;
}  
    .user-dashboard .sales h2 {
    font-size: 12px;
}
.gutter{
    padding: 0;
}
[class^="col-"] {
    padding: 10px;
    border: 1px solid;
}


}

@media only screen and (max-device-width: 992px) {
    header .header-top li {
        padding-left: 20px !important;
        padding-right: 0;
}
    header .logo img {
        max-width: 125px !important;
}

}

@media only screen and (min-device-width: 767px) and (max-device-width: 998px){
      .user-dashboard .header-top {
        padding-top: 5px;
}
    .user-dashboard .header-rightside {
        display: inline-block;
        float: left;
        width: 100%;
}
    .user-dashboard .header-rightside .header-top img {
        max-width: 41px !important;
} 
    .user-dashboard .sales button {
    font-size: 10px;
}
    .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
    font-size: 12px;
}
    .user-dashboard .sales h2 {
    font-size: 15px;
}
}
@media only screen and (min-device-width:998px) and (max-device-width: 1350px){
        #navigation .logo img {
    max-width: 130px;
    padding: 16px 0 17px;
    width: 100%;
}
}
</style>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="logoo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li id='home' class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li id='alunos' class="active"><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Alunos</span></a></li>
                        <li id='fichas' class="active"><a href="#"><i class="fa fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Fichas</span></a></li>
                        <li id='fichasTreino' class="active"><a href="#"><i class="fa fa-file" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Fichas de treino</span></a></li>
                        <div class="active" style='background: #122143 none repeat scroll 0 0;border-left: none;display: block; padding-left: 20px;height:2000px'></div>    
                          
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        
                        </div>
                        <div style='height:48px' class="col-md-5">

                            <ul class="list-inline header-top pull-right">
                                 
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://jskrishna.com/work/merkury/images/user-pic.jpg" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span>JS Krishna</span>
                                                    <p class="text-muted small">
                                                        me@jskrishna.com
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="#" class="view btn-sm active">View Profile</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                        </div>
                    </header>
                </div>
            

                <br><br>

                <div class="accordion" id="searchAccordion">
                    <div class="accordion-group">
                    <h5>

                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse"
                            data-parent="#searchAccordion" href="#collapseOne">Adicionar Aluno</a>
                        </div>
                        </h5>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="accordion-inner">
                                <br>
                                <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse"
                                        data-parent="#searchAccordion" href="#collapseOne2">Exemplos de treinos</a>
                                    </div>
                                    </h5>

                                    <div id="collapseOne2" class="accordion-body collapse in">
                                        <hr style="height:1px;border-width:0;color:gray;background-color:gray">

<!--                                         <label style="color:#000000">Rotina de treinos progressivas desde o iniciante:</label>
 -->                                        <br>
                                        <div id="collapseOne2" class="accordion-body collapse in">

                                  <!--           <div class='row' style="width:100%">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:600px;background-color:#F8F8FF;font-weight: bold;color:#000000' type="text" name="title" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['title']}}" ></input>
                                                <button id="addpart1exemplo1" style='background:#122143;float:right' class="btn btn-primary">Adicionar treino</button> <br>
                                            </div>

                                            <div id="part1exemplo1" class='row' style=" display: flex;flex-wrap: wrap;">
                                     
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:550px;background-color:#F8F8FF;font-weight: bold;color:#000000' type="hidden" name="title" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['title']}}" ></input>
                                                <br>
                                               
                                                @if(isset($treinos['exemplo1']['parte1']['dia1']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:265px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia1" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['dia1']}}" ></input><br>
                                                            @foreach($treinos['exemplo1']['parte1']['exercdia1'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia1[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif   

                                                @if(isset($treinos['exemplo1']['parte1']['dia2']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:265px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia2" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['dia2']}}" ></input><br>                                                    
                                                            @foreach($treinos['exemplo1']['parte1']['exercdia2'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia2[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                  
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif   

                                                @if(isset($treinos['exemplo1']['parte1']['dia3']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:265px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia3" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['dia3']}}" ></input><br>                                                        
                                                            @foreach($treinos['exemplo1']['parte1']['exercdia3'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia3[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                       
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif   
                                                
                                                <br>
                                                @if(isset($treinos['exemplo1']['parte1']['dia4']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:265px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia4" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['dia4']}}" ></input><br>
                                                            @foreach($treinos['exemplo1']['parte1']['exercdia4'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia4[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                        
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif  
                                                <br>
                                                @if(isset($treinos['exemplo1']['parte1']['dia5']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:265px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia5" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte1']['dia5']}}" ></input><br>                                                        
                                                            @foreach($treinos['exemplo1']['parte1']['exercdia5'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia5[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach
                                                        
                                                    </div>
                                                @endif  

                                            </div>
 -->

<!-- 

                                            <div class='row' style="width:100%">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:550px;background-color:#F8F8FF;font-weight: bold;color:#000000' type="text" name="title" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['title']}}" ></input>
                                                <button id="addpart2exemplo1" style='background:#122143;float:right' class="btn btn-primary">Adicionar treino</button> <br>
                                            </div>

                                            <div id="part2exemplo1" class='row' style=" display: flex;flex-wrap: wrap;">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:550px;background-color:#F8F8FF;font-weight: bold;color:#000000' type="hidden" name="title" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['title']}}" ></input>
                                                <br>
                                                <br>
                                                <br>
                                                @if(isset($treinos['exemplo1']['parte2']['dia1']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia1" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['dia1']}}" ></input><br>
                                                            @foreach($treinos['exemplo1']['parte2']['exercdia1'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia1[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif   

                                                @if(isset($treinos['exemplo1']['parte2']['dia2']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia2" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['dia2']}}" ></input><br>                                                    
                                                            @foreach($treinos['exemplo1']['parte2']['exercdia2'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia2[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                  
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif   

                                                @if(isset($treinos['exemplo1']['parte2']['dia3']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia3" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['dia3']}}" ></input><br>                                                        
                                                            @foreach($treinos['exemplo1']['parte2']['exercdia3'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia3[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                       
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif   
                                                
                                                <br>
                                                @if(isset($treinos['exemplo1']['parte2']['dia4']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia4" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['dia4']}}" ></input><br>
                                                            @foreach($treinos['exemplo1']['parte2']['exercdia4'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia4[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                        
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @endif  
                                                <br>
                                                @if(isset($treinos['exemplo1']['parte2']['dia5']))
                                                    <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia5" class="form-control form-control-sm" value=" {{$treinos['exemplo1']['parte2']['dia5']}}" ></input><br>                                                        
                                                            @foreach($treinos['exemplo1']['parte2']['exercdia5'] as $exer)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia5[]" class="form-control form-control-sm" value=" {{$exer}}" ></input></e><br>
                                                            @endforeach                                                        
                                                    </div>
                                                @endif  

                                            </div>
                                        </div> -->
                                        &bull;<input style='cursor: pointer;box-shadow: 0 0 0 0;border: 0 none;outline:0;width:500px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" id='exemplo1' name="exemplo1" class="form-control form-control-sm" value="Rotina de treinos progressivas desde o iniciante:" ></input><br>
<br>
                                        <div id='exemploo1' style='display:none'>

                                            @foreach($treinos['exemplo1'] as $exemplos)

                                            <div class='row' style="width:93%">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='cursor: pointer;box-shadow: 0 0 0 0;border: 0 none;outline:0;width:600px;background-color:#F8F8FF;font-weight: bold;color:#000000' type="text" name="{{$exemplos['teste']}}" class="form-control form-control-sm" onclick="testainput(this)" value="{{$exemplos['title']}}" ></input>
                                                <button name="{{$exemplos['teste']}}" onclick="adiciontreino(this)" id="bt{{$exemplos['teste']}}" style='background:#122143;float:right' class="btn btn-primary">Adicionar treino</button> <br>
                                            </div>
                                            
<br>
<br>

                                            <div id="{{$exemplos['teste']}}">  
   
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:550px;background-color:#F8F8FF;font-weight: bold;color:#000000' type="hidden" name="title" class="form-control form-control-sm" value=" {{$exemplos['title']}}" ></input>
  
                                                @if(isset($exemplos['dia1'])) 
                                                    @if(isset($exemplos['dia4']))    
                                                        <div class="col-xs-2" style='width:200px'> 
                                                    @elseif(isset($exemplos['dia5']))  
                                                        <div class="col-xs-2" style='width:180px'> 
                                                    @else
                                                        <div class="col-xs-2" style='width:265px'> 
                                                    @endif    
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:260px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia1" class="form-control form-control-sm" value="{{$exemplos['dia1']}}" ></input><br>
                                                        @foreach($exemplos['exercdia1'] as $eexc)
                                                        <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' onclick='kaka(this)' type="text" id="{{$eexc}}" name="exercdia1[]" class="form-control form-control-sm" value=" {{$eexc}}" data-toggle="modal" data-target="#modal-mensagem-{{$eexc}}" ></input></e><br>                                                                
                                                        @endforeach
                                                        </div>  
                                                        <div class="col-xs-2" style='width:1px;'> 
                                                            <div style='height: 170px;color:gray;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                        </div>                                                     
                                                @endif
                                                @if(isset($exemplos['dia2']))  
                                                    @if(isset($exemplos['dia4']))    
                                                        <div class="col-xs-2" style='width:200px'> 
                                                    @elseif(isset($exemplos['dia5']))  
                                                        <div class="col-xs-2" style='width:180px'> 
                                                    @else
                                                        <div class="col-xs-2" style='width:265px'> 
                                                    @endif                               
                                                    <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia2" class="form-control form-control-sm" value="{{$exemplos['dia2']}}" ></input><br>
                                                    @foreach($exemplos['exercdia2'] as $eexc)
                                                    <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia2[]" class="form-control form-control-sm" value=" {{$eexc}}" data-toggle="modal" data-target="#modal-mensagem-{{$eexc}}"></input></e><br>       
                                                    @endforeach
                                                    </div>  
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;color:gray;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>                                             
                                                @endif
                                                @if(isset($exemplos['dia3']))     
                                                @if(isset($exemplos['dia4']))    
                                                        <div class="col-xs-2" style='width:200px'> 
                                                    @elseif(isset($exemplos['dia5']))  
                                                        <div class="col-xs-2" style='width:180px'> 
                                                    @else
                                                        <div class="col-xs-2" style='width:265px'> 
                                                    @endif                                          
                                                    <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia3" class="form-control form-control-sm" value="{{$exemplos['dia3']}}" ></input><br>
                                                    @foreach($exemplos['exercdia3'] as $eexc)
                                                    <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia3[]" class="form-control form-control-sm" value=" {{$eexc}}" data-toggle="modal" data-target="#modal-mensagem-{{$eexc}}" ></input></e><br>                                                      
                                                    @endforeach
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;color:gray;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @else
                                                    <div class="col-xs-2" style='width:200px;height:190px'></div>
                                                @endif
                                                @if(isset($exemplos['dia4']))                                               
                                                    @if(isset($exemplos['dia4']))    
                                                        <div class="col-xs-2" style='width:200px'> 
                                                    @elseif(isset($exemplos['dia5']))  
                                                        <div class="col-xs-2" style='width:180px'> 
                                                    @else
                                                        <div class="col-xs-2" style='width:265px'> 
                                                    @endif                 
                                                    <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia4" class="form-control form-control-sm" value="{{$exemplos['dia4']}}" ></input><br>
                                                    @foreach($exemplos['exercdia4'] as $eexc)
                                                    <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia4[]" class="form-control form-control-sm" value=" {{$eexc}}" data-toggle="modal" data-target="#modal-mensagem-{{$eexc}}" ></input></e><br>                                                        
                                                    @endforeach
                                                    </div>
                                                    <div class="col-xs-2" style='width:1px;'> 
                                                        <div style='height: 170px;color:gray;border-left: 1px solid;width:1px;display: inline-block;' class="linha-vertical"></div>
                                                    </div>
                                                @else
                                                    <div class="col-xs-2" style='width:110px;height:200px'></div>
                                                @endif

                                                @if(isset($exemplos['dia5']))                    
                                                    @if(isset($exemplos['dia4']))    
                                                        <div class="col-xs-2" style='width:200px'> 
                                                    @elseif(isset($exemplos['dia5']))  
                                                        <div class="col-xs-2" style='width:180px'> 
                                                    @else
                                                        <div class="col-xs-2" style='width:265px'> 
                                                    @endif                                                         
                                                    <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia5" class="form-control form-control-sm" value="{{$exemplos['dia5']}}" ></input><br>
                                                    @foreach($exemplos['exercdia5'] as $eexc)
                                                    <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia5[]" class="form-control form-control-sm" value=" {{$eexc}}" data-toggle="modal" data-target="#modal-mensagem-{{$eexc}}"></input></e><br>                                                           
                                                    @endforeach
                                                    </div>
                                                @else
                                                <div class="col-xs-2" style='width:30px;height:200px'></div>
                                                @endif
                                                </div>
                                         

                                                <br>


<br>
                                            @endforeach


                                                </div>


<!-- 
                                                @foreach($treinos as $exemplos)
                                                    @foreach($exemplos as $exemp)
                                                        @if(isset($exemp['dia1']))
                                                        passou
                                                        <div class="col-xs-2" style='width:265px'> 
                                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:200px;background-color:#F8F8FF;color:#000000;font-weight: bold;' type="text" name="dia1" class="form-control form-control-sm" value="  {{$exemp['dia1']}}" ></input><br>
                                                        
                                                        @foreach($exemp['exercdia1'] as $eexc)
                                                            <e contenteditable="true"><input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:150px;background-color:#F8F8FF;color:#000000' type="text" name="exercdia1[]" class="form-control form-control-sm" value=" {{$eexc}}" ></input></e><br>

                                                            @endforeach
                                                            </div>
                                                       
                                                        @endif
                                                         
                                                    @endforeach
                                                @endforeach -->

                                          


                                                

                                  <!--       <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="title" class="form-control form-control-sm" value="1 parte - Seg: empurra + puxa / Ter: perna / Qua: off / Qui: empurra + puxa / Sex: perna" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="dia1" class="form-control form-control-sm" value="Segunda e Quinta: empurra + puxa" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia1part1[]" class="form-control form-control-sm" value=" 9 x peito" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia1part1[]" class="form-control form-control-sm" value=" 9 x costas" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia1part1[]" class="form-control form-control-sm" value=" " ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia1part1[]" class="form-control form-control-sm" value=" " ></input>

                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="dia2" class="form-control form-control-sm" value="Terça e Sexta: perna" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia2part1[]" class="form-control form-control-sm" value=" 9 x perna" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia2part1[]" class="form-control form-control-sm" value=" 9 x posterior" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia2part1[]" class="form-control form-control-sm" value=" 9 x panturrilha" ></input>
                                        <input style='box-shadow: 0 0 0 0;border: 0 none;outline:0;width:900px;background-color:#F8F8FF' type="text" name="exercdia2part1[]" class="form-control form-control-sm" value=" " ></input>
 -->
                                    </div>
                                    </div>

                                    <hr style="height:1px;border-width:0;color:gray;background-color:gray">

                                <form id="addtreino">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Nome completo:</label>
                                        <input type="text" style='height:30px' class="form-control" id="name" name='name'>
                                    </div>
                                    <div class="form-group">
                                        <label>Data do Início:</label>
                                        <input type="date" style='height:30px' class="form-control" id="dateInitial" name='dateInitial' max="7">
                                    </div>
                                    <div class="form-group">
                                        <label>Objetivo:</label>
                                        <input type="text" style='height:30px' class="form-control" id="objetivo" name='objetivo'>
                                    </div>


                                    <label style='color:#000000'>Rotina de treino:</label>

                                        <div id="treinos">
.
                                    </div>

<!--                                     <label>Quais dias da semana:</label>
 --><!-- 
                                    <div class="form-inline" >
                                        <input id='segunda' name='segunda' type="checkbox">
                                        <label style='width:120'>Segunda</label>
                                        <input id='terca' name='terca' type="checkbox">
                                        <label style='width:120'>Terça</label>
                                        <input id='quarta' name='quarta' type="checkbox">
                                        <label style='width:120'>Quarta</label>
                                        <input id='quinta' name='quinta' type="checkbox">
                                        <label style='width:120'>Quinta</label>
                                        <input id='sexta' name='sexta' type="checkbox">
                                        <label style='width:120'>Sexta</label>
                                    </div>

                                    <br>
                                     <label>Exercícios:</label>
                                        <input id='peito' name='peito' type="checkbox">
                                        <label style='width:120'>peito</label>
                                    
                                    <br>  -->

                                   <button id='btteste' type='button' style='background:#122143' class="btn btn-primary">Salvar</button>
                                   <button class="btn btn-primary" type='button' data-toggle="modal" data-target="#modal-mensagem">
Exibir mensagem
</button>
                                    <br>
                                    <br>
                                    <br>
                                    <br>

                            
                                </form>

                             
                               
                            </div>                         

                        </div>
                    </div>
                
                    </div>
                    

                
        </div>
        
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modal-mensagem">
Exibir mensagem
</button>


@foreach($treinos['exemplo3'] as $exemplos)

    @foreach($exemplos['exercdia1'] as $eexc)

        @foreach($category as $chave => $dados)

            @if($chave == $eexc)
<div id='oi'>


</div>
            <div class="modal fade" id="modal-mensagem-{{$eexc}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                <h4 class="modal-title">Exercicios de {{$eexc}}</h4>
                            </div>
                            <div class="modal-body">
                                @foreach($dados as $dado)
                                    <p> {{$dado}}</p>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach 
     @endforeach
@endforeach



</body>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="/js/jquery.maskedinput.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 --><script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $.ajaxSetup({   
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function testeee(obj){
        name = obj.id;
        window.location.replace('/training/exerc/' + name)
    }

    function testainput(obj){
        var bt = $('#bt' + obj.name).is(':visible');
        console.log(bt)
        if (bt){
            document.getElementById('bt' + obj.name).style.display = 'none';

        } else {
            document.getElementById('bt' + obj.name).style.display = 'block';

        }

        var visivel  = $('#' + obj.name).is(':visible');

                if (visivel) {
                $('#' + obj.name).hide();

                }else {
                $('#' + obj.name).show();
                }

    }
    function kaka(obj){
        obj.id
        let list = document.getElementById("oi").innerHTML;    
        list += `<div class="modal fade" id="modal-mensagem-${obj.id}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                                <h4 class="modal-title">Exercicios de ${obj.id}</h4>
                            </div>
                            <div class="modal-body">
                                @foreach($dados as $dado)
                                    <p> {{$dado}}</p>
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>`

        
        document.getElementById("lista").innerHTML = list;
    }
    function adiciontreino(obj){
        var novoItem = $("#" + obj.name).clone().removeAttr('id'); // para não ter id duplicado
        $("#treinos").append(novoItem);
    }

    $(document).ready(function(){
 
        $("#addjj").click(function(e) {
            e.preventDefault();
            var novoItem = $("#part1exemplo1").clone().removeAttr('id'); // para não ter id duplicado
            $("#treinos").append(novoItem);
        }); 

        $("#addpart2exemplo1").click(function(e) {
            e.preventDefault();
            var novoItem = $("#part2exemplo1").clone().removeAttr('id'); // para não ter id duplicado
            $("#treinos").append(novoItem);
        }); 
        $("#addpart1exemplo1").click(function(e) {
            e.preventDefault();
            var novoItem = $("#part1exemplo1").clone().removeAttr('id'); // para não ter id duplicado
            $("#treinos").append(novoItem);
        }); 

        
        $("#exemplo1").on("click", function(e) {
            var visivel  = $('#exemploo1').is(':visible');
                if (visivel) 
                $("#exemploo1").hide();

                else 
                $("#exemploo1").show();
        });

        $("#btteste").on("click", function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: '/training/addteste',
                dataType: 'JSON',
                data: $("#addtreino").serialize(),
                success: function (response) {
                    window.location.replace('/training')
                    
                },
                error: function(response) {
                    console.log('erro')

                }
            });
        });

        $("#alunos").click(function(){
            window.location.replace('/alunos')

        });

        $("#fichas").click(function(){
            window.location.replace('/listFichas')
        });
        
        $("#home").click(function(){
            window.location.replace('/dashboard')
        });
        

          
        $("#fichasTreino").click(function(){
            window.location.replace('/training')
        });

        $("#title2parte").dblclick(function () {
            var conteudoOriginal = $(this).text();

            $(this).addClass("celulaEmEdicao");
            $(this).html("<input type='text' value='" + conteudoOriginal + "' />");
            $(this).children().first().focus();
            $(this).children().first().keypress(function (e) {
                if (e.which == 13) {
                    var novoConteudo = $(this).val();
                    $(this).parent().text(novoConteudo);
                    $(this).parent().removeClass("celulaEmEdicao");
                }
            });

            $(this).children().first().blur(function(){
                $(this).parent().text(conteudoOriginal);
                $(this).parent().removeClass("celulaEmEdicao");
            });
        });

        
    });

</script>





<!DOCTYPE HTML>
<html>
    <head>
        <title>Har Govind Suyal Inter College</title>
        <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Custom Theme files -->
        <link href="<?php echo base_url('assets/css/style.css');?>" rel='stylesheet' type='text/css' />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="<?php echo base_url('assets/css/nav.css');?>" rel="stylesheet" type="text/css" media="all"/>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300:700' rel='stylesheet' type='text/css'>
        <script src="<?php echo base_url('assets/js/jquery.min.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/modernizr.custom.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/jquery.openCarousel.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/fwslider.js');?>" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function () {
                $('#slider').fwslider({
                    auto: true, //auto start
                    speed: 300, //transition speed
                    pause: 4000, //pause duration
                    panels: 5, //number of image panels
                    width: 1680,
                    height: 370,
                    nav: true   //show navigation
                });
            });
        </script>
        <style>
            .vticker{
                //border: 1px solid red;
                background: #fff;
                margin-top: 15px;
                width: auto;
            }
            .vticker ul{
                padding: 0;
            }
            
            .vticker ul h4{
                color: #0997dd;
            }
            .vticker li{
                list-style: none;
                border-bottom: 1px dashed #ff9933;
                padding: 20px;
            }
            .et-run{
                background: red;
            }
        </style>
        <!---- animated-css ---->
        <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
        <script>
            new WOW().init();
        </script>
        <script>
            $(function () {
                var button = $('#loginButton');
                var box = $('#loginBox');
                var form = $('#loginForm');
                button.removeAttr('href');
                button.mouseup(function (login) {
                    box.toggle();
                    button.toggleClass('active');
                });
                form.mouseup(function () {
                    return false;
                });
                $(this).mouseup(function (login) {
                    if (!($(login.target).parent('#loginButton').length > 0)) {
                        button.removeClass('active');
                        box.hide();
                    }
                });
            });
        </script>
        <!----font-Awesome----->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!----font-Awesome----->
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <div class="header_top">
                <div class="container">
                    <div class="headertop_nav">
                        <ul>
                            <li>For Admission Call :+91-9410167966,05946–260560</li>                            
                            <li><a href="#">Enquiry</a> /</li>
                            <li><a href="#l">Email</a> /</li>
                        </ul>
                    </div>
                    <div class="header-top-right">
                        <div class="login_box">
                            <div id="loginContainer">
                                <a id="loginButton" class="active"><span class="active"><i class="search-icon"></i>Search</span></a>
                                <div id="loginBox">
                                    <form id="loginForm">
                                        <div class="search_box">
                                            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                        this.value = 'Search';
                                                    }">
                                            <input type="submit" value="">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
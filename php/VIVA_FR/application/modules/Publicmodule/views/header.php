<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VIVA Volt</title>
    <!--favicon-->
    <link href="<?=base_url('assets/publicassets/')?>assets/images/favicon.png" rel="icon" type="image/x-icon" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> -->
    <?php
		echo link_tag('assets/publicassets/assets/css/sidebar.css');
		echo link_tag('assets/publicassets/assets/css/other-main.css');
		echo link_tag('assets/publicassets/assets/css/bootstrap.min.css');
		echo link_tag('assets/publicassets/assets/css/font-awesome.min.css');
		echo link_tag('assets/publicassets/style.css');
        echo link_tag('assets/publicassets/custom.css');
		echo link_tag('assets/publicassets/assets/css/responsive.css');
       	echo link_tag('assets/publicassets/assets/css/menu_style.css');   
	?>
    <!-- Main jquery js -->
    <script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/vendor/jquery-3.2.1.min.js">
    </script>
    <script src="<?= base_url('assets/publicassets/activity/'); ?>js/jquery.storage.js"></script>
    <script>
    var ls = $.localStorage();
    var base_url = "<?=base_url()?>";
    </script>
    <style>
    .edution-main-menu {
        background: #254c64;
    }
    </style>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5fe2d994a8a254155ab5b2a1/1eq723rvv';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- HEADER DEFAULT MANU AREA -->
    <div class="edution-main-menu one_page hidden-xs hidden-sm header--fixed headrooma header_transparent home-3">
        <div class="education-container">
            <div class="container">
                <div class="row logo-left">
                    <!-- LOGO -->


                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-padding">


                            <a class="main_sticky_main_l" href="<?=base_url()?>" title="Viva Volt">
                                <img class="logo_vivavolt"
                                    src="<?=base_url('assets/publicassets/')?>assets/images/logo2.png" alt="Viva Volt">
                            </a>

                        </div>
                    </div>

                    <!-- MAIN MENU -->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <?php if($this->getLogin){?>
                        <?php } else{?>
                        <?php /*
					<nav class="edution_menu main-search-menu">	
                        	
							     <ul class="sub-menu">
								<? <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?=base_url()?>">About</a></li>
                        <li>
                            <?php echo anchor('classess','Classes',['class'=>'free-log']); ?>
                        </li>




                        <li>
                            <?php if($this->getLogin && $this->getLogin->vc_class>0){
									$accClassis = $this->getModel->singledata('mastar_class', ['class_id' => $this->getLogin->vc_class]);
									//echo anchor('classess','Classes');
									echo anchor('subjects/'.str_replace(' ','', strtolower(preg_replace("([0-9]+)", "", $accClassis->class_name))).'-'.$accClassis->class_id,'Subjects');
								} 
								else{
									//echo anchor('classess','Classes');
									echo anchor('classess','Subjects',['class'=>'free-log', 'data-toggle'=>'modal', 'data-target'=>'#modalLRForm']);
								}
								?>
                        </li>



                        <!-- <li><?=($this->getLogin && $this->getLogin->vc_class>0)?anchor('subjects/'.$this->getLogin->vc_class,'Subjects'):anchor('classess','Subjects')?></li> -->
                        <!-- <li><a href="<?=base_url('classess')?>">Classes</a></li> -->
                        <li><a href="<?=base_url()?>">Start Learning</a></li>
                        <!-- <li><a href="<?=base_url()?>volt-package">Pricing</a></li> -->
                        <!--<li><a href="<?=base_url()?>">Book a Demo</a></li> -->




                        <!--<li><a href="<?=base_url()?>">Event</a></li>				
								<li><a href="<?=base_url()?>">Contact</a></li>	-->
                        </ul>
                        <!--<div class="em-quearys-top msin-menu-search">
									<div class="em-top-quearys-area">
									   <ul class="em-header-quearys">
											<li class="em-quearys-menu">
												<em class="fa fa-search t-quearys"></em>
												 <em class="fa fa-close  t-close em-s-hidden "></em>
											</li>
										</ul>		
									<div class="em-quearys-inner">
											<div class="em-quearys-form">
												<form action="#">
													<div class="top-form-control">
													<input type="text" placeholder="Enter Your Keyword" />
													<button class="top-quearys-style" type="submit">
														<em class="fa fa-search"></em>
													</button>
													</div>
												</form>
											</div>
										</div>
																	
									</div>
								</div>	
									-->

                        </nav> */?>
                        <?php }?>
                        <?php /**if($this->getLogin){?>
                        <div class="dropdown" style="float:right;">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                style="background-color:#254c64;border:#254c64;margin:10px 0 0;">
                                <em class="fa fa-bell-o"></em><span class="label label-warning count"></span></button>
                            <ul class="dropdown-menu">
                                <li style="min-width:350px;max-height: 415px;overflow: auto;">
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu list-group" id="top-notify">

                                    </ul>
                                </li>
                                <!-- <li class="footer"><a href="< ?php echo base_url('user-notification');?>">View all</a> -->
                                </li>
                            </ul>
                        </div>
                        <?php } */ ?>
                        <script>
                        $(window).on('load', function() {
                            function load_unseen_notification(view = '') {
                                $.ajax({
                                    url: "<?php echo base_url("Publicmodule/fetch_notification"); ?>",
                                    method: "POST",
                                    data: {
                                        view: view
                                    },
                                    dataType: "json",
                                    success: function(data) {
                                        // alert(data.unseen_notification);
                                        //$('#top-notify').html(data.notification);
                                        if (data.unseen_notification > 0) {
                                            $('.count').html(data.unseen_notification);
                                            $('.badge_1').css('background', '#264c65');
                                        } else {
                                            $('.count').css('display', 'none');


                                        }
                                    }
                                });
                            }

                            setTimeout(function() {
                                load_unseen_notification('yes');
                            }, 100);

                            $(document).on('click', '.dropdown-toggle', function() {
                                $('.count').html('');
                                load_unseen_notification('yes');
                            });

                        });

                        function gotourl(nId) {
                            $.ajax({
                                url: "<?php echo base_url("Publicmodule/update_notification"); ?>",
                                method: "POST",
                                data: {
                                    view: nId,
                                    count: $('.count').html()
                                },
                                dataType: "json",
                                success: function(data) {
                                    if (data.redirect) {
                                        //window.location.replace(data.redirect);
                                        window.location.href = data.redirect;
                                    }
                                }
                            });
                        }
                        </script>


                    </div>
                    <div class="col-md-3">
                        <div class="login-area">
                            <?php if($this->getLogin){?>
                            <style>
                            .badge_1 {
                                position: absolute;
                                top: -15px;
                                right: 70px;
                                padding: 5px 8px;
                                border-radius: 50%;

                                display: inline-block;
                                min-width: 10px;
                                font-size: 12px;
                                font-weight: 700;
                                line-height: 1;
                                color: #fff;
                                text-align: center;
                                white-space: nowrap;
                                vertical-align: middle;
                            }

                            .badge_2 {
                                position: absolute;
                                top: -5px;
                                right: -44px;                                                         
                                display: inline-block;
                                min-width: 10px;
                                padding: 5px 8px;
                                font-size: 10px;
                                font-weight: 700;
                                line-height: 1;
                                color: #fff;
                                text-align: center;
                                white-space: nowrap;
                                vertical-align: middle;
                                background-color: #254c64;
                                border-radius: 10px;
                            }
                            </style>

                            <section class="main">
                                <div class="wrapper-demo">
                                    <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                        <em class="fa fa-user t-quearys"></em>
                                        <span>Hi 
                                            <?php $result=explode(" ",$this->getLogin->vc_name); echo $result[0];?>
                                        </span>
                                        <b id="notifictionscount" class="badge_1 count"></b>
                                        <ul class="dropdown">
                                            <!-- <li><a href="<//?=base_url()?>account"><em class="fa fa-tachometer"></em>Dashboard</a></li>-->
                                            <!-- <li><a href="< ?=base_url()?>profile"><em class="fa fa-user"></em>Profile</a></li>
                            <li><a href="< ?=base_url()?>report"><em class="fa fa-user"></em>Report</a></li> -->
                                            <li><a href="<?=base_url()?>account" class="row">
                                                    <div class="col-md-9 tn_set">Dashboard </div>
                                                    <div class="white set_blue col-md-2"><img alt="Dashboard"
                                                            src="<?=base_url('assets/publicassets/')?>assets/images/users/icon/dashboard.png">
                                                    </div>
                                                </a>
                                            </li>

                                            <li><a href="<?=base_url('user-notification')?>" class="row">
                                                    <div class="col-md-9 tn_set">Notification </div>
                                                    <div class="white set_blue col-md-2"><img alt="Notification"
                                                            src="<?=base_url('assets/publicassets/')?>assets/images/users/icon/notification.png"><span
                                                            class="badge_2 count">0</span></div>
                                                </a>
                                            </li>
                                            <?php /*
							<li><a href="#" class="row"><div class="col-md-9 tn_set">Progress Chart </div>
							<div class="white set_blue col-md-2"><img alt="Progress Chart" src="<?=base_url('assets/publicassets/')?>assets/images/users/icon/progresschart.png">
                                    </div></a>
                                    </li>
                                    */?>
                                    <li><a href="#" class="row">
                                            <div class="col-md-9 tn_set">Query and Support </div>
                                            <div class="white set_blue col-md-2"><img alt="Query and Support"
                                                    src="<?=base_url('assets/publicassets/')?>assets/images/users/icon/support.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li><a href="<?=base_url()?>logout" class="row">
                                            <div class="col-md-9 tn_set">Logout </div>
                                            <div class="white set_blue col-md-2"><img alt="Logout"
                                                    src="<?=base_url('assets/publicassets/')?>assets/images/users/icon/logout.png">
                                            </div>
                                        </a>
                                    </li>
                                    <!--
                         	<li><a href="<//?=base_url()?>logout"><em class="fa fa-user"></em> </a></li>
							-->
                                    </ul>
                                </div>
                        </div>
                        </section>





                        <?php } else{?>
                        <a href="" class="free-log" data-toggle="modal" data-target="#modalLRForm">Sign In</a>
                        <?php /*
							<a href="" class="free-reg" data-toggle="modal" data-target="#modalLRForm">Register</a>
                            */ ?>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- END HEADER MENU AREA -->

    <!-- MOBILE MENU AREA -->
    <div class="mbm hidden-md  hidden-lg header_area main-menu-area one_page">
        <div class="menu_area mobile-menu">
            <nav>
                <ul class="main-menu clearfix">
                    <?php if($this->getLogin){?>
                    <li><a href="<?=base_url()?>account">Hi,
                            <?php $result=explode(" ",$this->getLogin->vc_name); echo $result[0];?></a></li>
                    <?php } else{?>
                    <li><a href="" class="free-log" data-toggle="modal" data-target="#modalLRForm">LogIn</a></li>
                    <?php /* <li><a href="" class="free-reg" data-toggle="modal" data-target="#modalLRForm">Register</a></li> */?>
                    <?php }?>

                </ul>
            </nav>
        </div>
    </div>
    <!-- END MOBILE MENU AREA  -->
    <script type="text/javascript">
    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }
    DropDown.prototype = {
        initEvents: function() {
            var obj = this;

            obj.dd.on('click', function(event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
        }
    }

    $(function() {

        var dd = new DropDown($('#dd'));

        $(document).click(function() {
            // all dropdowns
            $('.wrapper-dropdown-5').removeClass('active');
        });

    });
    </script>

    <script>
    var button = document.getElementById('dd');
    button.onclick = function() {
        var div = document.getElementById('notifictionscount');
        if (div.style.display !== 'none') {
            div.style.display = 'none';
        } else {
            div.style.display = 'block';
        }
    };





    $(".free-reg").click(function() {
        $(".white-panel").addClass("right-log");
        $(".register-show").addClass("show-log-panel");
        $(".login-show").removeClass("show-log-panel");
        $(".login-info-box").css("display", "block");
        $('#log-reg-show').removeAttr('checked');
    });
    $(".free-log").click(function() {
        $(".white-panel").removeClass("right-log");
        $(".register-show").removeClass("show-log-panel");
        $(".login-show").addClass("show-log-panel");
        $(".login-info-box").css("display", "block");
    });
    </script>
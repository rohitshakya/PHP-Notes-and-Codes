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

	<?php
		echo link_tag('assets/publicassets/assets/css/sidebar.css');
		echo link_tag('assets/publicassets/assets/css/other-main.css');
		echo link_tag('assets/publicassets/assets/css/bootstrap.min.css');
		echo link_tag('assets/publicassets/assets/css/font-awesome.min.css');
		echo link_tag('assets/publicassets/style.css');
		echo link_tag('assets/publicassets/assets/css/responsive.css');
       	echo link_tag('assets/publicassets/assets/css/menu_style.css');   
	?>
	<!-- Main jquery js -->	
	<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/vendor/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url('assets/publicassets/activity/'); ?>js/jquery.storage.js"></script>
	<script>
		var ls = $.localStorage();
		var base_url = "<?=base_url()?>";
	</script>
    <style>
        .logo_vivavolt{
            width: 135px;
        }
    </style>
    <style>
.dropbtn {
background-color: #4caf5000;
  color: white;
  font-size: 18px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
background-color: #4caf5000;
        opacity: 1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    visibility: visible;
    top: 0%;
}
</style>
	
</head>
<body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


	 <!-- HEADER DEFAULT MANU AREA -->
 	<div class="edution-main-menu one_page hidden-xs hidden-sm header--fixed headrooma header_transparent home-3 ">
		<div class="edution_nav_area">
			<div class="container">			
				<div class="row logo-left">				
					<!-- LOGO -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
						<div class="logo">
							<a class="main_sticky_main_l" href="<?=base_url()?>" title="edution">
								<img class="logo_vivavolt" src="<?=base_url('assets/publicassets/')?>assets/images/logo2.png" alt="insert image">
							</a>
							<a class="main_sticky_l" href="<?=base_url()?>" title="edution">
								<img class="logo_vivavolt" src="<?=base_url('assets/publicassets/')?>assets/images/logo2.png" alt="edution" />
							</a>
						</div>	  
	  				</div>
					
					<!-- MAIN MENU -->
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<nav class="edution_menu main-search-menu">						
							     <ul class="sub-menu">
								<!--<li><a href="<?=base_url()?>">Home</a></li>
								<li><a href="<?=base_url()?>">About</a></li> -->
								<li><?php
								if($this->getLogin && $this->getLogin->vc_class>0){
									$accClassis = $this->getModel->singledata('mastar_class', ['class_id' => $this->getLogin->vc_class]);
									echo anchor('subjects/'.str_replace(' ','', strtolower(preg_replace("([0-9]+)", "", $accClassis->class_name))).'-'.$accClassis->class_id,'Subjects');
								} 
								else{
									anchor('classess','Subjects');
								}
								?>
								</li>
								<!-- <li><?=($this->getLogin && $this->getLogin->vc_class>0)?anchor('subjects/'.$this->getLogin->vc_class,'Subjects'):anchor('classess','Subjects')?></li> -->	
								<li><a href="<?=base_url('classess')?>">Classes</a></li> 	
								<li><a href="<?=base_url()?>">Start Learning</a></li> 
								<li><a href="<?=base_url()?>">Book a Demo</a></li> 

								

								
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
						</nav>				
					</div>
					<div class="col-md-3">
						<div class="login-area">
						<?php if($this->getLogin){?>
                            
                            
                    	<section class="main">
				<div class="wrapper-demo">
					<div id="dd" class="wrapper-dropdown-3" tabindex="1">
						  <em class="fa fa-user t-quearys"></em> <span>Hi, <?=$this->getLogin->vc_name;?> </span>
						<ul class="dropdown">
							<li><a href="<?=base_url()?>account"><em class="fa fa-tachometer"></em>Dashboard</a></li>
							<li><a href="<?=base_url()?>profile"><em class="fa fa-user"></em>Profile</a></li>
                            <li><a href="<?=base_url()?>report"><em class="fa fa-user"></em>Report</a></li>
                         	<li><a href="<?=base_url()?>logout"><em class="fa fa-user"></em>Logout </a></li>
						</ul>
					</div>
				</div>
			</section>        
                            
						    
                 
                            
                            
						<?php } else{?>
					
							<a href="" class="free-reg" data-toggle="modal" data-target="#modalLRForm">	Free Registration</a> | 
						  <a href="" class="free-log" data-toggle="modal" data-target="#modalLRForm">LogIn</a>
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
					<li><a href="<?=base_url('classess')?>">Subjects</a></li>	
								<li><a href="<?=base_url()?>">Classes</a></li> 	
								<li><a href="<?=base_url()?>">Start Learning</a></li> 
								<li><a href="<?=base_url()?>">Book a Demo</a></li> 
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
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});

		</script>

	<script>
	$(".free-reg").click(function(){
		 $(".white-panel").addClass("right-log");
		 $(".register-show").addClass("show-log-panel"); 
		 $(".login-show").removeClass("show-log-panel");
		 $(".login-info-box").css("display","block");
		 $('#log-reg-show').removeAttr('checked');
	});
		$(".free-log").click(function(){
		 $(".white-panel").removeClass("right-log");
		 $(".register-show").removeClass("show-log-panel"); 
		 $(".login-show").addClass("show-log-panel");
		 $(".login-info-box").css("display","block");
	});
	</script>
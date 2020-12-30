<?php include "header.php";?>
<style>
.cset {
    color: #666;
    font-weight: 800;
    font-size: 20px;
    margin-top: 0px;
}
.p10 {
    padding: 30px 0;
}
.img-set-logo {
    width: 70px;
}
.s_s:after {
    content: "";
    top: 0px;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    background-color: #FFF;
    color: #000;
    z-index: -1;
}
.s_s {
    border: 1px solid #666;
    background: url('http://vivavolt.vivadigitalindia.net/assets/publicassets/assets/images/bookcover/images.jpg');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
}

.s_s i {
    position: absolute;
    right: 5px;
    bottom: 5px;
    font-size: 17px;
    color: #999;

}

#wrapper_i {
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
}

#wrapper_i h2 {
    margin-bottom: 20px !important;

}
.z_i99 {
   z-index: 99;

}
</style>
<style>
.single-promo-hover:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, .125) !important;
}

.single-promo-hover:hover {
    box-shadow: 0 1rem 3rem rgba(31, 45, 61, .125) !important;
}

.single-viva {
    box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.12);
    border: 6px solid #fff;
    border-radius: 10px;

}

.Vp-5 {
    padding: 4vh;
}

.bg_3781d4 {
    background: #3781d4;
}

.single-promo-hover {
    transition: all .2s ease-out;
    will-change: transform;
}

.fb {
    font-family: FuturaStd-Book;
    font-size: calc(1vw + 1vh);
    line-height: calc(1vw + 1vh);
    color: white;
}

.fbNum {
    font-family: FuturaStd-Heavy;
    font-size: calc(1.6vw + 1.6vh);
    line-height: calc(1vw + 1vh);
    color: white;
    font-weight: 900;
}

.promo-center {
    text-align: center;
}

.cactive {
    background: #ff9000 !important;
}

.cgradient {
    padding: 50px;
    background: linear-gradient(to top, #cccccc47, #cccccc21 50%, #ff0000 5%, #ff0000 75%);
}

.mtb-100 {
    margin: 100px 0px;
}

.cmset {
    padding: 36px 20px;
}

.selectborder {
    border: none;
}

.selectborder:focus {
    border: none;
}

.selectborder:hover {
    border: none;
}

.selectborder:active {
    border: none;
}
.breatcome_area:after{
   background-color: #ffdead00;    
}    
 .widget_n {
    border-top: 1px solid #ededed;
    border-bottom: 1px solid #ededed;
    border-left: 1px solid #ededed;
    border-right: 1px solid #ededed;
    margin-bottom: 25px;
    padding: 5px 15px 15px 15px;
    background-color: #f2f2f2;
}   
.bggreen{
    background-color: green;
}
.bgyellow{
    background-color: #337ab7;
}
.card{
	width: 100% !important;
     margin: 20px 0px !important;
}
.mb-40{
    margin-bottom:40px;
}
</style>




<!-- edution BREADCRUMB AREA -->

	<div class="breatcome_area">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="breatcome_title">
					<div class="breatcome_title_inner">
					<h2>	Privacy Policy </h2>
                    
					
					</div>
				</div>
			</div>
		</div>
	</div>
	
	


<div class="admision_area about_page " id="admission">
    <div class="container" style="max-width:1350px;">
        
        
	        <div class="content">
	            <div class="container-fluid">
	           
				
<div class="row">
<div class="col-md-12">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.




</div>
</div>
					
					
                </div>
	        </div>
           
        
        
   
    </div>
</div>
<script>
$('select').on('change', function() {
    //alert( this.value );
    window.location.href = this.value;
});
</script>
<!-- Circle Percentage-chart -->
<script src="<?=base_url()?>assets/dashboard/js/jquery.easypiechart.min.js"></script>
<!--  Charts Plugin -->
<script src="<?=base_url()?>assets/dashboard/js/chartist.min.js"></script>
<!-- Wizard Plugin    -->
<script src="<?=base_url()?>assets/dashboard/js/jquery.bootstrap.wizard.min.js"></script>
<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="<?=base_url()?>assets/dashboard/js/paper-dashboard.js"></script>
<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="<?=base_url()?>assets/dashboard/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
			demo.initOverviewDashboard();
			demo.initCirclePercentage();

    	});
	</script>
<?php include "footer.php";?>
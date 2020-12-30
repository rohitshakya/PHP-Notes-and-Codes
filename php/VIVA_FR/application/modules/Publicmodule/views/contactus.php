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

.breatcome_area:after {
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

.bggreen {
    background-color: green;
}

.bgyellow {
    background-color: #337ab7;
}

.card {
    width: 100% !important;
    margin: 20px 0px !important;
}

.mb-40 {
    margin-bottom: 40px;
}

.mt-30 {
    margin-top: 30px;
}

@media only screen and (max-width: 767px) {
    .mt100-b50 {
        margin: 0px 0px 0px 0px;
    }
}

@media only screen and (min-width: 768px) {
    .mt100-b50 {
        margin: 75px 0px 25px 0px;
    }
}
</style>





<?php /* 
	<div class="breatcome_area">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="breatcome_title">
					<div class="breatcome_title_inner">
						<h2>Contact us</h2>
                    
					
					</div>
				</div>
			</div>
		</div>
	</div>
*/ ?>



<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">
        <div class="row padding-top">
            <div class="col-md-12">
                <div class="section_title_style2" style="text-align: left;">
                    <div class="breatcome2_content">
                        <ul>
                            <li>
                                <a href="https://volt.development.vivadevops.com/">
                                    <img class="homebtn" src="https://volt.development.vivadevops.com/assets/publicassets/assets/images/home.png" alt="viva-volt">
                                </a>
                                <em class="fa fa-angle-right"></em>
                                Contact us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-30">
            <div class="col-md-5">
                <div class="fs18">
                    <p><img class="logo_vivavolt_footer"
                            src="https://volt.development.vivadevops.com/assets/publicassets/assets/images/logo2.png"
                            alt="insert image"></p>
                       <b>Viva Online learning Technologies <br />
                        4737/23, Ansari Road,Daryaganj<br> New Delhi 110002<br />
                        Tel: 011 422 422 00 <br />
                        Fax: 011 422 422 40 <br />
                        E-mail: <a href="mailto:info@vivavolt.in">info@vivavolt.in</a><br />
                    </b>
                </div>
                <br /><br />
            </div>

            <div class="col-md-7">
                <form action="#" method="post">
                    <select class="form-control" name="type">
                        <option value="Normal">Noraml</option>
                        <option value="Book For Demo">Book For Demo</option>
                    </select> <br />

                    <input class="form-control" name="name" placeholder="Name..." /><br />
                    <input class="form-control" name="phone" placeholder="Phone..." /><br />
                    <input class="form-control" name="email" placeholder="E-mail..." /><br />
                    <input class="form-control" name="phone" placeholder="Address" /><br />
                    <textarea class="form-control" name="text" placeholder="How can we help you?"
                        style="height:100px;"></textarea><br />
                    <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
                </form>
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
$(document).ready(function() {
    demo.initOverviewDashboard();
    demo.initCirclePercentage();

});
</script>
<?php include "footer.php";?>
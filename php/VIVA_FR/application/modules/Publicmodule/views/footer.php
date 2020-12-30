<div class="footer-middle" id="footer">
    <div class="container footer_container">
        <div class="row">

            <div class="col-sm-4 col-md-4 ">
                <div class="footer-logo">
                    <a class="" href="<?=base_url()?>" title="Education">
                        <img class="logo_vivavolt_footer"
                            src="<?=base_url()?>assets/publicassets/assets/images/logo2.png" alt="insert image">
                    </a>
                    <p class="about-us-footer">Viva Online Learning Technologies is an innovative platform for
                        curricular learning. With video and interactive course modules delivered through web, it turns
                        learning into a fun-filled and engaging experience.</p>
                </div>
            </div>

            <div class="col-sm-8 col-md-8 ">
                <div class=" col-md-4 col-sm-4 last">
                    <div class="widget widget_get_quote">
                        <h2 class="widget-title">Important Links</h2>
                        <div class="footer-address">
                            <div class="menu-quick-link-container">

                                <ul id="menu-quick-contact" class="menu">
                                    <li><a href="<?=base_url()?>about-us">About Us </a></li>
                                    <li><a href="<?=base_url()?>contact-us">Contact Us</a></li>
                                    <li><a href="<?=base_url()?>privacy-policy">Privacy Policy</a></li>
                                    <li><a href="<?=base_url()?>terms-of-service">Terms of Service</a></li>
                                    <li><a href="<?=base_url()?>refund-policy">Refund Policy</a></li>

                                    <?php /*
<li><?php
if($this->getLogin && $this->getLogin->vc_class>0){
$accClassis = $this->getModel->singledata('mastar_class', ['class_id' => $this->getLogin->vc_class]);
//echo anchor('classess','Classes');
echo anchor('subjects/'.str_replace(' ','', strtolower(preg_replace("([0-9]+)", "", $accClassis->class_name))).'-'.$accClassis->class_id,'Subjects');
}
else{
//echo anchor('classess','Classes');
echo anchor('classess','Subjects',['class'=>'free-log', 'data-toggle'=>'modal', 'data-target'=>'#modalLRForm']);
}
?></li>
<li><a href="#">Start Learning</a></li>
 */?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-4 col-md-4 ">
                    <div class="widget widget_nav_menu">
                        <h2 class="widget-title">Our Network</h2>
                        <div class="menu-quick-link-container">
                            <script>
                            $(document).ready(function() {
                                $('.counter').each(function() {
                                    $(this).prop('Counter', 0).animate({
                                        Counter: $(this).text()
                                    }, {
                                        duration: 4000,
                                        easing: 'swing',
                                        step: function(now) {
                                            $(this).text(Math.ceil(now));
                                        }
                                    });
                                });

                            });
                            </script>

                            <?php
$UsersNo = $this->db->query("select * from vt_useraccount");
$SchoolsNo = $this->db->query("select * from vt_school")->num_rows();
$ActivitiesNo = $this->db->query("select DISTINCT type from list")->num_rows();
?>
                            <div class="counter-box">
                                <div class="row">
                                    <div class="four col-md-4 col-xs-4 col-sm-4 tx-left">
                                        <div class=""> <em class="fa fa-group"></em> <span
                                                class="counter"><?php echo $UsersNo->num_rows(); ?></span>
                                            <p>Users </p>
                                        </div>
                                    </div>
                                    <div class="four col-md-4 col-xs-4 col-sm-4 tx-left">
                                        <div class=""> <em class="fa fa-university"></em> <span
                                                class="counter"><?php echo $SchoolsNo; ?></span>
                                            <p>Schools </p>
                                        </div>
                                    </div>
                                    <div class="four col-md-4 col-xs-4 col-sm-4 tx-left">
                                        <div class=""> <em class="fa fa-tasks"></em> <span
                                                class="counter"><?php echo $ActivitiesNo; ?></span>
                                            <p>Activities </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php /*
<div class="col-sm-6 col-md-3 ">
<div class="widget widget_nav_menu">
<h2 class="widget-title">Download Our Apps</h2>
<div class="menu-quick-link-container opening-hours">
<ul id="menu-opening-our" class="menu">
<li><a href=""><img style="width:160px;" src="<?=base_url()?>assets/publicassets/assets/images/google-play.png"></a>
</li>
<li><a href=""><img style="width:160px;"
src="<?=base_url()?>assets/publicassets/assets/images/ios-store.png"></a></li>
</ul>
</div>
</div>
</div>
 */?>



    <div class="col-sm-4 col-md-4 ">
        <div class="widget widget_nav_menu v_ml50">
            <h2 class="widget-title">Connect with us</h2>
            <div class="menu-quick-link-container opening-hours">
                <ul id="menu-opening-our" class="menu">
                    <li class="mwf"><em class="fa fa-instagram" aria-hidden="true"></em> <a
                            href="https://www.instagram.com/viva.volt/" target="_blank">Instagram</a></li>
                    <li class="mwf"><em class="fa fa-facebook-square" aria-hidden="true"></em> <a
                            href="https://www.facebook.com/VOLT.VIVA" target="_blank">Facebook </a></li>
                    <li class="mwf"><em class="fa fa-twitter-square" aria-hidden="true"></em><a
                            href="https://twitter.com/VIVA_VOLT" target="_blank"> Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>



<!-- END FOOTER TOP AREA -->

<!-- FOOTER BOTTOM AREA -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="copy-right-text">
                    <!-- FOOTER COPYRIGHT TEXT -->
                    <p>© 2017-20 VIVA ONLINE LEARNING TECHNOLOGIES | VOLT</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER BOTTOM AREA -->
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!--Content-->
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2 class="mh2_mob">Have an account?</h2>
            <label id="label-register" class="mauto" for="log-reg-show">Sign In</label>
            <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
        </div>

        <div class="register-info-box">
            <img src="<?=base_url()?>assets/publicassets/assets/images/img-01.png" alt="IMG">

<?php /*
<h2 class="mh2_mob">Create a free account</h2>
<label id="label-login" class="mauto" for="log-login-show">Sign Up</label>
<input type="radio" name="active-log-panel" id="log-login-show">
 */?>
        </div>

        <div class="white-panel">
            <div class="login-show sign_center">
                <h2 class="mh2_mob m10_l mb30">Sign In</h2>
                <?=form_open('#', "id='publicloginform' autocomplete='off'");?>
                <div class="row">
                    <div class="col-md-12">
                        <?php /*<label>Email ID</label>*/?>
                        <?=form_input(['type' => 'text', 'name' => 'accountid', 'id' => 'Userid', 'placeholder' => 'User id'])?>
                    </div>
                    <div class="col-md-12">
                        <?php /*<label>Password</label>*/?>
                        <?=form_password(['name' => 'accountpassword', 'placeholder' => 'Password'])?>
                    </div>
                    <div class="col-md-12">
                        <?=form_submit('login', 'Sign In');?>
                        <a style="float:right;" href="<?=base_url()?>forgot-password">Forgot password?</a>
                    </div>
                    <div class="col-md-12 alert" id="logError"></div>

                </div>
                <?=form_close();?>
            </div>
            <div class="register-show trshow">
                <h2 class="mh2_mob mb30">Sign Up</h2>
                <?=form_open('#', "id='publicregiserform' autocomplete='off'");?>
                <div class="row">
                    <div class="col-md-12" style="padding:0">
                        <div class="col-md-6">
                            <?php /*<label>Full Name</label>*/?>
                            <?=form_input(['type' => 'text', 'name' => 'fullname', 'placeholder' => 'Your full name'])?>
                        </div>
                        <div class="col-md-6">
                            <?php /*<label>Full Name</label>*/?>
                            <?=form_input(['type' => 'text', 'name' => 'lastname', 'placeholder' => 'Last name'])?>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:0">
                        <div class="col-md-6">
                            <?/*<label>Email ID</label>*/ ?>
                            <?=form_input(['type' => 'text', 'name' => 'emailid', 'placeholder' => 'Your email id'])?>
                        </div>
                        <div class="col-md-6">
                            <?php /*<label>Contact Number</label>*/?>
                            <?=form_input(['type' => 'text', 'name' => 'contactnumber', 'placeholder' => 'Your mobile number'])?>
                        </div>

                    </div>

                    <div class="col-md-12" style="padding:0">
                        <div class="col-md-6">
                            <?php /* <label>New Password</label>    */?>
                            <?=form_password(['name' => 'newpassword', 'placeholder' => 'Create password'])?>
                        </div>
                        <div class="col-md-6">
                            <?php /* <label>Confirm Password</label>*/?>
                            <?=form_password(['name' => 'reusepassword', 'placeholder' => 'Confirm password'])?>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding:0">
                        <div class="col-md-6">
                            <?php /* <label>Select Your Class</label>*/?>
                            <?php
//echo form_dropdown('classlist', $classList, '');
echo form_dropdown('classlist', $classList, '', ['class' => 'form-control', 'id' => 'classlist']);

?>
                        </div>

                        <div class="col-md-6">
                            <?php /*<label>Select Subject</label>*/?>
                            <select name="subjectlist" id="getSubject" class="form-control">
                                <option value="">Select Subject</option>
                            </select>

                        </div>


 <?php /*
<div class="col-md-6">
<label>Select Subject</label>
<?php
echo form_dropdown('subjectlist', $subjectList, '');
?>
</div>
 */?>
 </div>

                <div class="col-md-12" style="padding:0">
                    <div class="col-md-6">
                        <!-- <label>State</label> -->
                        <select id="stateIs" name="state" title="Select State" required>
                            <option value=''>Select State</option>
                            <?php
							$statelist = $this->db->query("select * from states order by name ASC");
							foreach ($statelist->result() as $sdata) {
								?>
                            <option value="<?php echo $sdata->id; ?>">
                                <?php echo $sdata->name; ?>
                            </option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <?php /*<label>City</label>*/?>
                        <select id="getcities" name="city" title="Select City" required>
                            <option value="">Select City</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php /*<label>School</label>*/?>
                    <select id="getschool" name="school" title="Select school name" required>
                        <option value="">Select School</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <?/*<label>School</label>*/ ?>
                    <select name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="col-md-12 pull-left">
                    <?=form_submit('register', 'Sign Up');?>
                </div>
                <div class="col-md-12 alert" id="regError"></div>
            </div>
            <?=form_close();?>
        </div>
    </div>
</div>

<!--/.Content-->

</div>
<!--Modal: Login / Register Form-->
<!-- bootstrap js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/bootstrap.min.js"></script>
<!-- directional js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.directional-hover.min.js">
</script>
<!-- meanmenu js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.meanmenu.js"></script>
<!-- scrollUp js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.scrollUp.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.counterup.min.js"></script>
<!-- nivo-slider js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.nivo.slider.pack.js"></script>
<!-- countdown js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.countdown.min.js"></script>
<!-- slick js -->
<!-- <script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/slick.min.js"></script> -->
<!-- jquery Nav js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery.nav.js"></script>
<!-- wow js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/wow.js"></script>
<!-- scrolltofixed js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/jquery-scrolltofixed-min.js">
</script>
<!-- venobox js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>venobox/venobox.min.js"></script>
<!-- Themera js -->
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/all-main.js"></script>
<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/all-customemethod.js"></script>

<script>
jQuery(document).ready(function() {
    function disableSelection(e) {
        if (typeof e.onselectstart != "undefined") e.onselectstart = function() {
            return false
        };
        else if (typeof e.style.MozUserSelect != "undefined") e.style.MozUserSelect = "none";
        else e.onmousedown = function() {
            return false
        };
        e.style.cursor = "default"
    }
    window.onload = function() {
        disableSelection(document.body)
    };

    window.addEventListener("keydown", function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 70 || e.which ==
                73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
            e.preventDefault()
        }
    });
    document.keypress = function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 70 || e.which == 67 || e.which ==
                73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {}
        return false
    };

    document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == 123 || e.keyCode == 18) {
            return false
        }
    };

    document.oncontextmenu = function(e) {
        var t = e || window.event;
        var n = t.target || t.srcElement;
        if (n.nodeName != "A") return false
    };
    document.ondragstart = function() {
        return false
    };
});
</script>

<script>
$("#classlist").change(function(e) {
    //alert();
    e.preventDefault();
    $.ajax({
        url: "<?php echo base_url(); ?>master/question/getsubjectselect",
        type: 'post',
        data: {
            'cid': $(this).val(),
            'sid': ''
        },
        beforeSend: function() {
            $("#getSubject").html("");
        },
        success: function(data) {
            $("#getSubject").html(data);
        }
    });
});
</script>

<script type="text/javascript">
$("#Userid").keypress(function(event) {
    if (event.which == 32) {
        console.log('Space Detected');
        return false;
    } else {
        var character = String.fromCharCode(event.keyCode);
        return isValid(character);
    }
});

function isValid(str) {
    return !/[~`!@#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
}
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});

$('.login-reg-panel input[type="radio"]').on('change', function() {
    if ($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut();
        $('.login-info-box').fadeIn();

        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');

    } else if ($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();

        $('.white-panel').removeClass('right-log');

        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
</script>

<script>
$("#stateIs").change(function(e) {
    e.preventDefault();
    $.ajax({
        url: "<?=base_url('master/school/getcities')?>",
        type: 'post',
        data: {
            'cid': $(this).val(),
            'sid': ''
        },
        beforeSend: function() {
            $("#getcities").html("");
            $("#getschool").html("");
        },
        success: function(data) {
            $("#getcities").html(data);
            $(".selectpicker").selectpicker('refresh');
        }
    });
});

$("#getcities").change(function(e) {
    e.preventDefault();
    $.ajax({
        url: "<?=base_url('master/school/getschool')?>",
        type: 'post',
        data: {
            'cid': $(this).val(),
            'sid': 'n0'
        },
        beforeSend: function() {
            $("#getschool").html("");
        },
        success: function(data) {
            $("#getschool").html(data);
            $(".selectpicker").selectpicker('refresh');
        }
    });
});
</script>

</body>
</html>
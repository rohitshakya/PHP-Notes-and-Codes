<?php include "header.php";?>
<?php echo link_tag('assets/publicassets/assets/css/modulspage.css');?>
<?php echo link_tag('assets/publicassets/course.css');?>
<?php echo link_tag('assets/publicassets/circle.css');?>
<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">

        <!-- breadcrumbs -->
        <div class="row padding-top">
            <div class="col-md-12">
                <div class="section_title_style2" style="text-align: left;">
                    <div class="breatcome2_content">
                        <ul>
                            <?php if($this->getLogin){?>
                            <li>
                                <a href="<?=base_url()?>">
                                <img class="homebtn" src="<?=base_url()?>assets/publicassets/assets/images/home.png" class="img-fluid" alt="">
                                </a>
                                <em class="fa fa-angle-right"></em>
                                <?php if($vmonths==1){ ?>
                                <a href="<?=base_url('theme-months/'.$this->uri->segment(2))?>">
                                    <?php echo $sdata->sub_name; ?>
                                </a>
                                <em class="fa fa-angle-right"></em>
                                Month <?php echo array_search($month, $this->session->userdata('finalTermsSession'));?>
                                <?php }else{ ?>
                                <?php echo $sdata->sub_name; ?>
                                <?php } ?>
                            </li>
                            <?php } else{?>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
        <div class="row">
            <div class="col-md-3">
                <!-- User Class details  -->
                <div class="main-admission">
                    <a href="javascript:void();">
                        <div class="promo-center">
                            <?php  $cid = $this->session->userdata('voltAccountClass');
                        $classData = $this->getModel->singledata('mastar_class', ['class_id' => $cid]);
                        if(!empty($classData->c_img)){
                        	$CLassImgName = ($classData->c_img)?$classData->c_img:'';
                        	$classImg = base_url('master/uploads/classimage/'.$CLassImgName);
                        }else{
                        	$classImg = base_url('master/uploads/classimage/dummyclass.png');
                        }										
                        ?>
                            <img class="w100" src="<?=$classImg;?>" alt="class" />
                        </div>
                    </a>
                </div>
                <!-- -->
                <?php if($this->getLogin){?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <h4 class="progrssgraphs">Show Progress Graphs</h4>
                            <div class="switchbar">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 hideme">
                    <div class="col-md-12 col-sx-12 col-sm-12 m-10">
                        <div class="c100 p25 actsetn">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>Activities attempted</span>
                    </div>
                    <div class="col-md-6 col-sx-6 col-sm-6 m-10">
                        <div class="c100 p25 green actsetn">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>Growth rate</span>
                    </div>
                    <div class="col-md-6 col-sx-6 col-sm-6 m-10">
                        <div class="c100 p25 orange actsetn">
                            <span>25%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>Right answers</span>
                    </div>
                </div>
                <?php /*
               <div class="bgPerformance mt-5">
               <div class="">
               <h5 class="titlePerformance">Student Performance</h5>
                          <div class="progress pActivities">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                              40%
                     </div>
                  </div>
               </div>
               <div class="">
                  <h5 class="titlePerformance">Program Performance</h5>
                    <div class="progress pActivities">
                            <div class="progress-bar progress-bar-striped active " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                              70%
                        </div>
                    </div>
                </div>
               <div class="">
                   <h5 class="titlePerformance">School Performance</h5>
                     <div class="progress pActivities">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                              90%
                            </div>
                          </div>
                    </div>
               </div>
            */?>
                <?php } else{?>
                <?php } ?>
            </div>





            <div class="col-md-6 main-admission">
                <?php if($vmonths==1){ ?>
                <div class="col-md-12 main-admission cmset">
                    <?php /*   
               <h2> Course Month -
                  <select name="cars" class="selectborder" id="cars">
                   <?php if ($listofmonth) {
                        foreach ($listofmonth as $getMOnth) {
                        $lock = ($getMOnth['month'] > date('m')) ? 'lock' : 'open';?>
                    <?php if (date("F", mktime(0, 0, 0, $this->uri->segment(4), 10)) == date("F", mktime(0, 0, 0, $getMOnth['month'], 10))) {?>
                    <option
                        value="<?=($lock == 'lock') ? '#' : base_url('theme/' . $this->uri->segment('2') . '/' . $getMOnth['month'])?>"
                        selected> <?=date("F", mktime(0, 0, 0, $getMOnth['month'], 10))?></option>
                    <?php } else {?>
                    <option
                        value="<?=($lock == 'lock') ? '#' : base_url('theme/'  . $this->uri->segment('2') . '/' . $getMOnth['month'])?>">
                        <?=date("F", mktime(0, 0, 0, $getMOnth['month'], 10))?>
                    </option>
                    <?php }?>
                    <?php }}?>
                    </select>
                    </h2>
                    */ ?>

                    <?php if ($_SESSION['finalTermsSession']) { ?>
                    <h2> Course Month -
                        <select name="cars" class="selectborder" id="cars">
                            <?php foreach ($_SESSION['finalTermsSession'] as   $key => $getMOnth) {
                            $my = explode('-',$getMOnth);
                            $Y = $my[0];
                            $m = $my[1];
                            $cmy = date('Y-n');
                            $dof = $getMOnth;
                            $sa = $schoolData->mnthstatus;
                            $lock = (strtotime($cmy) < strtotime($dof)) ? 'lock' : 'open';
                     ?>
                            <?php if($getMOnth &&  $m>0) { ?>
                            <?php if ($this->uri->segment(3) == base64_encode($getMOnth)){?>
                            <option
                                value="<?=($lock == 'lock' && $sa!='enabled') ? 'javascript:void();' : base_url('theme/'  . $this->uri->segment('2') . '/' . base64_encode($getMOnth))?>"
                                selected>Month <?php  echo $key; ?></option>
                            <?php } else {?>
                            <option
                                value="<?=($lock == 'lock' && $sa!='enabled') ? 'javascript:void();' : base_url('theme/'  . $this->uri->segment('2') . '/' . base64_encode($getMOnth))?>">
                                Month <?php  echo $key; ?></option>
                            <?php }?>
                            <?php }?>
                            <?php }?>
                        </select>
                    </h2>
                    <?php }?>

                </div>
                <?php }else{ ?>
                <?php }?>
                <?php  if ($listview) {
              $i=1; foreach ($listview as $getModule) {
              ?>

                <?php if($vdata=='moduals'){ ?>
                <div class="col-lg-4 col-md-6">
                    <?php if($getModule['url']){ ?>
                    <a href="<?php echo $getModule['url']; ?>">
                        <?php }else{ if($getModule['series']==0){
                          $url = base_url('theme-category/'.base64_encode("segment34544!!".$getModule['module']).'/'. $this->uri->segment(3)); 
                        }else{ 
                          $url = base_url('theme-subjects/' .$getModule['slug'].'/'. $this->uri->segment(3));   
                        }  ?>
                        <a href="<?=$url;?>">
                            <?php } ?>
                            <div class="single-category-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>master/uploads/modulebanner/icon.png">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <p class="modtitle"><?=$getModule['m_name']?></p>
                                </div>
                            </div>
                        </a>
                </div>

               

                <?php }else if($vdata=='series'){ ?>
                <div class="col-lg-4 col-md-6">
                    <a
                        href="<?=base_url('theme-chapter/' .base64_encode($getModule['series_id']).'/'. $this->uri->segment(3));?>">
                        <div class="single-category-item  bgdata<?php echo $i; ?>">
                            <div class="category-image">
                                <?php if(!empty($getModule['series_img'])){ ?>
                                <img
                                    src="<?=base_url()?>master/uploads/themebanner/<?php echo $getModule['series_img'];?>">
                                <?php }else{ ?>
                                <img src="<?=base_url()?>master/uploads/themebanner/icon.png">
                                <?php } ?>
                            </div>
                            <div class="category-title margin-bottom-10">
                                <p class="modtitle"><?=$getModule['series_name']?></p>
                            </div>
                        </div>
                    </a>
                </div>




                <?php }else if($vdata=='chapter'){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="course-item-main">
                        <div class="course-item course-item-style cuadro_intro_hover">
                            <a
                                href="<?=base_url('theme-topic-category/' .base64_encode($getModule['id']).'/'. $this->uri->segment(3));?>">
                                <div class="course-item-image">
                                    <?php if(!empty($getModule['chap_image'])){ ?>
                                    <img src="<?=base_url()?>master/uploads/chapterbanner/<?php echo $getModule['chap_image'];?>"
                                        alt=" Image " class="img-responsive">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>master/uploads/chapterbanner/icon.png" alt=" Image "
                                        class="img-responsive">
                                    <?php } ?>

                                </div>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="course-item-content caption-text">
                                        <h3 class="text-primary"><?=$getModule['chapT_name'];?></h3>
                                        <p class="pstyle"><?=$getModule['chap_content'];?></p>

                                    </div>
                                </div>
                                <div class="ellipsis"></div>
                            </a>
                        </div>
                        <div class="progressreport">
                            <div class="themeprogress">
                                <div class="themeprogress-bar themeprogress-bar-info" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    40%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                   <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                <?php }?>
                    
                    
                    
                    



                <?php $i++;} }else{    ?>
               <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                <?php } ?>
                    
                     
                  
              <?php  if ($bloglist) {
              $i=1; foreach ($bloglist as $getModule) {
              ?>   
                 <div class="col-lg-4 col-md-6">
                  <a href="<?php echo $getModule['m_url']; ?>" target="_blank">
                        <div class="single-category-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>master/uploads/modulebanner/icon.png">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <p class="modtitle"><?=$getModule['m_name']?></p>
                                </div>
                            </div>
                        </a>
                    </div>    
                    
               <?php $i++;} }else{    ?>
         
                <?php } ?>    
                
                    
            </div>









            <div class="col-lg-3 col-md-3 main-admission row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page_sidebar">
                        <div class="side_title"><span>News Reel</span></div>
                        <div class="related_items mb-4">
                            <ul class="vidList" id="">
                                <?php                 
                           $NewsReel = $this->db->query('SELECT * FROM `vt_newsreel` where status="active" order by index_num ASC')->result(); 
                           foreach($NewsReel as $nData){
                           ?>
                              <li class="textb">
                                    <div class="col-md-12 col-sm-12 col-xs-12 mb-10">
                                        <p class="text-white"><?=$nData->news_desc?></p>
                                    </div>
                                    <?php if($nData->filename) { ?>
                                    <?php $extension = pathinfo($nData->filename, PATHINFO_EXTENSION); ?>
                                    <?php if($extension=='mp4'){ ?>
                                    <div class="col-md-4 mbt-10">
                                        <a class="actaction"><i class="fa fa-video-camera mr-1"></i></a>
                                    </div>
                                    <?php }else{  ?>
                                    <div class="col-md-12 mbt-10">
                                        <a href="<?= ($nData->link)?$nData->link:"javascript:void(0)"?>" target="_blank"><img style="border-radius: 10%;" src="../../master/uploads/newsreel/<?=$nData->filename?>" class=" mr-1"></a>
                                    </div>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <?php  } ?>
                                   
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
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


$(document).ready(function() {
    $(".switch input").on("change", function(e) {
        const isOn = e.currentTarget.checked;

        if (isOn) {
            $(".hideme").show();

        } else {
            $(".hideme").hide();
        }
    });
});
</script>
<?php include "footer.php";?>
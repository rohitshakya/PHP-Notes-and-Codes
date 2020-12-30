<?php
$supported_image = array('gif', 'jpg', 'jpeg', 'png');
$base_url = base_url();
$http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$media_url = $base_url . "/master/";

if (!empty($qns_data_mch)) {
    $Cnt_Mch = count($qns_data_mch[0]['left_col']);
} else {
    $Cnt_Mch = 0;
}

$CI = &get_instance();
$CI->load->helper('custom');

?>
<script>
var base_url = '<?=base_url();?>';
var setId = '<?=$set_Ids;?>';
var starttime = '<?=date('Y-m-d H:i:s');?>';
var cnt_tnf = <?php echo (count($qns_data_tnf)); ?>;
var cnt_mcq = <?php echo (count($qns_data_mcq)); ?>;
var cnt_mch = <?php echo ($Cnt_Mch); ?>;
var cnt_fib = <?php echo (count($qns_data_fib)); ?>;
</script>
<style>
.mt100-b50 {
    margin: 75px 0px 50px 0px;
}
.choose-image img{
    width: 100%;
    max-width: 100%;
    border-radius: 20px 20px 0px 0px;
}
.boxes-center{
    padding: 50px 20px;       
}
.skipbtn{
     background-color: #ea5744;   
}
.otpfonts{
font-size: 20px;
font-weight: 800;
color: #0e5a5a;    
}
    
       
#ebook_iframe{
	background-color: #FFFFFF;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 9999999;
}
#close_iframe{
	background-color: #fff;
    position: absolute;
    z-index: 9999999;
    right: 2%;
    top: 2%;
    font-size: 48px;
    padding: 5px;
    border-radius: 9px;
    color: #FF9800;
	cursor:pointer;
} 
    
    
</style>
<script>
var base_url_practice = "<?=base_url('playactivity')?>";
</script>
<!-- BREADCRUMB AREA -->

<div id="ebook_iframe" style="display:none">
	<i class="fa fa-times" id="close_iframe"></i>
	<iframe width="100%" height="100%" id="ebk" frameborder="0" allowfullscreen></iframe>
</div>
<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">
        <div class="row padding-top">
			<div class="col-md-12">
                <div class="section_title_style2" style="text-align: left; padding-top:10px;">
				   <div class="breatcome2_content">
				     <ul>
                         <li>
                             <a href="<?=base_url()?>"><img class="homebtn" src="<?=base_url()?>assets/publicassets/assets/images/home.png" class="img-fluid" alt=""></a>
                             <i class="fa fa-angle-right"></i> 
                             <a href="<?=base_url()?>theme-months/<?php $class = $this->db->query("select slug from mastar_subject where sub_id =".$this->session->userdata('voltAccountSubject'));$cls = $class->row();echo $cls->slug; ?>">
                               <?php $class = $this->db->query("select sub_name from mastar_subject where sub_id =".$this->session->userdata('voltAccountSubject'));$cls = $class->row();echo $cls->sub_name; ?>  
                             </a> 
                             <i class="fa fa-angle-right"></i>
                             <a href="<?=base_url()?>theme/<?php $class = $this->db->query("select slug from mastar_subject where sub_id =".$this->session->userdata('voltAccountSubject'));$cls = $class->row();echo $cls->slug; ?>/<?php  echo $month;?>">   
                             Month <?php echo array_search($month, $this->session->userdata('finalTermsSession'));?>
                             </a>
                             <?php if(@$module){ ?>
                             <i class="fa fa-angle-right"></i>
                             <a href="<?=base_url()?>theme-subjects/<?php echo $module->slug; ?>/<?php  echo $month;?>">   
                             <?php echo $module->m_name; ?>
                             </a>     
                             <?php } ?>
                             <?php if($series){ ?>
                             <i class="fa fa-angle-right"></i>
                             <a href="<?=base_url()?>theme-category/<?php echo base64_encode($series->slug); ?>/<?php  echo $month;?>">   
                             <?php echo $series->series_name; ?>
                             </a>     
                             <?php } ?>
                             <i class="fa fa-angle-right"></i>
                             <a href="<?=base_url()?>theme-topic-category/<?php echo base64_encode($chapter->id);?>/<?php  echo $month;?>"><?=$chapter->chapT_name?></a>
                              <i class="fa fa-angle-right"></i>
                                <?=$catactivity->cat_name?>
                            </li>
                      	 </ul>
				    </div>
				</div>
    		</div>
		</div>
        
        
        
        
        
        <div class="row">
            <!--Start Your Coad-->
            <div>
                <div>
                    <?php if (count($qns_data_mcq) > 0) {?>
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="mcq">
                        <div class="mcqbg">
                        <?php
						$qns_mcq_data = '';
						$mcq_ans = '';
						$mcq_sh = 1;

						foreach ($qns_data_mcq as $qmcqdata) {

							$qns_mcq_title = strip_tags(removeSpace(trim($qmcqdata['question'])), '<ul><ol><span><strong><em><br><i><b><u>');
							$qns_mcq_list = array_filter(json_decode($qmcqdata['mcq']));
							$qns_mcqcrct_ans = $qns_mcq_list[$qmcqdata['answer']];
							?>
							<div class="activity-section <?php if ($mcq_sh == '1') {
								echo 'first-div';
							} else {
								echo 'next-div" style="display:none;';
							}?>">
                            
                            <?php if($qns_mcq_title){ ?>
                            <div class="act-qtion">
							<p><?php /*<?=$mcq_sh;?>.*/ ?> <?php echo $qns_mcq_title; ?></p>
							</div>    
                            <?php } ?>
							
                                
                                
                            
							
							<?php if ($qmcqdata['urlImage']) { ?>
                                <div class="choose-image">
				          <?php  echo $qmcqdata['urlImage']; ?>
                                     </div>
							<?php }?>
                           

                            <div class="boxes-center questionOptions shuffle-list-items1">
                                <?php
							#shuffle($qns_mcq_list);
									foreach ($qns_mcq_list as $key => $opt) {
										$mcqqnsId = 'mcq-' . $qmcqdata['id'] . '-' . $key;
										$ans = 'data-answer="' . $qns_mcqcrct_ans . '"';
										echo '<input type="radio" name="' . $qmcqdata['id'] . '" id="box-' . $mcqqnsId . '"/><label class="radio-button__control opt-style quesItem qClick col-md-4 otpfonts" ' . $ans . ' id="' . $mcqqnsId . '" for="box-' . $mcqqnsId . '" data-qid="' . $qmcqdata['id'] . '">' . $opt . '</label>';
									}
								?>
                            </div>
                            <div class="exctedbuttons next">
                                <!-- <a href="#" class="btn blue">Skip</a> -->
                                <input type="submit" class="btn green" value="Next" />
                            </div>
                            <?php if (count($qns_data_mcq) == $mcq_sh) {
										echo '<div class="exctedbuttons qClick viewscore">
																			<input type="submit" class="btn green" value="View Score" />
																		</div>';
									} else {?>
														<div class="exctedbuttons skip" id="skip-<?=$qmcqdata['id'];?>">
															<input type="submit" class="btn skipbtn" value="Skip" />
														</div>
								<?php }?>
							
                         </div> 
													<?php #$qmcqdata['solutions'];
									?>
													<!-- QN : <?=$mcq_sh;?> --> 
													<?php $mcq_sh++;
								}?>
                        </div>    
                    </div>
                    <?php }?>


                    <?php if (count($qns_data_tnf) > 0) {?>
                    <!-- ----------------------True and false--------------------- -->
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="tnf">
                         <div class="tnfbg">  
                        <?php
							$qns_tf_data = '';
							$ans = '';
							$sh = 1;
							foreach ($qns_data_tnf as $qtfdata) {
								if (@array_key_exists('t', @json_decode($qtfdata['myans'])) && trim(json_decode($qtfdata['myans'])->t) != '' && trim(json_decode($qtfdata['myans'])->f) != '') {
									if ($qtfdata['answer'] == 't') {
										$ans = trim(json_decode($qtfdata['myans'])->t);
									} elseif ($qtfdata['answer'] == 'f') {
										$ans = trim(json_decode($qtfdata['myans'])->f);
									}
									$qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
									$qns_tf_list = array(trim(json_decode($qtfdata['myans'])->t), trim(json_decode($qtfdata['myans'])->f));
									$qns_tf_answer = $ans;
								} else {
									if ($qtfdata['answer'] == 't') {
										$ans = "True";
									} elseif ($qtfdata['answer'] == 'f') {
										$ans = "False";
									}
									$qns_tf_title = strip_tags(removeSpace(trim($qtfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
									$qns_tf_list = array("True", "False");
									$qns_tf_answer = $ans;
								}
								?>
								<div class="activity-section <?php if ($sh == '1') {
									echo 'first-div';
								} else {
									echo 'next-div" style="display:none;';
								}?>">
                                                    
                                              
                                                 
                            <div class="act-qtion">
                                <h3 class="qnstitle"><?=$sh;?>. <?php echo $qns_tf_title; ?></h3>
                            </div>
                            <!-- <div class="act-qtion-img">
								<img src="http://vivagroupinfo.com/vivavolt/public/uploaded-images/images/viva_15178978747292.JPG">
							</div> -->
							
                            <div class="boxes questionOptions">
                                <?php
                                #shuffle($qns_tf_list);
                                foreach ($qns_tf_list as $tf_key => $opt) {
                                    $tfansId = 'tnf-' . $qtfdata['id'] . '-' . $tf_key;
                                    $ans = 'data-answer="' . $qns_tf_answer . '"';
                                    echo '<input type="radio" name="' . $qtfdata['id'] . '" id="box-' . $tfansId . '"/><label class="quesItem qtfClick col-md-6 tnfopt" ' . $ans . ' id="' . $tfansId . '" for="box-' . $tfansId . '"  data-qid="' . $qtfdata['id'] . '">' . $opt . '</label>';
                                }
                                ?>
                            </div>
                            <div class="excbuttons next">
                                <!-- <a href="#" class="btn blue">Skip</a> -->
                                <input type="submit" class="btn green" value="Next" />
                            </div>
                            <?php if (count($qns_data_tnf) == $sh) {
                                    echo '<div class="excbuttons qtfClick viewscore">
												<input type="submit" class="btn green" value="View Score" />
											  </div>';
                            } else {?>
                            <div class="excbuttons skip" id="skip-<?=$qtfdata['id'];?>">
                                <input type="submit" class="btn blue" value="Skip" />
                            </div>
                             <?php }?>
                              
                                    
                                    
                        </div>
                        <!-- QN : <?=$sh;?> -->
                        <?php $sh++;
                        }?>
                         </div>
                        </div>
                    <?php } ?>

                    <?php if (count($qns_data_fib) > 0) {?>
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="fib">
                          <div class="fibbg">
                        <?php
                        $qns_fib_data = '';
                        $fib_ans = '';
                        $fib_sh = 1;
                        foreach ($qns_data_fib as $fib_data) {
                        $fib_left_title = strip_tags(trim($fib_data['fib_qns'][0]), '<ul><ol><strong><em><br><i><b><u><img>');
                        $fib_right_title = strip_tags(trim($fib_data['fib_qns'][1]), '<ul><ol><strong><em><br><i><b><u><img>');
                        $fib_ans_list = array_filter(json_decode($fib_data['mcq']));
                        $fib_crct_ans = $fib_ans_list[$fib_data['answer']];
                        //print_r($fib_ans_list);
                        ?>

                        <div class="activity-section  <?php if ($fib_sh == '1') {
                        echo 'first-div';
                        } else {
                        echo 'next-div" style="display:none;';
                        }?>">
                            
                        
                                
                            
                          
                            <div class="act-qtion">
                             <h3 class=""><?php echo $fib_left_title; ?> <span class="fillblank"
                              id="div<?php echo $fib_data['id']; ?>" ondrop="drop(event)"
                                 ondragover="allowDrop(event)"></span><?php echo $fib_right_title; ?></h3>
                                <input type="hidden" id="ans<?php echo $fib_data['id']; ?>"
                                    value="<?php echo removeSpace(trim($fib_ans_list[$fib_data['answer']])); ?>">
                            </div>

                            <div class="boxes questionOptionsFib shuffle-list-items1">
                                <?php $i = 1;
                                #shuffle($fib_ans_list);
                                foreach ($fib_ans_list as $key => $fib_value) {
                                $fibqnsId = 'fib-' . $fib_data['id'] . '-' . $key;
                                ?>
                                <?php if (removeSpace(trim($fib_crct_ans)) == removeSpace(trim($fib_value))) {?>
                                <?php echo '<input type="radio" name="' . $fib_data['id'] . '" id="box-' . $fibqnsId . '"/>';
                                echo '<label class="quesItemFib fibClick" data-id="' . $fib_data['id'] . '" data-answer="' . removeSpace(trim($fib_value)) . '" id="' . $fibqnsId . '"for="box-' . $fibqnsId . '"  data-qid="' . $fib_data['id'] . '">' . removeSpace(trim($fib_value)) . '</label>'; ?>


                                <?php } else {?>
                                <?php echo '<input type="radio" name="' . $fib_data['id'] . '" id="box-' . $fibqnsId . '"/>';
                                echo '<label class="quesItemFib fibClick" data-id="' . $fib_data['id'] . '" data-text="' . removeSpace(trim($fib_value)) . '" id="' . $fibqnsId . '" for="box-' . $fibqnsId . '"  data-qid="' . $fib_data['id'] . '">' . removeSpace(trim($fib_value)) . '</label>'; ?>
                                </p>
                                <?php }
                                $i++;
                                }?>
                            </div>

                            <div class="excbuttons next">
                                <!-- <a href="#" class="btn blue">Skip</a> -->
                                <input type="submit" class="btn green" value="Next" />
                            </div>
                            <?php if (count($qns_data_fib) == $fib_sh) {
                                        echo '<div class="excbuttons fibClick viewscore">
												<input type="submit" class="btn green" value="View Score" />
											  </div>';
                            } else {?>
                            <div class="excbuttons skip" id="skip-<?=$fib_data['id'];?>">
                                <input type="submit" class="btn blue" value="Skip" />
                            </div>
                            <?php }?>
                           
                        

                        </div>
                        <!-- QN : <?=$fib_sh;?> -->
                        <?php $fib_sh++;
                            }?>
                         </div>
                    </div>
                    <?php }?>

                    <?php if (count($qns_data_mch) > 0) {
                    $mchQnsKey = ($this->input->get('mk')) ? $this->input->get('mk') : '0';
                    ?>
                    <!-- ----------------------Drag and drop (Matching)---------------------- -->
                    <div class="col-md-9 newactivityarea  bdr-rignt" id="mch">
                        <div class="activity-section MchBox">
                            <div class="act-qtion">
                             
                                <?php if($qns_data_mch[$mchQnsKey]['question']){ ?> 
                                <h3 class="mlmch10"><?php echo $qns_data_mch[$mchQnsKey]['question']; ?></h3>
                                <?php } ?>
                               
                            </div>
                            <div id="cardPile">
                                <div class="questionOptionsMch shuffle-list-items">
                                    <?php
                                    $Lcnt = 1;
                                    foreach ($qns_data_mch[$mchQnsKey]['left_col'] as $leftKey => $left_val) {
                                    $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
                                    ?>
                                    <p class="draggable quesItemMch" id="drag<?=$Lcnt;?>" data-id='<?=$leftKey;?>'>
                                    <?php if (in_array($l_ext, $supported_image)) {
                                        echo "<img src='" . $base_url . $left_val . "' />";
                                    } else {
                                        echo $left_val;
                                    }?>
                                    </p>
                                    <?php $Lcnt++;
                                    }?>
                                </div>
                                <div class="questionOptionsMch shuffle-list-items text-right">
                                    <?php
                                    $Rcnt = 1;
                                    foreach ($qns_data_mch[$mchQnsKey]['right_col'] as $rightKey => $right_val) {
                                    $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));
                                    ?>
                                    <p class="droppable quesItemMch mchClr" id="drop<?=$Rcnt;?>"
                                        data-aid='<?=$rightKey;?>'>
                                        <?php if (in_array($ext, $supported_image)) {
                                            echo "<img src='" . $base_url . $right_val . "' />";
                                        } else {
                                            echo $right_val;
                                        }?>
                                    </p>
                                    <?php $Rcnt++;
                                    }?>
                                </div>
                            </div>

                            <div style="clear:both;"></div>
                            <div class="excbuttons1" id="buttons">
                                <a href="javascript:void(0);" class="btn btn-success submit-ans" style="display: none;">View score</a>
                                <?php $mchpageurl = $qns_data_mch[0]['set_id'] . '/mch?c=' . $this->input->get('c');?>
                                <?php foreach ($qns_data_mch as $mchkey => $mchdata) {?>
                                <a href="<?=base_url('playactivity/' . $mchpageurl . '&mk=' . $mchkey);?>"
                                    class="btn <?=($mchkey==$this->input->get('mk'))?'btn-primary':'blue';?>">Excercise <?=$mchkey + 1;?></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
					
					<?php  if (@count(@$qns_data_vid) > 0) { ?>
						<!-- ----------------------Watch--------------------- -->
						<div class="col-md-9 newactivityarea  bdr-rignt" id="vid">
							<?php
							$pdf_url = $qns_data_vid[0]['url'];
							
							?>
                            <h2 class="vidtitle"><?=$chapter->chapT_name?></h2>
                            <div class="vidbg">
                            
							<video oncontextmenu="return false;" style="width:100%;" id="vdo" class="vidbradius" controls controlsList="nodownload">
                                <source class="video-player" src="<?=$pdf_url?>" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                            </div>
						</div>
					<?php } ?>
					
					
					
                    <?php if (count($qns_data_infographics) > 0) {
    ?>
                    <!-- ----------------------Infographics-------------------------------- -->
                    <div class="col-md-9 newactivityarea bdr-rignt" id="imgtext">
                        <?php
                            $qns_info_data = '';
                                $info_sh = 1;
                                foreach ($qns_data_infographics as $qinfodata) {
                                    $qns_info_title = html_entity_decode($qinfodata['questionHtml']);
                                    #$qns_info_title = strip_tags(removeSpace(trim(replace($qinfodata['question']))), '<ul><ol><li><p><strong><em><br><i><b><u><sup><sub><table><tbody><tr><td><p>');
                                    $qns_info_text = strip_tags(removeSpace(trim(replace($qinfodata['text']))), '<ul><ol><li><p><strong><em><br><i><b><u><sup><sub><table><tbody><tr><td><p>');
                                    ?>



                            <div class="activity-section <?php if ($info_sh == '1') {
                                    echo 'first-div';
                                } else {
                                    echo 'next-div" style="display:none;';
                                }?>">
                            <?php if ($qns_info_title) {?>
                            <div class="act-qtion">
                                <!--<?=$info_sh;?>.--> <?php echo $qns_info_title; ?>
                            </div>
                            <?php }?>
                            <?php if ($qinfodata['image']) {?>
                            <div class="act-qtion-img">
                                <img src="<?php echo $media_url . $qinfodata['image']; ?>" class="questionImg" />
                            </div>
                            <?php }?>
                            <div style="clear:both;"></div>
                            <?php $showAns = ($curr_type == 'parichay') ? 'style="display: none;"' : '';?>
                            <button data-id="<?=$info_sh;?>" <?=$showAns?> class="showAns show-ans-oraly">Show
                                Answers</button>
                            <div class="boxes" id="SolutionBox-<?=$info_sh;?>" style="display: none;">
                                <?php if ($qns_info_text) {?>
                                <?php echo $qns_info_text; ?>
                                <?php }?>
                            </div>
                            <div style="clear:both;"></div>

                            <div class="excbuttons TypeNxt1">
                                <input type="submit" class="btn green" value="Next" />
                            </div>
                        </div>
                        <?php $info_sh++;
                        }?>
                    <input type="hidden" name="infoNum" value="<?=count($qns_data_infographics);?>" />
                    </div>
                    <?php } ?>
                    <script>
                    $(document).ready(
                        function() {
                            $(".showAns").click(function() {
                                qnsshwid = $(this).data('id');
                                $("#SolutionBox-" + qnsshwid).show("slow");
                                //$("#showAns").hide();
                            });
                        });
                    </script>
                    <?php if (@count(@$qns_data_ebook) > 0) {?>
                    <!-- ----------------------ebook--------------------- -->
                     <div class="col-md-9 newactivityarea  bdr-rignt" id="ebook">
					<button onclick="makeFullScreen()">Make Full Screen</button>
					   <?php
						
						$pdf_url = $qns_data_ebook[0]['url']."?token=".$this->session->userdata('voltAccountToken');
					 ?>
					<iframe src="<?=$pdf_url?>" id="eb" title="" style="width:100%;height:500px;"></iframe>
                     
                       
                    </div>
                    <?php }?>
                    
                
                    <!-- Exercis
					<!-- Exercise menu start -->
                    <div class="col-md-3">
                        <div class="ex-area">
                            <div class="list-group">
							<?php if (@count(@$qns_data_vid) > 0) { ?> 
								<button type="button" class="list-group-item-action active vidlist">Video</button>
								<?php foreach ($qns_data_vid as $video) {
									echo '<a class="box-a vdo vidlistdata" href="javascript:void(0);" data-id="' . $video['id'] . '"  data-url="' . $video['url'] . '" ><i class="fa fa-play-circle-o" aria-hidden="true"></i> ' . $video['question'] . '</a>';
	
								}
								?>
							<?php } elseif (@count(@$qns_data_ebook) > 0) { ?> 
								<button type="button" class="list-group-item-action active vidlist">Book</button>
								<?php foreach ($qns_data_ebook as $ebook) {
									$url = $ebook['url']."?token=".$this->session->userdata('voltAccountToken');
									echo '<a class="box-a vdo vidlistdata" href="javascript:void(0);" data-type="' . $ebook['type'] . '"  data-url="' . $url. '" ><i class="fa fa-play-circle-o" aria-hidden="true"></i> ' . $ebook['question'] . '</a>';
	
								}
								
								} else {?>
							
							
                                <button type="button"
                                    class="list-group-item list-group-item-action active">Exercises</button>
                                <?php
                                if (!empty($act_value)) {
                                    if (COUNT($act_value) > 1) {
                                        ?>
                                <?php $navpageurl = 'c=' . $this->input->get('c') . '&subid=' . $this->input->get('subid') . '&catid=' . $this->input->get('catid') . '&sub=' . $this->input->get('sub') . '&cat=' . $this->input->get('cat');?>
                                <?php
                                            $tc = 1;
                                            foreach (array_unique($act_value) as $value) {
                                if (in_array($value, $Type_Array)) {
                                        $Typas = ($cat_data_type_label[$value]) ? $cat_data_type_label[$value] : $Type_Value[$value];

                                $act_cat = ($value == $curr_type) ? 'act-cat' : '';
                                echo '<a class="box-a ' . $act_cat . ' list-group-item list-group-item-action" href="javascript:void(0);" id="' . $tc . '" data-setids="' . $set_Ids . '" data-target="#' . $value . '" data-class="' . $navpageurl . '" > ' . $Typas . '</a>';
                                $tc++;
                                }
                                }
                                    ?>
                                <?php
                                        }
							} } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="mySidebar" class="sidebar" style="background:#FFF">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <?php if ($allcategories) {
    $int = 0;
    foreach ($allcategories as $getCategory) {
        $urlIs = "#active";
        $checkTopics = API_connector(base_url("api/getcatSet?class=" . $clid . "&subject=" . $suid . "&series=" . $seid . "&chapter=" . $chid . "&category=" . $getCategory->cat_id));
        $getActivityType = API_connector(base_url("api/getqdata/?setId=" . $checkTopics->data->setData[0]->setIds));
        $checkList = $this->db->query("SELECT * FROM `list` WHERE `set_id`='" . $checkTopics->data->setData[0]->setIds . "' ")->row();
		
        if (@count($checkList) > 0) {

            $listenPos = strpos($checkTopics->data->setData[0]->actType, 'audioUpload');
            $videoPos = strpos($checkTopics->data->setData[0]->actType, 'vid');
            $dataTypeis = ($listenPos == true) ? "audioUpload" : "vid";

            ?>
                <div class="col-md-12">

                    <a href="<?=($listenPos == false) ? base_url('playactivity/' . $checkTopics->data->setData[0]->setIds . '/' . $getActivityType->type[0] . '?c=' . preg_replace("/activity\d/i", "activity".$getCategory->cat_id, $this->input->get_post('c')) . '&her=' . $this->input->get('her')) : "javascript:void(0)"?>"
                        data-type="<?=$dataTypeis?>" data-video-url="<?=$checkList->url?>"
                        class="inner-prog <?=($listenPos == true) ? 'playvideo' : ''?>"
                        style="display:block; padding: 20px 0; box-shadow: 0px 0px 8px #656363; background:#<?=$getCategory->cat_bg?>">
                        <img src="<?=base_url('master/uploads/category/' . $getCategory->cat_img)?>"
                            class="center-block" style="width:75px;">
                        <span><?=$getCategory->cat_name?></span>
                    </a>
                </div>
                <?php }
    }
}?>

            </div>

            <div id="main">
                <button class="openbtn" onclick="openNav()">☰ Go to Resources</button>
            </div>

            <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
            </script>
            <!--end Your Coad-->
        </div>
    </div>
</div>

</div>
</div>


<div class="result" style="display:none;">
    <!-- <div class="result"> -->
    <?php if ($this->uri->segment(1) == 'playactivity') {?>
    <div class="container" id="act_result">
        <div class="card">

            <div class="">

                <button type="button" class="close opacityclosebtn">
                    <a href="javascript:location.reload();" class="label" style="font-size:20px;">
                        <img src="<?=base_url('assets/publicassets/assets/images/closebtn.jpg');?>"
                            style="width: 30px;">
                    </a>
                </button>
                <h2 class="scoreborad">Score Board</h2>
                <ul class="responsive-table">
                    <li class="table-header">
                        <div class="col col-md-8"> Solutions</div>
                        <div class="col col-md-4"> Score</div>
                    </li>
                </ul>

                <ul class="responsive-table">

                    <div class="col col-md-8 col-sm-8 col-xs-8 attemptQlist">
                        <?php if (count($qns_data_mcq) > 0) {
    foreach ($qns_data_mcq as $qmcqresult) {
        //<strong><em><br><i><b><u>
        $qns_mcq_result_title = strip_tags(removeSpace(trim($qmcqresult['question'])), '<ul><ol><strong><em><br><i><b><u>');
        $qns_mcq_result_title = preg_replace('#(<br */?>\s*)+#i', '<br>', $qns_mcq_result_title);
                        $qns_mcq_result_list = array_filter(json_decode($qmcqresult['mcq']));
                        $mcq_ans = $qns_mcq_result_list[$qmcqresult['answer']];
                        echo '<li class="table-row">
                            <p>' . $qns_mcq_result_title . '</p>';
                            if ($qmcqresult['urlImage']) {
                            echo $qmcqresult['urlImage'];
                            }
                            echo '<ul class="attempQalist">';
                                foreach ($qns_mcq_result_list as $mcqkey => $opt) {
                                $mcqansId = 'ansmcq-' . $qmcqresult['id'] . '-' . $mcqkey;
                                if ($mcq_ans == $opt) {
                                echo ' <li class="optmcq-crct"> Correct : <strong style="color: #28a745;">' . $opt .
                                        '</strong></li> ';
                                } else {
                                echo ' <li class="optqns" id="' . $mcqansId . '"> Your Answer : <strong
                                        style="color: #ff0303;">' . $opt . '</strong></li> ';
                                }
                                }
                                echo '</ul>
                        </li>';
                        }
                        }?>

                        <?php if (count($qns_data_tnf) > 0) {
    foreach ($qns_data_tnf as $anstfdata) {
        if (@array_key_exists('t', @json_decode($anstfdata['myans'])) && trim(json_decode($anstfdata['myans'])->t) != '' && trim(json_decode($anstfdata['myans'])->f) != '') {
            if ($anstfdata['answer'] == 't') {
                $ans = trim(json_decode($anstfdata['myans'])->t);
            } elseif ($anstfdata['answer'] == 'f') {
                $ans = trim(json_decode($anstfdata['myans'])->f);
            }
            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
            $ans_tf_list = array(trim(json_decode($anstfdata['myans'])->t), trim(json_decode($anstfdata['myans'])->f));
            $ans_tf_answer = $ans;
        } else {
            if ($anstfdata['answer'] == 't') {
                $ans = "True";
            } elseif ($anstfdata['answer'] == 'f') {
                $ans = "False";
            }
            $ans_tf_title = strip_tags(removeSpace(trim($anstfdata['question'])), '<ul><ol><strong><em><br><i><b><u>');
            $ans_tf_list = array("True", "False");
            $ans_tf_answer = $ans;
        }

        echo '<li class="table-row"><p>' . $ans_tf_title . '</p>';
        echo '<ul class="attempQalist">';
        foreach ($ans_tf_list as $tfkey => $tf_opt) {
            $tfansId = 'anstnf-' . $anstfdata['id'] . '-' . $tfkey;
            if ($ans_tf_answer == $tf_opt) {
                echo ' <li class="opttnf-crct"> Correct : <strong style="color: #28a745;">' . $tf_opt . '</strong></li> ';
            } else {
                echo ' <li class="optqns" id="' . $tfansId . '"> Your Answer : <strong style="color: #ff0303;">' . $tf_opt . '</strong></li> ';
            }
        }
        echo '</ul></li>';
    }
}
    ?>

                        <?php if (count($qns_data_fib) > 0) {
        foreach ($qns_data_fib as $fib_ansdata) {
            $fib_left_title_ans = strip_tags(removeSpace(trim($fib_ansdata['fib_qns'][0])), '<ul><ol><strong><em><br><i><b><u>');
            $fib_right_title_ans = strip_tags(removeSpace(trim($fib_ansdata['fib_qns'][1])), '<ul><ol><strong><em><br><i><b><u>');
            $fib_ans_list_ans = array_filter(json_decode($fib_ansdata['mcq']));
            $fib_ans = removeSpace(trim($fib_ans_list_ans[$fib_ansdata['answer']]));

            echo '<li class="table-row"><p>' . $fib_left_title_ans . '_________' . $fib_right_title_ans . '</p>';
            echo '<ul class="attempQalist">';
            foreach ($fib_ans_list_ans as $fibkey => $fib_value_ans) {
                $fibansId = 'ansfib-' . $fib_ansdata['id'] . '-' . $fibkey;
                if ($fib_ans == $fib_value_ans) {
                    echo ' <li class="optfib-crct"> Correct : <strong style="color: #28a745;">' . $fib_value_ans . '</strong></li> ';
                } else {
                    echo ' <li class="optqns" id="' . $fibansId . '"> Your Answer : <strong style="color: #ff0303;">' . $fib_value_ans . '</strong></li> ';
                }
            }
            echo '</ul></li>';
        }
    }?>

                        <?php if (count($qns_data_mch) > 0) {
        echo '<li class="table-row"><p>' . $qns_data_mch[$mchQnsKey]['question'] . '</p>';
        echo '<div class="row">';
        echo '<ul class="col-md-6">';
        foreach ($qns_data_mch[$mchQnsKey]['left_col'] as $leftKey => $left_val) {
            $l_ext = strtolower(pathinfo($base_url . $left_val, PATHINFO_EXTENSION));
            if (in_array($l_ext, $supported_image)) {
                $mch_img_left = "<img src='" . $base_url . $left_val . "' />";
                echo ' <li class="badge alert-success">' . $mch_img_left . '</li> ';
            } else {
                echo ' <li class="badge alert-success">' . $left_val . '</li> ';
            }
        }
        echo '</ul>';
        echo '<ul class="col-md-6">';
        foreach ($qns_data_mch[$mchQnsKey]['right_col'] as $rightKey => $right_val) {
            $ext = strtolower(pathinfo($base_url . $right_val, PATHINFO_EXTENSION));
            if (in_array($ext, $supported_image)) {
                $mch_img_right = "<img src='" . $base_url . $right_val . "' />";
                echo ' <li class="badge alert-success">' . $mch_img_right . '</li> ';
            } else {
                echo ' <li class="badge alert-success">' . $right_val . '</li> ';
            }
        }
        echo '</ul></div></li>';
    }?>

                    </div>
                    <div class="col col-md-4 col-sm-4 col-xs-4">
                        <div class="col col-12 scorebox">
                            <img src="<?=base_url('assets/publicassets/activity/img/trophy.png');?>"
                                style="width: 100px; display: block; margin: auto auto 20px auto;">
                            <span class="badge right_qns"
                                style="color: #28a745; background: #FFF; font-size: 25px;">0</span>
                            <span class="badge"
                                style="color: #f9a964; padding: 0; background: #FFF; font-size: 25px;">/</span>
                            <span class="badge total_qns"
                                style="color: #f00; background: #FFF; font-size: 25px;">0</span>
                        </div>
                        <p class="badge" style="color: #000; background: #f0ad4e;">Skipped : <span
                                class="badge skip_qns" style="color: #f00; background: #FFF;">0</span></p>
                        <?/*
							<div class="col-md-12">
								<a href="javascript:location.reload();" class="label label-warning" style="font-size:20px;">Go Back</a>
							</div>
                            */ ?>
                    </div>

                </ul>



            </div>
        </div>
    </div>
    <?php }?>
    <div class="result-text animated bounce ">
        <a href="javascript:location.reload();" class="btn green playagain">Play again</a>
    </div>
</div>

<?php if (empty($act_value)) {?>
<div class="no-data">
    <p>Data not found</p>
</div>
<?php
}?>

<?php $main_file = 'js/main_score.js';?>
<script src="<?=base_url('assets/publicassets/activity/' . $main_file);?>"></script>
<script>
ls.setItem('typeis', 'no');
ls.setItem('idis', '1');
$('body').on('click', '.vdo', function() {
	$obj = $(this);
		$video_url = $obj.attr('data-url');
		$data_id = $obj.attr('data-id');
		$('#vdo').find('.video-player').attr('src', $video_url);
		$("#vdo")[0].load();
	});
$('body').on('click', '.playvideo', function() {
    $obj = $(this);
    $video_url = $obj.attr('data-video-url');
    $data_type = $obj.attr('data-type');
    if ($data_type == "audioUpload") {
        $(".modal-title").text("Listen to the audio");
        $('#videoframe').css('display', "none");
        $('#audioArea').css('display', "block");
        $('#play_video').find('#audio1').attr('src', $video_url);
        $("#play_video audio")[0].load();
    } else {
        $(".modal-title").text("Play Video");
        $('#audioArea').css('display', "none");
        $('#videoframe').css('display', "block");
        $('#play_video').find('.vid-player').attr('src', $video_url);
        $("#play_video video")[0].load();
    }
    $('#play_video').modal('show');
    //console.log($video_url);
});

$('body').on('click', '.close-video', function() {
    $("#play_video video")[0].pause();
    $('#play_video').find('.vid-player').attr('src', '#');
});

function makeFullScreen() {
var url = $('#eb').attr('src');
$('#ebk').attr('src',url);
$("#ebook_iframe").css("display", "block");
}

$("#close_iframe").click(function(){
	$("#ebook_iframe").css("display", "none");
});
</script>

<!-- modal -->
<div id="play_video" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Play Video</h4>
            </div>
            <div class="modal-body">
                <video style="width:100%;" id="videoframe" controls>
                    <source class="vid-player" src="#" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
                <div id="audioArea">
                    <img class="img-custom"
                        src="<?=base_url("assets/publicassets/assets/images/listen_background.gif")?>">
                    <audio autostart="false" preload="" id="audio1" controls="controls" src="#"
                        style="width: 100%; max-height: 300px;">Your browser does not support Audio!</audio>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default close-video" data-dismiss="modal"
                    style="background: #cecece; margin-top: 0;">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
function replace($str)
{

    // Array containing search string
    $searchVal = array("</li><li><ul>", "</ul></li></ul>");

    // Array containing replace string from  search string
    $replaceVal = array("</li>", "</ul>");

    // Function to replace string
    return str_replace($searchVal, $replaceVal, $str);
}

?>


<?php include('header.php') ?>	
<style type="text/css">
    .joinsec{width: 100%; height: 250px; background-size:cover; position:relative;z-index: 1; display: flex;
    align-items: center;
    justify-content: center;} 
    .joinsec::after{
        content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: -1;
    }
    .jointitle{
            text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #ffffff;
    text-transform: uppercase;
    }
@media (max-width: 767px){
.joinsec{
height: 100px;
}
.jointitle{
font-size: 20px;
}
}


</style>
	<!-- SLIDER  AREA -->
    <div class="main-slider-area" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="em-nivo-slider-wrapper kc-elm kc-css-242493">
                    <div id="mainSlider" class="nivoSlider em-slider-image">						  									  
						<img src="<?=base_url('assets/publicassets/')?>assets/images/slider/bg_home.png" alt="" title="#htmlcaption1_30"/>
						<img src="<?=base_url('assets/publicassets/')?>assets/images/slider/bg_home.png" alt="" title="#htmlcaption1_28" />
								<img src="<?=base_url('assets/publicassets/')?>assets/images/slider/bg_home.png" alt="" title="#htmlcaption1_26" />
				   </div>
				   
									   
					<!-- em_slider style-1 start -->
					<div id="htmlcaption1_30" class="nivo-html-caption em-slider-content-nivo">
						<div class="em_slider_inner container  text-left">								
							
							<!--slider title 2 -->								
							<div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">										
									<h1 class="em-slider-sub-titles">Discover</h1>											
							</div>
							<!--slider title 3 -->
							<div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">										
									<h1 class="em-slider-sub-titles">the joy of learning</h1>											
							</div>
							<!--slider description text -->
                            <!--
							<div class="wow slideInRight" data-wow-duration="3s" data-wow-delay="0s">										
								<p  class="em-slider-descript"> </p>
							</div>
                            -->
							<!--slider button -->
                            <!--
							<div class="em-slider-button em-button-button-area wow  slideInRight  " data-wow-duration="4s" data-wow-delay="0s">
								<a class="em-button" href="#">Apply Now</a>
															
							</div>
                            -->
							<!--slider slde image -->
							<div class="em_slider_single_img wow bounceInRight" data-wow-duration="4s" data-wow-delay="1s">
								<img  src="<?=base_url('assets/publicassets/')?>assets/images/slider/slider_2.png" alt="" class="img-slider-1" />
							</div>
							
						</div>
					</div>
					<!-- end slider one -->
								   
					<!-- slider two start -->
					<div id="htmlcaption1_28" class="nivo-html-caption em-slider-content-nivo">
						<div class="em_slider_inner container  text-right">								
							<!--slider title 2 -->								
							<div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">										
									<h1 class="em-slider-sub-titles">Technology that suits</h1>											
							</div>
							<!--slider title 3 -->
							<div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">										
									<h1 class="em-slider-sub-titles">your child's learning style</h1>											
							</div>
                            <?/*
							<!--slider description text -->
							<div class="wow slideInRight" data-wow-duration="3s" data-wow-delay="0s">										
								<p  class="em-slider-descript">We always work with experts, all the workers work with expertise, there is no conflict between them. </p>
							</div>
							<!--slider button -->
                            */ ?>
                            
                            
                            
                            <!--
							<div class="em-slider-button em-button-button-area wow  slideInRight  " data-wow-duration="3s" data-wow-delay="0s">
								<a class="em-button" href="#">Apply Now</a>										 
							</div>
                            -->
							<!--slider slde image -->
							<div class="em_slider_single_img wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
								<img  class="img-slider-2" src="<?=base_url('assets/publicassets/')?>assets/images/slider/slider_1.png" alt="" />
							</div>
							
						</div>
					</div>	
					
					
						<div id="htmlcaption1_26" class="nivo-html-caption em-slider-content-nivo">
						<div class="em_slider_inner container  text-right">								
							<!--slider title 2 -->								
							<div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">										
									<h1 class="em-slider-sub-titles">Learn with rich media</h1>											
							</div>
							<!--slider title 3 -->
							<div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">										
									<h1 class="em-slider-sub-titles"> and interactive content</h1>											
							</div>
                            <? /*
							<!--slider description text -->
							<div class="wow slideInRight" data-wow-duration="3s" data-wow-delay="0s">										
								<p  class="em-slider-descript">We always work with experts, all the workers work with expertise, there is no conflict between them. </p>
							</div>
							<!--slider button -->
                            <!--
							<div class="em-slider-button em-button-button-area wow  slideInRight  " data-wow-duration="3s" data-wow-delay="0s">
								<a class="em-button" href="#">Apply Now</a>										 
							</div>
                            -->
							<!--slider slde image -->
							*/ ?>
							<div class="em_slider_single_vid wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                                <div class="videos_slider">
							<video class="width55vh" controls autoplay>
							  <source src="assets/publicassets/assets/images/mov_bbb.mp4" type="video/mp4">
							  <source src="mov_bbb.ogg" type="video/ogg">
							  Your browser does not support HTML5 video.
							</video>
                                    </div>
							</div>
							
						</div>
					</div>						
			   </div>
			   
			</div>
		</div>
	</div>

	<!-- <div class="bg-shape2"></div>
	<div class="bg-shape3"></div> -->

	<div class="feature_area feature-style-two" id="about">
		<div class="container">
            <div class="row">
             <div class="col-md-6 col-xs-5 col-sm-5">
					<div class="image-home-sec">
						<img src="/assets/publicassets/assets/images/home/home_1.png" alt="insert image">
					</div>
				</div>
            	<div class="col-md-6 col-xs-7 col-sm-7" style="padding: 0px">
            		<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="single_feature">
								<!--<div class="feature_thumb">
									<img src="<?=base_url('assets/publicassets/')?>assets/images/feature4.jpg" alt="feature1">
								</div>-->
								<div class="feature_content_wrap">
									<div class="feature_content_inner">
										
										<div class="feature_content">
											<!-- <h2>Student Contact</h2> -->
											<p>Assess yourself and track your progress</p>
										</div>
										<!--<div class="feature_button">
											<a href="#">Read More</a>
										</div>-->
									</div>
				               </div>
				          </div>
				     </div>
			
						<div class="col-md-6 col-sm-6 col-xs-6" style="margin-top:100px;">
							<div class="three">
								<!--<div class="feature_thumb">
									<img src="<?=base_url('assets/publicassets/')?>assets/images/feature4.jpg" alt="feature1">
								</div>-->
								<div class="feature_content_wrap">
									<div class="feature_content_inner">
										
										<div class="feature_content">
											<!-- <h2>Free Book</h2> -->
											<p>Interactive and intelligent learning that understands your learning style</p>
										</div>
										<!--<div class="feature_button">
											<a href="#">Read More</a>
										</div>-->
									</div>
								</div>
							</div>
				     </div>		
			    </div>	
			</div>
		</div>
	</div>






	<div class="ebook_area viva-section viva-section bg-viva-pink">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-7 col-sm-7">
					<div class="section_title style-3 text-area">
						<div class="section_title_content inner-text-area">
							<div class="section_title_heading">
								<h2>Learn with video lectures, animations and games</h2>
								
							</div>
							<div class="section_title_desc">
							 <p></p>
							  <a class="link_button" data-toggle="modal" data-target="#modalLRForm">Start Learning</a>
                            </div>
                            
						</div>
					</div>
				</div>
			<div class="col-md-6 col-xs-5 col-sm-5">
					<div class="image-home-sec">
						<img src="/assets/publicassets/assets/images/home/home_3.png" alt="insert image">
					</div>
				</div>
			</div>
          	</div>
	</div>  
            
    <div class="video_area viva-section">
		<div class="container">  
           <div class="row">
			<div class="col-md-6 col-xs-5 col-sm-5">
                <div class="image-home-sec">
                         <img src="<?=base_url('assets/publicassets/')?>assets/images/home/home_2.png" alt="insert image">
					</div> 
                    <!--
					<div class="left-home-img videos-div">
						<video width=""  controls class="videos-home">
							  <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
							  <source src="mov_bbb.ogg" type="video/ogg">
							  Your browser does not support HTML5 video.
							</video>
					</div>
                    -->
				</div>
					<div class="col-md-6 col-xs-7 col-sm-7">
					<div class="section_title_video style-3 text-area">
						<div class="section_title_content inner-text-area">
							<div class="section_title_heading">
								<h2>Classroom, playground, on the commute or at home, VOLT powers the smart student</h2>
							</div>
							<div class="section_title_desc">
							 <p></p>
							 <a class="link_button" data-toggle="modal" data-target="#modalLRForm">Start Learning</a>
                            </div>
                                  
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="video_area viva-section bg-viva-pink">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-7 col-sm-7">
					<div class="section_title_working style-3 text-area">
						<div class="section_title_content inner-text-area">
							<div class="section_title_heading">
								<h2>We are working around the world with 30 years of expertise</h2>
					
							</div>
							<div class="section_title_desc about-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam lacinia augue ut molestie congue. Vestibulum at ligula justo. Ut molestie ultrices tellus, eu lobortis libero tincidunt vitae. Vestibulum imperdiet scelerisque odio ut efficitur. Suspendisse potenti. Quisque ex velit, molestie maximus est vel, pharetra tincidunt lectus.
                                </p>
                                 <a class="link_button" href="">Start Learning</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-5 col-sm-5">
					<div class="image-home-sec">
						<img src="<?=base_url('assets/publicassets/')?>assets/images/home/home_4.png" alt="insert image">
					</div>
				</div>
			</div>
		</div>
	</div> -->

<!--Admission Area -->
<?php /** 

	<div class="admision_area viva-section" id="admission">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section_title_style2">
						<h2>Join today for free</h2>
					</div>
				</div>
			</div>
            <style>
                .p10set{
                    padding: 10px 10px 5px 10px !important;
                }
                .m0set{
                    margin-top: 0 !important;
                }
            </style>
		
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 main-admission">
					<div class="admission_curosel owl-carousel curosel-style">
						<?php if($allsubject){ $c=0; foreach($allsubject as $getSubject){ $c++; $bgcolor = ($c%2)?"two":"one";
						$ncls = ($this->getLogin)?$this->getLogin->vc_class:1;
						$coverImage = ($getSubject->subject_image!="")?$getSubject->subject_image:'images.jpg';
						?>
						<div class="col-md-12">
							<a class="m0set" href="<?=base_url('subjects/class-'.$ncls.'?vid='.$getSubject->subjectId)?>"><div class="single_admision <?=$bgcolor?>">
								<div class="admission_thumb joinsec" style="background-image:url(<?=base_url('assets/publicassets/assets/images/bookcover/subject-img/'.$coverImage)?>)">
									<!--<img  src="<?=base_url('assets/publicassets/assets/images/bookcover/subject-img/'.$coverImage)?>" alt="">-->
									<span class="jointitle"><?=$getSubject->subject_name?></span>
								</div>
								<!---div class="admission_content ">
									<div class="admission_content_inner">
										<h3 class="p10set"><?=$getSubject->subject_name?></h3>
									</div>
								</div--->
							</div></a>
						</div>
						
						<?php }}?>					
					</div>
				</div>
			</div>

		</div>
	</div>
**/ ?>
	<!--Admission Area -->

<?php /* ?>
	<!-- START BLOG AREA -->
	<div class="blog_area home-3" id="blog">
		<div class="container">		
			<!-- section title -->
           <div class="row">
                <div class="col-md-12">
					<div class="section_title_style2 text-left">
						<h3>Blog Post Edution</h3>
						<h2>News & Update</h2>
					</div>
				</div>
            </div>
			<div class="row">
				<!-- blog owl curousel -->
				<div class="blog_carousel owl-carousel curosel-style">			
					<div class="col-md-12">	
					<!-- edution SINGLE BLOG -->
					<div class="overlay-blue">
						<div class="edution-single-blog ">					
							<!-- BLOG THUMB -->
							<div class="blog_thumb_inner">
								<div class="edution-blog-thumb ">
									<a href="single-blog.html">
										<img src="<?=base_url('assets/publicassets/')?>assets/images/blog1.jpg"  alt="blog1">
									</a>
									<div class="blog-date">
										<span>06</span>
										<span>Sep</span>
									</div>
								</div>
							</div>
							<div class="em-blog-content-area ">
								<!-- BLOG TITLE -->
								<div class="blog-page-title ">
									<h2><a href="single-blog.html">Professor albert joint research money</a></h2>			
								</div>
								<!-- BLOG META -->
								<div class="edution-blog-meta">
									<div class="edution-blog-meta-left">
										<span><em class="fa fa-user-o"></em>10 Mar 2019 </span>
										<span><em class="fa fa-comments-o"></em>20 Comments </span>
									</div>
								</div>
							
								<div class="blog_description">
									<p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor</p>
								</div>
								<div class="blog_readmore">
									<a href="single-blog.html">Read More</a>
								</div>
							</div>	
							
						</div>
					</div>
					</div>
					<div class="col-md-12">	
					<!-- edution SINGLE BLOG -->
						<div class="edution-single-blog ">					
							<!-- BLOG THUMB -->
							<div class="blog_thumb_inner">
								<div class="edution-blog-thumb ">
									<a href="single-blog.html">
										<img src="<?=base_url('assets/publicassets/')?>assets/images/blog2.jpg"  alt="blog1">
									</a>
									<div class="blog-date">
										<span>06</span>
										<span>Sep</span>
									</div>
								</div>
							</div>
							<div class="em-blog-content-area ">
								<!-- BLOG TITLE -->
								<div class="blog-page-title ">
									<h2><a href="single-blog.html">Professor albert joint research money</a></h2>			
								</div>
								<!-- BLOG META -->
								<div class="edution-blog-meta">
									<div class="edution-blog-meta-left">
										<span><em class="fa fa-calendar"></em>10 Mar 2019 </span>
										<span><em class="fa fa-comments-o"></em>20 Comments </span>
									</div>
								</div>
							
								<div class="blog_description">
									<p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor</p>
								</div>
								<div class="blog_readmore">
									<a href="single-blog.html">Read More</a>
								</div>
							</div>	
							
						</div>
					
					</div>
					<div class="col-md-12">	
					<!-- edution SINGLE BLOG -->
						<div class="edution-single-blog ">					
							<!-- BLOG THUMB -->
							<div class="blog_thumb_inner">
								<div class="edution-blog-thumb ">
									<a href="single-blog.html">
										<img src="<?=base_url('assets/publicassets/')?>assets/images/blog3.jpg"  alt="blog1">
									</a>
									<div class="blog-date">
										<span>06</span>
										<span>Sep</span>
									</div>
								</div>
							</div>
							<div class="em-blog-content-area ">
								<!-- BLOG TITLE -->
								<div class="blog-page-title ">
									<h2><a href="single-blog.html">Professor albert joint research money</a></h2>			
								</div>
								<!-- BLOG META -->
								<div class="edution-blog-meta">
									<div class="edution-blog-meta-left">
										<span><em class="fa fa-calendar"></em>10 Mar 2019 </span>
										<span><em class="fa fa-comments-o"></em>20 Comments </span>
									</div>
								</div>
							
								<div class="blog_description">
									<p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor</p>
								</div>
								<div class="blog_readmore">
									<a href="single-blog.html">Read More</a>
								</div>
							</div>	
							
						</div>
					
					</div>
					<div class="col-md-12">	
					<!-- edution SINGLE BLOG -->
						<div class="edution-single-blog ">					
							<!-- BLOG THUMB -->
							<div class="blog_thumb_inner">
								<div class="edution-blog-thumb ">
									<a href="single-blog.html">
										<img src="<?=base_url('assets/publicassets/')?>assets/images/blog4.jpg"  alt="blog1">
									</a>
									<div class="blog-date">
										<span>06</span>
										<span>Sep</span>
									</div>
								</div>
							</div>
							<div class="em-blog-content-area ">
								<!-- BLOG TITLE -->
								<div class="blog-page-title ">
									<h2><a href="single-blog.html">Professor albert joint research money</a></h2>			
								</div>
								<!-- BLOG META -->
								<div class="edution-blog-meta">
									<div class="edution-blog-meta-left">
										<span><em class="fa fa-calendar"></em>10 Mar 2019 </span>
										<span><em class="fa fa-comments-o"></em>20 Comments </span>
									</div>
								</div>
							
								<div class="blog_description">
									<p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor</p>
								</div>
								<div class="blog_readmore">
									<a href="single-blog.html">Read More</a>
								</div>
							</div>	
							
						</div>
					
					</div>

				</div>				
			</div>
		</div>
	</div>
	<?php */?>
	<!-- BLOG_AREA END -->

<?php include('footer.php') ?>
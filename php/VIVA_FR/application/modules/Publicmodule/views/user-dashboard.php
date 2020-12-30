<?php include("header.php"); ?>

<!-- edution BREADCRUMB AREA -->
<div class="breatcome_area" style="padding:150px 0 25px">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="breatcome_title">
					<div class="breatcome_title_inner">
						<h2>DASHBOARD</h2>
						<div class="breatcome_content">
							<ul>
								<li>Manage your account</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="admision_area about_page" id="admission" style="padding-top: 70px">
	<div class="container-fluid" style="max-width:1350px;">
		<div class="row">
			<div class="col-md-3 col-xs-12 col-sm-4 usersidebar">
				<?php include('user-menu.php'); ?>
			</div>
			<div class="col-md-9 col-xs-12 col-sm-8">

				<div class="row">

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6">
						<div class="cardarea">
							<div class="cardtitle"> Activities </div>
							<div class="cardno"> <?=($activity)?$activity->allattempt:'0'?> </div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="cardarea">
							<div class="cardtitle"> Right Activities </div>
							<div class="cardno"> <?=($activity)?$activity->rightattempt:'0'?> </div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="cardarea">
							<div class="cardtitle" > Wrong  Activities </div>
							<div class="cardno"> <?=($activity)?$activity->wrongattempt:'0'?> </div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6">
						<div class="cardarea">
							<div class="cardtitle" > Average Score </div>
							<div class="cardno"> 
							<?php $getPer = ($activity)?100*$activity->rightattempt/$activity->allattempt:'0'; echo round($getPer) ?>%		
						</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>
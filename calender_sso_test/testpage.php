<?PHP
header('Access-Control-Allow-Origin: *');
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Viva Volt</title>


	<meta name="google-signin-client_id" content="40675082942-ft6n1p23vs8oeiaa5ua25efj33i7cai4.apps.googleusercontent.com">
	<!-- Apple SSO-->
	<meta name="appleid-signin-client-id" content="in.vivavolt.client.response">
	<meta name="appleid-signin-scope" content="name email">

	<meta name="appleid-signin-redirect-uri" content="https://lite.volt.development.vivadevops.com/syncwithapple">
	<meta name="appleid-signin-state" content="[STATE]">
	<meta name="appleid-signin-nonce" content="[NONCE]">
	<meta name="appleid-signin-use-popup" content="false">
	<meta name="appleid-signin-response_mode" content="query">
</head>
<body>


	<style type="text/css">
	#customBtn {
		display: inline-block;
		background: white;
		color: #000;
		width: 280px;
		height: 40px;
		border-radius: 5px;
		border: 2px solid #636363;
		white-space: nowrap;
	}
	#customBtn:hover {
		cursor: pointer;
	}
	span.label {
		font-family: '-apple-system, BlinkMacSystemFont', sans-serif;;
		font-weight: normal;
	}
	span.icon {
		background: url(<?= base_url(); ?>/assets/schoolassets/images/sso_icon/google.svg) transparent 4px 50% no-repeat;
		display: inline-block;
		vertical-align: middle;
		width: 28px;
		height: 34px;
		padding left: 73px;
		margin-left: 2px;
	}

	span.buttonText {
		line-height: 38px;
		display: inline-block;
		vertical-align: middle;
		padding-left: 6px;
		padding-right: 20px;
		font-size: 17px;
		line-height: 40px;
		letter-Spacing:initial;
		font-weight: 700;
		font-family: '-apple-system, BlinkMacSystemFont', sans-serif;

		}	.abcRioButtonContentWrapper {
			margin-left: 32px;
		}

		.abcRioButtonContents {
			font-family: Roboto, arial, sans-serif;
			font-size: 14px !important;
			font-weight: 600;
			letter-spacing: .21px;
			margin-left: -174px;
			margin-right: 6px;
			vertical-align: top;
			line-height: 30px;
			color: #5d5050;
		}
		.cardstyle{
			margin-top: 50px;
			margin-left: 800px;
		}
	</style>


	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
	<script src="https://apis.google.com/js/api:client.js"></script>
	<script>
		var googleUser = {};
		var startApp = function() {
			gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
      	client_id: '40675082942-ft6n1p23vs8oeiaa5ua25efj33i7cai4.apps.googleusercontent.com',
      	cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
		};

		function attachSignin(element) {
			console.log(element.id);
			auth2.attachClickHandler(element, {},
				function(googleUser) {
					let profile = googleUser.getBasicProfile();
					let id_token = googleUser.getAuthResponse().id_token;
					let xhr = new XMLHttpRequest();
					xhr.open('POST', '<?php echo base_url('/googleSync'); ?>');
					xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					xhr.onload = function() {
						console.log('Signed in as: ' + xhr.responseText);

						<?php if (session('voltAccountType')=="admin" ) {  ?>

							location.href = "<?= base_url() ?>/school";
						<?php }
						else if(session('voltAccountType')=="teacher" ){?>
							location.href = "<?= base_url() ?>/teacher";
						<?php }
						else {?>
							location.href = "<?= base_url() ?>/student";
						<?php }?>
					};
					xhr.send('idtoken=' + id_token);
				}, function(error) {
					alert(JSON.stringify(error, undefined, 2));
				});
		}
	</script>



	<!--dropbox-->


	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<div class="container">
		<div class="card">
			<div class="card-body cardstyle">
				<div class="row">
					<div class="col-sm-10 mx-auto d-block text-center">


						<div class="rounded" id="gSignInWrapper">

							<div id="customBtn" class="customGPlusSignIn">
								<span class="icon"></span>
								<span class="buttonText">Sign in with Google</span>
							</div>
						</div>
						<div id="name"></div>
						<script>startApp();</script>
						<br>

						
						<div class="center shadow bg-white rounded" style=" border: 2px solid #636363;height: 40px; border-radius: 5px!important;width: 276px">
						<img src="<?= base_url() ?>/assets/schoolassets/images/mircosoft_icon.png" style="
								padding-left: 7px;">
							<a href="<?= base_url(); ?>/microsoft_login_sync" style="width: 100%;">
								
								<span style="
								padding-left: 8px;
								color: #000;
								font-size: 17px;
								line-height: 40px;
								font-family: '-apple-system, BlinkMacSystemFont', sans-serif;
								display: inline-block;
								vertical-align: middle;
								letter-Spacing:initial;
								font-weight: 700;">Sign in with Microsoft</span></a></div>  
								<br>
								<div id="appleid-signin"  data-logo-size="large" data-color="white" data-type="sign-in" data-mode="left-align" data-width="280px" data-border="true" data-height="40%" style="cursor: pointer;">
								</div><br>

							</div>
						</div>


					</div>
				</div>


			</div>



		</body>
		</html>
		<script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>
		<script src="<?= base_url('assets') ?>/schoolassets/js/jquery-3.3.1.min.js"></script>
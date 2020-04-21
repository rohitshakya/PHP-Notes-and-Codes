<?php
session_start();
if(!isset($_SESSION['email'])){
  
  header("Location:./feedback_student.php");
} else {
  error_reporting(0);
?>
<html><head>
<link rel="shortcut icon" href="./images/fav_icon.png" type="image/x-icon">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=10; chrome=1;">
<meta name="fragment" content="!">
<meta name="viewport" content="width=device-width">
<base target="_blank">
<title>STUDENTS&#39; FEEDBACK FORM</title>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,700">

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","./feedback_student.php?q="+str,true);
  xmlhttp.send();
}
</script>
<link href='https://docs.google.com/static/forms/client/css/1299491361-formview_st_ltr.css' type='text/css' rel='stylesheet'>
<style type="text/css">
body {
  background-color: rgb(231,238,247);
  background-image: url('//ssl.gstatic.com/docs/forms/themes/images/v1/0AX42CRMsmRFbUy03NTAzM2Q4My03ODU1LTQ2NzItODI2YS1kZmU5YzdiMzZjOGQ/blue-stripe-bg.png');
  background-repeat: repeat;
  background-position: left top;
}

.ss-form-container, .ss-resp-card {
  background-color: rgb(255,255,255);
}

.ss-footer, .ss-response-footer {
  background-color: rgb(255,255,255);
}

.ss-grid-row-odd {
  background-color: rgb(242,242,242);
}

.ss-form-container, .ss-resp-card {
  border-color: rgb(212,212,212);
}

.ss-form-title {
  text-align: left;
}

.ss-form-title[dir="rtl"] {
  text-align: right;
}

.ss-form-desc {
  text-align: left;
}

.ss-form-desc[dir="rtl"] {
  text-align: right;
}

.ss-header-image-container {
  height: 0;
}

.ss-item {
  font-size: 1.080rem;
}

.ss-choices {
  font-size: 1.000rem;
}

body {
  font-family: "Roboto";
  color: rgb(119,119,119);
  font-weight: 400;
  font-size: 1.080rem;
  font-style: normal;
}

.ss-record-username-message {
  font-family: "Roboto";
  color: rgb(119,119,119);
  font-weight: 400;
  font-size: 1.080rem;
  font-style: normal;
}

.ss-form-title {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 400;
  font-size: 2.460rem;
  font-style: normal;
}

.ss-confirmation {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 400;
  font-size: 2.460rem;
  font-style: normal;
}

.ss-page-title, .ss-section-title {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 400;
  font-size: 1.845rem;
  font-style: normal;
}

.ss-form-desc, .ss-page-description, .ss-section-description {
  font-family: "Roboto";
  color: rgb(140,140,140);
  font-weight: 400;
  font-size: 1.080rem;
  font-style: normal;
}

.styled-select select {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: 14px;
   margin: 0px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 250px;
}

.ss-resp-content {
  font-family: "Roboto";
  color: rgb(119,119,119);
  font-weight: 400;
  font-size: 1.080rem;
  font-style: normal;
}

.ss-q-title {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 700;
  font-size: 1.080rem;
  font-style: normal;
}

.ss-embeddable-object-container .ss-q-title {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 700;
  font-size: 1.845rem;
  font-style: normal;
}

.ss-q-help, .ss-q-time-hint {
  font-family: "Roboto";
  color: rgb(140,140,140);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: normal;
}

.ss-choice-label, .video-secondary-text, .ss-gridrow-leftlabel, .ss-gridnumber, .ss-scalenumber, .ss-leftlabel, .ss-rightlabel {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: normal;
}

.error-message, .required-message, .ss-required-asterisk {
  font-family: "Roboto";
  color: rgb(196,59,29);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: normal;
}

.ss-send-email-receipt {
  font-family: "Roboto";
  color: rgb(80,80,80);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: normal;
}

.ss-password-warning {
  font-family: "Arial";
  color: rgb(119,119,119);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: italic;
}

.disclaimer {
  font-family: "Arial";
  color: rgb(119,119,119);
  font-weight: 400;
  font-size: 0.850rem;
  font-style: normal;
}

.ss-footer-content {
  font-family: "Arial";
  color: rgb(80,80,80);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: normal;
}

.progress-label {
  font-family: "Roboto";
  color: rgb(140,140,140);
  font-weight: 400;
  font-size: 1.000rem;
  font-style: normal;
}

a:link {
  color: rgb(0,0,238);
}

a:visited {
  color: rgb(85,26,139);
}

a:active {
  color: rgb(252,0,0);
}

input[type='text'], input:not([type]), textarea {
  font-size: 1.000rem;
}

.error, .required, .errorbox-bad {
  border-color: rgb(196,59,29);
}

.jfk-progressBar-nonBlocking .progress-bar-thumb {
  background-color: rgb(140,140,140);
}

.ss-logo-image {
/*  background-image: url('//ssl.gstatic.com/docs/forms/forms_logo_2_small_dark.png');*/
  background-size: 108px 21px;
  width: 108px;
  height: 21px;
}

@media screen and (-webkit-device-pixel-ratio: 2) {
.ss-logo-image {
  /*background-image: url('//ssl.gstatic.com/docs/forms/forms_logo_2_small_dark_2x.png');*/
}
}

</style>


<link href='https://docs.google.com/static/forms/client/css/3145455273-mobile_formview_st_ltr.css' type='text/css' rel='stylesheet' media='screen and (max-device-width: 721px)'>

<?php
/* ORIGINAL CODE

<script type="text/javascript">

(function(e,t){"function"==typeof define&&define.amd?define(t):"object"==typeof module&&module.exports?module.exports=t():e.H5F=t()})(this,function(){var e,t,a,i,n,r,l,s,o,u,d,c,v,p,f,m,b,h,g,y,w,C,N,A,E,$,x=document,k=x.createElement("input"),q=/^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,M=/[a-z][\-\.+a-z]*:\/\//i,L=/^(input|select|textarea)$/i;return r=function(e,t){var a=!e.nodeType||!1,i={validClass:"valid",invalidClass:"error",requiredClass:"required",placeholderClass:"placeholder",onSubmit:Function.prototype,onInvalid:Function.prototype};if("object"==typeof t)for(var r in i)t[r]===void 0&&(t[r]=i[r]);if(n=t||i,a)for(var s=0,o=e.length;o>s;s++)l(e[s]);else l(e)},l=function(a){var i,r=a.elements,l=r.length,c=!!a.attributes.novalidate;if(g(a,"invalid",o,!0),g(a,"blur",o,!0),g(a,"input",o,!0),g(a,"keyup",o,!0),g(a,"focus",o,!0),g(a,"change",o,!0),g(a,"click",u,!0),g(a,"submit",function(i){return e=!0,t||c||a.checkValidity()?(n.onSubmit.call(a,i),void 0):(w(i),void 0)},!1),!v())for(a.checkValidity=function(){return d(a)};l--;)i=!!r[l].attributes.required,"fieldset"!==r[l].nodeName.toLowerCase()&&s(r[l])},s=function(e){var t=e,a=h(t),n={type:t.getAttribute("type"),pattern:t.getAttribute("pattern"),placeholder:t.getAttribute("placeholder")},r=/^(email|url)$/i,l=/^(input|keyup)$/i,s=r.test(n.type)?n.type:n.pattern?n.pattern:!1,o=p(t,s),u=m(t,"step"),v=m(t,"min"),b=m(t,"max"),g=!(""===t.validationMessage||void 0===t.validationMessage);t.checkValidity=function(){return d.call(this,t)},t.setCustomValidity=function(e){c.call(t,e)},t.validity={valueMissing:a,patternMismatch:o,rangeUnderflow:v,rangeOverflow:b,stepMismatch:u,customError:g,valid:!(a||o||u||v||b||g)},n.placeholder&&!l.test(i)&&f(t)},o=function(e){var t=C(e)||e,a=/^(input|keyup|focusin|focus|change)$/i,r=/^(submit|image|button|reset)$/i,l=/^(checkbox|radio)$/i,u=!0;!L.test(t.nodeName)||r.test(t.type)||r.test(t.nodeName)||(i=e.type,v()||s(t),t.validity.valid&&(""!==t.value||l.test(t.type))||t.value!==t.getAttribute("placeholder")&&t.validity.valid?(A(t,[n.invalidClass,n.requiredClass]),N(t,n.validClass)):a.test(i)?t.validity.valueMissing&&A(t,[n.requiredClass,n.invalidClass,n.validClass]):t.validity.valueMissing?(A(t,[n.invalidClass,n.validClass]),N(t,n.requiredClass)):t.validity.valid||(A(t,[n.validClass,n.requiredClass]),N(t,n.invalidClass)),"input"===i&&u&&(y(t.form,"keyup",o,!0),u=!1))},d=function(t){var a,i,r,l,s,u=!1;if("form"===t.nodeName.toLowerCase()){a=t.elements;for(var d=0,c=a.length;c>d;d++)i=a[d],r=!!i.attributes.disabled,l=!!i.attributes.required,s=!!i.attributes.pattern,"fieldset"!==i.nodeName.toLowerCase()&&!r&&(l||s&&l)&&(o(i),i.validity.valid||u||(e&&i.focus(),u=!0,n.onInvalid.call(t,i)));return!u}return o(t),t.validity.valid},c=function(e){var t=this;t.validationMessage=e},u=function(e){var a=C(e);a.attributes.formnovalidate&&"submit"===a.type&&(t=!0)},v=function(){return E(k,"validity")&&E(k,"checkValidity")},p=function(e,t){if("email"===t)return!q.test(e.value);if("url"===t)return!M.test(e.value);if(t){var i=e.getAttribute("placeholder"),n=e.value;return a=RegExp("^(?:"+t+")$"),n===i?!1:""===n?!1:!a.test(e.value)}return!1},f=function(e){var t={placeholder:e.getAttribute("placeholder")},a=/^(focus|focusin|submit)$/i,r=/^(input|textarea)$/i,l=/^password$/i,s=!!("placeholder"in k);s||!r.test(e.nodeName)||l.test(e.type)||(""!==e.value||a.test(i)?e.value===t.placeholder&&a.test(i)&&(e.value="",A(e,n.placeholderClass)):(e.value=t.placeholder,g(e.form,"submit",function(){i="submit",f(e)},!0),N(e,n.placeholderClass)))},m=function(e,t){var a=parseInt(e.getAttribute("min"),10)||0,i=parseInt(e.getAttribute("max"),10)||!1,n=parseInt(e.getAttribute("step"),10)||1,r=parseInt(e.value,10),l=(r-a)%n;return h(e)||isNaN(r)?"number"===e.getAttribute("type")?!0:!1:"step"===t?e.getAttribute("step")?0!==l:!1:"min"===t?e.getAttribute("min")?a>r:!1:"max"===t?e.getAttribute("max")?r>i:!1:void 0},b=function(e){var t=!!e.attributes.required;return t?h(e):!1},h=function(e){var t=e.getAttribute("placeholder"),a=/^(checkbox|radio)$/i,i=!!e.attributes.required;return!(!i||""!==e.value&&e.value!==t&&(!a.test(e.type)||$(e)))},g=function(e,t,a,i){E(window,"addEventListener")?e.addEventListener(t,a,i):E(window,"attachEvent")&&window.event!==void 0&&("blur"===t?t="focusout":"focus"===t&&(t="focusin"),e.attachEvent("on"+t,a))},y=function(e,t,a,i){E(window,"removeEventListener")?e.removeEventListener(t,a,i):E(window,"detachEvent")&&window.event!==void 0&&e.detachEvent("on"+t,a)},w=function(e){e=e||window.event,e.stopPropagation&&e.preventDefault?(e.stopPropagation(),e.preventDefault()):(e.cancelBubble=!0,e.returnValue=!1)},C=function(e){return e=e||window.event,e.target||e.srcElement},N=function(e,t){var a;e.className?(a=RegExp("(^|\\s)"+t+"(\\s|$)"),a.test(e.className)||(e.className+=" "+t)):e.className=t},A=function(e,t){var a,i,n="object"==typeof t?t.length:1,r=n;if(e.className)if(e.className===t)e.className="";else for(;n--;)a=RegExp("(^|\\s)"+(r>1?t[n]:t)+"(\\s|$)"),i=e.className.match(a),i&&3===i.length&&(e.className=e.className.replace(a,i[1]&&i[2]?" ":""))},E=function(e,t){var a=typeof e[t],i=RegExp("^function|object$","i");return!!(i.test(a)&&e[t]||"unknown"===a)},$=function(e){for(var t=document.getElementsByName(e.name),a=0;t.length>a;a++)if(t[a].checked)return!0;return!1},{setup:r}});

</script> */
?>

<?php

//error_reporting(0);

$q = $_GET['q'];

include( "./inc/connect.inc.php" );
$code2="";
$dbsemister=$_SESSION["semister"];
$stream=$_SESSION["course"];

if($dbsemister=='7' || $stream=='B.VOC' ){
	$sql="SELECT DISTINCT name FROM  `feedback_2016_2`.`teacher` WHERE stream = '".$q."' ";
}
	else{
	$sql="SELECT DISTINCT name,stream FROM  `feedback_2016_2`.`teacher` WHERE stream = '".$q."' OR stream =  'GENERIC' ORDER BY  `teacher`.`stream` ASC ";
}
//echo $sql;
$result = mysql_query($sql);
//echo $result;

while($row = mysql_fetch_array($result)) {

    $t_name=$row['name'];    
    $code2 .="<option value='$t_name' > $t_name </option>";

}
$code2 .="</select>";


$semister=$_SESSION["semister"];
$stream=$_SESSION["course"];

$code_sub="";
$sql="SELECT * FROM `feedback_2016_2`.`subjects` WHERE semister = '$semister' AND stream ='$stream' ";
//echo $sql;
$result = mysql_query($sql);
//echo $result;

while($row = mysql_fetch_array($result)) {

    $subject=$row['subject'];
    $code_sub .="<option value='$subject' > $subject </option>";

}
$code_sub .="</select>";


//Declaring all variables

$name=$course=$semister=$email="";
$teacher1=$teacher2=$teacher3=$teacher4=$teacher5=$teacher6=$teacher7="";

$best_sub=$worst_sub=$final_remark="";
$count_good=$count_bad=0;


$teacher1_1a="";$teacher2_1a="";$teacher3_1a="";$teacher4_1a="";$teacher5_1a="";$teacher6_1a="";$teacher7_1a="";
$teacher1_1b="";$teacher2_1b="";$teacher3_1b="";$teacher4_1b="";$teacher5_1b="";$teacher6_1b="";$teacher7_1b="";
$teacher1_1c="";$teacher2_1c="";$teacher3_1c="";$teacher4_1c="";$teacher5_1c="";$teacher6_1c="";$teacher7_1c="";
$teacher1_1d="";$teacher2_1d="";$teacher3_1d="";$teacher4_1d="";$teacher5_1d="";$teacher6_1d="";$teacher7_1d="";
$teacher1_1e="";$teacher2_1e="";$teacher3_1e="";$teacher4_1e="";$teacher5_1e="";$teacher6_1e="";$teacher7_1e="";
$teacher1_1f="";$teacher2_1f="";$teacher3_1f="";$teacher4_1f="";$teacher5_1f="";$teacher6_1f="";$teacher7_1f="";
$teacher1_1g="";$teacher2_1g="";$teacher3_1g="";$teacher4_1g="";$teacher5_1g="";$teacher6_1g="";$teacher7_1g="";
$teacher1_2a="";$teacher2_2a="";$teacher3_2a="";$teacher4_2a="";$teacher5_2a="";$teacher6_2a="";$teacher7_2a="";
$teacher1_2b="";$teacher2_2b="";$teacher3_2b="";$teacher4_2b="";$teacher5_2b="";$teacher6_2b="";$teacher7_2b="";
$teacher1_2c="";$teacher2_2c="";$teacher3_2c="";$teacher4_2c="";$teacher5_2c="";$teacher6_2c="";$teacher7_2c="";
$teacher1_3a="";$teacher2_3a="";$teacher3_3a="";$teacher4_3a="";$teacher5_3a="";$teacher6_3a="";$teacher7_3a="";
$teacher1_3b="";$teacher2_3b="";$teacher3_3b="";$teacher4_3b="";$teacher5_3b="";$teacher6_3b="";$teacher7_3b="";

//Declaring all Error variables

$nameErr=$courseErr=$semisterErr=$emailErr="";
$teacher1Err=$teacher2Err=$teacher3Err=$teacher4Err=$teacher5Err=$teacher6Err=$teacher7Err="";

$t1Err=$t2Err=$t3Err=$t4Err=$t5Err=$t6Err=$t7Err="";
$best_subErr=$worst_subErr="";


  if(isset($_POST["submit"])){

    if(empty($_POST["best_sub"])){
      $best_subErr="<font color='red'><b>* Field is Required.</b></font>";
    }
    else{
      $best_sub=$_POST["best_sub"];
    }

    if(empty($_POST["worst_sub"])){
      $worst_subErr="<font color='red'><b>* Field is Required.</b></font>";
    }
    else{
      $worst_sub=$_POST["worst_sub"];
    }

    if (empty($_POST["teacher1"])) {      
         $teacher1Err = "* Teacher1 is Required.";
         } 
    else {
       $teacher1 =$_POST['teacher1'];
       
      if(empty($_POST["teacher1_1a"]) OR empty($_POST["teacher1_1b"]) OR empty($_POST["teacher1_1c"]) OR empty($_POST["teacher1_1d"]) OR empty($_POST["teacher1_1e"]) OR empty($_POST["teacher1_1f"]) OR empty($_POST["teacher1_1g"]) OR empty($_POST["teacher1_2a"]) OR empty($_POST["teacher1_2b"]) OR empty($_POST["teacher1_2c"]) OR empty($_POST["teacher1_3a"]) OR empty($_POST["teacher1_3b"]) ){
          $t1Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
   }
    if (empty($_POST["teacher2"])) {      
         $teacher2Err = "* Teacher2 is Required.";
         } 
    else {
       $teacher2 =$_POST['teacher2'];
       if(empty($_POST["teacher2_1a"]) OR empty($_POST["teacher2_1b"]) OR empty($_POST["teacher2_1c"]) OR empty($_POST["teacher2_1d"]) OR empty($_POST["teacher2_1e"]) OR empty($_POST["teacher2_1f"]) OR empty($_POST["teacher2_1g"]) OR empty($_POST["teacher2_2a"]) OR empty($_POST["teacher2_2b"]) OR empty($_POST["teacher2_2c"]) OR empty($_POST["teacher2_3a"]) OR empty($_POST["teacher2_3b"]) ){
          $t2Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
     }
    if (empty($_POST["teacher3"])) {      
         $teacher3Err = "* Teacher3 is Required.";
         } 
    else {
       $teacher3 =$_POST['teacher3'];
       // check if teacher3 only contains letters and whitespace
       if(empty($_POST["teacher3_1a"]) OR empty($_POST["teacher3_1b"]) OR empty($_POST["teacher3_1c"]) OR empty($_POST["teacher3_1d"]) OR empty($_POST["teacher3_1e"]) OR empty($_POST["teacher3_1f"]) OR empty($_POST["teacher3_1g"]) OR empty($_POST["teacher3_2a"]) OR empty($_POST["teacher3_2b"]) OR empty($_POST["teacher3_2c"]) OR empty($_POST["teacher3_3a"]) OR empty($_POST["teacher3_3b"]) ){
          $t3Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
     }
    
      if(empty($_POST['teacher4'])){}
    
      else{
        $teacher4 =$_POST['teacher4'];
       
       if(empty($_POST["teacher4_1a"]) OR empty($_POST["teacher4_1b"]) OR empty($_POST["teacher4_1c"]) OR empty($_POST["teacher4_1d"]) OR empty($_POST["teacher4_1e"]) OR empty($_POST["teacher4_1f"]) OR empty($_POST["teacher4_1g"]) OR empty($_POST["teacher4_2a"]) OR empty($_POST["teacher4_2b"]) OR empty($_POST["teacher4_2c"]) OR empty($_POST["teacher4_3a"]) OR empty($_POST["teacher4_3b"]) ){
          $t4Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
    }
    
       if(empty($_POST['teacher5'])){}
    
      else{
        $teacher5 =$_POST['teacher5'];
       
       if(empty($_POST["teacher5_1a"]) OR empty($_POST["teacher5_1b"]) OR empty($_POST["teacher5_1c"]) OR empty($_POST["teacher5_1d"]) OR empty($_POST["teacher5_1e"]) OR empty($_POST["teacher5_1f"]) OR empty($_POST["teacher5_1g"]) OR empty($_POST["teacher5_2a"]) OR empty($_POST["teacher5_2b"]) OR empty($_POST["teacher5_2c"]) OR empty($_POST["teacher5_3a"]) OR empty($_POST["teacher5_3b"]) ){
          $t5Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
    }
     
       if(empty($_POST['teacher6'])){}
    
      else{
        $teacher6 =$_POST['teacher6'];
       
       if(empty($_POST["teacher6_1a"]) OR empty($_POST["teacher6_1b"]) OR empty($_POST["teacher6_1c"]) OR empty($_POST["teacher6_1d"]) OR empty($_POST["teacher6_1e"]) OR empty($_POST["teacher6_1f"]) OR empty($_POST["teacher6_1g"]) OR empty($_POST["teacher6_2a"]) OR empty($_POST["teacher6_2b"]) OR empty($_POST["teacher6_2c"]) OR empty($_POST["teacher6_3a"]) OR empty($_POST["teacher6_3b"]) ){
          $t6Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
    }
         
       if(empty($_POST['teacher7'])){}
    
      else{
        $teacher7 =$_POST['teacher7'];
       
       if(empty($_POST["teacher7_1a"]) OR empty($_POST["teacher7_1b"]) OR empty($_POST["teacher7_1c"]) OR empty($_POST["teacher7_1d"]) OR empty($_POST["teacher7_1e"]) OR empty($_POST["teacher7_1f"]) OR empty($_POST["teacher7_1g"]) OR empty($_POST["teacher7_2a"]) OR empty($_POST["teacher7_2b"]) OR empty($_POST["teacher7_2c"]) OR empty($_POST["teacher7_3a"]) OR empty($_POST["teacher7_3b"]) ){
          $t7Err=" &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color='red'><b>* Please fill this teacher's feedback.</b></font>";
       }
    }

if(isset($_POST["submit"])){

$teacher1_1a=$_POST["teacher1_1a"];$teacher2_1a=$_POST["teacher2_1a"];$teacher3_1a=$_POST["teacher3_1a"];$teacher4_1a=$_POST["teacher4_1a"];$teacher5_1a=$_POST["teacher5_1a"];$teacher6_1a=$_POST["teacher6_1a"];$teacher7_1a=$_POST["teacher7_1a"];
$teacher1_1b=$_POST["teacher1_1b"];$teacher2_1b=$_POST["teacher2_1b"];$teacher3_1b=$_POST["teacher3_1b"];$teacher4_1b=$_POST["teacher4_1b"];$teacher5_1b=$_POST["teacher5_1b"];$teacher6_1b=$_POST["teacher6_1b"];$teacher7_1b=$_POST["teacher7_1b"];
$teacher1_1c=$_POST["teacher1_1c"];$teacher2_1c=$_POST["teacher2_1c"];$teacher3_1c=$_POST["teacher3_1c"];$teacher4_1c=$_POST["teacher4_1c"];$teacher5_1c=$_POST["teacher5_1c"];$teacher6_1c=$_POST["teacher6_1c"];$teacher7_1c=$_POST["teacher7_1c"];
$teacher1_1d=$_POST["teacher1_1d"];$teacher2_1d=$_POST["teacher2_1d"];$teacher3_1d=$_POST["teacher3_1d"];$teacher4_1d=$_POST["teacher4_1d"];$teacher5_1d=$_POST["teacher5_1d"];$teacher6_1d=$_POST["teacher6_1d"];$teacher7_1d=$_POST["teacher7_1d"];
$teacher1_1e=$_POST["teacher1_1e"];$teacher2_1e=$_POST["teacher2_1e"];$teacher3_1e=$_POST["teacher3_1e"];$teacher4_1e=$_POST["teacher4_1e"];$teacher5_1e=$_POST["teacher5_1e"];$teacher6_1e=$_POST["teacher6_1e"];$teacher7_1e=$_POST["teacher7_1e"];
$teacher1_1f=$_POST["teacher1_1f"];$teacher2_1f=$_POST["teacher2_1f"];$teacher3_1f=$_POST["teacher3_1f"];$teacher4_1f=$_POST["teacher4_1f"];$teacher5_1f=$_POST["teacher5_1f"];$teacher6_1f=$_POST["teacher6_1f"];$teacher7_1f=$_POST["teacher7_1f"];
$teacher1_1g=$_POST["teacher1_1g"];$teacher2_1g=$_POST["teacher2_1g"];$teacher3_1g=$_POST["teacher3_1g"];$teacher4_1g=$_POST["teacher4_1g"];$teacher5_1g=$_POST["teacher5_1g"];$teacher6_1g=$_POST["teacher6_1g"];$teacher7_1g=$_POST["teacher7_1g"];
$teacher1_2a=$_POST["teacher1_2a"];$teacher2_2a=$_POST["teacher2_2a"];$teacher3_2a=$_POST["teacher3_2a"];$teacher4_2a=$_POST["teacher4_2a"];$teacher5_2a=$_POST["teacher5_2a"];$teacher6_2a=$_POST["teacher6_2a"];$teacher7_2a=$_POST["teacher7_2a"];
$teacher1_2b=$_POST["teacher1_2b"];$teacher2_2b=$_POST["teacher2_2b"];$teacher3_2b=$_POST["teacher3_2b"];$teacher4_2b=$_POST["teacher4_2b"];$teacher5_2b=$_POST["teacher5_2b"];$teacher6_2b=$_POST["teacher6_2b"];$teacher7_2b=$_POST["teacher7_2b"];
$teacher1_2c=$_POST["teacher1_2c"];$teacher2_2c=$_POST["teacher2_2c"];$teacher3_2c=$_POST["teacher3_2c"];$teacher4_2c=$_POST["teacher4_2c"];$teacher5_2c=$_POST["teacher5_2c"];$teacher6_2c=$_POST["teacher6_2c"];$teacher7_2c=$_POST["teacher7_2c"];
$teacher1_3a=$_POST["teacher1_3a"];$teacher2_3a=$_POST["teacher2_3a"];$teacher3_3a=$_POST["teacher3_3a"];$teacher4_3a=$_POST["teacher4_3a"];$teacher5_3a=$_POST["teacher5_3a"];$teacher6_3a=$_POST["teacher6_3a"];$teacher7_3a=$_POST["teacher7_3a"];
$teacher1_3b=$_POST["teacher1_3b"];$teacher2_3b=$_POST["teacher2_3b"];$teacher3_3b=$_POST["teacher3_3b"];$teacher4_3b=$_POST["teacher4_3b"];$teacher5_3b=$_POST["teacher5_3b"];$teacher6_3b=$_POST["teacher6_3b"];$teacher7_3b=$_POST["teacher7_3b"];

$best_sub=$_POST["best_sub"];
$worst_sub=$_POST["worst_sub"];

$final_remark=addslashes($_POST["final_remark"]);

if($teacher1Err OR $teacher2Err OR $teacher3Err OR $teacher4Err OR $teacher5Err OR $teacher6Err OR $teacher7Err OR $t1Err OR $t2Err OR $t3Err OR $t4Err OR $t5Err OR $t6Err OR $t7Err OR $best_subErr OR $worst_subErr){
}
else{

      $email_c = $_SESSION['email'];
      $name_c = $_SESSION['name'];
      $course_c = $_SESSION['course'];
      $semister_c = $_SESSION['semister'];
      $rollno_c = $_SESSION['rollno'];
      $phno_c = $_SESSION['phno'];

  $em=$_SESSION['email'];

  $work="INSERT INTO `feedback_2016_2`.`feedback` (`id`, `attendance`, `name`, `rollno`, `phno` ,`course`, `semister`, `email`, `final_remark`, `best_sub`, `worst_sub`, `t1`, `t1_1a`, `t1_1b`, `t1_1c`, `t1_1d`, `t1_1e`, `t1_1f`, `t1_1g`, `t1_2a`, `t1_2b`, `t1_2c`, `t1_3a`, `t1_3b`, 
    `t2`, `t2_1a`, `t2_1b`, `t2_1c`, `t2_1d`, `t2_1e`, `t2_1f`, `t2_1g`, `t2_2a`, `t2_2b`, `t2_2c`, `t2_3a`, `t2_3b`,
    `t3`, `t3_1a`, `t3_1b`, `t3_1c`, `t3_1d`, `t3_1e`, `t3_1f`, `t3_1g`, `t3_2a`, `t3_2b`, `t3_2c`, `t3_3a`, `t3_3b`,
    `t4`, `t4_1a`, `t4_1b`, `t4_1c`, `t4_1d`, `t4_1e`, `t4_1f`, `t4_1g`, `t4_2a`, `t4_2b`, `t4_2c`, `t4_3a`, `t4_3b`,
    `t5`, `t5_1a`, `t5_1b`, `t5_1c`, `t5_1d`, `t5_1e`, `t5_1f`, `t5_1g`, `t5_2a`, `t5_2b`, `t5_2c`, `t5_3a`, `t5_3b`,
    `t6`, `t6_1a`, `t6_1b`, `t6_1c`, `t6_1d`, `t6_1e`, `t6_1f`, `t6_1g`, `t6_2a`, `t6_2b`, `t6_2c`, `t6_3a`, `t6_3b`,
    `t7`, `t7_1a`, `t7_1b`, `t7_1c`, `t7_1d`, `t7_1e`, `t7_1f`, `t7_1g`, `t7_2a`, `t7_2b`, `t7_2c`, `t7_3a`, `t7_3b`) 

  VALUES (NULL, 'yes', '$name_c', '$rollno_c', '$phno_c', '$course_c', '$semister_c', '$email_c', '$final_remark', '$best_sub', '$worst_sub',
   '$teacher1', '$teacher1_1a', '$teacher1_1b', '$teacher1_1c', '$teacher1_1d', '$teacher1_1e', '$teacher1_1f', '$teacher1_1g', '$teacher1_2a', '$teacher1_2b', '$teacher1_2c', '$teacher1_3a', '$teacher1_3b',
   '$teacher2', '$teacher2_1a', '$teacher2_1b', '$teacher2_1c', '$teacher2_1d', '$teacher2_1e', '$teacher2_1f', '$teacher2_1g', '$teacher2_2a', '$teacher2_2b', '$teacher2_2c', '$teacher2_3a', '$teacher2_3b',
   '$teacher3', '$teacher3_1a', '$teacher3_1b', '$teacher3_1c', '$teacher3_1d', '$teacher3_1e', '$teacher3_1f', '$teacher3_1g', '$teacher3_2a', '$teacher3_2b', '$teacher3_2c', '$teacher3_3a', '$teacher3_3b',
   '$teacher4', '$teacher4_1a', '$teacher4_1b', '$teacher4_1c', '$teacher4_1d', '$teacher4_1e', '$teacher4_1f', '$teacher4_1g', '$teacher4_2a', '$teacher4_2b', '$teacher4_2c', '$teacher4_3a', '$teacher4_3b',
   '$teacher5', '$teacher5_1a', '$teacher5_1b', '$teacher5_1c', '$teacher5_1d', '$teacher5_1e', '$teacher5_1f', '$teacher5_1g', '$teacher5_2a', '$teacher5_2b', '$teacher5_2c', '$teacher5_3a', '$teacher5_3b',
   '$teacher6', '$teacher6_1a', '$teacher6_1b', '$teacher6_1c', '$teacher6_1d', '$teacher6_1e', '$teacher6_1f', '$teacher6_1g', '$teacher6_2a', '$teacher6_2b', '$teacher6_2c', '$teacher6_3a', '$teacher6_3b',
   '$teacher7', '$teacher7_1a', '$teacher7_1b', '$teacher7_1c', '$teacher7_1d', '$teacher7_1e', '$teacher7_1f', '$teacher7_1g', '$teacher7_2a', '$teacher7_2b', '$teacher7_2c', '$teacher7_3a', '$teacher7_3b')";
//$tempaaa=", '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''";
//echo $work;
    mysql_query($work);
$semister=$_SESSION["semister"];

$sql="SELECT * FROM `feedback_2016_2`.`subjects` WHERE semister = '$semister' AND subject ='$best_sub' AND stream ='$course_c' ";
//echo $sql;
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {

    $count_good=$row['count_good'];
}

$sql="SELECT * FROM `feedback_2016_2`.`subjects` WHERE semister = '$semister' AND subject ='$worst_sub' AND stream ='$course_c' ";
//echo $sql;
$result = mysql_query($sql);

while($row = mysql_fetch_array($result)) {

    $count_bad=$row['count_bad'];    
}

$count_good=($count_good+1);
$count_bad=($count_bad+1);

  $work2="UPDATE `feedback_2016_2`.`subjects` 
          SET `count_good` = '$count_good' WHERE semister = '$semister' AND subject ='$best_sub' AND stream ='$course_c';";
mysql_query($work2);

  $work2="UPDATE `feedback_2016_2`.`subjects` 
          SET `count_bad` = '$count_bad' WHERE semister = '$semister' AND subject ='$worst_sub' AND stream ='$course_c';";
mysql_query($work2);

$posttab="_".$q;

$name_c=$_SESSION["name"];
$rollno_c=$_SESSION["rollno"];
$phno_c=$_SESSION["phno"];
$email_c=$_SESSION["email"];

$temp1=strtolower($teacher1.$posttab);
$temp2=strtolower($teacher2.$posttab);
$temp3=strtolower($teacher3.$posttab);
$temp4=strtolower($teacher4.$posttab);
$temp5=strtolower($teacher5.$posttab);
$temp6=strtolower($teacher6.$posttab);
$temp7=strtolower($teacher7.$posttab);


$work_t1="INSERT INTO `feedback_teacher`.`$temp1` (`id`, `submit_by_name` , `submit_by_id` , `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
          VALUES (NULL, '$name_c' ,'$email_c' ,'$teacher1_1a', '$teacher1_1b', '$teacher1_1c', '$teacher1_1d', '$teacher1_1e', '$teacher1_1f', '$teacher1_1g', '$teacher1_2a', '$teacher1_2b', '$teacher1_2c', '$teacher1_3a', '$teacher1_3b')"; 
$check=mysql_query($work_t1);
//echo $work_t1;


$work_t2="INSERT INTO `feedback_teacher`.`$temp2` (`id`, `submit_by_name` , `submit_by_id` ,`1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
          VALUES (NULL, '$name_c' ,'$email_c' , '$teacher2_1a', '$teacher2_1b', '$teacher2_1c', '$teacher2_1d', '$teacher2_1e', '$teacher2_1f', '$teacher2_1g', '$teacher2_2a', '$teacher2_2b', '$teacher2_2c', '$teacher2_3a', '$teacher2_3b')";

$check=mysql_query($work_t2);


$work_t3="INSERT INTO `feedback_teacher`.`$temp3` (`id`, `submit_by_name` , `submit_by_id` , `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
          VALUES (NULL, '$name_c' ,'$email_c' , '$teacher3_1a', '$teacher3_1b', '$teacher3_1c', '$teacher3_1d', '$teacher3_1e', '$teacher3_1f', '$teacher3_1g', '$teacher3_2a', '$teacher3_2b', '$teacher3_2c', '$teacher3_3a', '$teacher3_3b')";

$check=mysql_query($work_t3);


$work_t4="INSERT INTO `feedback_teacher`.`$temp4` (`id`, `submit_by_name` , `submit_by_id` , `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
VALUES (NULL, '$name_c' ,'$email_c' , '$teacher4_1a', '$teacher4_1b', '$teacher4_1c', '$teacher4_1d', '$teacher4_1e', '$teacher4_1f', '$teacher4_1g', '$teacher4_2a', '$teacher4_2b', '$teacher4_2c', '$teacher4_3a', '$teacher4_3b')";

$check=mysql_query($work_t4);


$work_t5="INSERT INTO `feedback_teacher`.`$temp5` (`id`, `submit_by_name` , `submit_by_id` , `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
VALUES (NULL, '$name_c' ,'$email_c' , '$teacher5_1a', '$teacher5_1b', '$teacher5_1c', '$teacher5_1d', '$teacher5_1e', '$teacher5_1f', '$teacher5_1g', '$teacher5_2a', '$teacher5_2b', '$teacher5_2c', '$teacher5_3a', '$teacher5_3b')";

$check=mysql_query($work_t5);


$work_t6="INSERT INTO `feedback_teacher`.`$temp6` (`id`, `submit_by_name` , `submit_by_id` , `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
VALUES (NULL, '$name_c' ,'$email_c' , '$teacher6_1a', '$teacher6_1b', '$teacher6_1c', '$teacher6_1d', '$teacher6_1e', '$teacher6_1f', '$teacher6_1g', '$teacher6_2a', '$teacher6_2b', '$teacher6_2c', '$teacher6_3a', '$teacher6_3b')";

$check=mysql_query($work_t6);


$work_t7="INSERT INTO `feedback_teacher`.`$temp7` (`id`, `submit_by_name` , `submit_by_id` , `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `2a`, `2b`, `2c`, `3a`, `3b`) 
          VALUES (NULL, '$name_c' ,'$email_c' , '$teacher7_1a', '$teacher7_1b', '$teacher7_1c', '$teacher7_1d', '$teacher7_1e', '$teacher7_1f', '$teacher7_1g', '$teacher7_2a', '$teacher7_2b', '$teacher7_2c', '$teacher7_3a', '$teacher7_3b')";

$check=mysql_query($work_t7);

$query="SELECT id FROM `feedback_2016_2`.`feedback` WHERE email='$em' ";

$result = mysql_query($query);
//echo $result;

while($row = mysql_fetch_array($result)) {
    $id_c=$row['id'];
}


$name=$_SESSION['name'];
$id_c=strtolower(substr($name,0,3)).$id_c;

$msg="Thank You <b>".$name."</b>(<b>".$rollno_c."</b>) ! You have successfully submitted the Teacher Feedback Form.<br>Your Acknowledgement Number is:<b>RC-".$id_c."</b>.Please retain this for future use.<br><br><b>Admin,<br> Ramanujan College</b>";
$subject="Acknowledgement For Teacher Feedback Form Submission.";



unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['course']);
unset($_SESSION['semister']);
unset($_SESSION['rollno']);
unset($_SESSION['phno']);
session_destroy();


//$url ="http://rcdufeedback.cu.cc";
echo "<meta http-equiv='refresh' content='1;url=".$url."'>";

/*header("location:feedback_student.php");*/
//echo '<META HTTP-EQUIV="refresh" CONTENT="1;URL=http://google.com/">';
//echo '<meta http-equiv="refresh" content="X;url=./logout.php">';
}


  }
}
?>

<link rel="alternate" type="text/xml+oembed" href="https://docs.google.com/forms/d/1M2rkdSwfHgHd3Xgd55q0VC3KVjDLIGwB3r9MD-y5aR4/oembed?url=https://docs.google.com/forms/d/1M2rkdSwfHgHd3Xgd55q0VC3KVjDLIGwB3r9MD-y5aR4/viewform&amp;format=xml">
<meta property="og:title" content="STUDENTS&#39; FEEDBACK FORM"><meta property="og:type" content="article"><meta property="og:site_name" content="Google Docs"><meta property="og:url" content="https://docs.google.com/forms/d/1M2rkdSwfHgHd3Xgd55q0VC3KVjDLIGwB3r9MD-y5aR4/viewform?usp=embed_facebook"><meta property="og:image" content="https://lh5.googleusercontent.com/L2KNutnZI71tY_jOWyBrTshfgSEMzJviCwRnDMtWLkGWipTiqrm1ebSQMo7vTU1zHVs=w1200-h630-p"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="630"><meta property="og:description" content="Kindly provide feedback on the teaching-learning environment in the college.

NOTE: 
Provide names of all teachers teaching you and leave the other teacher name fields blank.
To answer the questions, choose from 1 to 5 . 

Description of ratings are as follows :-
  1 - Strongly Disagree
  2 - Disagree
  3 - Satisfactory
  4 - Agree
  5 - Strongly Agree"><meta name="twitter:site" content="@googledocs"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content="https://lh5.googleusercontent.com/L2KNutnZI71tY_jOWyBrTshfgSEMzJviCwRnDMtWLkGWipTiqrm1ebSQMo7vTU1zHVs=w435-h251-p-b1-c0x00999999"><meta name="twitter:title" content="STUDENTS&#39; FEEDBACK FORM"><meta name="twitter:description" content="Kindly provide feedback on the teaching-learning environment in the college.

NOTE: 
Provide names of all teachers teaching you and leave the other teacher name fields blank.
To answer the questions, choose from 1 to 5 . 

Description of ratings are as follows :-
  1 - Strongly Disagree
  2 - Disagree
  3 - Satisfactory
  4 - Agree
  5 - Strongly Agree">
</head>
<body dir="ltr" class="ss-base-body"><div itemscope itemtype="http://schema.org/CreativeWork/FormObject"><meta itemprop="name" content="STUDENTS&#39; FEEDBACK FORM">
<meta itemprop="description" content="Kindly provide feedback on the teaching-learning environment in the college.

NOTE: 
Provide names of all teachers teaching you and leave the other teacher name fields blank.
To answer the questions, choose from 1 to 5 . 

Description of ratings are as follows :-
  1 - Strongly Disagree
  2 - Disagree
  3 - Satisfactory
  4 - Agree
  5 - Strongly Agree">

<meta itemprop="url" content="https://docs.google.com/forms/d/1M2rkdSwfHgHd3Xgd55q0VC3KVjDLIGwB3r9MD-y5aR4/viewform">
<meta itemprop="embedUrl" content="https://docs.google.com/forms/d/1M2rkdSwfHgHd3Xgd55q0VC3KVjDLIGwB3r9MD-y5aR4/viewform?embedded=true">
<meta itemprop="faviconUrl" content="./images/fav_icon.png">


<div class="ss-form-container"><div class="ss-header-image-container"><div class="ss-header-image-image"><div class="ss-header-image-sizer"></div></div></div>
<div class="ss-top-of-page"><div class="ss-form-heading"><h1 class="ss-form-title" dir="ltr">STUDENTS&#39; FEEDBACK FORM</h1>
<div class="ss-form-desc ss-no-ignore-whitespace" dir="ltr">Kindly provide feedback on the teaching-learning environment in the college.<p>NOTE: <br>Provide names of all teachers teaching you and leave the other teacher name fields blank.<br>To answer the questions, choose from 1 to 5 . <p>Description of ratings are as follows :-<br>  1 - Strongly Disagree<br>  2 - Disagree<br>  3 - Satisfactory<br>  4 - Agree<br>  5 - Strongly Agree</p></p></div>

<div class="ss-required-asterisk" aria-hidden="true">* Required</div></div></div>
<div class="ss-form"><form action="#" method="POST" id="ss-form" target="_self" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1840492417"><div class="ss-q-title">Name of the Teacher1
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<!--<input type="text" name="teacher2" value="<?php echo $teacher2 ?>" class="ss-q-short" id="entry_1840492417" dir="auto" aria-label="Name of the Teacher2  " aria-required="true" placeholder="Bhavya Ahuja" title="">-->
<?php
if(empty($teacher1)){
echo "<div class='styled-select'><select name='teacher1' onchange='teacher1_name(this.value)' >
  <option value=''>Select a value</option>
   ".$code2."</div>";
}
else{
    echo '<input type="hidden" name="teacher1" value="'.$teacher1.'" />';
    echo $teacher1;
   }
?>
<?php echo $teacher1Err." ".$t1Err; ?>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1840492417"><div class="ss-q-title">Name of the Teacher2
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<!--<input type="text" name="teacher2" value="<?php echo $teacher2 ?>" class="ss-q-short" id="entry_1840492417" dir="auto" aria-label="Name of the Teacher2  " aria-required="true" placeholder="Bhavya Ahuja" title="">-->
<?php
if(empty($teacher2)){
echo "<div class='styled-select'><select name='teacher2' onchange='teacher2_name(this.value)' >
  <option value=''>Select a value</option>  
   ".$code2."</div>";
}
else{

    echo '<input type="hidden" name="teacher2" value="'.$teacher2.'" />';
    echo $teacher2;
   }
?>

<?php echo $teacher2Err." ".$t2Err; ?>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1405422154"><div class="ss-q-title">Name of the Teacher3
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<?php
if(empty($teacher3)){
echo "<div class='styled-select'><select name='teacher3' onchange='teacher3_name(this.value)' >
  <option value=''>Select a value</option>  
   ".$code2."</div>";
}
else{
    echo '<input type="hidden" name="teacher3" value="'.$teacher3.'" />';
    echo $teacher3;
   }
?>

<?php echo $teacher3Err." ".$t3Err; ?>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_428260052"><div class="ss-q-title">Name of the Teacher4
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<?php
if(empty($teacher4)){
echo "<div class='styled-select'><select name='teacher4' onchange='teacher4_name(this.value)' >
  <option value=''>Select a value</option>  
   ".$code2."</div>";
}
else{
    echo '<input type="hidden" name="teacher4" value="'.$teacher4.'" />';
    echo $teacher4;
   }
?>

<?php echo $teacher4Err." ".$t4Err; ?>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1262448000"><div class="ss-q-title">Name of the Teacher5
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<?php
if(empty($teacher5)){
echo "<div class='styled-select'><select name='teacher5' onchange='teacher5_name(this.value)' >
  <option value=''>Select a value</option>  
   ".$code2."</div>";
}
else{
    echo '<input type="hidden" name="teacher5" value="'.$teacher5.'" />';
    echo $teacher5;
   }
?>

<?php echo $teacher5Err." ".$t5Err; ?>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_225389389"><div class="ss-q-title">Name of the Teacher6
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<?php
if(empty($teacher6)){
echo "<div class='styled-select'><select name='teacher6' onchange='teacher6_name(this.value)' >
  <option value=''>Select a value</option>  
   ".$code2."</div>";
}
else{
    echo '<input type="hidden" name="teacher6" value="'.$teacher6.'" />';
    echo $teacher6;
   }
?>

<?php echo $teacher6Err." ".$t6Err; ?>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1974647935"><div class="ss-q-title">Name of the Teacher7
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<?php
if(empty($teacher7)){
echo "<div class='styled-select'><select name='teacher7' onchange='teacher7_name(this.value)' >
  <option value=''>Select a value</option>  
   ".$code2."</div>";
}
else{
    echo '<input type="hidden" name="teacher7" value="'.$teacher7.'" />';
    echo $teacher7;
   }
?>

<?php echo $teacher7Err." ".$t7Err; ?>

<!--<br><br>
<form name="page_mod" method="post" action="#">
<input type="submit" name="add_teacher" value="Add Teacher" id="ss-submit" class="jfk-button jfk-button-action " >
</form>
-->

</div></div></div> <div class="errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-section-header"><div class="ss-form-entry">
<h2 class="ss-section-title">I. TEACHING-LEARNING PROCESS</h2>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1652151723"><div class="ss-q-title">a) The teacher provides guidance/counselling in academic and non-academic matters in/outside the class.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1a">Teacher1</div>'; else echo $teacher1?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1a" value="1" <?php if($teacher1_1a=="1") {echo "checked";} ?> id ="group_565550017_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1a" value="2" <?php if($teacher1_1a=="2") {echo "checked";} ?> id ="group_565550017_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1a" value="3" <?php if($teacher1_1a=="3") {echo "checked";} ?> id ="group_565550017_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1a" value="4" <?php if($teacher1_1a=="4") {echo "checked";} ?> id ="group_565550017_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1a" value="5" <?php if($teacher1_1a=="5") {echo "checked";} ?> id ="group_565550017_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1a">Teacher2</div>';else echo $teacher2 ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1a" value="1" <?php if($teacher2_1a=="1") {echo "checked";} ?> id="group_1673246327_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1a" value="2" <?php if($teacher2_1a=="2") {echo "checked";} ?> id="group_1673246327_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1a" value="3" <?php if($teacher2_1a=="3") {echo "checked";} ?> id="group_1673246327_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1a" value="4" <?php if($teacher2_1a=="4") {echo "checked";} ?> id="group_1673246327_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1a" value="5" <?php if($teacher2_1a=="5") {echo "checked";} ?> id="group_1673246327_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1a">Teacher3</div>';else echo $teacher3 ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1a" value="1" <?php if($teacher3_1a=="1") {echo "checked";} ?> id="group_1424790499_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1a" value="2" <?php if($teacher3_1a=="2") {echo "checked";} ?> id="group_1424790499_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1a" value="3" <?php if($teacher3_1a=="3") {echo "checked";} ?> id="group_1424790499_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1a" value="4" <?php if($teacher3_1a=="4") {echo "checked";} ?> id="group_1424790499_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1a" value="5" <?php if($teacher3_1a=="5") {echo "checked";} ?> id="group_1424790499_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1a">Teacher4</div>';else echo $teacher4 ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1a" value="1" <?php if($teacher4_1a=="1") {echo "checked";} ?> id="group_971459392_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1a" value="2" <?php if($teacher4_1a=="2") {echo "checked";} ?> id="group_971459392_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1a" value="3" <?php if($teacher4_1a=="3") {echo "checked";} ?> id="group_971459392_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1a" value="4" <?php if($teacher4_1a=="4") {echo "checked";} ?> id="group_971459392_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1a" value="5" <?php if($teacher4_1a=="5") {echo "checked";} ?> id="group_971459392_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1a">Teacher5</div>';else echo $teacher5 ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1a" value="1" <?php if($teacher5_1a=="1") {echo "checked";} ?> id="group_460928613_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1a" value="2" <?php if($teacher5_1a=="2") {echo "checked";} ?> id="group_460928613_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1a" value="3" <?php if($teacher5_1a=="3") {echo "checked";} ?> id="group_460928613_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1a" value="4" <?php if($teacher5_1a=="4") {echo "checked";} ?> id="group_460928613_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1a" value="5" <?php if($teacher5_1a=="5") {echo "checked";} ?> id="group_460928613_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1a">Teacher6</div>';else echo $teacher6 ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1a" value="1" <?php if($teacher6_1a=="1") {echo "checked";} ?> id="group_295804039_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1a" value="2" <?php if($teacher6_1a=="2") {echo "checked";} ?> id="group_295804039_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1a" value="3" <?php if($teacher6_1a=="3") {echo "checked";} ?> id="group_295804039_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1a" value="4" <?php if($teacher6_1a=="4") {echo "checked";} ?> id="group_295804039_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1a" value="5" <?php if($teacher6_1a=="5") {echo "checked";} ?> id="group_295804039_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="1652151723_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1a">Teacher7</div>';else echo $teacher7 ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1a" value="1" <?php if($teacher7_1a=="1") {echo "checked";} ?> id="group_594453688_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1a" value="2" <?php if($teacher7_1a=="2") {echo "checked";} ?> id="group_594453688_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1a" value="3" <?php if($teacher7_1a=="3") {echo "checked";} ?> id="group_594453688_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1a" value="4" <?php if($teacher7_1a=="4") {echo "checked";} ?> id="group_594453688_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1a" value="5" <?php if($teacher7_1a=="5") {echo "checked";} ?> id="group_594453688_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_183574063"><div class="ss-q-title">b) The teacher encourages participation and discussion in class. (Teacher-Student, Student-Student)
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1b">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1b" value="1" <?php if($teacher1_1b=="1") {echo "checked";} ?> id="group_188242291_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1b" value="2" <?php if($teacher1_1b=="2") {echo "checked";} ?> id="group_188242291_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1b" value="3" <?php if($teacher1_1b=="3") {echo "checked";} ?> id="group_188242291_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1b" value="4" <?php if($teacher1_1b=="4") {echo "checked";} ?> id="group_188242291_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1b" value="5" <?php if($teacher1_1b=="5") {echo "checked";} ?> id="group_188242291_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1b">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1b" value="1" <?php if($teacher2_1b=="1") {echo "checked";} ?> id="group_198519590_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1b" value="2" <?php if($teacher2_1b=="2") {echo "checked";} ?> id="group_198519590_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1b" value="3" <?php if($teacher2_1b=="3") {echo "checked";} ?> id="group_198519590_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1b" value="4" <?php if($teacher2_1b=="4") {echo "checked";} ?> id="group_198519590_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1b" value="5" <?php if($teacher2_1b=="5") {echo "checked";} ?> id="group_198519590_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1b">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1b" value="1" <?php if($teacher3_1b=="1") {echo "checked";} ?> id="group_657792395_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1b" value="2" <?php if($teacher3_1b=="2") {echo "checked";} ?> id="group_657792395_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1b" value="3" <?php if($teacher3_1b=="3") {echo "checked";} ?> id="group_657792395_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1b" value="4" <?php if($teacher3_1b=="4") {echo "checked";} ?> id="group_657792395_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1b" value="5" <?php if($teacher3_1b=="5") {echo "checked";} ?> id="group_657792395_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1b">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1b" value="1" <?php if($teacher4_1b=="1") {echo "checked";} ?> id="group_1096525289_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1b" value="2" <?php if($teacher4_1b=="2") {echo "checked";} ?> id="group_1096525289_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1b" value="3" <?php if($teacher4_1b=="3") {echo "checked";} ?> id="group_1096525289_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1b" value="4" <?php if($teacher4_1b=="4") {echo "checked";} ?> id="group_1096525289_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1b" value="5" <?php if($teacher4_1b=="5") {echo "checked";} ?> id="group_1096525289_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1b">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1b" value="1" <?php if($teacher5_1b=="1") {echo "checked";} ?> id="group_310063059_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1b" value="2" <?php if($teacher5_1b=="2") {echo "checked";} ?> id="group_310063059_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1b" value="3" <?php if($teacher5_1b=="3") {echo "checked";} ?> id="group_310063059_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1b" value="4" <?php if($teacher5_1b=="4") {echo "checked";} ?> id="group_310063059_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1b" value="5" <?php if($teacher5_1b=="5") {echo "checked";} ?> id="group_310063059_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1b">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1b" value="1" <?php if($teacher6_1b=="1") {echo "checked";} ?> id="group_649652702_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1b" value="2" <?php if($teacher6_1b=="2") {echo "checked";} ?> id="group_649652702_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1b" value="3" <?php if($teacher6_1b=="3") {echo "checked";} ?> id="group_649652702_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1b" value="4" <?php if($teacher6_1b=="4") {echo "checked";} ?> id="group_649652702_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1b" value="5" <?php if($teacher6_1b=="5") {echo "checked";} ?> id="group_649652702_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="183574063_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1b">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1b" value="1" <?php if($teacher7_1b=="1") {echo "checked";} ?> id="group_285481367_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1b" value="2" <?php if($teacher7_1b=="2") {echo "checked";} ?> id="group_285481367_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1b" value="3" <?php if($teacher7_1b=="3") {echo "checked";} ?> id="group_285481367_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1b" value="4" <?php if($teacher7_1b=="4") {echo "checked";} ?> id="group_285481367_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1b" value="5" <?php if($teacher7_1b=="5") {echo "checked";} ?> id="group_285481367_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1676869869"><div class="ss-q-title">c) The teacher uses modern teaching aids/gadgets, handouts, suggestion of references, ppts, web resources, etc.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1c">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1c" value="1" <?php if($teacher1_1c=="1") {echo "checked";} ?> id="group_2069783400_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1c" value="2" <?php if($teacher1_1c=="2") {echo "checked";} ?> id="group_2069783400_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1c" value="3" <?php if($teacher1_1c=="3") {echo "checked";} ?> id="group_2069783400_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1c" value="4" <?php if($teacher1_1c=="4") {echo "checked";} ?> id="group_2069783400_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1c" value="5" <?php if($teacher1_1c=="5") {echo "checked";} ?> id="group_2069783400_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1c">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1c" value="1" <?php if($teacher2_1c=="1") {echo "checked";} ?> id="group_1277596742_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1c" value="2" <?php if($teacher2_1c=="2") {echo "checked";} ?> id="group_1277596742_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1c" value="3" <?php if($teacher2_1c=="3") {echo "checked";} ?> id="group_1277596742_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1c" value="4" <?php if($teacher2_1c=="4") {echo "checked";} ?> id="group_1277596742_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1c" value="5" <?php if($teacher2_1c=="5") {echo "checked";} ?> id="group_1277596742_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1c">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1c" value="1" <?php if($teacher3_1c=="1") {echo "checked";} ?> id="group_497001294_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1c" value="2" <?php if($teacher3_1c=="2") {echo "checked";} ?> id="group_497001294_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1c" value="3" <?php if($teacher3_1c=="3") {echo "checked";} ?> id="group_497001294_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1c" value="4" <?php if($teacher3_1c=="4") {echo "checked";} ?> id="group_497001294_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1c" value="5" <?php if($teacher3_1c=="5") {echo "checked";} ?> id="group_497001294_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1c">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1c" value="1" <?php if($teacher4_1c=="1") {echo "checked";} ?> id="group_688338366_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1c" value="2" <?php if($teacher4_1c=="2") {echo "checked";} ?> id="group_688338366_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1c" value="3" <?php if($teacher4_1c=="3") {echo "checked";} ?> id="group_688338366_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1c" value="4" <?php if($teacher4_1c=="4") {echo "checked";} ?> id="group_688338366_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1c" value="5" <?php if($teacher4_1c=="5") {echo "checked";} ?> id="group_688338366_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1c">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1c" value="1" <?php if($teacher5_1c=="1") {echo "checked";} ?> id="group_309480149_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1c" value="2" <?php if($teacher5_1c=="2") {echo "checked";} ?> id="group_309480149_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1c" value="3" <?php if($teacher5_1c=="3") {echo "checked";} ?> id="group_309480149_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1c" value="4" <?php if($teacher5_1c=="4") {echo "checked";} ?> id="group_309480149_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1c" value="5" <?php if($teacher5_1c=="5") {echo "checked";} ?> id="group_309480149_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1c">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1c" value="1" <?php if($teacher6_1c=="1") {echo "checked";} ?> id="group_914905746_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1c" value="2" <?php if($teacher6_1c=="2") {echo "checked";} ?> id="group_914905746_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1c" value="3" <?php if($teacher6_1c=="3") {echo "checked";} ?> id="group_914905746_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1c" value="4" <?php if($teacher6_1c=="4") {echo "checked";} ?> id="group_914905746_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1c" value="5" <?php if($teacher6_1c=="5") {echo "checked";} ?> id="group_914905746_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="1676869869_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1c">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1c" value="1" <?php if($teacher7_1c=="1") {echo "checked";} ?> id="group_1214950974_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1c" value="2" <?php if($teacher7_1c=="2") {echo "checked";} ?> id="group_1214950974_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1c" value="3" <?php if($teacher7_1c=="3") {echo "checked";} ?> id="group_1214950974_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1c" value="4" <?php if($teacher7_1c=="4") {echo "checked";} ?> id="group_1214950974_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1c" value="5" <?php if($teacher7_1c=="5") {echo "checked";} ?> id="group_1214950974_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_2066786554"><div class="ss-q-title">d) The teacher pays attention to academically weaker students as well.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1d">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1d" value="1"  <?php if($teacher1_1d=="1") {echo "checked";} ?> id="group_2063233305_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1d" value="2"  <?php if($teacher1_1d=="2") {echo "checked";} ?> id="group_2063233305_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1d" value="3"  <?php if($teacher1_1d=="3") {echo "checked";} ?> id="group_2063233305_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1d" value="4"  <?php if($teacher1_1d=="4") {echo "checked";} ?> id="group_2063233305_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1d" value="5"  <?php if($teacher1_1d=="5") {echo "checked";} ?> id="group_2063233305_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1d">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1d" value="1"  <?php if($teacher2_1d=="1") {echo "checked";} ?> id="group_2029674054_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1d" value="2"  <?php if($teacher2_1d=="2") {echo "checked";} ?> id="group_2029674054_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1d" value="3"  <?php if($teacher2_1d=="3") {echo "checked";} ?> id="group_2029674054_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1d" value="4"  <?php if($teacher2_1d=="4") {echo "checked";} ?> id="group_2029674054_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1d" value="5"  <?php if($teacher2_1d=="5") {echo "checked";} ?> id="group_2029674054_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1d">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1d" value="1"  <?php if($teacher3_1d=="1") {echo "checked";} ?> id="group_338035405_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1d" value="2"  <?php if($teacher3_1d=="2") {echo "checked";} ?> id="group_338035405_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1d" value="3"  <?php if($teacher3_1d=="3") {echo "checked";} ?> id="group_338035405_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1d" value="4"  <?php if($teacher3_1d=="4") {echo "checked";} ?> id="group_338035405_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1d" value="5"  <?php if($teacher3_1d=="5") {echo "checked";} ?> id="group_338035405_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1d">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1d" value="1"  <?php if($teacher4_1d=="1") {echo "checked";} ?> id="group_2018918460_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1d" value="2"  <?php if($teacher4_1d=="2") {echo "checked";} ?> id="group_2018918460_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1d" value="3"  <?php if($teacher4_1d=="3") {echo "checked";} ?> id="group_2018918460_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1d" value="4"  <?php if($teacher4_1d=="4") {echo "checked";} ?> id="group_2018918460_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1d" value="5"  <?php if($teacher4_1d=="5") {echo "checked";} ?> id="group_2018918460_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1d">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1d" value="1"  <?php if($teacher5_1d=="1") {echo "checked";} ?> id="group_1217762470_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1d" value="2"  <?php if($teacher5_1d=="2") {echo "checked";} ?> id="group_1217762470_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1d" value="3"  <?php if($teacher5_1d=="3") {echo "checked";} ?> id="group_1217762470_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1d" value="4"  <?php if($teacher5_1d=="4") {echo "checked";} ?> id="group_1217762470_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1d" value="5"  <?php if($teacher5_1d=="5") {echo "checked";} ?> id="group_1217762470_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1d">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1d" value="1"  <?php if($teacher6_1d=="1") {echo "checked";} ?> id="group_37106449_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1d" value="2"  <?php if($teacher6_1d=="2") {echo "checked";} ?> id="group_37106449_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1d" value="3"  <?php if($teacher6_1d=="3") {echo "checked";} ?> id="group_37106449_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1d" value="4"  <?php if($teacher6_1d=="4") {echo "checked";} ?> id="group_37106449_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1d" value="5"  <?php if($teacher6_1d=="5") {echo "checked";} ?> id="group_37106449_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="2066786554_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1d">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1d" value="1"  <?php if($teacher7_1d=="1") {echo "checked";} ?> id="group_1605732787_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1d" value="2"  <?php if($teacher7_1d=="2") {echo "checked";} ?> id="group_1605732787_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1d" value="3"  <?php if($teacher7_1d=="3") {echo "checked";} ?> id="group_1605732787_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1d" value="4"  <?php if($teacher7_1d=="4") {echo "checked";} ?> id="group_1605732787_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1d" value="5"  <?php if($teacher7_1d=="5") {echo "checked";} ?> id="group_1605732787_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1136879057"><div class="ss-q-title">e) The teacher is regular and punctual in class.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1e">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1e" value="1" <?php if($teacher1_1e=="1") {echo "checked";} ?> id="group_1519080916_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1e" value="2" <?php if($teacher1_1e=="2") {echo "checked";} ?> id="group_1519080916_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1e" value="3" <?php if($teacher1_1e=="3") {echo "checked";} ?> id="group_1519080916_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1e" value="4" <?php if($teacher1_1e=="4") {echo "checked";} ?> id="group_1519080916_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1e" value="5" <?php if($teacher1_1e=="5") {echo "checked";} ?> id="group_1519080916_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1e">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1e" value="1" <?php if($teacher2_1e=="1") {echo "checked";} ?> id="group_53992949_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1e" value="2" <?php if($teacher2_1e=="2") {echo "checked";} ?> id="group_53992949_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1e" value="3" <?php if($teacher2_1e=="3") {echo "checked";} ?> id="group_53992949_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1e" value="4" <?php if($teacher2_1e=="4") {echo "checked";} ?> id="group_53992949_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1e" value="5" <?php if($teacher2_1e=="5") {echo "checked";} ?> id="group_53992949_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1e">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1e" value="1" <?php if($teacher3_1e=="1") {echo "checked";} ?> id="group_103140250_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1e" value="2" <?php if($teacher3_1e=="2") {echo "checked";} ?> id="group_103140250_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1e" value="3" <?php if($teacher3_1e=="3") {echo "checked";} ?> id="group_103140250_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1e" value="4" <?php if($teacher3_1e=="4") {echo "checked";} ?> id="group_103140250_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1e" value="5" <?php if($teacher3_1e=="5") {echo "checked";} ?> id="group_103140250_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1e">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1e" value="1" <?php if($teacher4_1e=="1") {echo "checked";} ?> id="group_635842397_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1e" value="2" <?php if($teacher4_1e=="2") {echo "checked";} ?> id="group_635842397_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1e" value="3" <?php if($teacher4_1e=="3") {echo "checked";} ?> id="group_635842397_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1e" value="4" <?php if($teacher4_1e=="4") {echo "checked";} ?> id="group_635842397_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1e" value="5" <?php if($teacher4_1e=="5") {echo "checked";} ?> id="group_635842397_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1e">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1e" value="1" <?php if($teacher5_1e=="1") {echo "checked";} ?> id="group_1661548583_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1e" value="2" <?php if($teacher5_1e=="2") {echo "checked";} ?> id="group_1661548583_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1e" value="3" <?php if($teacher5_1e=="3") {echo "checked";} ?> id="group_1661548583_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1e" value="4" <?php if($teacher5_1e=="4") {echo "checked";} ?> id="group_1661548583_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1e" value="5" <?php if($teacher5_1e=="5") {echo "checked";} ?> id="group_1661548583_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1e">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1e" value="1" <?php if($teacher6_1e=="1") {echo "checked";} ?> id="group_767949942_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1e" value="2" <?php if($teacher6_1e=="2") {echo "checked";} ?> id="group_767949942_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1e" value="3" <?php if($teacher6_1e=="3") {echo "checked";} ?> id="group_767949942_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1e" value="4" <?php if($teacher6_1e=="4") {echo "checked";} ?> id="group_767949942_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1e" value="5" <?php if($teacher6_1e=="5") {echo "checked";} ?> id="group_767949942_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="1136879057_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1e">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1e" value="1" <?php if($teacher7_1e=="1") {echo "checked";} ?> id="group_301886360_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1e" value="2" <?php if($teacher7_1e=="2") {echo "checked";} ?> id="group_301886360_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1e" value="3" <?php if($teacher7_1e=="3") {echo "checked";} ?> id="group_301886360_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1e" value="4" <?php if($teacher7_1e=="4") {echo "checked";} ?> id="group_301886360_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1e" value="5" <?php if($teacher7_1e=="5") {echo "checked";} ?> id="group_301886360_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1891050183"><div class="ss-q-title">f) The teacher invites opinion and questions on subject matter from students.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1f">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1f" value="1" <?php if($teacher1_1f=="1") {echo "checked";} ?> id="group_871938007_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1f" value="2" <?php if($teacher1_1f=="2") {echo "checked";} ?> id="group_871938007_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1f" value="3" <?php if($teacher1_1f=="3") {echo "checked";} ?> id="group_871938007_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1f" value="4" <?php if($teacher1_1f=="4") {echo "checked";} ?> id="group_871938007_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1f" value="5" <?php if($teacher1_1f=="5") {echo "checked";} ?> id="group_871938007_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1f">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1f" value="1" <?php if($teacher2_1f=="1") {echo "checked";} ?> id="group_568240272_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1f" value="2" <?php if($teacher2_1f=="2") {echo "checked";} ?> id="group_568240272_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1f" value="3" <?php if($teacher2_1f=="3") {echo "checked";} ?> id="group_568240272_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1f" value="4" <?php if($teacher2_1f=="4") {echo "checked";} ?> id="group_568240272_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1f" value="5" <?php if($teacher2_1f=="5") {echo "checked";} ?> id="group_568240272_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1f">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1f" value="1" <?php if($teacher3_1f=="1") {echo "checked";} ?> id="group_1566628899_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1f" value="2" <?php if($teacher3_1f=="2") {echo "checked";} ?> id="group_1566628899_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1f" value="3" <?php if($teacher3_1f=="3") {echo "checked";} ?> id="group_1566628899_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1f" value="4" <?php if($teacher3_1f=="4") {echo "checked";} ?> id="group_1566628899_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1f" value="5" <?php if($teacher3_1f=="5") {echo "checked";} ?> id="group_1566628899_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1f">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1f" value="1" <?php if($teacher4_1f=="1") {echo "checked";} ?> id="group_250742846_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1f" value="2" <?php if($teacher4_1f=="2") {echo "checked";} ?> id="group_250742846_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1f" value="3" <?php if($teacher4_1f=="3") {echo "checked";} ?> id="group_250742846_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1f" value="4" <?php if($teacher4_1f=="4") {echo "checked";} ?> id="group_250742846_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1f" value="5" <?php if($teacher4_1f=="5") {echo "checked";} ?> id="group_250742846_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1f">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1f" value="1" <?php if($teacher5_1f=="1") {echo "checked";} ?> id="group_124346316_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1f" value="2" <?php if($teacher5_1f=="2") {echo "checked";} ?> id="group_124346316_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1f" value="3" <?php if($teacher5_1f=="3") {echo "checked";} ?> id="group_124346316_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1f" value="4" <?php if($teacher5_1f=="4") {echo "checked";} ?> id="group_124346316_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1f" value="5" <?php if($teacher5_1f=="5") {echo "checked";} ?> id="group_124346316_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1f">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1f" value="1" <?php if($teacher6_1f=="1") {echo "checked";} ?> id="group_269060222_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1f" value="2" <?php if($teacher6_1f=="2") {echo "checked";} ?> id="group_269060222_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1f" value="3" <?php if($teacher6_1f=="3") {echo "checked";} ?> id="group_269060222_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1f" value="4" <?php if($teacher6_1f=="4") {echo "checked";} ?> id="group_269060222_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1f" value="5" <?php if($teacher6_1f=="5") {echo "checked";} ?> id="group_269060222_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="1891050183_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1f">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1f" value="1" <?php if($teacher7_1f=="1") {echo "checked";} ?> id="group_657382545_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1f" value="2" <?php if($teacher7_1f=="2") {echo "checked";} ?> id="group_657382545_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1f" value="3" <?php if($teacher7_1f=="3") {echo "checked";} ?> id="group_657382545_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1f" value="4" <?php if($teacher7_1f=="4") {echo "checked";} ?> id="group_657382545_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1f" value="5" <?php if($teacher7_1f=="5") {echo "checked";} ?> id="group_657382545_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1273178914"><div class="ss-q-title">g) The teacher inspires students for ethical conduct.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_1g">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1g" value="1" <?php if($teacher1_1g=="1") {echo "checked";} ?> id="group_1901481153_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1g" value="2" <?php if($teacher1_1g=="2") {echo "checked";} ?> id="group_1901481153_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1g" value="3" <?php if($teacher1_1g=="3") {echo "checked";} ?> id="group_1901481153_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1g" value="4" <?php if($teacher1_1g=="4") {echo "checked";} ?> id="group_1901481153_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_1g" value="5" <?php if($teacher1_1g=="5") {echo "checked";} ?> id="group_1901481153_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_1g">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1g" value="1" <?php if($teacher2_1g=="1") {echo "checked";} ?> id="group_1521194634_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1g" value="2" <?php if($teacher2_1g=="2") {echo "checked";} ?> id="group_1521194634_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1g" value="3" <?php if($teacher2_1g=="3") {echo "checked";} ?> id="group_1521194634_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1g" value="4" <?php if($teacher2_1g=="4") {echo "checked";} ?> id="group_1521194634_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_1g" value="5" <?php if($teacher2_1g=="5") {echo "checked";} ?> id="group_1521194634_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_1g">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1g" value="1" <?php if($teacher3_1g=="1") {echo "checked";} ?> id="group_1834501996_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1g" value="2" <?php if($teacher3_1g=="2") {echo "checked";} ?> id="group_1834501996_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1g" value="3" <?php if($teacher3_1g=="3") {echo "checked";} ?> id="group_1834501996_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1g" value="4" <?php if($teacher3_1g=="4") {echo "checked";} ?> id="group_1834501996_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_1g" value="5" <?php if($teacher3_1g=="5") {echo "checked";} ?> id="group_1834501996_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_1g">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1g" value="1" <?php if($teacher4_1g=="1") {echo "checked";} ?> id="group_2064538683_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1g" value="2" <?php if($teacher4_1g=="2") {echo "checked";} ?> id="group_2064538683_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1g" value="3" <?php if($teacher4_1g=="3") {echo "checked";} ?> id="group_2064538683_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1g" value="4" <?php if($teacher4_1g=="4") {echo "checked";} ?> id="group_2064538683_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_1g" value="5" <?php if($teacher4_1g=="5") {echo "checked";} ?> id="group_2064538683_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_1g">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1g" value="1" <?php if($teacher5_1g=="1") {echo "checked";} ?> id="group_860146651_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1g" value="2" <?php if($teacher5_1g=="2") {echo "checked";} ?> id="group_860146651_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1g" value="3" <?php if($teacher5_1g=="3") {echo "checked";} ?> id="group_860146651_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1g" value="4" <?php if($teacher5_1g=="4") {echo "checked";} ?> id="group_860146651_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_1g" value="5" <?php if($teacher5_1g=="5") {echo "checked";} ?> id="group_860146651_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_1g">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1g" value="1" <?php if($teacher6_1g=="1") {echo "checked";} ?> id="group_263125822_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1g" value="2" <?php if($teacher6_1g=="2") {echo "checked";} ?> id="group_263125822_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1g" value="3" <?php if($teacher6_1g=="3") {echo "checked";} ?> id="group_263125822_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1g" value="4" <?php if($teacher6_1g=="4") {echo "checked";} ?> id="group_263125822_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_1g" value="5" <?php if($teacher6_1g=="5") {echo "checked";} ?> id="group_263125822_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="1273178914_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_1g">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1g" value="1" <?php if($teacher7_1g=="1") {echo "checked";} ?> id="group_92152626_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1g" value="2" <?php if($teacher7_1g=="2") {echo "checked";} ?> id="group_92152626_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1g" value="3" <?php if($teacher7_1g=="3") {echo "checked";} ?> id="group_92152626_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1g" value="4" <?php if($teacher7_1g=="4") {echo "checked";} ?> id="group_92152626_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_1g" value="5" <?php if($teacher7_1g=="5") {echo "checked";} ?> id="group_92152626_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-section-header"><div class="ss-form-entry">
<h2 class="ss-section-title">II. COURSE CONTENT</h2>
<div class="ss-section-description ss-no-ignore-whitespace"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1391963590"><div class="ss-q-title">a) The teacher links the subject to real life experiences and creates interest in the subject.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_2a">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2a" value="1" <?php if($teacher1_2a=="1") {echo "checked";} ?> id="group_1713742299_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2a" value="2" <?php if($teacher1_2a=="2") {echo "checked";} ?> id="group_1713742299_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2a" value="3" <?php if($teacher1_2a=="3") {echo "checked";} ?> id="group_1713742299_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2a" value="4" <?php if($teacher1_2a=="4") {echo "checked";} ?> id="group_1713742299_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2a" value="5" <?php if($teacher1_2a=="5") {echo "checked";} ?> id="group_1713742299_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_2a">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2a" value="1" <?php if($teacher2_2a=="1") {echo "checked";} ?> id="group_1727089389_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2a" value="2" <?php if($teacher2_2a=="2") {echo "checked";} ?> id="group_1727089389_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2a" value="3" <?php if($teacher2_2a=="3") {echo "checked";} ?> id="group_1727089389_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2a" value="4" <?php if($teacher2_2a=="4") {echo "checked";} ?> id="group_1727089389_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2a" value="5" <?php if($teacher2_2a=="5") {echo "checked";} ?> id="group_1727089389_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_2a">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2a" value="1" <?php if($teacher3_2a=="1") {echo "checked";} ?> id="group_202683480_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2a" value="2" <?php if($teacher3_2a=="2") {echo "checked";} ?> id="group_202683480_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2a" value="3" <?php if($teacher3_2a=="3") {echo "checked";} ?> id="group_202683480_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2a" value="4" <?php if($teacher3_2a=="4") {echo "checked";} ?> id="group_202683480_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2a" value="5" <?php if($teacher3_2a=="5") {echo "checked";} ?> id="group_202683480_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_2a">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2a" value="1" <?php if($teacher4_2a=="1") {echo "checked";} ?> id="group_1396866310_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2a" value="2" <?php if($teacher4_2a=="2") {echo "checked";} ?> id="group_1396866310_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2a" value="3" <?php if($teacher4_2a=="3") {echo "checked";} ?> id="group_1396866310_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2a" value="4" <?php if($teacher4_2a=="4") {echo "checked";} ?> id="group_1396866310_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2a" value="5" <?php if($teacher4_2a=="5") {echo "checked";} ?> id="group_1396866310_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_2a">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2a" value="1" <?php if($teacher5_2a=="1") {echo "checked";} ?> id="group_477036240_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2a" value="2" <?php if($teacher5_2a=="2") {echo "checked";} ?> id="group_477036240_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2a" value="3" <?php if($teacher5_2a=="3") {echo "checked";} ?> id="group_477036240_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2a" value="4" <?php if($teacher5_2a=="4") {echo "checked";} ?> id="group_477036240_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2a" value="5" <?php if($teacher5_2a=="5") {echo "checked";} ?> id="group_477036240_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_2a">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2a" value="1" <?php if($teacher6_2a=="1") {echo "checked";} ?> id="group_1456646058_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2a" value="2" <?php if($teacher6_2a=="2") {echo "checked";} ?> id="group_1456646058_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2a" value="3" <?php if($teacher6_2a=="3") {echo "checked";} ?> id="group_1456646058_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2a" value="4" <?php if($teacher6_2a=="4") {echo "checked";} ?> id="group_1456646058_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2a" value="5" <?php if($teacher6_2a=="5") {echo "checked";} ?> id="group_1456646058_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="1391963590_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_2a">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2a" value="1" <?php if($teacher7_2a=="1") {echo "checked";} ?> id="group_750506743_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2a" value="2" <?php if($teacher7_2a=="2") {echo "checked";} ?> id="group_750506743_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2a" value="3" <?php if($teacher7_2a=="3") {echo "checked";} ?> id="group_750506743_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2a" value="4" <?php if($teacher7_2a=="4") {echo "checked";} ?> id="group_750506743_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2a" value="5" <?php if($teacher7_2a=="5") {echo "checked";} ?> id="group_750506743_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_40631754"><div class="ss-q-title">b) The teacher covers the entire syllabus in time.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_2b">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2b" value="1" <?php if($teacher1_2b=="1") {echo "checked";} ?> id="group_966155699_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2b" value="2" <?php if($teacher1_2b=="2") {echo "checked";} ?> id="group_966155699_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2b" value="3" <?php if($teacher1_2b=="3") {echo "checked";} ?> id="group_966155699_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2b" value="4" <?php if($teacher1_2b=="4") {echo "checked";} ?> id="group_966155699_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2b" value="5" <?php if($teacher1_2b=="5") {echo "checked";} ?> id="group_966155699_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_2b">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2b" value="1" <?php if($teacher2_2b=="1") {echo "checked";} ?> id="group_1151779995_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2b" value="2" <?php if($teacher2_2b=="2") {echo "checked";} ?> id="group_1151779995_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2b" value="3" <?php if($teacher2_2b=="3") {echo "checked";} ?> id="group_1151779995_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2b" value="4" <?php if($teacher2_2b=="4") {echo "checked";} ?> id="group_1151779995_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2b" value="5" <?php if($teacher2_2b=="5") {echo "checked";} ?> id="group_1151779995_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_2b">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2b" value="1" <?php if($teacher3_2b=="1") {echo "checked";} ?> id="group_1466660797_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2b" value="2" <?php if($teacher3_2b=="2") {echo "checked";} ?> id="group_1466660797_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2b" value="3" <?php if($teacher3_2b=="3") {echo "checked";} ?> id="group_1466660797_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2b" value="4" <?php if($teacher3_2b=="4") {echo "checked";} ?> id="group_1466660797_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2b" value="5" <?php if($teacher3_2b=="5") {echo "checked";} ?> id="group_1466660797_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_2b">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2b" value="1" <?php if($teacher4_2b=="1") {echo "checked";} ?> id="group_2053773851_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2b" value="2" <?php if($teacher4_2b=="2") {echo "checked";} ?> id="group_2053773851_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2b" value="3" <?php if($teacher4_2b=="3") {echo "checked";} ?> id="group_2053773851_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2b" value="4" <?php if($teacher4_2b=="4") {echo "checked";} ?> id="group_2053773851_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2b" value="5" <?php if($teacher4_2b=="5") {echo "checked";} ?> id="group_2053773851_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_2b">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2b" value="1" <?php if($teacher5_2b=="1") {echo "checked";} ?> id="group_369214067_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2b" value="2" <?php if($teacher5_2b=="2") {echo "checked";} ?> id="group_369214067_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2b" value="3" <?php if($teacher5_2b=="3") {echo "checked";} ?> id="group_369214067_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2b" value="4" <?php if($teacher5_2b=="4") {echo "checked";} ?> id="group_369214067_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2b" value="5" <?php if($teacher5_2b=="5") {echo "checked";} ?> id="group_369214067_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_2b">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2b" value="1" <?php if($teacher6_2b=="1") {echo "checked";} ?> id="group_468146592_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2b" value="2" <?php if($teacher6_2b=="2") {echo "checked";} ?> id="group_468146592_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2b" value="3" <?php if($teacher6_2b=="3") {echo "checked";} ?> id="group_468146592_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2b" value="4" <?php if($teacher6_2b=="4") {echo "checked";} ?> id="group_468146592_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2b" value="5" <?php if($teacher6_2b=="5") {echo "checked";} ?> id="group_468146592_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="40631754_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_2b">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2b" value="1" <?php if($teacher7_2b=="1") {echo "checked";} ?> id="group_1217119710_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2b" value="2" <?php if($teacher7_2b=="2") {echo "checked";} ?> id="group_1217119710_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2b" value="3" <?php if($teacher7_2b=="3") {echo "checked";} ?> id="group_1217119710_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2b" value="4" <?php if($teacher7_2b=="4") {echo "checked";} ?> id="group_1217119710_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2b" value="5" <?php if($teacher7_2b=="5") {echo "checked";} ?> id="group_1217119710_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_2004751410"><div class="ss-q-title">c) The teacher explains the topics efficiently.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_2c">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2c" value="1" <?php if($teacher1_2c=="1") {echo "checked";} ?> id="group_1458940263_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2c" value="2" <?php if($teacher1_2c=="2") {echo "checked";} ?> id="group_1458940263_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2c" value="3" <?php if($teacher1_2c=="3") {echo "checked";} ?> id="group_1458940263_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2c" value="4" <?php if($teacher1_2c=="4") {echo "checked";} ?> id="group_1458940263_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_2c" value="5" <?php if($teacher1_2c=="5") {echo "checked";} ?> id="group_1458940263_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_2c">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2c" value="1" <?php if($teacher2_2c=="1") {echo "checked";} ?> id="group_607099515_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2c" value="2" <?php if($teacher2_2c=="2") {echo "checked";} ?> id="group_607099515_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2c" value="3" <?php if($teacher2_2c=="3") {echo "checked";} ?> id="group_607099515_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2c" value="4" <?php if($teacher2_2c=="4") {echo "checked";} ?> id="group_607099515_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_2c" value="5" <?php if($teacher2_2c=="5") {echo "checked";} ?> id="group_607099515_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_2c">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2c" value="1" <?php if($teacher3_2c=="1") {echo "checked";} ?> id="group_296331127_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2c" value="2" <?php if($teacher3_2c=="2") {echo "checked";} ?> id="group_296331127_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2c" value="3" <?php if($teacher3_2c=="3") {echo "checked";} ?> id="group_296331127_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2c" value="4" <?php if($teacher3_2c=="4") {echo "checked";} ?> id="group_296331127_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_2c" value="5" <?php if($teacher3_2c=="5") {echo "checked";} ?> id="group_296331127_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_2c">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2c" value="1" <?php if($teacher4_2c=="1") {echo "checked";} ?> id="group_2130085982_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2c" value="2" <?php if($teacher4_2c=="2") {echo "checked";} ?> id="group_2130085982_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2c" value="3" <?php if($teacher4_2c=="3") {echo "checked";} ?> id="group_2130085982_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2c" value="4" <?php if($teacher4_2c=="4") {echo "checked";} ?> id="group_2130085982_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_2c" value="5" <?php if($teacher4_2c=="5") {echo "checked";} ?> id="group_2130085982_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_2c">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2c" value="1" <?php if($teacher5_2c=="1") {echo "checked";} ?> id="group_554953047_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2c" value="2" <?php if($teacher5_2c=="2") {echo "checked";} ?> id="group_554953047_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2c" value="3" <?php if($teacher5_2c=="3") {echo "checked";} ?> id="group_554953047_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2c" value="4" <?php if($teacher5_2c=="4") {echo "checked";} ?> id="group_554953047_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_2c" value="5" <?php if($teacher5_2c=="5") {echo "checked";} ?> id="group_554953047_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_2c">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2c" value="1" <?php if($teacher6_2c=="1") {echo "checked";} ?> id="group_1650699174_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2c" value="2" <?php if($teacher6_2c=="2") {echo "checked";} ?> id="group_1650699174_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2c" value="3" <?php if($teacher6_2c=="3") {echo "checked";} ?> id="group_1650699174_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2c" value="4" <?php if($teacher6_2c=="4") {echo "checked";} ?> id="group_1650699174_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_2c" value="5" <?php if($teacher6_2c=="5") {echo "checked";} ?> id="group_1650699174_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="2004751410_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_2c">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2c" value="1" <?php if($teacher7_2c=="1") {echo "checked";} ?> id="group_1748589120_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2c" value="2" <?php if($teacher7_2c=="2") {echo "checked";} ?> id="group_1748589120_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2c" value="3" <?php if($teacher7_2c=="3") {echo "checked";} ?> id="group_1748589120_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2c" value="4" <?php if($teacher7_2c=="4") {echo "checked";} ?> id="group_1748589120_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_2c" value="5" <?php if($teacher7_2c=="5") {echo "checked";} ?> id="group_1748589120_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-section-header"><div class="ss-form-entry">
<h2 class="ss-section-title">III. EVALUATION PROCESS</h2>
<div class="ss-section-description ss-no-ignore-whitespace"></div>
</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_177517047"><div class="ss-q-title">a) Periodical assessments are conducted as per schedule.
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_3a">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3a" value="1" <?php if($teacher1_3a=="1") {echo "checked";} ?> id="group_796992760_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3a" value="2" <?php if($teacher1_3a=="2") {echo "checked";} ?> id="group_796992760_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3a" value="3" <?php if($teacher1_3a=="3") {echo "checked";} ?> id="group_796992760_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3a" value="4" <?php if($teacher1_3a=="4") {echo "checked";} ?> id="group_796992760_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3a" value="5" <?php if($teacher1_3a=="5") {echo "checked";} ?> id="group_796992760_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_3a">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3a" value="1" <?php if($teacher2_3a=="1") {echo "checked";} ?> id="group_1304391176_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3a" value="2" <?php if($teacher2_3a=="2") {echo "checked";} ?> id="group_1304391176_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3a" value="3" <?php if($teacher2_3a=="3") {echo "checked";} ?> id="group_1304391176_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3a" value="4" <?php if($teacher2_3a=="4") {echo "checked";} ?> id="group_1304391176_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3a" value="5" <?php if($teacher2_3a=="5") {echo "checked";} ?> id="group_1304391176_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_3a">Teacher3</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3a" value="1" <?php if($teacher3_3a=="1") {echo "checked";} ?> id="group_943725077_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3a" value="2" <?php if($teacher3_3a=="2") {echo "checked";} ?> id="group_943725077_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3a" value="3" <?php if($teacher3_3a=="3") {echo "checked";} ?> id="group_943725077_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3a" value="4" <?php if($teacher3_3a=="4") {echo "checked";} ?> id="group_943725077_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3a" value="5" <?php if($teacher3_3a=="5") {echo "checked";} ?> id="group_943725077_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_3a">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3a" value="1" <?php if($teacher4_3a=="1") {echo "checked";} ?> id="group_1295186722_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3a" value="2" <?php if($teacher4_3a=="2") {echo "checked";} ?> id="group_1295186722_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3a" value="3" <?php if($teacher4_3a=="3") {echo "checked";} ?> id="group_1295186722_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3a" value="4" <?php if($teacher4_3a=="4") {echo "checked";} ?> id="group_1295186722_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3a" value="5" <?php if($teacher4_3a=="5") {echo "checked";} ?> id="group_1295186722_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_3a">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3a" value="1" <?php if($teacher5_3a=="1") {echo "checked";} ?> id="group_117665312_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3a" value="2" <?php if($teacher5_3a=="2") {echo "checked";} ?> id="group_117665312_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3a" value="3" <?php if($teacher5_3a=="3") {echo "checked";} ?> id="group_117665312_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3a" value="4" <?php if($teacher5_3a=="4") {echo "checked";} ?> id="group_117665312_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3a" value="5" <?php if($teacher5_3a=="5") {echo "checked";} ?> id="group_117665312_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_3a">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3a" value="1" <?php if($teacher6_3a=="1") {echo "checked";} ?> id="group_946274335_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3a" value="2" <?php if($teacher6_3a=="2") {echo "checked";} ?> id="group_946274335_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3a" value="3" <?php if($teacher6_3a=="3") {echo "checked";} ?> id="group_946274335_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3a" value="4" <?php if($teacher6_3a=="4") {echo "checked";} ?> id="group_946274335_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3a" value="5" <?php if($teacher6_3a=="5") {echo "checked";} ?> id="group_946274335_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="177517047_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_3a">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3a" value="1" <?php if($teacher7_3a=="1") {echo "checked";} ?> id="group_1735935229_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3a" value="2" <?php if($teacher7_3a=="2") {echo "checked";} ?> id="group_1735935229_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3a" value="3" <?php if($teacher7_3a=="3") {echo "checked";} ?> id="group_1735935229_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3a" value="4" <?php if($teacher7_3a=="4") {echo "checked";} ?> id="group_1735935229_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3a" value="5" <?php if($teacher7_3a=="5") {echo "checked";} ?> id="group_1735935229_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>
<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-grid"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_325235019"><div class="ss-q-title">b) The teacher uses non-traditional methods of evaluation like quiz, seminars, assignments, classroom presentations/participation (or any other method).
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div>
<table border="0" cellpadding="5" cellspacing="0"><thead><tr><td class="ss-gridnumbers ss-gridrow-leftlabel"></td>
<td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">1</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">2</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">3</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">4</label></td> <td class="ss-gridnumbers" style="width: 16.8%;"><label class="ss-gridnumber">5</label></td> </tr></thead>
<tbody><tr role="radiogroup" aria-label="Teacher1" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher1)) echo'<div id="teacher1_3b">Teacher1</div>';else echo $teacher1; ?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3b" value="1" <?php if($teacher1_3b=="1") {echo "checked";} ?> id="group_1091388241_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3b" value="2" <?php if($teacher1_3b=="2") {echo "checked";} ?> id="group_1091388241_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3b" value="3" <?php if($teacher1_3b=="3") {echo "checked";} ?> id="group_1091388241_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3b" value="4" <?php if($teacher1_3b=="4") {echo "checked";} ?> id="group_1091388241_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher1_3b" value="5" <?php if($teacher1_3b=="5") {echo "checked";} ?> id="group_1091388241_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher2" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher2)) echo'<div id="teacher2_3b">Teacher2</div>';else echo $teacher2;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3b" value="1" <?php if($teacher2_3b=="1") {echo "checked";} ?> id="group_329378477_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3b" value="2" <?php if($teacher2_3b=="2") {echo "checked";} ?> id="group_329378477_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3b" value="3" <?php if($teacher2_3b=="3") {echo "checked";} ?> id="group_329378477_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3b" value="4" <?php if($teacher2_3b=="4") {echo "checked";} ?> id="group_329378477_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher2_3b" value="5" <?php if($teacher2_3b=="5") {echo "checked";} ?> id="group_329378477_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher3" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher3)) echo'<div id="teacher3_3b">Teacher4</div>';else echo $teacher3;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3b" value="1" <?php if($teacher3_3b=="1") {echo "checked";} ?> id="group_1066262913_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3b" value="2" <?php if($teacher3_3b=="2") {echo "checked";} ?> id="group_1066262913_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3b" value="3" <?php if($teacher3_3b=="3") {echo "checked";} ?> id="group_1066262913_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3b" value="4" <?php if($teacher3_3b=="4") {echo "checked";} ?> id="group_1066262913_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher3_3b" value="5" <?php if($teacher3_3b=="5") {echo "checked";} ?> id="group_1066262913_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher4" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher4)) echo'<div id="teacher4_3b">Teacher4</div>';else echo $teacher4;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3b" value="1" <?php if($teacher4_3b=="1") {echo "checked";} ?> id="group_1596420377_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3b" value="2" <?php if($teacher4_3b=="2") {echo "checked";} ?> id="group_1596420377_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3b" value="3" <?php if($teacher4_3b=="3") {echo "checked";} ?> id="group_1596420377_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3b" value="4" <?php if($teacher4_3b=="4") {echo "checked";} ?> id="group_1596420377_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher4_3b" value="5" <?php if($teacher4_3b=="5") {echo "checked";} ?> id="group_1596420377_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher5" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher5)) echo'<div id="teacher5_3b">Teacher5</div>';else echo $teacher5;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3b" value="1" <?php if($teacher5_3b=="1") {echo "checked";} ?> id="group_820965710_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3b" value="2" <?php if($teacher5_3b=="2") {echo "checked";} ?> id="group_820965710_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3b" value="3" <?php if($teacher5_3b=="3") {echo "checked";} ?> id="group_820965710_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3b" value="4" <?php if($teacher5_3b=="4") {echo "checked";} ?> id="group_820965710_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher5_3b" value="5" <?php if($teacher5_3b=="5") {echo "checked";} ?> id="group_820965710_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher6" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-even"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher6)) echo'<div id="teacher6_3b">Teacher6</div>';else echo $teacher6;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3b" value="1" <?php if($teacher6_3b=="1") {echo "checked";} ?> id="group_1523317313_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3b" value="2" <?php if($teacher6_3b=="2") {echo "checked";} ?> id="group_1523317313_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3b" value="3" <?php if($teacher6_3b=="3") {echo "checked";} ?> id="group_1523317313_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3b" value="4" <?php if($teacher6_3b=="4") {echo "checked";} ?> id="group_1523317313_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher6_3b" value="5" <?php if($teacher6_3b=="5") {echo "checked";} ?> id="group_1523317313_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr> <tr role="radiogroup" aria-label="Teacher7" aria-describedby="325235019_errorMessage" class="ss-gridrow ss-grid-row-odd"><td class="ss-gridrow ss-gridrow-leftlabel"><?php if(empty($teacher7)) echo'<div id="teacher7_3b">Teacher7</div>';else echo $teacher7;?></td>
<td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3b" value="1" <?php if($teacher7_3b=="1") {echo "checked";} ?> id="group_731554727_1" role="radio" class="ss-q-radio" aria-label="1" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3b" value="2" <?php if($teacher7_3b=="2") {echo "checked";} ?> id="group_731554727_2" role="radio" class="ss-q-radio" aria-label="2" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3b" value="3" <?php if($teacher7_3b=="3") {echo "checked";} ?> id="group_731554727_3" role="radio" class="ss-q-radio" aria-label="3" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3b" value="4" <?php if($teacher7_3b=="4") {echo "checked";} ?> id="group_731554727_4" role="radio" class="ss-q-radio" aria-label="4" aria-required="true"></div></label></td> <td class="ss-gridrow" style="width: 16.8%;"><label class="ss-grid-button-label"><div class="ss-grid-button-wrapper"><input type="radio" name="teacher7_3b" value="5" <?php if($teacher7_3b=="5") {echo "checked";} ?> id="group_731554727_5" role="radio" class="ss-q-radio" aria-label="5" aria-required="true"></div></label></td> </tr></tbody></table>
<?php //err echo ?>

<br><br>
<label class="ss-q-item-label" for="entry_1770941899"><div class="ss-q-title">Subject you think was taught Best?*
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true"></span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>

<?php
  if(empty($best_sub)){
echo "<div class='styled-select'><select name='best_sub' >
  <option value=''>Select a value</option>
   ".$code_sub."</div>";
}
else{
    echo '<input type="hidden" name="best_sub" value="'.$best_sub.'" />';
    echo $best_sub;
   }

?>
<?php echo $best_subErr ?>

<br><br>
<label class="ss-q-item-label" for="entry_1770941899"><div class="ss-q-title">Subject you think could have been taught better?*
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true"></span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>

<?php
  if(empty($worst_sub)){
echo "<div class='styled-select'><select name='worst_sub' >
  <option value=''>Select a value</option>
   ".$code_sub."</div>";
}
else{
    echo '<input type="hidden" name="worst_sub" value="'.$worst_sub.'" />';
    echo $worst_sub;
   }

?>

<?php echo $worst_subErr ?>

<div class="required-message">Please enter one response per row</div></div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1770941899"><div class="ss-q-title">For better academic performance, do you think you need?
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true"></span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>

<!--<ul class="ss-choices ss-choices-required" role="group" aria-label="For better academic performance, do you think you need?  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="more_lecture" value="yes" id="group_821352737_1" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
<span class="ss-choice-label">More lectures by experts</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="more_assig" value="yes" id="group_821352737_2" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
<span class="ss-choice-label">To write more assignments</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="more_internet" value="yes" id="group_821352737_3" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
<span class="ss-choice-label">Access the internet more</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="more_books" value="yes" id="group_821352737_4" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
<span class="ss-choice-label">More books in the library</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="more_classes" value="yes" id="group_821352737_5" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
<span class="ss-choice-label">Extra/Remedial Classes</span>
</label></li></ul>
-->

<textarea name="final_remark" placeholder="Any other remarks..." rows="6" cols="45" style="resize: none; font-size:17px"><?php echo $final_remark ?></textarea>

<input type="hidden" name="draftResponse" value="[,,&quot;-6134563417814537757&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fvv" value="0">


<input type="hidden" name="fbzx" value="-6134563417814537757">

<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
<div class="ss-password-warning ss-secondary-text">* Thank you for Submitting.</div></td>
<td id="progress-container"><div id="progress-bar" class="jfk-progressBar-nonBlocking progress-bar-horizontal goog-inline-block"></div>
<div id="progress-label" class="progress-label">100%: You made it.</div></td></tr></tbody></table></div></ol></form></div>
<div class="ss-footer"><div class="ss-attribution"></div>
<div class="ss-legal"><div class="disclaimer-separator"></div>
<center><span class="disclaimer-msg">This form was created By <b>Ramanujan College</b>.</span></center></div></div></div>

<div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic></div></div>


<script type='text/javascript' src='https://docs.google.com/static/forms/client/js/3972931225-formviewer_prd.js'></script>
<script type='text/javascript' src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
<script type="text/javascript">H5F.setup(document.getElementById('ss-form'));
          _initFormViewer(
            "[100,,[]\n]\n");</script>

<script>
function teacher1_name(str) {
    if (str == "") {
        document.getElementById("teacher1_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher1_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher1_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}

function teacher2_name(str) {
    if (str == "") {
        document.getElementById("teacher2_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher2_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher2_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}

function teacher3_name(str) {
    if (str == "") {
        document.getElementById("teacher3_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher3_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher3_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}

function teacher4_name(str) {
    if (str == "") {
        document.getElementById("teacher4_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher4_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher4_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}

function teacher5_name(str) {
    if (str == "") {
        document.getElementById("teacher5_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher5_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher5_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}

function teacher6_name(str) {
    if (str == "") {
        document.getElementById("teacher6_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher6_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher6_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}

function teacher7_name(str) {
    if (str == "") {
        document.getElementById("teacher7_n").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("teacher7_1a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_1b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_1c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_1d").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_1e").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_1f").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_1g").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_2a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_2b").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_2c").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_3a").innerHTML = xmlhttp.responseText;
                document.getElementById("teacher7_3b").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","name_back.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

</div></body></html>
<?php
}
?>
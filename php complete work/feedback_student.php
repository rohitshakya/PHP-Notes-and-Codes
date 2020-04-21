<?php
session_start();
if(isset($_SESSION['email'])){
  $q=$_SESSION['course'];
  header("Location:./feedback_student2.php?q=$q");
} else {
//  error_reporting(0);
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
  background-image: url('//ssl.gstatic.com/docs/forms/forms_logo_2_small_dark.png');
  background-size: 108px 21px;
  width: 108px;
  height: 21px;
}

@media screen and (-webkit-device-pixel-ratio: 2) {
.ss-logo-image {
  background-image: url('//ssl.gstatic.com/docs/forms/forms_logo_2_small_dark_2x.png');
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

include( "./inc/connect.inc.php" );
$code2="<select name='teacher' >";

//Declaring all variables

$name=$course=$semister=$email="";

//Declaring all Error variables

$nameErr=$courseErr=$semisterErr=$emailErr=$exquery_email=$exquery_email="";

  if(isset($_POST["submit"])){    

    if (empty($_POST["name"])) {      
         $nameErr = "* Name is Required.";
         } 
    else {
       $name =$_POST['name'];
       // check if name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z. ]*$/",$name)) {
         $nameErr = "* Only letters and white space allowed"; 
         }
     }

     if (empty($_POST["rollno"])) {
         $rollnoErr = "* Roll No is Required.";
         } 
    else {
       $rollno =$_POST['rollno'];
       // check if rollno only contains letters and whitespace
       if(!preg_match("/^[\+0-9\/\-\(\)\s]*$/",$rollno))
         $rollnoErr = "* Numerical Digits Allowed."; 
         }

         if (empty($_POST["phno"])) {
         $phnoErr = "* phone No is Required.";
         } 
    else {
       $phno =$_POST['phno'];
       // check if phno only contains letters and whitespace
       if(!preg_match("/^[\+0-9\/\-\(\)\s]*$/",$phno))
         $phnoErr = "* Numerical Digits Allowed."; 
         }

    if (empty($_POST["course"])) {      
         $courseErr = "* Course is Required.";
         } 
    else {
       $course =$_POST['course'];       
     }
    
    if(empty($_POST["semister"])){
      $semisterErr="* Semister is Required.";
      }
    else{
      $semister=$_POST["semister"];      
    }
    
    if(empty($_POST["email"])){
      $emailErr="* E-mail is Required.";
      }
    else{
      $email=$_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        $emailErr="* Invalid E-mail format";
      }
    }

if(!empty($rollno)){
$exquery_rollno="SELECT * FROM `feedback_2016_2`.`feedback` WHERE rollno='$rollno'";
    $ex_res2=mysql_query($exquery_rollno);
    $numrows=mysql_num_rows($ex_res2);
      if($numrows!=0){
        $rollnoErr="*Roll No Already Exist.";        
      }
  }

if(!empty($phno)){
$exquery_phno="SELECT * FROM `feedback_2016_2`.`feedback` WHERE phno='$phno'";
    $ex_res2=mysql_query($exquery_phno);
    $numrows=mysql_num_rows($ex_res2);
      if($numrows!=0){
        $phnoErr="*Phone No Already Exist.";
      }
  }

if(!empty($email)){
$exquery_email="SELECT * FROM `feedback_2016_2`.`feedback` WHERE email='$email'";
    $ex_res2=mysql_query($exquery_email);
    $numrows=mysql_num_rows($ex_res2);
      if($numrows!=0){
        $emailErr="*Email Already Exist.";
        $emailExErr=1;
      }
  }
}

?>

<?php

  $name="";

  if(isset($_POST["submit"])){

    $email=$_POST['email'];
    $name=$_POST['name'];
    $course=$_POST['course'];
    $semister=$_POST['semister'];
    
    if( $nameErr OR $courseErr OR $semisterErr OR $emailErr OR $emailEx OR $rollnoErr OR $phnoErr ){
    }

    else{
      $work="INSERT INTO `feedback_2016_2`.`feedback` (name, course, semister, email, rollno, phno)
              VALUES ('$name','$course','$semister','$email', '$rollno','$phno')";
        //  mysql_query($work);

          session_start();
          $_SESSION['email']=$email;
          $_SESSION['name']=$name;
          $_SESSION['course']=$course;
          $_SESSION['semister']=$semister;
          $_SESSION['rollno']=$rollno;
          $_SESSION['phno']=$phno;
          echo '<meta http-equiv="refresh" content="0">';
          header("Location:./feedback_student2.php?q=$course");
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
<div class="ss-top-of-page"><div class="ss-form-heading"><h1 class="ss-form-title" dir="ltr">STUDENTS&#39; FEEDBACK FORM-I</h1>
<div class="ss-form-desc ss-no-ignore-whitespace" dir="ltr"><h2>Personal Information :</h2></div>

<div class="ss-required-asterisk" aria-hidden="true">* Required</div></div></div>
<div class="ss-form"><form action="#" method="POST" id="ss-form" target="_self" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">
<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1451883420"><div class="ss-q-title">Name of the student
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="name" value="<?php echo $name ?>" class="ss-q-short" id="entry_1451883420" dir="auto" aria-label="Name of the student  " aria-required="true" placeholder="Yash Kaushik" title="">

<?php echo $nameErr ?> 

<?php

  //CODE FOR STREAM
  $code="<select name='course' >
          <option value=''>Select a value</option>";
    //
    $query=mysql_query("SELECT * FROM `feedback_2016_2`.`stream`");
    $numrows=mysql_num_rows($query);
      if($numrows!=0)
      {
      
        while($row=mysql_fetch_assoc($query)){
          $dbname=$row['name'];
          if($dbname == 'GENERIC '){}
          else{
            $code .="<option value='$dbname'>$dbname</option>";
          }

      }
      $code .="</select>";
    }

?>
</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1451883420"><div class="ss-q-title">Roll No. of the student (College Roll No.)
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="rollno" value="<?php echo $rollno ?>" class="ss-q-short" id="entry_1451883420" dir="auto" aria-label="Roll no of the student  " aria-required="true" placeholder="13/0063" title="">

<?php echo $rollnoErr ?> 

</div></div></div>

<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1451883420"><div class="ss-q-title">Phone No. of the student
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="phno" value="<?php echo $phno ?>" class="ss-q-short" maxlength="10" id="entry_1451883420" dir="auto" aria-label="phone no of the student  " aria-required="true" placeholder="XX-XX-XXXXXX" title="">

<?php echo $phnoErr ?> 

</div></div></div>

 <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_279824737"><div class="ss-q-title">Course name
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div class="styled-select" ><h5><?php echo $code; ?><?php echo $courseErr ?></h5></div>


</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_278442401"><div class="ss-q-title">Semester
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<div class="styled-select"><select name="semister">
      <option value="" <?php if($semister == "") echo "selected" ?> >Semester</option>
      <option value="1" <?php if($semister == "1") echo "selected" ?> >I</option>
      <option value="2" <?php if($semister == "2") echo "selected" ?> >II</option>
      <option value="3" <?php if($semister == "3") echo "selected" ?> >III</option>
      <option value="4" <?php if($semister == "4") echo "selected" ?> >IV</option>
      <option value="5" <?php if($semister == "5") echo "selected" ?> >V</option>
      <option value="6" <?php if($semister == "6") echo "selected" ?> >VI</option>
      <option value="7" <?php if($semister == "7") echo "selected" ?> >VII</option>
      <option value="8" <?php if($semister == "8") echo "selected" ?> >VIII</option>
</select>
<?php echo $semisterErr ?>
</div>



</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1063942004"><div class="ss-q-title">EMail-ID
<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="email" value="<?php echo $email ?>" class="ss-q-short" id="entry_1063942004" dir="auto" aria-label="EMail-ID  " aria-required="true" placeholder="yash.kaushik@gmail.com" title="">

<?php echo $emailErr ?>



<input type="hidden" name="draftResponse" value="[,,&quot;-6134563417814537757&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fvv" value="0">


<input type="hidden" name="fbzx" value="-6134563417814537757">

<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
<div class="ss-password-warning ss-secondary-text">* Proceed to Feedback.</div></td>
<td id="progress-container"><div id="progress-bar" class="jfk-progressBar-nonBlocking progress-bar-horizontal goog-inline-block"></div>
</td></tr></tbody></table></div></ol></form></div>
<div class="ss-footer"><div class="ss-attribution"></div>
<div class="ss-legal"><div class="disclaimer-separator"></div>
<center><span class="disclaimer-msg">This form was created By <b>Ramanujan College</b>.</span></center></div></div></div>

<div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic></div></div>


<script type='text/javascript' src='https://docs.google.com/static/forms/client/js/3972931225-formviewer_prd.js'></script>
<script type='text/javascript' src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
<script type="text/javascript">H5F.setup(document.getElementById('ss-form'));
          _initFormViewer(
            "[100,,[]\n]\n");</script></div></body></html>
  <?php
    }
  ?>
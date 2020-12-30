<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//ROUTE BY RAHUL SINGH FRONT MANAGEMENT

//WEB ROUTES
$route['ebook'] = 'Publicmodule/Ebooks';
$route['registeraccount'] = 'Publicmodule/Createaccount';
$route['loginaccount'] = 'Publicmodule/Checkaccount';
$route['logout'] = 'Publicmodule/Getout';
$route['forgot-password'] = 'Publicmodule/Forgotpassword';
$route['reset-password'] = 'Publicmodule/Resetpassword';
$route['resetmypassword'] = 'Publicmodule/Resetmypassword';
$route['verify-reg'] = 'Publicmodule/verifyCrmAccount';


$route['theme-months/(:any)'] = 'Publicmodule/Monthslist/$1';
$route['theme/(:any)'] = 'Publicmodule/Modulelist/$1';
$route['theme/(:any)/(:any)'] = 'Publicmodule/Modulelist/$1/$1';
$route['theme/(:any)/(:any)/(:any)'] = 'Publicmodule/Modulelist/$1/$1/$1';
$route['theme-subjects/(:any)/(:any)'] = 'Publicmodule/Subjectlist/$1/$1';
$route['theme-category/(:any)/(:any)'] = 'Publicmodule/Searistopicslist/$1/$1';
$route['theme-topic-category/(:any)/(:any)'] = 'Publicmodule/Topicscategorylist/$1/$1';


$route['theme-expired'] = 'Publicmodule/Expired';
$route['theme-temporarily-unavailable'] = 'Publicmodule/Temporarily';



$route['classess'] = 'Publicmodule/Classlist';
$route['subjects/(:any)'] = 'Publicmodule/Subjectlist/$1';
$route['months/(:any)/(:any)'] = 'Publicmodule/Monthslist/$1/$1';
$route['module/(:any)/(:any)/(:any)'] = 'Publicmodule/Modulelist/$1/$1/$1';
$route['module2/(:any)/(:any)/(:any)'] = 'Publicmodule/Modulelist2/$1/$1/$1';
//$route['seriestopics/(:num)/(:num)/(:num)'] = 'Publicmodule/Searistopicslist/$1/$1/$1/$1/$1';
$route['seriestopics/(:any)'] = 'Publicmodule/Searistopicslist/$1/';
$route['topicscategory/(:any)'] = 'Publicmodule/Topicscategorylist/$1/';
$route['getactivitytype'] = 'Publicmodule/Typesofactivity';
$route['privacy-policy'] = 'Publicmodule/Privacypolicy';
$route['terms-of-service'] = 'Publicmodule/Termsofservice';
$route['refund-policy'] = 'Publicmodule/Refundpolicy';
$route['about-us'] = 'Publicmodule/Aboutus';
$route['contact-us'] = 'Publicmodule/Contactus';
$route['volt-package'] = 'Publicmodule/Voltpackage';
$route['activity/(:any)/(:any)'] = 'Publicmodule/Mcqactivity/$1/$1';
$route['practice/(:any)/(:any)'] = 'Publicmodule/Mcqactivity/$1/$1';
$route['assesment/(:any)/(:any)'] = 'Publicmodule/Mcqactivity/$1/$1';

//New Desgin Acitvity
$route['playactivity/(:any)/(:any)'] = 'Publicmodule/newactivity/$1/$1';
$route['playgame/(:any)/(:any)'] = 'Publicmodule/playgame/$1/$1';
$route['playaudio/(:any)/(:any)'] = 'Publicmodule/listen/$1/$1';
$route['account'] = 'Publicmodule/Userdashboard';
$route['profile'] = 'Publicmodule/Userprofile';
$route['report'] = 'Publicmodule/Userreport';
$route['user-notification(/:num)?'] = 'Publicmodule/UserNotification';

//AFTERLOGIN REDIRECT ROUTES
$route['loginredirect'] = 'Publicmodule/UserRedirect';
//ADMIN ROUTES
$route['adminlogin'] = 'Publicmodule/Accessadmin/';
$route['getadmin'] = 'Publicmodule/Checkadmin/';
$route['out'] = 'Adminmodule/Getout/';
$route['dashboard'] = 'Adminmodule/Dashboard/';
$route['classlist'] = 'Adminmodule/Classeslist/';
$route['subjectlist'] = 'Adminmodule/subjectslist/';
$route['courselist'] = 'Adminmodule/Courselist/';
$route['userlist'] = 'Adminmodule/Userslist/';
$route['useredit/(:num)'] = 'Adminmodule/Usereditform/$1';
$route['updateuserform'] = 'Adminmodule/Updateuser';
$route['changeuserstatus'] = 'Adminmodule/Userstatus/';

//API ROUTES
$route['api/signup'] = 'Publicmodule/Registerapi';
$route['api/login'] = 'Publicmodule/Loginapi';
$route['api/getotp'] = 'Publicmodule/Otploginapi';
$route['api/setaccount'] = 'Publicmodule/Completeaccount';
$route['api/scorereport'] = 'Publicmodule/Userscorereport';
$route['api/updateprofile'] = 'Publicmodule/Profileupdate';

//END OF RAHUL SINGH ROUTE FRONT MANAGEMENT 
$route['default_controller'] = 'Publicmodule';
$route['404_override'] = 'Publicmodule';
$route['translate_uri_dashes'] = FALSE;
$route['web(/:num)?'] = 'question/web$1';
<?php defined('BASEPATH') or exit('No direct script access allowed');

class Publicmodule extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $getLogin;
        $data;
        $this->load->model('PublicModel', 'getModel');
        if ($this->session->userdata('voltAccountkey') != '') {
            #$this->getLogin = $this->getModel->singledata('vt_useraccount', ['vc_email' => $this->session->userdata('voltAccountkey')]);
            $getuIdbytoken = $this->getModel->singledata('vt_user_token', ['token' => $this->session->userdata('voltAccountToken')]);
            $userId = ($getuIdbytoken) ? $getuIdbytoken->userid : 0;
            $this->getLogin = $this->getModel->singledata('vt_useraccount', ['vc_username' => $this->session->userdata('voltAccountkey'), 'vc_id' => $userId]);
            if (empty($this->getLogin)) {
                $this->Getout();
            }
        } else {
            $this->getLogin = '';
        }

        date_default_timezone_set("Asia/Kolkata");

        $config = array(
            'protocol' => 'mail',
            'smtp_host' => SMTP_HOST,
            'smtp_port' => SMTP_PORT,
            'smtp_user' => SMTP_USER,
            'smtp_pass' => SMTP_PASSWORD,
            'smtp_timeout' => '5',
            'mailtype' => 'html',
            'charset' => 'utf-8',
        );

        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->from(SMTP_USER, "VIVA VOLT");
        $classAPI = API_connector(base_url("api/getAllClass"));
        $clIds = [''];
        $clNms = ['Select Class'];
        if ($classAPI->data) {
            foreach ($classAPI->data as $getCls) {
                array_push($clIds, $getCls->classId);
                array_push($clNms, $getCls->class_name);
            }

        }

        $mergeClassid = array_combine($clIds, $clNms);
        $this->data['classList'] = $mergeClassid;
        $subjectAPI = API_connector(base_url("api/getSubject"));
        $subIds = [''];
        $subNms = ['Select Subject'];
        if ($subjectAPI && $subjectAPI->data) {
            foreach ($subjectAPI->data as $getSub) {
                array_push($subIds, $getSub->subjectId);
                array_push($subNms, $getSub->subject_name);
            }
        }

        $mergeSubjectid = array_combine($subIds, $subNms);
        $this->data['subjectList'] = $mergeSubjectid;
        $this->data['type_Array'] = array('mcq', 'tnf', 'fib', 'mch', 'imgtext', 'parichay', 'notes', 'ebookUpload', 'canvas', 'audioUpload', 'mmg', 'wordsearch', 'crossword', 'dragimg', 'orderword', 'sudoku', 'picpuzzle', 'vid');
        $this->data['activitytypelist'] = [
            'mcq' => 'Multiple Choice Questions',
            'tnf' => 'True or False',
            'fib' => 'Fill in the Blanks',
            'mch' => 'Matching Questions',
            'imgtext' => 'Infographic',
            'notes' => 'Summary',
            'parichay' => 'Info',
            'ebookUpload' => 'Ebook',
            'canvas' => 'image coloring',
            //'audioUpload' => 'Listening',
            'mmg' => 'Memory Game',
            'wordsearch' => 'Word Search',
            'crossword' => 'Cross Word',
            'dragimg' => 'Drag & Drop',
            'orderword' => 'Order Word',
            'sudoku' => 'Sudoku',
            'picpuzzle' => 'Picture Puzzle',
            'vid' => 'Watch',
            /*'rearwo' => 'SEQUENCE THE SENTENCES',
        'drag' => 'Arrange Sentence',
        'drag2' => 'Arrange Word',
        'typing' => 'Typing',
        'writing' => 'Writing',
        'parichay' => 'Important Terms',
        'vid' => 'Video',
        'ImgAns' => 'Image With Answer'*/
        ];

    }

    public function index()
    {
        if ($this->session->userdata('voltAccountkey')) {
            redirect(base_url($this->session->userdata('Loginredirecturl')));
        } else {

            $classList = API_connector(base_url("api/getAllClass"));
            if ($classList->status == 1) {
                $getClassess = $classList->data;
            } else {
                $getClassess = [];
            }
            $this->data['allclass'] = $getClassess;
            $cid = ($this->getLogin) ? $this->getLogin->vc_class : 1;
            $getSubject = API_connector(base_url("api/getSubject?class=" . $cid));
            $this->data['class'] = $this->getModel->singledata('mastar_class', ['class_id' => $cid]);

            if ($getSubject && $getSubject->status == 1) {
                $getSubject = $getSubject->data;
            } else {
                $getSubject = [];
            }

            $this->data['allsubject'] = $getSubject;
            $this->load->view('front', $this->data);
        }
    }

    public function Ebooks()
    {

        $this->load->view('ebooks');

    }

    public function Createaccount()
    {

        if ($this->form_validation->run('createAccount')) {

            // $username = $this->usernamestr($this->input->post('fullname'));
            // $random_udigit = mt_rand(1000, 9999);
            // Username rules: cnnnn
            $numbr = 0000;
            $alpha = 'a';
            $getlastuser = $this->db->query('SELECT vc_username FROM vt_useraccount ORDER BY vc_id DESC LIMIT 1')->row_array();
            if (!empty($getlastuser)) {
                $snum = ltrim($getlastuser['vc_username'], $getlastuser['vc_username'][0]);
                if ($snum == 9999) {
                    $alpha++;
                    $snum = 0000;
                }
                $nDigit = str_pad($snum + 1, 4, 0, STR_PAD_LEFT);
            } else {
                $nDigit = str_pad($numbr + 1, 4, 0, STR_PAD_LEFT);
            }

            $userInfo = [
                'vc_name' => $this->input->post('fullname'),
                'vc_lastname' => $this->input->post('lastname'),
                'vc_username' => $alpha . $nDigit,
                'vc_contact' => $this->input->post('contactnumber'),
                'vc_gender' => $this->input->post('gender'),
                'vc_state' => $this->input->post('state'),
                'vc_city' => $this->input->post('city'),
                'vc_school' => $this->input->post('school'),
                'vc_email' => $this->input->post('emailid'),
                'vc_password' => md5($this->input->post('reusepassword')),
                'vc_viewpass' => $this->input->post('reusepassword'),
                'vc_class' => $this->input->post('classlist'),
                'vc_subject' => $this->input->post('subjectlist'),
                'vc_status' => 'Inactive',
                'vc_created_date' => date('Y-m-d H:i:s'),
            ];

            $storeUser = $this->getModel->datastorage('vt_useraccount', $userInfo);
            if ($storeUser) {
                $this->email->to($this->input->post('emailid'));
                $this->email->subject("VIVA Volt Account Activation");
                $body = $this->load->view('mail_registration', $this->input->post(), true);
                $this->email->message($body);
                $this->email->send();
                echo "Veryfied";
            } else {
                echo "<p>Something went wrong. Try Again!</p>";
            }
        } else {
            echo validation_errors();
        }
    }

    public function verifyCrmAccount()
    {
        $ids = base64_decode($this->input->get('u'));
        $checkAccount = $this->getModel->singledata('vt_useraccount', ['vc_email' => $ids]);
        if ($checkAccount) {
            $this->db->where(['vc_email' => $ids]);
            $update = $this->db->update('vt_useraccount', ['vc_status' => 'Active']);
        }
        echo "<script>alert('Your account has been activated!'); window.location='" . base_url() . "'</script>";
    }

  

    public function Checkaccount()
    {

        if ($this->form_validation->run('loginAccount')) {
            $getUser = $this->getModel->singledata('vt_useraccount', ['vc_status' => 'Active', 'vc_username' => strtolower($this->input->post('accountid')), 'vc_password' => md5($this->input->post('accountpassword'))]);
            if ($getUser) {
                $instituteData = $this->getModel->singledata('vt_school', ['id' => $getUser->vc_school]);
                if ($instituteData->accstatus == 'disabled') {
                    echo "<p>Your Account Suspended.</p>";
                    exit();
                    } elseif ($instituteData->accstatus == 'enabled') {
                    $TOKEN_KEY = $this->getToken(20);
                    $this->getModel->datastorage('vt_user_token', ['userid' => $getUser->vc_id, 'token' => $TOKEN_KEY]);
                    //Token remove if greater than two loginattemped
                    $userId = $getUser->vc_id;
                    $getfirstusertoken = $this->db->query('SELECT count(userid) as loginattemped,token FROM vt_user_token where userid = ' . $userId . ' ORDER BY timemodified ASC LIMIT 1')->row_array();
                    if ($getfirstusertoken['loginattemped'] > 2) {
                        $this->getModel->dataremove('vt_user_token', ['token' => $getfirstusertoken['token']]);
                    }
                    $this->session->set_userdata('voltAccountkey', $getUser->vc_username);
                    $this->session->set_userdata('voltAccountUserName', $getUser->vc_username);
                    $this->session->set_userdata('voltAccountClass', $getUser->vc_class);
                    $this->session->set_userdata('voltAccountSubject', $getUser->vc_subject);
                    $this->session->set_userdata('voltAccountToken', $TOKEN_KEY);
                    $packageData = $this->getModel->singledata('vt_subscribe', ['schoolid' => $getUser->vc_school, 'classid' => $getUser->vc_class]);
                    if($packageData) {
                        if (in_array("11", json_decode($packageData->sublist), TRUE)) 
                        { 
                        $subId = 11;
                        $subData = $this->getModel->singledata('mastar_subject', ['sub_id' => $subId]);
                        if ($subData->sub_month == 1) {
                        $moInNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
                        $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => $this->session->userdata('voltAccountUserName')]);
                        $schoolData = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
                        $startSfrom = ($schoolData) ? $schoolData->term_start : '1';
                        $endSto = ($schoolData) ? $schoolData->term_end : '12';
                        $schoolTerms = array();
                        $date1 = new DateTime($startSfrom);
                        $date2 = new DateTime($endSto);
                        $month1 = new DateTime($date1->format('Y-n'));
                        while ($month1 < $date2) {
                            array_push($schoolTerms, $month1->format('Y-n'));
                            $month1->modify('+1 month'); //Add one month and repeat
                        }
                        if (count($schoolTerms) < 12) {
                            $dif = 12 - count($schoolTerms);
                            for ($i = 1; $i <= $dif; $i++) {
                                array_push($schoolTerms, date('Y-') . '0');
                            }
                        }
                        $finalTerms = array_combine($moInNumber, $schoolTerms);
                        $this->data['finalTerms'] = $finalTerms;
                        $this->session->set_userdata('finalTermsSession', $finalTerms);    
                        $mon = date('Y-n');
                        $finalurl = 'theme' . '/' . $subData->slug . '/' . base64_encode($mon);
                        $this->session->set_userdata('Loginredirecturl', $finalurl);
                        echo "Veryfied";
                        } else {
                        $finalurl = 'theme' . '/' . $subData->slug;
                        $this->session->set_userdata('Loginredirecturl', $finalurl);
                        echo "Veryfied";
                        }    
                        } 
                        else
                        { 
                        $finalurl = 'theme-temporarily-unavailable';
                        $this->session->set_userdata('Loginredirecturl', $finalurl);
                        echo "Veryfied";
                        }     
                    } else {
                        $finalurl = 'theme-expired';
                        $this->session->unset_userdata('voltAccountSubject', $getUser->vc_subject);
                        $this->session->set_userdata('Loginredirecturl', $finalurl);
                        echo "Veryfied";
                    }
                    } else {
                        echo "<p>Something went wrong.</p>";
                    }
                    } else {
                        echo "<p>User Id  or Password is wrong.</p>";
                    }
                    } else {
                        echo validation_errors();
                    }

    }

    public function Forgotpassword()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['email'] = 'Create New candidate Set';
        $this->form_validation->set_rules('email', 'candidate', 'required');
        if ($this->form_validation->run() === false) {
            $this->load->view('forgot-password');
        } else {
            $email = $this->getModel->singledata('vt_useraccount', ['vc_email' => $this->input->post('email')]);
           
            $userid = $this->getModel->singledata('vt_useraccount', ['vc_username' => $this->input->post('userid')]);
           
            if ($userid) {
                if ($email->vc_email == $userid->vc_email) {               
                    
                    $existingremove = $this->getModel->dataremove('vt_forgotpassword', ['vc_email' => $this->input->post('email')]);                     
                    $random_udigit = mt_rand(10000, 99999);
                    $emailInfo = [
                        'vc_email' => $this->input->post('email'),
                        'vc_TicketNo' => 'vvolt' . $random_udigit,
                        'vc_created_date' => date('Y-m-d H:i:s'),
                    ];
                    $storeData = $this->getModel->datastorage('vt_forgotpassword', $emailInfo);
                  
                    if ($storeData) {                        
                        $addUdata = [
                            'name' => $email->vc_name,
                            'vcode' => 'vvolt' . $random_udigit,
                            'email' => $this->input->post('email'),
                        ];                        
                        $edata['userdata'] = $addUdata;
                        $htmlEmail = $this->load->view('forgotpassword',$edata,true); 
                        $email_to = $this->input->post('email');
                        $subject = 'Forgot Password';   

                        if(MAIL_SENDER == 'phpmailer'){
                            $config = array(
                                'HOST' => SMTP_HOST,
                                'PORT' => SMTP_PORT,
                                'SMTP_EMAIL' => SMTP_USER,
                                'SMTP_PASSWORD' => SMTP_PASSWORD,
                                'SMTP_SECURE' => false,
                                'SMTP_DEBUG' => false,
                                'company_name' => 'VIVA VOLT',
                            );
            
                            $this->load->library("send_mail");
                            $result = $this->send_mail->email($subject, $htmlEmail, $email_to, $config);                            
                        }else{                              
                         $headers  = "MIME-Version: 1.0" . "\r\n";
                         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                         $headers .= 'From: <noreply@volt.development.vivadevops.com>' . "\r\n";
                         $result =   mail($email_to, $subject, $htmlEmail, $headers); 
                        }                       
                        if (!$result) {
                           redirect(base_url() . 'forgot-password?status=invalid', $data);
                        } else {
                           redirect(base_url() . 'forgot-password?status=success', $data);
                        }
                      
                    }

                } else {
                    redirect(base_url() . 'forgot-password?status=notmatch', $data);
                }
            } else {
                redirect(base_url() . 'forgot-password?status=notexist', $data);
            }
        }
    }

    public function Resetpassword()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['password'] = 'Change password Set';
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() === false) {
            $url = $_GET['vcode'];
            $vidget = $_GET['vid'];
            $vid = base64_decode($vidget);
            $TicketNo = $this->getModel->singledata('vt_forgotpassword', ['vc_TicketNo' => $vid]);
            if ($TicketNo) {
                $created = $TicketNo->vc_created_date;
                $expire_date = date('Y-m-d H:i', strtotime('+59 minutes', strtotime($created)));
                $now = date("Y-m-d H:i:s");
                if ($now > $expire_date) { //if current time is greater then created time
                    $existingremove = $this->getModel->dataremove('vt_forgotpassword', ['vc_email' => base64_decode($url)]);
                    $this->load->view('invalid-link');
                } else //still has a time
                {
                    $email = base64_decode($url);
                    $this->data['requestemail'] = trim($email);
                    $this->load->view('reset-password', $data);
                }

            } else {
                $this->load->view('invalid-link');
            }
            } else {
            if ($this->input->post('password') == $this->input->post('re_password')) {
                print_r($this->input->post('password'));
                die();
            } else {
                redirect(base_url());
            }
        }
    }

    public function Resetmypassword()
    {
        if ($this->input->post('email')) {
            $this->form_validation->set_rules('verifypassword', 'Varify password', 'required');
            $this->form_validation->set_rules('password', 'New Password', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            if ($this->form_validation->run() == true) {
                $this->data['title'] = 'Change Password';
                $Vemail = base64_decode($this->input->post('email'));
                $query = $this->getModel->singledata('vt_useraccount', ['vc_email' => $Vemail]);
                if ($query) {
                    $updateData = [
                        'vc_password' => md5($this->input->post('password')),
                        'vc_viewpass' => $this->input->post('password'),
                    ];
                    $updateUser = $this->getModel->dataupdate('vt_useraccount', ['vc_email' => $Vemail], $updateData);
                    $existingremove = $this->getModel->dataremove('vt_forgotpassword', ['vc_email' => $Vemail]);
                    $logout = $this->getModel->dataremove('vt_user_token', ['uid' => $query->vc_id]);
                    if ($updateUser) {
                        echo 'Success';
                    } else {
                        echo 'Failed';
                    }
                    } else {
                    echo 'Failed';
                    }
                    }
                    } else {
                    echo 'Failed';
                    }
    }

    
    public function Classlist()
    {
        $classList = API_connector(base_url("api/getAllClass"));
        if ($classList->status == 1) {
            $getClassess = $classList->data;
        } else {
            $getClassess = [];
        }
        $this->data['allclass'] = $getClassess;
        $this->load->view('class-list', $this->data);
    }

    
    
 
    public function Monthslist()
    {
        if ($this->session->userdata('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = $this->session->userdata('voltAccountClass');
            $slug = $this->uri->segment(2);
            $SubjectData = $this->getModel->singledata('mastar_subject', ['slug' => $slug]);
            $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => $this->session->userdata('voltAccountUserName')]);
            $this->data['schoolData'] = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
            //print_r($this->data['schoolData']);
            //die();
            if ($SubjectData) {
                $sid = $SubjectData->sub_id;
                $this->data['sdata'] = $SubjectData;
                $monthList = $this->db->query(" SELECT * FROM `question` WHERE `class`=$cid AND `subject`=$sid AND `month`>0 AND `module`>0 GROUP BY `month` ORDER BY `month` ASC ")->result_array();
                if ($monthList) {
                    $this->data['listofmonth'] = $monthList;
                } else {
                    $this->data['listofmonth'] = '';
                    //redirect("subjects/" . $this->uri->segment(2));
                }
                $this->load->view('month-list', $this->data);
            } else {
                $this->load->view('error-404');
            }
        } else {
            redirect(base_url());
        }
    }

    
    
    public function Modulelist()
    {
        if ($this->session->userdata('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = $this->session->userdata('voltAccountClass');
            $slug = $this->uri->segment(2);
            
            $checkmonth = array_search(base64_decode($this->uri->segment(3)), $this->session->userdata('finalTermsSession'));
            $SubjectData = $this->getModel->singledata('mastar_subject', ['slug' => $slug]);
              $gwtUserData = $this->getModel->singledata('vt_useraccount', ['vc_username' => $this->session->userdata('voltAccountUserName')]);
             $this->data['schoolData'] = $this->getModel->singledata('vt_school', ['id' => $gwtUserData->vc_school]);
            if ($SubjectData) {
                if ($SubjectData->sub_id == $this->session->userdata('voltAccountSubject')) {
                    if ($checkmonth) {
                        $mid = $checkmonth;
                        $this->data['month'] = base64_decode($this->uri->segment(3));
                        $sid = $SubjectData->sub_id;
                        $this->data['sdata'] = $SubjectData;
                        $this->data['vmonths'] = $SubjectData->sub_month;
                        /** score report */
                        $reportAPI = API_connector(base_url("api/scorereport?uid=" . $this->getLogin->vc_id));
                        if ($reportAPI->status == 1) {
                            $this->data['activity'] = $reportAPI->data;
                        } else {
                            $this->data['activity'] = "";
                        }
                        if ($SubjectData->sub_month) {
                            $monthList = $this->db->query(" SELECT * FROM `question` WHERE `class`=$cid AND `subject`=$sid AND `month`>0 AND `module`>0 GROUP BY `month` ORDER BY `month` ASC ")->result_array();
                            if ($monthList) {
                                $this->data['listofmonth'] = $monthList;
                            }
                            $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`>0  AND master_module.m_url = '' GROUP BY `module` ORDER BY master_module.m_num ASC ")->result_array();
                           
                            
                            $seriesList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `series`>0  GROUP BY `series` ORDER BY mastar_series.series_num ASC")->result_array();

                            $chapList = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `chapter`>0  GROUP BY `chapter` ORDER BY chaptername.id ASC")->result_array();
                            
                         
                            if ($moduleList) {
                                $this->data['listview'] = $moduleList;
                                $this->data['vdata'] = 'moduals';
                            } else if ($seriesList) {
                                $this->data['listview'] = $seriesList;
                                $this->data['vdata'] = 'series';
                            } else if ($chapList) {
                                $this->data['listview'] = $chapList;
                                $this->data['vdata'] = 'chapter';
                            } else {
                                $this->data['listview'] = '';
                                $this->data['vdata'] = '';
                            }
                        } else {
                            $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid AND `module`>0  AND master_module.m_url = '' GROUP BY `module` ORDER BY master_module.m_num ASC ")->result_array();
                            
                           
                            $seriesList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id=question.series WHERE `class`=$cid AND `subject`=$sid AND `series`>0  GROUP BY `series` ORDER BY mastar_series.series_num ASC")->result_array();
                            $chapList = $this->db->query("SELECT * FROM `question` Left join chaptername ON chaptername.id=question.chapterTitle WHERE `class`=$cid AND `subject`=$sid AND `chapter`>0  GROUP BY `chapter` ORDER BY chaptername.id ASC")->result_array();
                            if ($moduleList) {
                                $this->data['listview'] = $moduleList;
                                $this->data['vdata'] = 'moduals';
                            } else if ($seriesList) {
                                $this->data['listview'] = $seriesList;
                                $this->data['vdata'] = 'series';
                            } else if ($chapList) {
                                $this->data['listview'] = $chapList;
                                $this->data['vdata'] = 'chapter';
                            } else {
                                $this->data['listview'] = '';
                                $this->data['vdata'] = '';
                            }
                        }
                         $this->data['bloglist'] = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$sid AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->result_array();
                      //  print_r($this->data['bloglist']);
                       // die();
                        
                        $this->load->view('module-list', $this->data);
                    } else {
                        $this->load->view('error-404');
                    }
                } else {
                    $this->load->view('error-404');
                }
            } else {
                $this->load->view('error-404');
            }
        } else {
            redirect(base_url());
        }
    }
    
     
    
    public function Expired()
    {
        if ($this->session->userdata('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = $this->session->userdata('voltAccountClass');
            $this->load->view('expired-list', $this->data);
            } else {
            $this->load->view('error-404');
            }
    }
    
      public function Temporarily()
    {
        if ($this->session->userdata('Loginredirecturl')) {
            $cyr = date('Y');
            $cid = $this->session->userdata('voltAccountClass');
            $this->load->view('theme-temporarilyunavailable', $this->data);
            } else {
             redirect(base_url());
            }
    }
    
    
    
    
    
    
    
    
    

    public function Subjectlist()
    {
       
        if ($this->session->userdata('Loginredirecturl')) {
            $cid = $this->session->userdata('voltAccountClass');
            $sid = $this->session->userdata('voltAccountSubject');
            $moid = $this->uri->segment(2);
            $checkmonth = array_search(base64_decode($this->uri->segment(3)), $this->session->userdata('finalTermsSession'));
            if ($checkmonth) {
                $ymdt = explode('-', base64_decode($this->uri->segment(3)));
                $mid =$checkmonth;
                $this->data['month'] = base64_decode($this->uri->segment(3));
                $moduleData = $this->getModel->singledata('master_module', ['slug' => $moid]);
                
                if ($moduleData->class_id == $cid) {
                    $this->data['moduleData'] = $moduleData;
                   // $themeList = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$cid AND `module_id`=$moduleData->m_id ORDER BY mastar_series.series_num ASC ")->result_array();
                    
                        
                     $themeList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id =question.series WHERE `class`=$cid AND `module`=$moduleData->m_id  AND `month`=$checkmonth  GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->result_array();
                 
                    
                    
                    $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$sid  AND `month`=$mid AND `module`>0  AND master_module.m_id != $moduleData->m_id GROUP BY `module` ORDER BY master_module.m_num ASC ")->result_array();
              
                    
                    $this->data['bloglist'] = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$sid AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->result_array(); $this->data['themeData'] = $themeList;
                    $this->data['moduleList'] = $moduleList;
                    $this->load->view('subject-list-cat', $this->data);
                } else {
                    $this->load->view('error-404');
                }
            } else {
                $this->load->view('error-404');
            }
        } else {
            redirect(base_url());
        }

    }

   
    public function Searistopicslist()
    {

        if ($this->session->userdata('Loginredirecturl')) {
            $this->CheckUserAccount();
            $regdate = date("Y-m-d", strtotime($this->getLogin->vc_created_date));
            $toddate = date("Y-m-d");
            $date1 = date_create("$regdate");
            $date2 = date_create("$toddate");
            $diff = date_diff($date1, $date2);
            $this->data['days'] = $diff->format("%a");
            $cid = $this->session->userdata('voltAccountClass');
            $moid = $this->uri->segment(2);
            $checkmonth = array_search(base64_decode($this->uri->segment(3)), $this->session->userdata('finalTermsSession'));
           
            if ($checkmonth) {
                $mid = $checkmonth;
                $ymdt = explode('-', base64_decode($this->uri->segment(3)));
                $this->data['month'] = base64_decode($this->uri->segment(3));
			 
				$ex = explode("!!",base64_decode($moid));
				if($ex[0]=='segment34544'){
                    $moduleData = $this->getModel->singledata('master_module', ['m_id' => $ex[1]]);
                    $this->data['moduleData'] = $moduleData;
					$subject_id = $moduleData->subject_id;
                    //$chapList = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=0 and module_id = $ex[1] and subject_id = $subject_id  ORDER BY chaptername.id ASC ")->result_array();
                     $chapList = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT chapterTitle FROM `question` where `class`=$cid AND `module`=$moduleData->m_id AND series = 0  AND `month`=$checkmonth ) ORDER BY chaptername.id ASC ")->result_array();
                    $moduleList = $this->db->query("SELECT * FROM `question` Left join master_module ON master_module.m_id=question.module WHERE `class`=$cid AND `subject`=$subject_id  AND `month`= $mid AND `module`>0  AND master_module.m_id != $ex[1] GROUP BY `module` ORDER BY master_module.m_num ASC ")->result_array();
                   
                    
                    $this->data['bloglist'] = $this->db->query("SELECT * FROM  master_module WHERE `class_id`=$cid AND `subject_id`=$subject_id AND master_module.m_url <> '' AND master_module.m_url IS NOT NULL")->result_array(); 
                    
                    
                    
                    $this->data['chapData'] = $chapList;
                         $this->data['moduleList'] = $moduleList;
                    $this->load->view('series-skip', $this->data);
					//$this->load->view('series-list', $this->data);
				} else {
                $seriesData = $this->getModel->singledata('mastar_series', ['slug' => base64_decode($moid)]);
				
				
					$this->data['seriesData'] = $seriesData;
                    $moduleData = $this->getModel->singledata('master_module', ['m_id' => $seriesData->module_id]);
                    $this->data['moduleData'] = $moduleData;
                    //$chapList = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=$seriesData->series_id ORDER BY chaptername.id ASC ")->result_array();
                    //$themeList = $this->db->query("SELECT * FROM `mastar_series` WHERE `class_id`=$cid AND mastar_series.module_id=$moduleData->m_id   AND mastar_series.series_id  != $seriesData->series_id  ORDER BY mastar_series.series_num ASC ")->result_array();
                    $chapList = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT chapterTitle FROM `question` where `class`=$cid AND `module`=$moduleData->m_id AND series = $seriesData->series_id  AND `month`=$checkmonth ) ORDER BY chaptername.id ASC ")->result_array();
                    
                    $themeList = $this->db->query("SELECT * FROM `question` Left join mastar_series ON mastar_series.series_id =question.series WHERE `class`=$cid AND `module`=$moduleData->m_id AND mastar_series.series_id  != $seriesData->series_id  AND `month`=$checkmonth  GROUP BY `series` ORDER BY mastar_series.series_num ASC ")->result_array();
                 
                    
                    
                    $this->data['themeList'] = $themeList;
                    $this->data['chapData'] = $chapList;
                    $this->load->view('series-list', $this->data);
				}
				
            } else {
                $this->load->view('error-404');
            }
        } else {
            redirect(base_url());
        }
    }

    public function Topicscategorylist()
    {
        if ($this->session->userdata('Loginredirecturl')) {
            $cid = $this->session->userdata('voltAccountClass');
            $moid = $this->uri->segment(2);
            $checkmonth = array_search(base64_decode($this->uri->segment(3)), $this->session->userdata('finalTermsSession'));
            if ($checkmonth) {
                $ymdt = explode('-', base64_decode($this->uri->segment(3)));
                $mid = $ymdt[1];
                $this->data['month'] = base64_decode($this->uri->segment(3));
                $chapData = $this->getModel->singledata('chaptername', ['id' => base64_decode($moid)]);
                if ($chapData->class_id == $cid) {
                    $checkCats = API_connector(base_url("api/Gettopcategory?class=" . $cid . "&subject=" . $chapData->subject_id . "&series=" . $chapData->series_id . "&chapter=" . base64_decode($moid)));

                    $this->data['class'] = $this->getModel->singledata('mastar_class', ['class_id' => $cid]);
                    $this->data['subject'] = $this->getModel->singledata('mastar_subject', ['sub_id' => $chapData->subject_id]);
                    $this->data['series'] = $this->getModel->singledata('mastar_series', ['series_id' => $chapData->series_id]);
                    $this->data['module'] = $this->getModel->singledata('master_module', ['m_id' => $chapData->module_id]);
                    $this->data['chapter'] = $this->getModel->singledata('chaptername', ['id' => $chapData->id]);
                    
                    //$this->data['ChapterList'] = $this->db->query("SELECT * FROM `chaptername` WHERE `class_id`=$cid AND `series_id`=$chapData->series_id AND id != $chapData->id  ORDER BY chaptername.id ASC ")->result_array();
                   $this->data['ChapterList'] = $this->db->query("SELECT * FROM `chaptername` WHERE id in(SELECT chapterTitle FROM `question` where `class`=$cid AND `module`=$chapData->module_id AND series = $chapData->series_id  AND `month`=$checkmonth and chapterTitle != $chapData->id) ORDER BY chaptername.id ASC ")->result_array();
                    if ($checkCats->status == 1) {
                        $getCategories = $checkCats->catData;
                    } else {
                        $getCategories = [];
                    }
                    $this->data['allcategories'] = $getCategories;
                    
                      $this->load->view('category-list', $this->data);   
                    
                   
                 
                } else {
                    $this->load->view('error-404');
                }
            } else {
                $this->load->view('error-404');
            }
        } else {
            redirect(base_url());
        }
    }
    
   
    public function Typesofactivity()
    {
        $getActivityType = API_connector(base_url("api/getqdata/?setId=" . $this->input->post('topicid')));
        $http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
        $media_url = $http . "://vivavolt.vivadigitalindia.net/master/";
        $video_url = base_url('assets/video/videoplay.mp4');
        $listLi = '';
        if ($getActivityType && $getActivityType->status == 1) {
            if (in_array('vid', $getActivityType->type)) {
                $videolist = API_connector(base_url("api/getdecodeqns/?setId=" . $this->input->post('topicid') . "&type=vid"));
                if ($videolist->status == 1) {
                    $getvideo = $videolist->data;
                    $video_url = $media_url . $getvideo[0]->url;
                    $video_poster = $getvideo[0]->image;
                }
                $listLi .= "<li class='show1'><a data-video-url='" . $video_url . "' classid='" . $this->input->post('class') . "' class='playvideo'><img class='imgicon' src='" . base_url('assets/publicassets/activity/img/video.png') . "'/></a></li>";
            }

            if ($getActivityType->type) {
                //foreach ($getActivityType->type as $getList) {
                if (array_key_exists($getActivityType->type[0], $this->data['activitytypelist'])) {
                    $pageurl = '';
                    #$pageurl = '&subid='.$this->input->post('subid').'&catid='.$this->input->post('catid').'&sub='.$this->input->post('subject').'&cat='.$this->input->post('category');
                    if (in_array('mcq', $getActivityType->type)) {
                        $assesment_activity = anchor('assesment/' . $this->input->post('topicid') . '/' . $getActivityType->type[0] . '?c=' . $this->input->post('class') . $pageurl, '<img class="imgicon" src="' . base_url('assets/publicassets/activity/img/learn.png') . '" />');
                        $listLi .= "<li class='show2'>" . $assesment_activity . "</li>";
                    }
                    $practice_activity = anchor('practice/' . $this->input->post('topicid') . '/' . $getActivityType->type[0] . '?c=' . $this->input->post('class') . $pageurl, '<img class="imgicon" src="' . base_url('assets/publicassets/activity/img/plan.png') . '" />');
                    $listLi .= "<li class='show3'>" . $practice_activity . "</li>";
                }
                //}
            }
            echo $listLi;
        }
    }

   
    public function gen_report()
    {

        $userid = $this->getLogin->vc_id;

        $setId = explode('-', $this->input->post('setId'))[0];

        $getMain = $this->getModel->singledata('question', ['id' => $setId]);

        $starttime = $this->input->post('starttime');

        $endtime = date('Y-m-d H:i:s');

        $dteStart = new DateTime($starttime);

        $dteEnd = new DateTime($endtime);

        $totaltime = $dteStart->diff($dteEnd);

        $reportdata = array(

            'class' => $getMain->class,

            'subject' => $getMain->subject,

            'course' => $getMain->series,

            'topic' => $getMain->chapter,

            'start_time' => $starttime,

            'end_time' => $endtime,

            'total_time' => $totaltime->format("%H:%I:%S"),

            'userid' => $userid,

            'act_type' => $this->input->post('type'),

            'total_attempt' => $this->input->post('total_qns'),

            'wrng_attempt' => $this->input->post('wrng_qns'),

            'right_attempt' => $this->input->post('right_qns'),

        );

        $this->getModel->dataremove('reports', ['class' => $getMain->class, 'subject' => $getMain->subject, 'course' => $getMain->series, 'topic' => $getMain->chapter, 'userid' => $userid, 'act_type' => $this->input->post('type')]);

        #print_r($reportdata);

        $this->getModel->datastorage('reports', $reportdata);

    }

    public function Userdashboard()
    {

        $this->CheckUserAccount();

        $reportAPI = API_connector(base_url("api/scorereport?uid=" . $this->getLogin->vc_id));

        if ($reportAPI->status == 1) {

            $this->data['activity'] = $reportAPI->data;

        } else {

            $this->data['activity'] = "";

        }

        $this->load->view('user-dashboard', $this->data);

    }

    public function Userprofile()
    {

        $this->CheckUserAccount();

        $this->load->view('user-profile', $this->data);

    }

    public function Profileupdate()
    {

        if ($this->form_validation->run('userDetail')) {

            $updateData = [
                'vc_name' => $this->input->post('fullname'),
                'vc_lastname' => $this->input->post('lastname'),
                'vc_gender' => $this->input->post('gender'),
                'vc_class' => $this->input->post('classid'),
                'vc_subject' => $this->input->post('subjectid'),
                'vc_email' => $this->input->post('emailid'),
                'vc_contact' => $this->input->post('contactnumber'),
            ];

            if ($this->input->post('confirmpassword') != '') {
                $updateData['vc_password'] = md5($this->input->post('confirmpassword'));
                $updateData['vc_viewpass'] = $this->input->post('confirmpassword');
            }

            $updateUser = $this->getModel->dataupdate('vt_useraccount', ['vc_id' => $this->input->post('userid')], $updateData);

            if ($updateUser) {
                $getUser = $this->getModel->singledata('vt_useraccount', ['vc_id' => $this->input->post('userid')]);
                $getSub = $this->getModel->singledata('mastar_subject', ['sub_id' => $this->input->post('subjectid')]);
                if ($getUser) {

                    $userDetail = [
                        'token_id' => $getUser->vc_token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                        'subject_name' => $getSub->sub_name,
                    ];
                    $json['userinfo'] = $userDetail;
                }

                $json['status'] = 1;
                $json['msg'] = 'Account Updated';

            } else {
                $json['status'] = 0;
                $json['msg'] = 'Something went wrong.';
            }

        } else {
            $json['status'] = 0;
            $json['msg'] = validation_errors();
        }

        echo json_encode($json);

    }

    public function Userreport()
    {

        $this->CheckUserAccount();
        $reportAPI = API_connector(base_url("api/scorereport?uid=" . $this->getLogin->vc_id . "&rtype=all"));
        if ($reportAPI->status == 1) {
            $this->data['activity'] = $reportAPI->data;
        } else {
            $this->data['activity'] = "";
        }
        $this->load->view('user-report', $this->data);
    }

    public function CheckUserAccount()
    {
        if (!$this->getLogin) {
            redirect(base_url());
            exit();
        }
    }

    public function Getout()
    {
        $this->session->unset_userdata('voltAccountkey');
        $this->session->unset_userdata('Loginredirecturl');
        $this->session->unset_userdata('voltAccountUserName');
        $this->session->unset_userdata('voltAccountClass');
        $this->session->unset_userdata('voltAccountSubject');
        $this->session->unset_userdata('voltAccountToken');
        
  
        

        redirect(base_url());
    }

    ////////////LOGIN SIGNUP API.....

    public function Registerapi()
    {

        header('Content-type: application/form-data');
        header('Content-type: application/json');

        $json = [];

        if ($this->input->method() == 'post') {

            if ($this->form_validation->run('apiRegistration')) {

                $token = date('siHYmds');
                $username = $this->usernamestr($this->input->post('fullname'));
                $random_udigit = mt_rand(1000, 9999);
                $userInfo = [
                    'vc_name' => $this->input->post('fullname'),
                    'vc_username' => $username . $random_udigit,
                    'vc_contact' => $this->input->post('contactnumber'),
                    'vc_email' => $this->input->post('emailid'),
                    'vc_password' => md5($this->input->post('confirmpassword')),
                    'vc_viewpass' => $this->input->post('confirmpassword'),
                    'vc_class' => $this->input->post('classid'),
                    'vc_subject' => $this->input->post('subjectid'),
                    'vc_status' => 'Active',
                    'vc_created_date' => date('Y-m-d H:i:s'),
                    'vc_device' => $this->input->post('devicetype'),
                    'vc_token' => $token,
                ];

                $storeUser = $this->getModel->datastorage('vt_useraccount', $userInfo);

                if ($storeUser) {

                    $getUser = $this->getModel->singledata('vt_useraccount', ['vc_status' => 'Active', 'vc_email' => $this->input->post('emailid'), 'vc_password' => md5($this->input->post('confirmpassword'))]);

                    $userDetail = [

                        'token_id' => $token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                    ];

                    $json['userinfo'] = $userDetail;
                    $json['status'] = 1;
                    $json['msg'] = "Account has been created.";

                } else {

                    $json['status'] = 0;
                    $json['msg'] = "Something went wrong. Try Again!";

                }

            } else {

                $json['status'] = 0;

                $json['msg'] = strip_tags(validation_errors());

            }

        } else {

            $json['status'] = 0;

            $json['msg'] = "Data not in valid method.";

        }

        echo json_encode($json);

    }

    public function Loginapi()
    {

        header('Content-type: application/form-data');

        header('Content-type: application/json');

        $json = [];

        if ($this->input->method() == 'post') {

            if ($this->form_validation->run('apiloginAccount')) {

                $getUser = $this->getModel->singledata('vt_useraccount', ['vc_status' => 'Active', 'vc_email' => $this->input->post('accountid'), 'vc_password' => md5($this->input->post('accountpassword'))]);

                if ($getUser) {

                    $token = date('siHYmd') . $getUser->vc_id;
                    $this->getModel->dataupdate('vt_useraccount', ['vc_id' => $getUser->vc_id, 'vc_email' => $this->input->post('accountid')], ['vc_token' => $token, 'vc_device' => $this->input->post('devicetype')]);

                    $json['status'] = 1;
                    $json['msg'] = "Account verified.";

                    $userDetail = [
                        'token_id' => $token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                    ];
                    $json['userinfo'] = $userDetail;
                } else {

                    $json['status'] = 0;
                    $json['msg'] = "Username or Password is wrong.";

                }

            } else {

                $json['status'] = 0;
                $json['msg'] = strip_tags(validation_errors());

            }

        } else {

            $json['status'] = 0;
            $json['msg'] = "Data not in valid method.";

        }

        echo json_encode($json);

    }

    public function Otploginapi()
    {

        header('Content-type: application/form-data');

        header('Content-type: application/json');

        $json = [];

        if ($this->input->method() == 'post') {

            $this->form_validation->set_rules('contactnumber', 'Number', 'required|trim|exact_length[10]|numeric');

            $this->form_validation->set_rules('devicetype', 'Device Type', 'required|trim');

            if ($this->form_validation->run()) {

                $numberis = $this->input->post('contactnumber');

                $device = $this->input->post('devicetype');

                //OTP SENDER

                $otpis = rand(1000, 9999);

                $mobile = $numberis;

                $msg = "Thank you for registering with us. Your volt otp is : $otpis ";

                $authKey = '278946Ah5kJCIhR5e566304P1';

                $senderId = 'VIVAED';

                $MsgUrl = "https://api.msg91.com/api/sendhttp.php?mobiles=" . $mobile . "&authkey=" . $authKey . "&route=4&sender=" . $senderId . "&message=" . $msg . "&country=91";

                $curl = curl_init();

                curl_setopt_array($curl, array(

                    CURLOPT_URL => $MsgUrl,

                    CURLOPT_RETURNTRANSFER => true,

                    CURLOPT_ENCODING => "",

                    CURLOPT_MAXREDIRS => 10,

                    CURLOPT_TIMEOUT => 30,

                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

                    CURLOPT_CUSTOMREQUEST => "GET",

                    CURLOPT_SSL_VERIFYHOST => 0,

                    CURLOPT_SSL_VERIFYPEER => 0,

                ));

                $response = curl_exec($curl);

                $err = curl_error($curl);

                curl_close($curl);

                //OTP

                $getUser = $this->getModel->singledata('vt_useraccount', ['vc_contact' => $numberis]);

                if ($getUser) {

                    $token = date('siHYmd') . $getUser->vc_id;

                    $this->getModel->dataupdate('vt_useraccount', ['vc_contact' => $numberis], ['vc_token' => $token, 'vc_device' => $device, 'vc_otp' => $otpis]);

                    $getSub = $this->getModel->singledata('mastar_subject', ['sub_id' => $getUser->vc_subject]);

                    $json['status'] = 1;

                    $json['msg'] = "Account verified.";

                    $json['otpis'] = $otpis;

                    $userDetail = [
                        'token_id' => $token,
                        'user_id' => $getUser->vc_id,
                        'full_name' => $getUser->vc_name,
                        'email_id' => $getUser->vc_email,
                        'contact_number' => $getUser->vc_contact,
                        'class_id' => $getUser->vc_class,
                        'subject_id' => $getUser->vc_subject,
                        'subject_name' => $getSub->sub_name,
                    ];

                    $json['userinfo'] = $userDetail;

                } else {

                    $userInfo = [
                        'vc_contact' => $this->input->post('contactnumber'),
                        'vc_otp' => $otpis,
                        'vc_status' => 'Inactive',
                        'vc_created_date' => date('Y-m-d H:i:s'),
                        'vc_device' => $this->input->post('devicetype'),
                    ];

                    $this->getModel->datastorage('vt_useraccount', $userInfo);
                    $json['status'] = 2;
                    $json['msg'] = "Account Created.";
                    $json['otpis'] = $otpis;
                    $json['userinfo'] = '';
                }

            } else {
                $json['status'] = 0;
                $json['msg'] = strip_tags(validation_errors());
            }

        } else {
            $json['status'] = 0;
            $json['msg'] = "Data not in valid method.";
        }
        echo json_encode($json);

    }

    public function Completeaccount()
    {
        $token = date('siHYmd');
        $updateData = [
            'vc_name' => $this->input->post('fullname'),
            'vc_email' => $this->input->post('emailid'),
            'vc_class' => $this->input->post('classid'),
            'vc_subject' => $this->input->post('subjectid'),
            'vc_token' => $token,
        ];

        $updateUser = $this->getModel->dataupdate('vt_useraccount', ['vc_contact' => $this->input->post('contactnumber'), 'vc_otp' => $this->input->post('otpis')], $updateData);

        if ($updateUser) {
            $getUser = $this->getModel->singledata('vt_useraccount', ['vc_contact' => $this->input->post('contactnumber')]);
            if ($getUser) {

                $userDetail = [
                    'token_id' => $getUser->vc_token,
                    'user_id' => $getUser->vc_id,
                    'full_name' => $getUser->vc_name,
                    'email_id' => $getUser->vc_email,
                    'contact_number' => $getUser->vc_contact,
                    'class_id' => $getUser->vc_class,
                    'subject_id' => $getUser->vc_subject,
                ];

                $json['status'] = 1;
                $json['msg'] = 'Account Updated';
                $json['userinfo'] = $userDetail;
            } else {
                $json['status'] = 0;
                $json['msg'] = 'Data not found';
            }

        } else {

            $json['status'] = 0;

            $json['msg'] = 'Something went wrong.';

        }

        echo json_encode($json);

    }

    public function Userscorereport()
    {

        header('Content-type: application/form-data');
        header('Content-type: application/json');
        $json['status'] = 0;
        $json['msg'] = "Data not found";
        $uid = trim($this->input->get_post('uid'));
        $rtype = trim($this->input->get_post('rtype'));
        if ($rtype == 'all') {
            $reportis = $this->db->query("SELECT `id`,`topic`,`act_type`,SUM(`total_attempt`) AS `total_attempt`,SUM(`wrng_attempt`) AS `wrng_attempt`,SUM(`right_attempt`) AS `right_attempt`,`total_time`,`userid`, `s`.`sub_name` AS `subject`, `c`.`class_name` AS `class`, `sr`.`series_name` AS `course` FROM `reports` JOIN `mastar_subject` AS `s` ON `s`.`sub_id`=`subject` JOIN `mastar_class` AS `c` ON `c`.`class_id`=`class` JOIN `mastar_series` AS `sr` ON `sr`.`series_id`=`course` WHERE `userid`=$uid GROUP BY `class` ")->result();

        } else {
            $reportis = $this->db->query("SELECT SUM(`total_attempt`) AS `allattempt`, SUM(`wrng_attempt`) AS `wrongattempt`, SUM(`right_attempt`) AS `rightattempt`, SUM(`total_time`) AS `spendtime` FROM `reports` WHERE `userid`=$uid GROUP BY `userid`")->row();
        }

        if ($reportis) {
            $json['status'] = 1;
            $json['msg'] = "List of report";
            $json['data'] = $reportis;
        }

        echo json_encode($json);
    }

    public function Accessadmin()
    {

        if ($this->session->userdata('voltAdminKey') != '') {
            redirect('dashboard');
        }

        $this->load->view('adminlogin');

    }

    public function Checkadmin()
    {
        if ($this->form_validation->run('loginAccount')) {
            $checkAdmin = $this->getModel->singledata('vt_adminaccount', ['vc_status' => 'Active', 'vc_email' => $this->input->post('accountid'), 'vc_password' => md5($this->input->post('accountpassword'))]);
            if ($checkAdmin) {
                $this->session->set_userdata('voltAdminKey', $this->input->post('accountid'));
                echo 'verified';
            } else {
                echo "Username or Password is wrong.";
            }
        } else {
                echo validation_errors();
        }
    }

    // New Activity Design

    public function newactivity()
    {
        $this->CheckUserAccount();
        $qtdata = array();
        $currentUrl = explode("~", $this->input->get_post('c'));
        $qtdata['backurl'] = $this->input->get_post('c');
        $qtdata['clid'] = explode('clsis', $currentUrl[0])[1];
        $qtdata['suid'] = explode('subis', $currentUrl[1])[1];
        $qtdata['seid'] = explode('seris', $currentUrl[2])[1];
        $qtdata['chid'] = explode('topsis', $currentUrl[3])[1];
        $qtdata['acid'] = explode('activity', $currentUrl[4])[1];
		$qtdata['time'] = array_search(base64_decode($currentUrl[5]), $this->session->userdata('finalTermsSession'));
        $qtdata['month'] = $currentUrl[5];
        $qtdata['chapter'] = $this->getModel->singledata('chaptername', ['id' => $qtdata['chid']]);
        $qtdata['class'] = $this->getModel->singledata('mastar_class', ['class_id' => $qtdata['clid']]);
        $qtdata['subject'] = $this->getModel->singledata('mastar_subject', ['sub_id' => $qtdata['suid']]);
        $qtdata['series'] = $this->getModel->singledata('mastar_series', ['series_id' => $qtdata['seid']]);
        $qtdata['catactivity'] = $this->getModel->singledata('category_type', ['cat_id' => $qtdata['acid']]);
        $checkCats = API_connector(base_url("api/Gettopcategory?class=" . $qtdata['clid'] . "&subject=" . $qtdata['suid'] . "&series=" . $qtdata['seid'] . "&chapter=" . $qtdata['chid']));
        $qtdata['qns_data_tnf'] = $qtdata['qns_data_mcq'] = $qtdata['qns_data_mch'] = $qtdata['qns_data_fib'] = $qtdata['qns_data_parichay'] = $qtdata['Download_and_Practise'] = $qtdata['qns_data_typing'] = $qtdata['qns_data_infographics'] = $qtdata['qns_data_ImgAns'] = array();
        $setId = $this->uri->segment(2);
        $qType = $this->uri->segment(3);
        $qlist = API_connector(base_url("api/getdecodeqns/?setId=" . $setId . "&type=" . $qType));
        $qtypelist = API_connector(base_url("api/getqdata/?setId=" . $setId));
		
        if ($qlist->status == 1) {
            $getQns = $qlist->data;
            $getQnsArray = json_decode(json_encode($qlist->data), true);
        } else {
            $getQns = [];
            $getQnsArray = [];
        }
        if ($qType == 'tnf') {
            //True & False qns data
            $qtdata['qns_data_tnf'] = $getQnsArray;
			
        } elseif ($qType == 'mcq') {
            //Multiple Choice qns data
            $qtdata['qns_data_mcq'] = $getQnsArray;
        } elseif ($qType == 'mch') {
            //Matching qns data
            $qtdata['qns_data_mch'] = $getQnsArray;
        } elseif ($qType == 'fib') {
            //Fill in the blank qns data
            $qtdata['qns_data_fib'] = $getQnsArray;
        } elseif ($qType == 'imgtext') {
            //Infographics
            $qtdata['qns_data_infographics'] = $getQnsArray;
        } elseif ($qType == 'notes') {
            //Infographics
            $qtdata['qns_data_infographics'] = $getQnsArray;
        } elseif ($qType == 'parichay') {
            //infographics qns data
            $qtdata['qns_data_infographics'] = $getQnsArray;
        } elseif ($qType == 'ebookUpload') {
            //Ebook data
            $qtdata['qns_data_ebook'] = $getQnsArray;
        } elseif ($qType == 'canvas') {
            //canvas data
            $qtdata['qns_data_canvas'] = $getQnsArray;
        } elseif ($qType == 'audioUpload') {
            //audio data
            $qtdata['qns_data_audio'] = $getQnsArray;
        } elseif ($qType == 'mmg') {
            //canvas data
            $qtdata['qns_data_mmg'] = $getQnsArray;
        } elseif ($qType == 'wordsearch') {
            //wordsearch data
            //print_r($getQnsArray); exit;
            $qtdata['qns_data_wordsearch'] = $getQnsArray;
        } elseif ($qType == 'crossword') {
            //crossword data
            $qtdata['qns_data_crossword'] = $getQnsArray;
        } elseif ($qType == 'dragimg') {
            //crossword data
            $qtdata['qns_data_dragimg'] = $getQnsArray;
        } elseif ($qType == 'orderword') {
            $qtdata['qns_data_orderword'] = $getQnsArray;
        } elseif ($qType == 'sudoku') {
            //sudoku data
            $qtdata['qns_data_sudoku'] = $getQnsArray;
        } elseif ($qType == 'picpuzzle') {
            //sudoku data
            $qtdata['qns_data_pic_puzzle'] = $getQnsArray;
        } elseif ($qType == 'vid') {
            //sudoku data
            $qtdata['qns_data_vid'] = $getQnsArray;
        }
        $type_list = API_connector(base_url("api/getqdata/?setId=" . $setId));
        if ($type_list->status == 1) {
            $act_values = $type_list->type;
        } else {
            $act_values = [];
        }
        $topic_data = API_connector(base_url("api/gettopic/?setId=" . $setId));
        if ($topic_data->status == 1) {
            $topic_name = $topic_data->data->chapT_name;
        } else {
            $topic_name = 'Topic';
        }
        $qtdata['allqns'] = $getQns;
        $qtdata['act_value'] = array_values(array_intersect($this->data['type_Array'], $act_values));
        $qtdata['Type_Array'] = $this->data['type_Array'];
        $qtdata['curr_type'] = $qType;
        $qtdata['ass_curr_type'] = $qtypelist->type[0];
        $qtdata['set_Ids'] = $setId;
        $qtdata['Type_Value'] = $this->data['activitytypelist'];
        $qtdata['cat_data_type_label'] = $this->data['activitytypelist'];
        $qtdata['topic_name'] = $topic_name;
        if (@$checkCats->status == 1) {
            $getCategories = $checkCats->catData;
        } else {
            $getCategories = [];
        }
        $qtdata['allcategories'] = $getCategories;
        #print_r($data); die;
        $this->load->view('header', $this->data);
		$checkAudio = $this->db->query("select * from list where set_id=$setId and audio_id >0")->num_rows();
        if($qtdata['seid']=="" and empty($qtdata['series']) and  ($checkAudio > 0 or $qType == 'imgtext') and ($qType == 'tnf' or $qType == 'mcq' or $qType == 'mch' or $qType == 'fib' or $qType == 'imgtext') ){
		$this->load->view('newactivity-listen', $qtdata);
		} else{	
        $this->load->view('newactivity', $qtdata);
		}
        $this->load->view('footer', $this->data);
    }
    
    
    
    
    

    // Play Game

    public function playgame()
    {

        $gamedata = array();
        $setId = $this->uri->segment(2);
        $qType = $this->uri->segment(3);
        $gatGameJson = API_connector(base_url("api/getGamedata/?setId=" . $setId . "&type=" . $qType));
        if ($gatGameJson->status == 0) {
            $gamedata['gameData'] = json_decode(json_encode($gatGameJson), true);
        } else {
            $gamedata['gameData'] = [];
        }
        $this->load->view('playgame', $gamedata);
    }
    
    

    public function listen()
    {
        $qtdata['audpageurl'] = $this->uri->segment(3) . '?c=' . $this->input->get('c');
        $setId = $this->uri->segment(2);
        #print_r($currentUrl); die;
        $qlist = API_connector(base_url("api/getdecodeqns/?setId=" . $setId . "&type=audioUpload"));
        if ($qlist->status == 1) {
            $getQnsArray = json_decode(json_encode($qlist->data), true);
        } else {
            $getQnsArray = [];
        }
        $qtdata['qns_data_audio'] = $getQnsArray;
        $this->load->view('header', $this->data);
        $this->load->view('listening', $qtdata);
        $this->load->view('footer', $this->data);
    }
    
    
    

    public function Voltpackage()
    {
        $this->load->view('package');
    }
    

    public function Privacypolicy()
    {
        $this->load->view('privacypolicy');
    }
    
    
    public function Termsofservice()
    {
        $this->load->view('termsofservice');
    }
    
    
    public function Refundpolicy()
    {
        $this->load->view('refundpolicy');
    }
    
    public function Aboutus()
    {
        $this->load->view('aboutus');
    }
     public function Contactus()
    {
        $this->load->view('contactus');
    }
    

    
    public function usernamestr($strname)
    {
        $uname = explode(' ', trim($strname));
        if (count($uname) >= 1) {
            return strtolower($uname[0] . $uname[1]);
        } else {
            return strtolower($uname[0]);
        }
    }

    public function UserRedirect()
    {
        if (!empty($this->session->userdata('Loginredirecturl'))) {
            redirect(base_url($this->session->userdata('Loginredirecturl')));
        } else {
            redirect(base_url("account"));
        }
    }

    // Generate token
    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet);
        for ($i = 0; $i < $length; $i++) {
            $token .= $codeAlphabet[rand(0, $max - 1)];
        }
        return $token;
    }

    public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($password)) {
            #$this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return true;
        }
        if (preg_match_all($regex_lowercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return false;
        }
        if (preg_match_all($regex_uppercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return false;
        }
        if (preg_match_all($regex_number, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return false;
        }
        if (preg_match_all($regex_special, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return false;
        }
        if (strlen($password) > 32) {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return false;
        }
        return true;
    }
    
    

    // Notification Area
    public function UserNotification()
    {
        $this->load->library("pagination");
        $schoolId = $this->getLogin->vc_school;
        $ucreated_date = $this->getLogin->vc_created_date;
        
   
        $classId = $this->getLogin->vc_class;
        $totalnotify = $this->db->query("SELECT * FROM `notify_push` WHERE level = 'all'  AND DATE_FORMAT(created_on,'%Y-%m-%d %h:%m:%s') > '".$ucreated_date."' or school = $schoolId  AND (class=0 or class=$classId) ORDER BY id DESC")->result();
        $config = array();
        $config["base_url"] = base_url() . "user-notification";
        $config["total_rows"] = count($totalnotify);
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        /* BootStrap 3 Pagination style */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $getNotification = $this->db->query("SELECT * FROM `notify_push` WHERE level = 'all'  AND DATE_FORMAT(created_on,'%Y-%m-%d %h:%m:%s') > '".$ucreated_date."' or school = $schoolId  AND (class=0 or class=$classId) ORDER BY id DESC limit " . $page . ',' . $config["per_page"])->result();
        $data['getNotification'] = $getNotification;
        $this->load->view('notify-list', $data);
    }

    
    
    public function fetch_notification()
    {
        $view = $_REQUEST['view'];
        if (isset($view)) {
            $output = '';
            $mark_read = '';
            $schoolId = $this->getLogin->vc_school;
            $classId = $this->getLogin->vc_class;
             $ucreated_date = $this->getLogin->vc_created_date;
            $getNotification = $this->db->query("SELECT * FROM `notify_push` WHERE level = 'all'  AND DATE_FORMAT(created_on,'%Y-%m-%d %h:%m:%s') > '".$ucreated_date."' or school = $schoolId  AND (class=0 or class=$classId) ORDER BY id DESC limit 0,10")->result();
 
            
            if (!empty($getNotification)) {
                foreach ($getNotification as $nData) {
                    $notifyLogs = $this->getModel->singledata('notify_logs', ['userid' => $this->getLogin->vc_id, 'pushid' => $nData->id, 'view' => '1']);
                    if (!empty($notifyLogs)) {$mark_read = "list-group-item-light";} else { $mark_read = "list-group-item-info";}
                    $output .= "<li class='list-group-item " . $mark_read . "' id='" . $nData->id . "'><a href='javascript:void(0);' onclick='gotourl(" . $nData->id . ");' id=" . $nData->notifyid . "><h4 style='font-size: 15px;'>" . $nData->notify_title . " <span class='label label-primary' style='float: right;'>" . date('d M Y', strtotime($nData->created_on)) . "</span></h4><span>" . substr($nData->notify_desc, 0, 512) . "</span></a></li>";
                }
                $output .= '<li class="list-group-item text-center"><a href="' . base_url('user-notification') . '">View all</a></li>';
            } else {
                $output .= '<li class="list-group-item"><a href="#" class="text-italic">No Notification Found</a></li>';
            }
            $status_query = $getNotification;
            $count = count($status_query);
            $userLogs = $this->getModel->datalisting('notify_logs', ['view' => '1', 'userid' => $this->getLogin->vc_id]);
            $userreadcount = @count($userLogs);
            if ($userreadcount > 0) {$count = count($status_query) - $userreadcount;}
            $data = array(
                'notification' => $output,
                'unseen_notification' => $count,
            );
            echo json_encode($data);
        }
    }

    
    
    public function update_notification()
    {
        $view = $_REQUEST['view'];
        $oldcount = $_REQUEST['count'];
        $uId = $this->getLogin->vc_id;
        $notifyPush = $this->getModel->singledata('notify_push', ['id' => $view]);
        $notify = $this->getModel->singledata('notify', ['id' => $notifyPush->notifyid]);
        $notifyLogs = $this->getModel->singledata('notify_logs', ['userid' => $uId, 'pushid' => $view, 'view' => '1']);
        if (empty($notifyLogs)) {
            $this->getModel->datastorage('notify_logs', ['userid' => $uId, 'pushid' => $view, 'view' => '1']);
        }
        $data = array(
            'redirect' => ($notify->link) ? $notify->link : base_url('user-notification'),'unseen_notification' => $oldcount,);
        echo json_encode($data);
    }
    
    

    public function update_all_notification()
    {
        $view = $_REQUEST['view'];
        $uId = $this->getLogin->vc_id;
        if (!empty($view)) {
            $nIds = explode('-', $view);
            foreach ($nIds as $nid) {
                $notifyLogs = $this->getModel->singledata('notify_logs', ['userid' => $uId, 'pushid' => $nid, 'view' => '1']);
                if (empty($notifyLogs)) {
                    $this->getModel->datastorage('notify_logs', ['userid' => $uId, 'pushid' => $nid, 'view' => '1']);
                }
            }
        }
        $data = array('redirect' => base_url('user-notification'),);
        echo json_encode($data);
    }

}

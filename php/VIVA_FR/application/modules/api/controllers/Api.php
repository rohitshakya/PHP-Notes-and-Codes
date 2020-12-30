<?php defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->ClassData();
        $this->load->model('Api_model');
        $this->load->helper('custom_helper');
        header('Content-type: application/form-data');
        header('Content-type: application/json');
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $this->load->view('index');
    }

    /**
     * This Function is used for get all class List 
     */
    public function getAllClass()
    {
        $class_list = $this->Api_model->classlist();
        if (!empty($class_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $class_list
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Class are not available."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for get subject List
     * Parameter : class,subject
     */
    public function getSubject()
    {
        $subject_list = array();
        $subject_list = $this->Api_model->sublist();

        foreach ($subject_list as $subId) {
            $series_list =  $this->Api_model->setlist($this->data['class'], $subId['subjectId']);
            $sub = $subId['subjectId'];
            $cls = $this->data['class'];
            $checkNumlist = $this->db->query("SELECT * FROM `question` WHERE `class`= '$cls' AND `subject`= '$sub' GROUP BY `chapter` ");
            //echo $this->db->last_query();
            $getNumlist = ($checkNumlist) ? $checkNumlist->num_rows() : '';
            $sub_data[] = array('subjectId' => $subId['subjectId'], 'subject_name' => $subId['subject_name'], 'subject_image' => $subId['subject_image'], 'topics_num' => $getNumlist, 'series_list' => $series_list);
        }

        if (!empty($sub_data)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $sub_data
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Subject are not available."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for get topic List
     * Parameter : class,subject,series
     */
    public function getTopic()
    {
        $setId = explode('-', $this->input->get_post('setId'))[0];
        if (empty($setId)) {
            $chapter_list = $this->Api_model->topiclist($this->data['class'], $this->data['subject'], $this->data['series']);
        } else {
            $topic_name = $this->Api_model->get_data_by('question', $setId, 'id')[0];
            $chapter_list = $this->Api_model->get_data_by('chaptername', $topic_name->chapterTitle, 'id')[0];
        }

        if (!empty($chapter_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $chapter_list
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Topics are not available."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for get set List
     * Parameter : class,subject,series,chapter
     */
    public function getSet()
    {
        $chapterId = $this->input->get_post('chapter');
        if (!empty($this->data['class']) && !empty($this->data['subject']) && !empty($this->data['series'])) {
            $set_info = $this->Api_model->setinfo($this->data['class'], $this->data['subject'], $this->data['series'], $chapterId);

            if (!empty($set_info)) {
                $seriesTitle = $this->Api_model->get_data_by('mastar_series', $this->data['series'], 'series_id')[0];
                $set_data = array("series_title" => $seriesTitle->series_name);
                foreach ($set_info as $chpData) {
                    if ($chpData['chapterTitle'] != "") {
                        $chpIds[] = $chpData['chapterTitle'];
                    }
                }
                $chapIds = array_values(array_unique($chpIds));
                foreach ($chapIds as $cData) {
                    $chapterTitle = $this->Api_model->get_data_by('chaptername', $cData, 'id')[0];
                    $setIdsData = $this->Api_model->get_data_by('question', $cData, 'chapterTitle', '', 'id');
                    $ids = [];
                    foreach ($setIdsData as $gids) {
                        array_push($ids, $gids->id);
                    }
                    $setIds = implode('-', $ids);
                    $pics = ($chapterTitle->chap_image) ? $chapterTitle->chap_image : 'noimage.jpg';
                    $setArray[] = array(
                        "chapId" => $chapterTitle->id,
                        "chapter_title" => $chapterTitle->chapT_name,
                        "chapter_img" => base_url('master/uploads/chapterbanner/' . $pics),
                        "chapter_desc" => $chapterTitle->chap_content,
                        "setIds" => $setIds,
                    );
                }
                $setArray = array_merge($set_data, array('setData' => $setArray));
                if (!empty($setArray)) {
                    $json = array(
                        "status" => 1,
                        "msg" => "Data success.",
                        "data" => $setArray
                    );
                } else {
                    $json = array(
                        "status" => 0,
                        "msg" => "Question set are not available."
                    );
                }
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Question set are not available."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }

    public function getcatSet()
    {
        if (!empty($this->input->get_post('class')) && !empty($this->input->get_post('subject'))  && !empty($this->input->get_post('chapter')) && !empty($this->input->get_post('category'))) {
			$series = ($this->input->get_post('series'))?$this->input->get_post('series'):0;
            $set_info = $this->Api_model->setcatinfo($this->input->get_post('class'), $this->input->get_post('subject'), $series, $this->input->get_post('chapter'), $this->input->get_post('category'));
            if (!empty($set_info[0])) {
                $seriesTitle = $this->Api_model->get_data_by('mastar_series', $series, 'series_id')[0];
                $set_data = array("series_title" => $seriesTitle->series_name);
                $chapIds = $this->input->get_post('chapter');

                $chapterTitle = $this->Api_model->get_data_by('chaptername', $this->input->get_post('chapter'), 'id')[0];
                $setIds = $set_info[0]['id'];
                $getActType = $this->db->query("SELECT * FROM `list` WHERE `set_id`=$setIds")->result_array();
                $dtType = [''];
                foreach ($getActType as $storeActype) {
                    array_push($dtType, $storeActype['type']);
                }
                $setArray[] = array(
                    "chapId" => $chapterTitle->id,
                    "chapter_title" => $chapterTitle->chapT_name,
                    "setIds" => $setIds,
                    "actType" => implode(',', $dtType),
                );
                $setArray = array_merge($set_data, array('setData' => $setArray));
                if (!empty($setArray) && $setIds != '') {
                    $json = array(
                        "status" => 1,
                        "msg" => "Data success.",
                        "data" => $setArray
                    );
                } else {
                    $json = array(
                        "status" => 0,
                        "msg" => "Question set are not available."
                    );
                }
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Question set are not available."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }


    public function Gettopcategory()
    {
        $class = $this->input->get_post('class');
        $subject = $this->input->get_post('subject');
        $series = $this->input->get_post('series');
        $chapter = $this->input->get_post('chapter');

        if ($class != '' || $subject != '' || $series != '' || $chapter != '') {
            $checkCat = $this->db->query("SELECT * FROM `question` JOIN `category_type` ON `category_type`.`cat_id`=`category` WHERE `class`=$class AND `subject`=$subject AND `series`=$series AND `chapterTitle`=$chapter AND flag='0' GROUP BY `category` ORDER BY `category_type`.`cat_num` ")->result();
            if ($checkCat) {
                $filterIds = [];
                foreach ($checkCat as $getCatids) {
                    $checkList = $this->db->query("SELECT * FROM `list` WHERE `set_id`='" . $getCatids->id . "' AND flag='0'")->row();
                    if ($checkList) {
                        array_push($filterIds, $getCatids->id);
                    }
                }
                if (count($filterIds)) {
                    $idsss = implode(',', $filterIds);
                    $checkList = $this->db->query("SELECT * FROM `question` JOIN `category_type` ON `category_type`.`cat_id`=`category` WHERE `id` in ($idsss)  GROUP BY `category` ORDER BY `category_type`.`cat_num` ")->result();
                }
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "catData" => $checkList
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Data not found."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "All Parameters are required."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for series List
     * Parameter : class,subject,series
     */
    public function getSeries()
    {
        $series_list = $this->Api_model->setlist($this->data['class'], $this->data['subject'], $this->data['series']);
        if (!empty($series_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $series_list
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Series are not available."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Question List
     * Parameter : setId,type
     */
    public function getQdata()
    {
        $setId = $this->input->get_post('setId');
        $type  = $this->input->get_post('type');

        $Qns_list = $this->Api_model->getqdata($type, $setId);
        $All_Type = $this->Api_model->getalltype($setId);

        foreach ($All_Type as $typelist) {
            $typeArray[] = $typelist->type;
        }

        if (!empty($setId) && !empty($type)) {
            if (!empty($Qns_list)) {
                usort($typeArray, "custom_type_sort");
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray,
                    "data" => $Qns_list,
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Questions are not available."
                );
            }
        } elseif (!empty($setId) && empty($type)) {
            if (!empty($typeArray)) {
                usort($typeArray, "custom_type_sort");
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Questions Type are not available."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Decoded Question List
     * Parameter : setId,type
     */
    public function getDecodeQns()
    {
        $setId = $this->input->get_post('setId');
        $type  = $this->input->get_post('type');

        if (!empty($setId) && !empty($type)) {
            $LeftColumn = $RightColumn = $RightAnwser = $FibQns = array();
            $Qns_list = $this->Api_model->getqdata($type, $setId);
            $All_Type = $this->Api_model->getalltype($setId);
            foreach ($All_Type as $typelist) {
                $typeArray[] = $typelist->type;
            } 

            #print_r($Qns_list);

            foreach ($Qns_list as $qData) {
                $LeftColumn   = array_values(array_map("html_decode", array_filter(json_decode($qData['qLeft']))));
                $RightColumn  = array_values(array_map("html_decode", array_filter(json_decode($qData['qRight']))));
                $RightAnwser  = array_values(array_map("html_decode", array_filter(json_decode($qData['qAnswer']))));
                $FibQns       = array_map("html_decode", json_decode($qData['quetionFill']));
                $change_tag   = array("<@br>", "&lt;@br&gt;");
                $qnsWithhtml = $qData['question'];
                // Qns Image Url
                $qns_img_url = @preg_split('/(<img[^>]+\>)/i', strip_tags($qData['question'], "<img>"), -1, PREG_SPLIT_DELIM_CAPTURE);
                @preg_match('@src="([^"]+)"@', $qns_img_url[1], $match);
                $qnsimgsrc = array_pop($match);

                $qnsRow = array(
                    "id" => $qData['id'],
                    "type" => $qData['type'],
                    "text" => html_decode($qData['text']),
                    "url" => html_decode($qData['url']),
                    "image" => html_decode($qData['image']),
                    "mcq" => json_encode(array_map("html_decode", json_decode($qData['mcq']))),
                    "answer" => ($qData['answer'] === false) ? '0' : html_decode($qData['answer']),
                    "question" => @preg_split('/(<img[^>]+\>)/i', strip_tags(str_replace($change_tag, "<br>", $qData['question']), "<ul><ol><li><strong><em><br><i><b><u><img><sup><sub></sup></sub>"), -1, PREG_SPLIT_DELIM_CAPTURE)[0],
                    "urlImage" => @preg_split('/(<img[^>]+\>)/i', strip_tags(str_replace($change_tag, "<br>", $qData['question']), "<strong><em><br><i><b><u><img><sup><sub></sup></sub>"), -1, PREG_SPLIT_DELIM_CAPTURE)[1],
                    "set_id" => $qData['set_id'],
                    "img_url" => !empty($qnsimgsrc) ? base_url($qnsimgsrc) : '',
                    //"md_list" => json_encode(array_map("color", json_decode($qData['md_list'], true)), JSON_UNESCAPED_SLASHES),
                    "md_list" => json_encode(json_decode($qData['md_list'], true), JSON_UNESCAPED_SLASHES),
                    "mylist" => $qData['mylist'],
                    "myans" => $qData['myans'],
                    "label" => $qData['label'],
                    "3d_list" => $qData['3d_list'],
                    "solutions" => $qData['solutions'],
                    "questionHtml"=>htmlentities(str_replace($change_tag, "<br>", $qnsWithhtml))

                );
                #print_r($qnsRow); die;
                $qnsRes[] = array_merge(array_map("html_decode", $qnsRow), array(
                    "left_col" => $LeftColumn,
                    "right_col" => $RightColumn,
                    "right_ans" => $RightAnwser,
                    "fib_qns" => $FibQns
                ));
            }
            $http = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
            $media_url = $http . ":vivavolt.vivadigitalindia.net/master/";
            if (!empty($qnsRes)) {
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray,
                    "media_url" => $media_url,
                    "data" => $qnsRes
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Questions are not available."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Game Question List
     * Parameter : setId,type
     */
    public function getGamedata()
    {
        $setId = $this->input->get_post('setId');
        $type  = $this->input->get_post('type');

        if (!empty($setId) && !empty($type)) {
            $leveldecoration  = array("");
            $new = array("");
            $Qns_list = $this->Api_model->getqdata($type, $setId);
            $game_level = $this->Api_model->get_data_by('game', '1', 'id')[0];
            foreach ($Qns_list as $gData) {
                $Mcqval = array_map("html_decode", json_decode($gData['mcq']));
                $new[$game_level->level][] = array(html_decode($gData['question']), array_filter($Mcqval), $Mcqval[$gData['answer']]);
                $leveldecoration[$game_level->level] = array($game_level->backgound, $game_level->queWindow, $game_level->color);
            }
            if (!empty($new)) {
                $json = array(
                    'status' => '0',
                    'data' => array("questions" => $new, "leveldecoration" => $leveldecoration)
                );
            } else {
                $json = array(
                    'status' => '1',
                    "message" => "Data Not found"
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for Set INFO List
     */
    public function getCategory()
    {
        $chpId = $this->input->get_post('chpId');
        $cat_list = $this->Api_model->categorylist($this->data['class'], $this->data['subject'], $this->data['series'], $chpId);
        if (!empty($cat_list)) {
            $json = array(
                "status" => 1,
                "msg" => "Data success.",
                "data" => $cat_list
            );
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Categories are not available."
            );
        }
        echo json_encode($json);
    }

    /**
     * This Function is used for genrate records
     */
    public function reportgenerator()
    {
        $userid = $this->input->get_post('userid');
        $setId = explode('-', $this->input->get_post('setId'))[0];
        if (!empty($setId) && !empty($userid)) {
            $getMain = $this->Api_model->get_data_by('question', $setId, 'id')[0];
            $starttime = $this->input->get_post('starttime');
            $endtime = date('Y-m-d H:i:s');
            $dteStart = new DateTime($starttime);
            $dteEnd   = new DateTime($endtime);
            $totaltime  = $dteStart->diff($dteEnd);

            $reportdata = array(
                'class' => $getMain->class,
                'subject' => $getMain->subject,
                'course' => $getMain->series,
                'topic' => $getMain->chapter,
                'start_time' => $starttime,
                'end_time' => $endtime,
                'total_time' => $totaltime->format("%H:%I:%S"),
                'userid' => $userid,
                'act_type' => $this->input->get_post('type'),
                'total_attempt' => $this->input->get_post('total_qns'),
                'wrng_attempt' => $this->input->get_post('wrng_qns'),
                'right_attempt' => $this->input->get_post('right_qns'),
            );

            #print_r($reportdata);
            $this->db->delete('reports', ['class' => $getMain->class, 'subject' => $getMain->subject, 'course' => $getMain->series, 'topic' => $getMain->chapter, 'userid' => $userid, 'act_type' => $this->input->post('type')]);
            $this->Api_model->insertRow('reports', $reportdata);

            if (!empty($getMain)) {
                $json = array("status" => 1, "msg" => "Report updated.");
            }
        } else {
            $json = array("status" => 0, "msg" => "Invalid Parameter.");
        }
        echo json_encode($json);
        die;
    }

    /**
     * This Function is used for Custom types for apps
     */
    public function getQtypedata()
    {
        $setId = $this->input->get_post('setId');
        if (!empty($setId)) {
            $type_Array = array('mcq', 'tnf', 'fib', 'mch');
            $type_list = API_connector(base_url("api/getqdata/?setId=" . $setId));

            if ($type_list->status == 1) {
                $act_values = $type_list->type;
            } else {
                $act_values = [];
            }

            $typeArray = array_values(array_intersect($type_Array, $act_values));

            if (!empty($typeArray)) {
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "type" => $typeArray
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Type are not available."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }
    #get_assessment()   
    #get_practice()

    public function gettypelist()
    {
        $setId = $this->input->get_post('setId');
        if (!empty($setId)) {
            $type_Array = array('mcq', 'tnf', 'fib', 'mch', 'vid');
            $type_list = API_connector(base_url("api/getqdata/?setId=" . $setId));

            if ($type_list->status == 1) {
                $act_values = $type_list->type;
            } else {
                $act_values = [];
            }

            $typeArray = array_values(array_intersect($type_Array, $act_values));

            if (!empty($typeArray)) {

                if (in_array('vid', $typeArray)) {
                    $typeData[] = 'video';
                }
                $typeData[] = 'practice';
                if (in_array('mcq', $typeArray)) {
                    $typeData[] = 'assesment';
                }
                $json = array(
                    "status" => 1,
                    "msg" => "Data success.",
                    "typelist" => $typeData
                );
            } else {
                $json = array(
                    "status" => 0,
                    "msg" => "Type are not available."
                );
            }
        } else {
            $json = array(
                "status" => 0,
                "msg" => "Invalid Parameter."
            );
        }
        echo json_encode($json);
    }
    /** Verify User by TOKEN ID */
    public function userverify(){
        $uId = $this->input->get_post('utoken');
        $uToken = ($uId)?$uId:"notvalid";
        $uData = $this->Api_model->get_data_by('vt_user_token',$uToken,'token');       
        if(!empty($uData)){
            $json = array(
                "status" => 1,
                "msg" => "valid."
            );
        }else{
            $json = array(
                "status" => 0,
                "msg" => "Invalid."
            );
        }       
        echo json_encode($json);
    }

    /**
     * This Function is used for Passed required params
     * Parameter : class,subject,series
     */
    function ClassData()
    {
        $this->data = array(
            'class' => $this->input->get_post('class'),
            'series' => $this->input->get_post('series'),
            'subject' => $this->input->get_post('subject')
        );
    }
}

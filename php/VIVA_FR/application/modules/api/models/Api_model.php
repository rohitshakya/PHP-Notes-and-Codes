<?php
class Api_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	 * This function is used to select data form table  
	 */
	function get_data_by($tableName = '', $value = '', $colum = '', $condition = '', $select = '*')
	{
		if ((!empty($value)) && (!empty($colum))) {
			$this->db->where($colum, $value);
		}
		if (!empty($condition)) {
			$this->db->where($condition);
		}
		$this->db->select($select);
		$this->db->from($tableName);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * This function is used to Update record in table  
	 */
	public function updateRow($table, $col, $colVal, $data, $condition = '')
	{
		
		if (!empty($condition)) {
			$this->db->where($condition);
		}

		$this->db->where($col, $colVal);
		$this->db->update($table, $data);
		return true;
	}

	/**
	 * This function is used to Insert record in table  
	 */
	public function insertRow($table, $data)
	{
		
		$this->db->insert($table, $data);
		return  $this->db->insert_id();
	}

	/**
	 * This Function is used for Subject List
	 */
	public function classlist()
	{
		#SELECT DISTINCT sub_name FROM `question` Left join mastar_subject on mastar_subject.sub_id = question.subject ORDER BY `mastar_subject`.`sub_name` ASC
		
		$this->db->distinct();
		$this->db->select('class_id as classId,class_name');
		$this->db->from('mastar_class');
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * This Function is used for Subject List
	 */
	public function sublist()
	{
		#SELECT DISTINCT sub_name FROM `question` Left join mastar_subject on mastar_subject.sub_id = question.subject ORDER BY `mastar_subject`.`sub_name` ASC
		
		$this->db->distinct();
		$this->db->select('subject as subjectId, sub_name as subject_name, sub_cover as subject_image');
		$this->db->from('question');
		$this->db->join('mastar_subject', 'mastar_subject.sub_id = question.subject', 'left');
		$this->db->where('mastar_subject.deleteflag', 0);
		$this->db->order_by("mastar_subject.sub_id", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * This Function is used for Topics List
	 */
	public function topiclist($class = '', $sub = '', $series = '')
	{
		#$query = $this->db->query("SELECT DISTINCT b.chapT_name,c.chap_id, c.chap_name FROM question a INNER JOIN chaptername b ON a.chapterTitle = b.id INNER JOIN mastar_chapter c ON a.chapter = c.chap_id INNER JOIN list d ON a.id = d.set_id where a.class='$class' and a.subject='$sub' and a.series='$series' ORDER BY c.chap_id ASC");	
		
		$this->db->distinct();
		$this->db->select('mchap.chap_id as topicId,chp.chapT_name as topic_name');
		$this->db->from('question qns');
		$this->db->join('chaptername chp', 'qns.chapterTitle = chp.id', 'INNER');
		$this->db->join('mastar_chapter mchap', 'qns.chapter = mchap.chap_id', 'INNER');
		$this->db->join('list d', 'qns.id = d.set_id', 'INNER');
		$this->db->where("qns.class='$class' and qns.subject='$sub' and qns.series='$series'");
		$this->db->order_by("mchap.chap_id", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * This Function is used for Set INFO List
	 */
	public function setinfo($class = '', $sub = '', $series = '', $chapterId = '')
	{
		
		$this->db->select('*');
		$this->db->from('question');
		$where_con = array('class' => $class, 'subject' => $sub);
		$this->db->where($where_con);
		if (!empty($series)) {
			$this->db->where('series', $series);
		}
		if (!empty($chapterId)) {
			$this->db->where('chapter', $chapterId);
		}
		$this->db->order_by("chapter", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function setcatinfo($class = '', $sub = '', $series = '', $chapterId = '', $categoryId = '' )
	{
		$this->db->select('*');
		$this->db->from('question');
		$where_con = array('class' => $class, 'subject' => $sub, 'series' => $series, 'chapterTitle' => $chapterId, 'category' => $categoryId );
		$this->db->where($where_con);
		$this->db->order_by("chapter", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * This Function is used for SET list
	 */
	public function setlist($class = '', $sub = '', $series = '')
	{
		$checkNumlist = $this->db->query("SELECT * FROM `question` WHERE `class`= '$class' AND `subject`= '$sub' GROUP BY `chapter` ");
		//echo $this->db->last_query();
		$getNumlist = ($checkNumlist)?$checkNumlist->num_rows():'0';
		$this->db->distinct();
		$this->db->select('series,mastar_series.series_name, '.$getNumlist.' as allcount ');
		$this->db->from('question');
		$this->db->where("class='$class' and subject='$sub'");
		$this->db->join('mastar_series', 'mastar_series.series_id = question.series AND deleteflag=0 ', 'left');
		$this->db->order_by("mastar_series.series_num", "asc");
		//$this->db->order_by("series", "desc");
		//$this->db->group_by('mastar_series.series_id');
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * This Function is used for Qns list
	 */
	public function getqdata($type = '', $setId = '')
	{
		
		$this->db->select('*');
		$this->db->from('list');
		$this->db->where('flag',0);
		if (!empty($type)) {
			$this->db->where('type', $type);
		}
		if (!empty($setId)) {
			$setIds = explode('-', $setId);
			$this->db->where_in('set_id', $setIds);
		}

		$this->db->order_by("id", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}

	/**
	 * This Function is used for all type list
	 */
	public function getalltype($setId = '')
	{
		
		$this->db->distinct();
		$this->db->select('type');
		$this->db->from('list');
		$this->db->where('flag',0);
		if (!empty($setId)) {
			$setIds = explode('-', $setId);
			$this->db->where_in('set_id', $setIds);
		}
		$this->db->order_by("id", "asc");
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * This Function is used for Category list
	 */
	public function categorylist($class = '', $sub = '', $series = '', $chpId = '')
	{
		
		$this->db->distinct();
		$this->db->select('category as catId,category_type.cat_name');
		$this->db->from('question');
		$where_con = array('class' => $class, 'subject' => $sub, 'series' => $series);
		$this->db->where($where_con);
		if (!empty($chpId)) {
			$this->db->where('chapter', $chpId);
		}
		$this->db->join('category_type', 'category_type.cat_id = question.category', 'left');
		$this->db->order_by("category_type.cat_id", "asc");
		$query = $this->db->get();
		return $query->result_array();
	}
}

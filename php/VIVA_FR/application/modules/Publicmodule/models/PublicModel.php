<?php


class PublicModel extends CI_Model
{

	public function datastorage($table, $data)
	{
		$insertQ = $this->db->insert($table, $data);
		if($insertQ)
			{
				return true;
			}
	}

	public function dataupdate($table, $condition, $data)
	{
		$this->db->where($condition);
		$update = $this->db->update($table, $data);
		if($update)
		{
			return true;
		}
	}
	

	public function dataremove($table, $condition)
	{
		$delteQ = $this->db->delete($table, $condition);
		if($delteQ){return true;}
	}

	public function datalisting($table, $condition='', $orderby='', $limit='')
	{
		if($limit!=''){$this->db->offset($this->uri->segment(3));$this->db->limit($limit);}
		if($orderby!=''){
			$orderdata = explode('=',$orderby);
			$this->db->order_by($orderdata[0], $orderdata[1]);
		}
		if($condition!=''){
			$getList = $this->db->get_where($table, $condition);	
		}
			else{
				$getList = $this->db->select('*')->from($table)->get();
			}
		if($getList->num_rows()>0)
		{
			return $getList->result();
		}
	}
	

	public function singledata($table, $condition='')
	{
			$getList = $this->db->get_where($table, $condition);
		if($getList->num_rows()>0)
		{
			return $getList->row();
		}
	}
	


}

?>
<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Frontend_model extends CI_Model
{
    
    public function type()
	{
		$status= array(
            array(
                'id' => '1',
                'name' => 'Free'
            ),array(
                'id' => '0',
                'name' => 'Paid'
            )
        );
		return $status;
	}
    
    public function isverified()
	{
		$status= array(
            array(
                'id' => '1',
                'name' => 'Yes'
            ),array(
                'id' => '0',
                'name' => 'No'
            )
        );
		return $status;
	}
    
	public function getdaysofoperation()
	{
		$query=$this->db->query("SELECT * FROM `daysofoperation`  ORDER BY `id` ASC")->result();
		
		return $query;
	}
// All frontends dropdown or other functions
    
}
?>
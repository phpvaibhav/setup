<?php class Api_model extends CI_Model{

  function categoryList(){
  	$array =array();
  	$this->db->select("*")->from("category");
  	$sql = $this->db->get();
  	if($sql->num_rows()):
  		$array = $sql->result();
  	endif;
  	return $array;
  }//end function

}?>
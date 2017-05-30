<?php
class Join_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    } 
    function getData()
    {
        // member테이블의 모든 레코드를 불러 옴.
        $query = $this->db->get('member');
        
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            show_error('Database is empty!');
        }
    }
}
?>


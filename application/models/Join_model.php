<?php
class Join_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    } 
    function getData()
    {
        // member테이블의 모든 레코드를 불러 옴.
        $query = $this->db->get('mp_member');
        
        if ($query->num_rows() > 0)
        {
            return $query->result();
        }else{
            show_error('Database is empty!');
        }
    }
    function gets()
    {
        return $this->db->query("SELECT * FROM mp_member")->result();
    }

    function get($option)
    {
        $result = $this->db->get_where('user', array('email'=>$option['email']))->row();
        var_dump($this->db->last_query());
        return $result;
    }

    function add($option)
    {

        $this->_head();

        $this->load->library('form_validation');

        $this->db->set('name', $option['name']);
        $this->db->set('age', $option['age']);
        $this->db->set('email', $option['email']);
        $this->db->insert('mp_member');
        $result = $this->db->insert_id();
        return $result;
    }
}
?>


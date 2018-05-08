<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function get_most_recent_news() {
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        //$this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
        $this->db->order_by('ID', 'desc');
        $this->db->where('STATUS',1);
        $query = $this->db->get('newsevents');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }

    function _db_error() {
        //exception handling ------------------
        if ($this->db->trans_status() == FALSE) {
            redirect('web/uc_');
        }
        //-------------------------------------
    }
}

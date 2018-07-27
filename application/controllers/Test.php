<?php

class Test extends CI_Controller {

	public function databaseTest()
	{
	    $res = User::first();
	    var_dump($res);
	    exit();
        $this->load->database('default');
        $query = $this->db->query("SELECT * FROM tbl_user limit 1;");

        foreach ($query->result() as $row)
        {
            echo '<pre>';
            print_r($row);
            exit;
        }
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
        // ถ้าใช้มากกว่า 1 DB ให้ 
        // 1.ตั้งค่า DB ใน application\config\database.php
        // 2.Load มาก่อนใช้ด้วย
        // $this->PN = $this->load->database('db2', TRUE);
    }
    public function get_ipaddress()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    public function checklogin()
    {
        $ipaddress = $this->get_ipaddress();
        $ID = $_POST['id'];
        $query = $this->db->query("SELECT * FROM A_STOCK_USER where Emp_ID = '$ID'");
        if (sizeof($query->result())) {
            $sql = "INSERT INTO TB_COMPONENT_PART_LOG (Type,status,IP,UserID) VALUES ('Login','success','$ipaddress','$ID');";
            $this->db->simple_query($sql);
        } else {
            $sql = "INSERT INTO TB_COMPONENT_PART_LOG (Type,status,IP,UserID) VALUES ('Login','fail','$ipaddress','$ID');";
            $this->db->simple_query($sql);
        }
        return $query->result();
    }
}

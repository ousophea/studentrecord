<?php

class Model_student extends Model {

    function __construct() {
        parent::__construct();
    }

    function get_all_student($cla_id, $all_student = NULL) {

        if ($all_student != NULL) {

            $get_ganNumber = $this->get_getneration_by_class_id($cla_id);
            $this->db->where('gan_id', $get_ganNumber->cla_gan_id);
            
        } else {
            $this->db->where('applicant.stu_cla_id', $cla_id);
        }

        $this->db->from('applicant');
        $this->db->join('tbl_classes', 'applicant.stu_cla_id = tbl_classes.cla_id', 'left');
        $this->db->join('tbl_ganeration gan', 'gan.gan_id = tbl_classes.cla_gan_id');
        $this->db->join('selection_campaign sc', 'sc.selection_campaign_id = applicant.selection_campaign_id');
        $this->db->join('province', 'applicant.applicant_origin_province_id = province.province_id', 'left');
        $this->db->order_by("applicant.applicant_firstname", "asc");
        $query = $this->db->get();
        return $query;
    }

    function get_getneration_by_class_id($classId = null) {
        $this->db->where('cla.cla_id', $classId);
        $this->db->select('cla.cla_gan_id');
        $this->db->from('tbl_classes cla');
        $query = $this->db->get();
        foreach ($query->result() as $field) {
            return  $field;
        }
    }

    function get_studentDetail($id = NULL) {
        $id = $this->uri->segment(3);
        $this->db->where('applicant.applicant_id', $id);
        $this->db->from('applicant');
        $this->db->join('tbl_classes', 'applicant.stu_cla_id = tbl_classes.cla_id', 'left');
        $this->db->join('province', 'applicant.applicant_origin_province_id = province.province_id', 'left');
        $query = $this->db->get();
        return $query;
    }

    function get_random_student($getcla_id) {
//        $this->db->where('stu_cla_id',$getcla_id);
//        $getNum = $this->db->get('tbl_students');
//        $i = 0;
//        $getArry = null;
//        foreach ($getNum->result() as $num) {
//            $getArray[$i] = $num->stu_first_name."_".$num->stu_last_name;
//            $i++;
//        }
//        $randomResult = random_element($getArray);
//
//        return $randomResult;
    }

    function add_edit_student() {
//        if($this->input->post('action')=='add'){
        $stu_name = $this->input->post('txtStudentName');
        return $stu_name;
//        }
    }

    function get_all_class() {
        $this->db->order_by("cla_gan_id desc,cla_name asc");
        $query = $this->db->get('tbl_classes');
        return $query;
    }

    function get_random($getcla_id) {
        $this->db->where('stu_cla_id', $getcla_id);
        $this->db->order_by('applicant_id', 'RANDOM');
        $this->db->limit(1);
        $query = $this->db->get('applicant');
        return $query->result_array();
    }

    function get_student_photo($getcla_id) {
        $this->db->where('stu_cla_id', $getcla_id);
        $this->db->join('selection_campaign sc', 'sc.selection_campaign_id = applicant.selection_campaign_id');
        $query = $this->db->get('applicant');
        return $query->result_array();
    }

    function menu_class() {
        $arr_menu = array();
        $ci = & get_instance();
        $ci->load->database();
        $ci->db->where('gan_status', 1);
        $query_gan = $ci->db->get("tbl_ganeration");
        if ($query_gan->num_rows() > 0) {
            foreach ($query_gan->result() as $gan_rows) {
                $ci->db->where('cla_gan_id', $gan_rows->gan_id);
                $ci->db->where('cla_status', 1);
                $query_class = $ci->db->get('tbl_classes');
                if ($query_class->num_rows() > 0) {
                    foreach ($query_class->result() as $cla_rows) {
                        $arr_menu[$gan_rows->gan_name][$cla_rows->cla_id] = $cla_rows->cla_name;
                    }
                }
            }
        }
        return $arr_menu;
    }

    function getDataArray($table_name, $field_key, $field_value, $field_status = null, $status_value = 1) {
        $this->db->select($field_key . ',' . $field_value);
        if ($field_status != NULL)
            $this->db->where($field_status, $status_value);
        $this->db->from($table_name);
        $data = $this->db->get();
        $result = array();
        if ($data->num_rows() > 0) {
            foreach ($data->result_array() as $row) {
                $result[$row[$field_key]] = $row[$field_value];
            }
        }
        return $result;
    }

}

?>
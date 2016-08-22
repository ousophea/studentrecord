<?php

class Student_grouping extends Controller {

    function Student_grouping() {
        parent::Controller();
        $this->load->helper(array('html', 'url', 'form', 'array'));
        $this->load->model('Model_student', 'mod_student', 'm_global');
        $this->load->library('upload');
    }

    function index() {

//        $data['query_student_data'] = $this->mod_student->get_all_student();
        //$data['random_result'] = $this->mod_student->get_random_student($cla_id);
        $data['title'] = 'Student Grouping';
//        $data['content'] = "student_grouping";
        $this->load->view('main', $data);
    }

    

}

?>

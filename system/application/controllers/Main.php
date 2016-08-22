<?php

class Main extends Controller {

    function Main() {
        parent::Controller();
        $this->load->helper(array('html', 'url', 'form', 'array'));
        $this->load->model('Model_student', 'mod_student','m_global');
    }

    function index($cla_id = NULL) {
        $cla_id = 1;
        $data['menu_left'] = $this->mod_student->menu_class();
        $data['title'] = 'Student Auto Selection | Panel';
        $data['content'] = 'panel';
        $this->load->view('main', $data);
    }
    function win8(){
        $this->load->view('templates/win8');
    }

    function add_student() {

        $data['param'] = array('title' => 'Add Student', 'content_name' => 'add_edit_student');
        $this->load->view('add_edit_student', $data);
    }

    function add_edit_student() {
        $data['param'] = array('title' => 'Add Student', 'content_name' => 'add_edit_student');
        $this->load->model('Model_student', 'mod_student');
        $date['insert'] = $this->mod_student->add_edit_student();
        echo $date['insert'];
        exit();
        $this->load->view('add_edit_student', $data);
    }

}

?>

<?php

class Student extends Controller {

    function Student() {
        parent::Controller();
        $this->load->helper(array('html', 'url', 'form', 'array'));
        $this->load->model('Model_student', 'mod_student', 'm_global');
        $this->load->library('upload');
    }

    function index() {

        $data['query_student_data'] = $this->mod_student->get_all_student();
        //$data['random_result'] = $this->mod_student->get_random_student($cla_id);
        $data['title'] = 'Student Auto Selection | Panel';
        $data['content'] = 'students';
        $this->load->view('main', $data);
    }

    function studentlist() {
        if ($this->uri->segment(3)) {
            $class_id = $this->uri->segment(3);
        } else {
            $class_id = 1;
        }

        $data['query_student_data'] = $this->mod_student->get_all_student($class_id,$this->uri->segment(4));
        //$data['random_result'] = $this->mod_student->get_random_student($cla_id);
        $data['title'] = 'Student Auto Selection | Panel';
//        $data['content'] = 'students';
        $this->load->view('main', $data);
    }

    function edit() {
        $data['title'] = 'Edit student';
        $data['content'] = 'edit';
        $data['query_class_data'] = $this->mod_student->get_all_class();
        $student_list = $this->mod_student->get_studentDetail();
        $data['student_data'] = $student_list->result_array();
//        $data['query_class_data'] = $this->m_global->getDataArray('tbl_classes', 'cla_id', 'cla_name', 'c_status');
        $this->load->view('main', $data);
    }

    function studentDetail() {
        $id = 6779;
        $data['student_data'] = $this->mod_student->get_studentDetail($id);
        $data['title'] = 'Student Detail';
        $this->load->view('main', $data);
    }

    function selectstudent() {
        $data['query_class_data'] = $this->mod_student->get_all_class();
        //$data['random_result'] = $this->mod_student->get_random_student($cla_id);
        $data['title'] = 'Student Auto Selection | Panel';
//        $data['content'] = 'form_random';
        $this->load->view('main', $data);
    }

    public function fileUpload() { {
            $student_name = $_POST['student_name'];
            $attachment_file = $_FILES["attachment_file"];
            $output_dir = "uploads/";
            $fileName = $_FILES["attachment_file"]["name"];
//            $size = $_FILES['attachment_file']['size'];

            $ext = strtolower($this->getExtension($fileName));
            $actual_image_name = $student_name . "." . $ext;
            $uploadedfile = $_FILES['attachment_file']['tmp_name'];
//
            $filename = $this->compressImage($ext, $uploadedfile, $output_dir, $actual_image_name, 400);


//            move_uploaded_file($_FILES["attachment_file"]["tmp_name"], $output_dir . $fileName);
            echo "File uploaded successfully";
        }
    }

    function get_random() {
        if ($this->uri->segment(3)) {
            $class_id = $this->uri->segment(3);
        } else {
            $class_id = 1;
        }
        $arr_student = $this->mod_student->get_student_photo($class_id);

        //$stuName = str_replace(" ", "",$arr_student[0]['stu_photo']);
        echo'<script type="text/javascript" language="javascript">';
        //echo "var arr_student_photos =new Array();";
        $i = 0;
        foreach ($arr_student as $row) {
            $stuPhoto = str_replace("  ", "", 'uploads/' . $row['applicant_photo']);
            echo "arr_student_photos[$i]= '" . $stuPhoto . ".jpg';";
            $i++;
        }

        echo "var baseUrl= '" . base_url() . "'";
        //echo "var item = arr_student_photos[Math.floor(Math.random()*arr_student_photos.length)];";
        //echo " random_student_id ='".$stuName."';"; 
        //echo "alert(arr_student_photos);";

        echo'</script>';
    }

    function getExtension($str) {
        $i = strrpos($str, ".");
        if (!$i) {
            return "";
        }
        $l = strlen($str) - $i;
        $ext = substr($str, $i + 1, $l);
        return $ext;
    }

    function compressImage($ext, $uploadedfile, $path, $actual_image_name, $newwidth) {

        if ($ext == "jpg" || $ext == "jpeg") {
            $src = imagecreatefromjpeg($uploadedfile);
        } else if ($ext == "png") {
            $src = imagecreatefrompng($uploadedfile);
        } else if ($ext == "gif") {
            $src = imagecreatefromgif($uploadedfile);
        } else {
            $src = imagecreatefrombmp($uploadedfile);
        }

        list($width, $height) = getimagesize($uploadedfile);
        $newheight = ($height / $width) * $newwidth;
        $tmp = imagecreatetruecolor($newwidth, $newheight);
        imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        $filename = $path .$actual_image_name; //PixelSize_TimeStamp.jpg
        imagejpeg($tmp, $filename, 100);
        imagedestroy($tmp);
        return $filename;
    }
    function student_grouping(){
        $data['title'] = 'Student Grouping';
        $this->load->view('main', $data);
    }

}

?>

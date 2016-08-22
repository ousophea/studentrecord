<?php

function call_mod_func($model_name, $function_name, $parameters = null) {
    $ci = get_instance();
    $ci->load->model($model_name);
    return $ci->$model_name->$function_name($parameters);
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo (isset($title)) ? $title : 'Home' ?></title>

        <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/jquery-1.8.2.js" ></script>
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>

        <link href="<?php echo base_url(); ?>images/icon.ico" rel="shortcut icon">
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>js/ajaxfileupload.js"></script>-->

<!--<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/list.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>slimbox-2.04/js/slimbox2.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>slimbox-2.04/css/slimbox2.css" type="text/css" media="screen" />


        <script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<!--        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.8.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>-->


        <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css" />
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>css/style_drag_and_drop.css" />-->
    </head>
    <body>
        <script type="text/javascript" language="javascript">
            var random_student_id;
            var arr_student_photos = new Array();
        </script>
        <div id="header">
            <div id="banner" class="row">
                <div id="logo" class="span">
                    <a href=""> <img title="Passerelles Numeriques Cambodia" class="logo" src="<?php echo base_url(); ?>images/logo-pn.png" alt="Logo"></a>

                </div>
                <div id="banner-content" class="span"><img title="Passerelles Numeriques Cambodia" class="logo" src="<?php echo base_url(); ?>images/banner.jpg" alt="Logo"></div>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2 sidebar">


                    <ul class="nav nav-list sidebar_nav"> 
                        <li class="nav-header">List header</li>
                        <li class="active">

                            <a href="<?php echo base_url(); ?>">Panel</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>student/selectstudent">Select Student</a>
                        </li>


                        <?php
                        $get_menu_left = menu_left();

                        foreach ($get_menu_left as $key => $gan_item) {
                            ?>
                            <li class="dropdown all-camera-dropdown">
                                <a class="dropdown-toggle"
                                   data-toggle="dropdown"
                                   href="#">
                                       <?php echo $key ?>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <?php
                                    foreach ($gan_item as $key => $cla_item) {
                                        echo '<li><a href="' . base_url() . 'student/studentlist/' . $key . '">' . $cla_item . '</a></li>';
                                    }
                                    echo '<li><a href="' . base_url() . 'student/studentlist/' . $key . '/all"> ALL Student </a></li>';
                                    ?>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>





                    <!--
                    <ul class="nav nav-pills">  
                        <li class="dropdown all-camera-dropdown">  
                               <a class="dropdown-toggle" data-toggle="dropdown" href="#">  
                                Tutorials  
                                   <b class="caret"></b>  
                               </a>  
                        <ul class="dropdown-menu">  
                                <li data-filter-camera-type="all"><a data-toggle="tab" href="#">HTML5</a></li>  
                                <li data-filter-camera-type="Alpha"><a data-toggle="tab" href="#">PHP</a></li>  
                                <li data-filter-camera-type="Zed"><a data-toggle="tab" href="#">MySQL</a></li>  
                                <li data-filter-camera-type="Bravo"><a data-toggle="tab" href="#">JavaScript</a></li>  
                      
                         </ul>  
                    </li></ul>  -->

                </div>
                <div class="span10">
                    <div class="wraper-control">
                        <?php
                        if ($this->uri->segment(1) == "") {
                            $this->load->view("panel");
                        } else {
                            $this->load->view($this->uri->segment(1) . "/" . $this->uri->segment(2));
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <center>
                <span style="font-weight: bold;">Copyright &copy;2012 passerellesnumeriques.org. All rights reserved.</span>
                <br/>
                BP 511 St. 371, Phum Tropeang Chhuk (Borey Sorla) Sangkat Tek Thla, Khan Russey Keo, Phnom Penh
                <br/>
                Tel: +855 (0) 23 99 55 00. Email: <a href="mailto:info@passerellesnumeriques.org">info@passerellesnumeriques.org</a>
                <br/>&nbsp;
            </center>
        </div>

        <script type="text/javascript" language="javascript">
            $(document).ready(function (e) {

                $('.dropdown-submenu').dropdown();
            });

        </script>
    </body>
</html>

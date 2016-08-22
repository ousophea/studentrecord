    <?php

function call_mod_func($model_name, $function_name, $parameters=null) {
    $ci = get_instance();
    $ci->load->model($model_name);
    return $ci->$model_name->$function_name($parameters);
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <title><?= $param['title']; ?></title>

        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/content.css" />


        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/fg-menu.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/fg.css" />
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/ui.css" />

        <script src="<?= base_url() ?>jscripts/script.js" type="text/javascript"></script>

<!--        <script src="<?= base_url() ?>js/jquery-1.4.2.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/jqModal.css" />
        <script src="<?= base_url() ?>js/jqModal.js" type="text/javascript"></script>-->


        <!-- Light box-->

        <link rel="stylesheet" href="<?= base_url() ?>css/lightbox.css" type="text/css" media="screen" />

        <script src="<?= base_url() ?>js/prototype.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
        <script src="<?= base_url() ?>js/lightbox.js" type="text/javascript"></script>

        <style type="text/css">
            body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
        </style>

        <!-- ============================== -->

        <script type="text/javascript">
            $(document).ready(function(){
                $('#response').jqm({trigger:'.onclickcall', toTop: true});
            });
        </script>



    </head>
    <body>
     <script type="text/javascript" src="<?= base_url()?>images/wz_tooltip_v4.js"></script><div style="visibility: hidden; position: absolute; overflow: hidden; padding: 0px; width: 1365px; left: -1366px; top: 0px; z-index: 1010;" id="WzTtDiV"></div>

        <center>
            <div id="header">

                <div style="text-align: center; padding-top: 27px;">
                    <table style="width: 1003px;" align="center">
                        <tbody><tr>
<!--                                <td style="text-align: right;"><a href="http://cistrain.org/index.php"><img alt="" src="<?= base_url()?>images/logo_cist.jpg" onmouseover="javascript:Tip('Bringing digital opportunities to disadvantaged young people in Cambodia')" /></a></td>-->
                                <td style="text-align: center;"><img alt="" src="<?= base_url()?>images/banner.jpg" /></td>

                                <td style="text-align: left;"><a href="http://www.passerellesnumeriques.org/" target="_blank"><img alt="" height="63" src="<?= base_url()?>images/logo-PN.png" onmouseover="javascript:Tip('CIST was created by Passerelles Numériques')" /></a></td>
                            </tr>
                        </tbody></table>
                </div>
                <center>
                    <br />
                        <div style="width: 1003px;">
                            <div style="background: url('<?= base_url()?>images/bg_header_left.jpg') repeat scroll 0% 0% transparent; height: 30px; width: 7px; float: left;"></div>
                            <div id="menu">
                                <a href="<?= base_url() ?>" class="fg-button ui-state-default" id="menu1">Home</a>
                                <a href="<?= base_url() ?>main/add_student" class="fg-button ui-state-default" id="menu1">Student MG</a>
                                <a href="<?= base_url() ?>main/index/6" class="fg-button ui-state-default" id="menu1">WEP_A</a>
                                <a href="<?= base_url() ?>main/index/7" class="fg-button ui-state-default" id="menu1">WEP_B</a>
                                <a href="<?= base_url() ?>main/index/3" class="fg-button ui-state-default" id="menu1">SNA_A</a>
                                <a href="<?= base_url() ?>main/index/4" class="fg-button ui-state-default" id="menu1">SNA_B</a>
                                <a href="<?= base_url() ?>main/index/5" class="fg-button ui-state-default" id="menu1">SNA_C</a>

                            </div>
                            <div style="background: url(<?=base_url()?>images/bg_header_right.jpg) repeat scroll 0% 0% transparent; height: 30px; width: 7px; float: left;"></div>
                        </div>
                </center></div>
            <div id="main">

                <table border="0" class="tbl_scadule">
                    <tr>
                        <th>Student ID</th>
                        <th >Student Name</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($query_student_data->result() as $row_student) {
                        $set_stu_name = $row_student->stu_first_name."_".$row_student->stu_last_name;
                    ?>
                        <tr <?= ($i % 2 == 0) ? 'class="old"' : 'class="eve"' ?> >
                        <td><?= $row_student->stu_card_id; ?></td>
                            <td style="text-transform: capitalize" class="td_left">
                                <a href="<?= base_url().'images/photos/'.$row_student->cla_name.'/'. $set_stu_name.'.png' ?>" rel="lightbox[sophea]"  title="Address: <?= $row_student->stu_address; ?><br /> " >
                                <?= $row_student->stu_first_name ." &nbsp;". $row_student->stu_last_name; ?>
                            </a>
                        </td>
                        <td><?= $row_student->stu_sex; ?></td>
                        <td><?= $row_student->cla_name; ?></td>
                        <td class="td_left"><?= $row_student->stu_address; ?></td>
                        <td><a href="<?= base_url(); ?>student" >
                                <img src="<?= base_url(); ?>images/edit.png" /> </a> &nbsp;&nbsp;&nbsp;
                            <a href="<?= base_url(); ?>student" title="Student Manager">
                                <img src="<?= base_url(); ?>images/delete.png" /> </a>
                        </td>
                    </tr>
                    <?php
                                $i++;
                            }
                    ?>
                        </table>
                <div align="right"><br />
               
<!--                    <a href="<?= base_url() .'images/photos/'.$row_student->cla_name.'/'.$random_result ?>.png" rel="lightbox[sophea]"  title="" >-->
                        <a  href="<?= base_url() .'images/photos/'.$row_student->cla_name.'/'.$random_result ?>.png" rel="lightbox"  title="<?= $random_result ?>" >
                        <img src="<?= base_url(); ?>images/btn.gif" />
                    </a>
                 
                </div>



<!--                        <br />

                                <p class="onclickcall">Click to show</p>
 <div id="response" class='container'>That data will be shown in popup window.That data will be shown in popup window.That data will be shown in popup window.That data will be shown in popup window. </div >
   
                        <br/>
                        <h2>Example</h2>

                        <a href="images/1.jpg" rel="lightbox"><img src="<?= base_url() ?>images/1.jpg" width="100" height="40" alt="" /></a>-->

                    </div>

            <div id="footer">
                <center>
                    <br /><br/>
                    <span style="font-weight: bold;">Copyright &copy;2012 passerellesnumeriques.org. All rights reserved.</span>
                    <br/><br/>
                    BP 511 St. 371, Phum Tropeang Chhuk (Borey Sorla) Sangkat Tek Thla, Khan Russey Keo, Phnom Penh
                    <br/><br/>
                    Tel: +855 (0) 23 99 55 00. Email: <a href="mailto:info@passerellesnumeriques.org">info@passerellesnumeriques.org</a>
                    <br/>&nbsp;
                </center>
            </div>
        </center>
    </body></html>
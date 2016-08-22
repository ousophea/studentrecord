
<div id="tabs">
    <ul>
        <li><a href="#fragment-2"><span>Student List</span></a></li>
        <li><a href="#fragment-1"><span>Detail info</span></a></li>
    </ul>

    <?php
    $class_name = "???";
    $arry_class_name = $query_student_data->result();
    $class_name = $arry_class_name[0]->cla_name;
    ?>
    <div id="fragment-2">
        <div id="student_list" >
            <legend>List Student <?php echo $class_name ?></legend>            
            <table border="0" class="table table-bordered table-hover">
                <tr>
                    <!--<th>Student ID</th>-->
                    <th >Student Name</th>
                    <th>Sex</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
                <?php
                $i = 1;
                if ($query_student_data) {
                    foreach ($query_student_data->result() as $row_student) {
                        $stuName = str_replace(" ", "", $row_student->applicant_photo);
                        $set_stu_photo = $stuName . ".jpg";
//        $set_stu_photo = $stuName = str_replace(" ", "",$row_student->applicant_photo);
                        ?>
                        <tr >
                            <!--<td><?php echo $row_student->applicant_pnc_number; ?></td>-->
                            <td style="text-transform: capitalize" class="td_left">
                                <a href="<?php echo base_url() . 'uploads/' . $set_stu_photo ?>" rel="lightbox"
                                   title="Name: <?php echo $row_student->applicant_firstname . " " . $row_student->applicant_lastname . "<br />Address:" . $row_student->province_name; ?><br /> " >
                                       <?php echo strtoupper($row_student->applicant_firstname) . " &nbsp;" . ucfirst($row_student->applicant_lastname); ?>
                                    <!--<img width="100" id="student_photo" src="<?php // echo base_url()."images/photos/".$set_stu_photo;  ?>" class="img-polaroid">-->
                                </a>
                            </td>
                            <td><?php echo $row_student->sex; ?></td>
                            <td class="td_left"><?php echo $row_student->province_name; ?></td>
                            <td><?php echo $row_student->cla_name; ?></td>

                            <td><a href="<?php echo base_url() . "student/edit/" . $row_student->applicant_id ?>">
                                    <img src="<?php echo base_url(); ?>images/edit.png" /> </a> &nbsp;&nbsp;&nbsp;
                                <a href="<?php echo base_url(); ?>student" title="Student Manager">
                                    <img src="<?php echo base_url(); ?>images/delete.png" /> </a>
                            </td>
                        </tr>
                        <?php
                        $i++;
                    }
                } else {
                    echo "Not record found...!";
                }
                ?>
            </table>
        </div>
    </div>
    <div id="fragment-1">
        <div id="student_photos" class="row">
            <legend>Photo Student <?php echo $class_name ?></legend>   


            <?php
            $j = 1;
            foreach ($query_student_data->result() as $row_student) {
                $stuName = str_replace(" ", "", $row_student->applicant_photo);
                $set_stu_photo = $stuName . ".jpg";
//        $set_stu_photo_info = str_replace("  ", "", $row_student->applicant_lastname)." ".str_replace("  ", "",$row_student->applicant_firstname).".JPG";
//        $set_stu_photo = $stuName = str_replace("  ", " ",$set_stu_photo_info);
                ?>
                <div class="span1 span-photo">

                    <a href="<?php echo base_url() . 'uploads/' . $set_stu_photo ?>" rel="lightbox"
                       title="Name: <?php echo $row_student->applicant_lastname . " " . $row_student->applicant_firstname . "<br />Address:" . $row_student->province_name; ?><br /> " >

                        <img width="100" id="student_photo" src="<?php echo base_url() . "uploads/" . $set_stu_photo; ?>" class="img-polaroid"><br/>

                    </a>
                    <?php echo strtoupper($row_student->applicant_firstname) . " &nbsp;" . ucfirst($row_student->applicant_lastname); ?>
                </div>
                <?php
                $j++;
            }
            ?>
        </div>
    </div>
</div>
<script>
    $("#tabs").tabs();
</script>
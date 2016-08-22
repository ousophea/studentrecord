<style>

    HTML CSS JS Result 
    Edit on
    .list {
        font-family:sans-serif;
    }
    td {
        padding:10px; 
        border:solid 1px #eee;
    }

    input {
        border:solid 1px #ccc;
        border-radius: 5px;
        padding:7px 14px;
        margin-bottom:10px
    }
    input:focus {
        outline:none;
        border-color:#aaa;
    }
    .sort {
        /*        padding:8px 30px;
                border-radius: 6px;*/
        border:none;
        display:inline-block;
        color:#0000;
        text-decoration: none;
        /*        background-color: #28a8e0;*/
        height:30px;
    }
    .sort:hover {
        text-decoration: none;
        /*background-color:#1b8aba;*/
    }
    .sort:focus {
        outline:none;
    }
    .sort:after {
        display:inline-block;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid transparent;
        content:"";
        position: relative;
        top:-10px;
        right:-5px;
    }
    .sort.asc:after {
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #fff;
        content:"";
        position: relative;
        top:4px;
        right:-5px;
    }
    .sort.desc:after {
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid #fff;
        content:"";
        position: relative;
        top:-4px;
        right:-5px;
    }


</style>

<div class="tabs">
    <ul>
        <li><a href="#fragment-2"><span>Student List</span></a></li>
        <li><a href="#fragment-1"><span>Detail info</span></a></li>
    </ul>

    <?php
    $class_name = "???";
    $arry_class_name = $query_student_data->result();
    $class_name = $arry_class_name[0]->cla_name;
    ?>
    <div id="student_list" >
        <div id="fragment-2">

            <legend>List Student <?php echo $class_name ?></legend>   

            <div id="users">
                <input class="search" placeholder="Student Name" />
                <input class="search" placeholder="Address" />
                <input class="search" placeholder="Class Name" />

                <table class="table table-bordered">

                    <tr style="background-color:#CCCCCC;">
                        <!--<th>Student ID</th>-->
                        <th class="sort" data-sort="name">Student Name</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                    <tbody class="list">
                        <!-- IMPORTANT, class="list" have to be at tbody -->

                        <?php
                        $i = 1;
                        if ($query_student_data) {
                            foreach ($query_student_data->result() as $row_student) {
                                $stuName = str_replace(" ", "", $row_student->applicant_photo);
                                $set_stu_photo = $stuName . ".jpg";
                                ?>
                                <tr>
                                    <td style="text-transform: capitalize" class="name td_left">
                                        <a href="<?php echo base_url() . 'uploads/' . $set_stu_photo ?>" rel="lightbox"
                                           title="Name: <?php echo $row_student->applicant_firstname . " " . $row_student->applicant_lastname . "<br />Address:" . $row_student->province_name; ?><br /> " >
                                               <?php echo strtoupper($row_student->applicant_firstname) . " &nbsp;" . ucfirst($row_student->applicant_lastname); ?>
                                        </a>
                                    </td>
                                    <td><?php echo $row_student->sex; ?></td>
                                    <td class=" province_name td_left"><?php echo $row_student->applicant_origin_province_inword; ?></td>
                                    <td class=" class_name td_left"><?php echo $row_student->cla_name; ?></td>

                                    <td class=""><a href="<?php echo base_url() . "student/edit/" . $row_student->applicant_id ?>">
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

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div id="fragment-1">
        <div id="student_photos" class="row">
            <legend>Photo Student <?php echo $class_name ?></legend>   
            <input class="search" placeholder="Student Name" />

            <div class="row list">
                <?php
                $j = 1;
                foreach ($query_student_data->result() as $row_student) {
                    $stuName = str_replace(" ", "", $row_student->applicant_photo);
                    $set_stu_photo = $stuName . ".jpg";
//        $set_stu_photo_info = str_replace("  ", "", $row_student->applicant_lastname)." ".str_replace("  ", "",$row_student->applicant_firstname).".JPG";
//        $set_stu_photo = $stuName = str_replace("  ", " ",$set_stu_photo_info);
                    ?>
                    <div class="span1 span-photo name">

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
</div>
<script>

    $(".tabs").tabs();

    var options = {
        valueNames: ['name', 'province_name', 'class_name']
    };

    var userList = new List('users', options);
</script>
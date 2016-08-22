<div style="" id="test">&nbsp;</div>
<legend>Student Detail </legend>
<div class="row-fluid" id="form_random" >
   <div class="panel-body">
       <?php
        foreach ($student_data->result() as $row_student) {
            $set_stu_photo = $stuName = str_replace(" ", "",$row_student->applicant_photo);
       ?>
       <div class="span4">

                    <img width="100" id="student_photo" src="<?php echo base_url()."images/photos/".$set_stu_photo; ?>" ><br/>
                    <?php echo $row_student->applicant_firstname . " &nbsp;" . $row_student->applicant_lastname; ?>
 
    </div>

   
       <div  class="span4">
        <h3>
            Detail Info
        </h3>
    </div>
               <?php
                }
        ?>
</div>
</div>
<div style="" id="test">&nbsp;</div>
<legend>Selection Student</legend>
<div class="row-fluid" id="form_random" >
    <div class="span6"><form class="form-inline">


            <label class="control-label" >Class List:</label>
            <select id="sl_class">
                <?php foreach ($query_class_data->result() as $row_class) { ?>
                    <option value="<?php echo $row_class->cla_id ?>"><?php echo $row_class->cla_name ?></option>
                <?php } ?>


            </select>

            <button type="button" id="btn_random" url="<?php echo  base_url()."student/get_random/";?>" class="btn btn-danger">Random Select</button>
            <span class="help-block">Select by random student from this class</span>


        </form>
        <legend><h5>Assessment information</h5></legend>
        <br />
         <?php echo form_open(site_url('student/selectstudent'), 'class="form-horizontal" id="frmPrint"'); ?>
        <!--<form class="form-horizontal" action="student/selectstudent">-->
            <div class="control-group">
                <label class="control-label" for="inputQuestion">Question:</label>
                <div class="controls">
                    <input type="text" id="inputQuestion" placeholder="Question..?" required>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Answer Grad:</label>
                <div class="controls">
                    <select>
                        <option>Good</option>
                        <option>Medium</option>
                        <option>Pass</option>
                        <option>False</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputDescription">Description:</label>
                <div class="controls">
                    <textarea rows="3" name="inputDescription" id="inputDescription"></textarea>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn">Save</button>
                </div>
            </div>
         <?php echo form_close(); ?>
        <!--</form>-->
    </div>
    <div class="span6" style="text-align: center;">
       <img width="300" id="student_photo" src="<?php echo base_url(); ?>uploads/boy-icon.png" class="img-polaroid">
        <br/><strong>Name: </strong><span id="stu_name"></span>
        <br/><span id="test"></span>
    </div>
    
</div>
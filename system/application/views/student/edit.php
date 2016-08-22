<?php
$data = $student_data[0];
// var_dump($query_class_data);
?>
<style>
    .jq-load-icon {
        width: 300px; 
        height: 300px; 
        background: url('<?php echo base_url(); ?>images/loader.gif') no-repeat;
    }
    #imagePreview {
        width: 300px;
        height: 300px;
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
</style>
</style>
<div style="" id="test">&nbsp;</div>
<legend>Edit Student</legend>
<div class="row-fluid" id="form_random" >
    <div class="span6">
        <legend><h5>Student Information</h5></legend>
        <br />
        <?php echo form_open(site_url('student/selectstudent'), 'class="form-horizontal" id="frmPrint"'); ?>
        <!--<form class="form-horizontal" action="student/selectstudent">-->
        <div class="control-group">
            <label class="control-label" for="applicant_firstname">First Name:</label>
            <div class="controls">
                <input type="text" name="applicant_firstname" value="<?php echo $data['applicant_firstname']; ?>" id="applicant_firstname" placeholder="first name" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="applicant_lastname">Last Name:</label>
            <div class="controls">
                <input type="text" name="applicant_lastname" value="<?php echo $data['applicant_lastname']; ?>" id="applicant_lastname" placeholder="last name" required>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Class Name:</label>
            <div class="controls">

                <select id="sl_class">
                    <?php
                    foreach ($query_class_data->result() as $row_class) {
                        if ($row_class->cla_id == $data['stu_cla_id']) {
                            echo '<option value="' . $row_class->cla_id . '"' . set_select('stu_cla_id', $row_class->cla_id, TRUE) . ' > ' . $row_class->cla_name . '</option>';
                        } else {
                            echo '<option value="' . $row_class->cla_id . '"' . set_select('stu_cla_id', $row_class->cla_id) . ' > ' . $row_class->cla_name . '</option>';
                        }
                    }
                    ?>

                </select>

            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputDescription">Description:</label>
            <div class="controls">
                <textarea rows="3" name="inputDescription" id="inputDescription"></textarea>
            </div>
        </div>
        <!--        <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">Save</button>
                    </div>
                </div>-->
        <div class="toolbar col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
            <div class="left">
                <!--For icon: http://getbootstrap.com/components/-->
                <a href="<?php echo site_url(); ?>student/studentlist/<?php echo $data["stu_cla_id"] ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
                <button type="submit" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-ok-circle"></i> Save</button>
                <button type="reset" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-ban-circle"></i> Reset</button>
            </div>
            <div class="right">
            </div>
        </div>
        <?php echo form_close(); ?>
        <!--</form>-->
    </div>

    <div class="span6" >


        <div style="text-align: center;">
            <div class="jq-loader ">
                <img width="300" id="imagePreview" src='<?php echo base_url()."uploads/".$data["applicant_photo"]?>.jpg' class="img-polaroid">
            </div> 
            
        </div>
        <div>
            <!--=============It work=============-->

            <form name="posting_comment" id="posting_comment" >
                <input type="hidden" name="student_name" value="<?php echo $data["applicant_firstname"].'_'.$data["applicant_lastname"] ?>">
                
                <div class="row">
                    <input id="uploadFile" name="attachment_file" class="uploadFile" type="file"/>
                </div>

                <div class="row">
                    <input type="button" class=" btn btn-sm btn-default post postbtn"  value="Upload" onclick = "return sendData()"/>
                    <span id="sms"></span>
                </div>

                
            </form>

        </div>
    </div>
        <script type="text/javascript">
//            ==============Work well===================
            function sendData()
            {

                var data = new FormData($('#posting_comment')[0]);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('student/fileUpload'); ?>",
                    data: data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (data)
                    {
                        console.log(data);
                        $("#sms").append(data);

                    }
                });

            }
//            
//            ==========================================

            $(function () {
                $("#uploadFile").on("change", function ()
                {
                    $("#imagePreview").hide();
                    $(".jq-loader").addClass("jq-load-icon");
                    var files = !!this.files ? this.files : [];
                    if (!files.length || !window.FileReader)
                        return; // no file selected, or no FileReader support

                    if (/^image/.test(files[0].type)) { // only image file
                        var reader = new FileReader(); // instance of the FileReader
                        reader.readAsDataURL(files[0]); // read the local file

                        reader.onloadend = function () { // set image data as background of div
//                            var src = $(this).attr("src").replace("over.gif", ".gif");
                            $("#imagePreview").show();
                            $("#imagePreview").attr("src", this.result);
                            
                            $(".jq-loader").removeClass("jq-load-icon");
//                            $("#imagePreview").css("background-image", "url(" + this.result + ")");
                        }
                    }
                });
            });

        </script>
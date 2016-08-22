$(document).ready(function () {

    $('#btn_random').click(function () {
//        $("#btn_random").attr("disabled", "disabled");
        var getUrl = $("#btn_random").attr("url");
        var class_id = $("#sl_class").val();
//        alert(getUrl + class_id);return false;
        $.ajax({
            type: "GET",
            url: getUrl + class_id,
  
            //dataType: "json",
            //data: "username="+username+"&password="+password,
            success:
                    function (data) {
                        $('#test').html(data);

                        changePhoto();
                        $("#btn_random").removeAttr("disabled");
                    }

        });

        return true;
    });

    $("#btn_stop_random").click(function () {
        stopChange();
    });
});


var timeOut_changePhoto;
var i = 0;
var stu_arr = [];
var student_photo;
function changePhoto() {

    if (i < 25) {
        student_photo = arr_student_photos[Math.floor(Math.random() * arr_student_photos.length)];
        $('#student_photo').attr('src', baseUrl + student_photo);
        var stu_photo = student_photo.replace(".jpg", "");
        var arr_stu_info = stu_photo.split("/");
        var get_name = arr_stu_info[1]; // fiirstname_lastname
        var stu_name =  get_name.replace("_"," ");
        $('#stu_name').html(stu_name.toUpperCase());
        
        timeOut_changePhoto = setTimeout("changePhoto()", 100);
        i++;
    } else {
        i = 0;
        $("#btn_random").removeAttr("disabled");
        clearTimeout();
        if (stu_arr.indexOf(student_photo) == -1) { // Check student info  if it not in the previose array
            stu_arr.push(student_photo);
            if(stu_arr.length > 25){
                var answ = confirm("Press a button");
//                alert(stu_arr.length);
//                var answer = window.confrim("All student have been selected by rendum, Whould you like to redo it?");
                if(answ = true){
                    stu_arr = [];
                }
            }
        } else { // If the rendam get redundency data
            changePhoto();
        }
//        var ch = stu_arr.toString();
//        $('#test').html(ch);
    }

}
function stopChange() {
    clearTimeout(timeOut_changePhoto);
}
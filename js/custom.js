$(function () {

    $('#upload_file').submit(function (e) {
        var pathname = $(location).attr('hostname');
        e.preventDefault();
        $.ajaxFileUpload({
            url: pathname + '/student/upload_file',
            secureuri: false,
            fileElementId: 'userfile',
            dataType: 'JSON',
            success: function (data)
            {
                var obj = jQuery.parseJSON(data);
                if (obj['status'] == 'success')
                {
                    $('#files').html(obj['msg']);
                } else
                {

                    $('#files').html('Some failure message');
                }
            }
        });
        return false;
    });
});
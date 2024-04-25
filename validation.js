

$(document).ready(function () {
    $('.f_name').blur(function (e) { 
        e.preventDefault();
        var f_name = $('.f_name').val();
        if($.trim(f_name).length == 0){
            error_f_name = "Please Enter First Name";
            $('#error_f_name').text(error_f_name);
        }
        else{
            error_f_name = "";
            $('#error_f_name').text(error_f_name);
        }
    });
});
$(document).ready(function () {
    $('.l_name').blur(function (e) { 
        e.preventDefault();
        var l_name = $('.l_name').val();
        if($.trim(l_name).length == 0){
            error_l_name = "Please Enter Last Name";
            $('#error_l_name').text(error_l_name);
        }
        else{
            error_l_name = "";
            $('#error_l_name').text(error_l_name);
        }
    });
});
$(document).ready(function () {
    $('.job_title').blur(function (e) { 
        e.preventDefault();
        var job_title = $('.job_title').val();
        if($.trim(job_title).length == 0){
            error_job_title = "Please Enter Job Title";
            $('#error_job_title').text(error_job_title);
        }
        else{
            error_job_title = "";
            $('#error_job_title').text(error_job_title);
        }
    });
});
$(document).ready(function () {
    $('.reference').blur(function (e) { 
        e.preventDefault();
        var reference = $('.reference').val();
        if($.trim(reference).length == 0){
            error_reference = "Please Enter reference";
            $('#error_reference').text(error_reference);
        }
        else{
            error_reference = "";
            $('#error_reference').text(error_reference);
        }
    });
});

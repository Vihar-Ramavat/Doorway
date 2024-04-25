$(document).ready(function () {
    $('#first_page_data').submit(function (event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = new FormData($(this)[0]);
        formData.append('action', 'add_data');

        $.ajax({
            url: 'code.php',
            type: 'POST',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {
                show_last_stage();
            },
            error: function (xhr, textStatus, errorThrown) {
                console.error('Error:', errorThrown);
            }
        });
    });

    $('#save_first_page').click(function () {
        var jobTitle = $("#job_title").val();
        var f_name = $("#f_name").val();
        var lastName = $("#last_name").val();
        var email = $("#email").val();
        var reference = $("#reference").val();
        var bg_color = $("#colorPicker").val();
        var deviceType = $("#device_type_input").val();
        var stripImg = $("#fileInput").val();
        var topIcon = $("#fileInput2").val();

        $.post('fatchdata.php', {
            job_title: jobTitle,
            f_name: f_name,
            l_name: lastName,
            email: email,
            reference: reference,
            colorPicker: bg_color,
            device_type_input: deviceType,
            fileInput: stripImg,
            fileInput2: topIcon,

        }, function (data) {
            $('.msg').html('Job Title: ' + data.job_title + '<br>First Name: ' + data.f_name + '<br>Last Name: ' + data.last_name + '<br>Email: ' + data.email + '<br>Reference: ' + data.reference + '<br>Background Color: ' + data.bg_color + '<br>Device Type: ' + data.device_type + '<br>Strip Image: ' + data.strip_img + '<br>Top Icon: ' + data.top_icon);
        }, 'json');
    });
});
function show_last_stage() {
    $('#fist_second_step').hide();
    $('#round-step3').removeClass('bg-[#BEBEBE]');
    $('#round-step3').addClass('bg-electricGreen');
    $('#third-step-text').removeClass('text-[#BEBEBE]');
    $('#third-step-text').addClass('text-electricGreen');
    $('.third_step_page').removeClass('hidden');
}


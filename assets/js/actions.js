$(document).ready(function() {

    $('#form_data').on("submit", function(e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: "app/users.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(respons) {
                console.log(respons);
                var res = respons;
                if (res.hasOwnProperty('success')) {
                    $('#form_data').trigger('reset');
                    $('.success_txt').addClass('active');
                    $('.success_txt').text(res.success);
                    setTimeout(() => {
                        window.location.href = "login.php";
                    }, 5000);
                } else if (res.hasOwnProperty('error')) {
                    $('.error_txt').addClass('active');
                    $('.error_txt').text(res.error);
                    setTimeout(() => {
                        $('.error_txt').removeClass('active');
                    }, 5000);
                }
            }
        })

    })



})
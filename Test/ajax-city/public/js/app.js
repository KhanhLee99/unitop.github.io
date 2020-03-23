$(document).ready(function() {

    $('#city').change(function() {
        var city_id = $('#city').val();
        var data = { city_id: city_id };

        $.ajax({
            url: '?mod=city&controller=index&action=ajax', //trang xử lí, mặc định trang hiện tại
            method: 'POST', //Post  or Get, mặc định Get
            data: data, //Dữ liệu truyền lên server
            dataType: 'json', //html,text, script or json
            success: function(data) {
                // console.log(data.district);
                // $('#district').html(data.district);
                $.each(data.district, function() {
                    console.log("district_id: " + this.district_id);
                    console.log("district_name: " + this.district_name);
                    console.log("city_id: " + this.city_id);
                })
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });

    });


});
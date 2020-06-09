$(document).ready(function() {

    $("#num_order").change(function() {
        var price = $("#price").text();
        var num_order = $("#num_order").val();
        var data = { num_order: num_order, price: price };
        console.log(data);
        $.ajax({
            url: 'process.php', //trang xử lí, mặc định trang hiện tại
            method: 'POST', //Post  or Get, mặc định Get
            data: data, //Dữ liệu truyền lên server
            dataType: 'json', //html,text, script or json
            success: function(data) {
                // $("#total").text(data.total);
                $("#total").html("<strong>" + data.total + "</strong>");
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

});
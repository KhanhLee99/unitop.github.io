$(document).ready(function() {
    $(".num-order").change(function() {
        var product_id = $(this).parent("td").parent("tr").attr("id");
        var num_order = $(this).val();
        var result = { product_id: product_id, num_order: num_order };
        $.ajax({
            url: '?mod=cart&act=process',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function(data) {
                $("#total-num").text(data.total_num);
                $("#total-price").text(data.total_price);
                $("#sub_total_" + product_id).text(data.sub_total);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});
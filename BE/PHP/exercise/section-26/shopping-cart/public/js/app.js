$(document).ready(function() {
    $('.num-order').change(function() {
        var product_id = $(this).attr("data-id");
        var num_order = $(this).val();
        var result = { product_id: product_id, num_order: num_order };
        $.ajax({
            url: '?mod=cart&controller=index&action=update_ajax',
            method: 'POST',
            data: result,
            dataType: 'json',
            success: function(data) {
                $('#total-price').text(data.total);
                $('#sub_total_' + product_id).text(data.sub_total);
                // alert(data.sub_total);
            },


            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});
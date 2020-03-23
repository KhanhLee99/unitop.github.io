$(document).ready(function(){
    $(".num-order").change(function(){
        var product_id = $(this).attr('data-id');
        var num_order = $(this).val();
        var data = {product_id:product_id,num_order:num_order};
        // alert(product_id);
        $.ajax({
            url:'?mod=cart&act=updateAjax',
            method: 'POST',
            data: data,
            dataType: 'json',
            success:function(data){
                $("#"+product_id).html("<span>"+data.sub_total+"</span>");
                $("#total-price").html("<span>"+data.total+"</span>");
                $("#num").text(data.num_order_cart);
            },
            error: function (xhr,ajaxOptions,thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});
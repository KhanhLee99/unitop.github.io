$(document).ready(function () {
    $(".num-order").change(function () {
        var active_ajax = "";
        var num_order = $(this).val();
        var product_id = $(this).parent("td").parent("tr").attr("title");
        // var price = $(this).parent("td").prev(".price").text();

        var data = {
            active_ajax: active_ajax,
            product_id: product_id,
            num_order: num_order,
            // price: price,
        };

        $.ajax({
            url: "library/process.php",
            method: "POST",
            data: data,
            dataType: "json",
            success: function (data) {
                console.log(data)
                $(data.str_selector).find("td.total").text(data.sub_total);
                $("#total-price > span").text(data.total);
                $("span#num").text(data.cart_num_order);
            },
        });
    });
});

$(document).ready(function() {
    $(".add-to-cart").click(function() {
        var url = $(this).attr("url");
        var show_cart_url = $(this).data("url");
        var id = $(this).data("id");
        var product_id = $(".cart_product_id_" + id).val();
        var product_name = $(".cart_product_name_" + id).val();
        var product_price = $(".cart_product_price_" + id).val();
        var product_desc = $(".cart_product_desc_" + id).val();
        var product_img = $(".cart_product_img_" + id).val();
        var product_qty = $(".cart_product_qty_" + id).val();
        var _token = $('input[name="_token"]').val();

        $.ajax({
            headers: {
                "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
            },
            url: url,
            dataType: "JSON",
            method: "POST",
            data: {
                product_id: product_id,
                product_name: product_name,
                product_price: product_price,
                product_desc: product_desc,
                product_img: product_img,
                product_qty: product_qty,
                _token: _token,
            },
            success: function(response) {
                if (response.success) {
                    swal(
                        {
                            title: "Add product success!",
                            text:
                                "You can purchase or go to the cart to proceed with the payment",
                            showCancelButton: true,
                            cancelButtonText: "See more",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Go to cart",
                            closeOnConfirm: false,
                        },
                        function() {
                            window.location.href = show_cart_url;
                        }
                    );
                }
            },
        });
    });
});

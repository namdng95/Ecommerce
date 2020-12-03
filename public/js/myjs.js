$(document).ready(function() {
    function comment(url) {
        var product_id = parseInt($("#comment").data("product_id"), 10);
        var user_id = parseInt($("#comment").data("user_id"), 10);
        var comment = $("#comment").val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            headers: {
                "X-CSRF-Token": $('meta[name="_token"]').attr("content"),
            },
            url: url,
            method: "POST",
            data: {
                product_id: product_id,
                user_id: user_id,
                comment: comment,
                _token: _token,
            },
            success: function(data) {
                if (data.success) {
                    alert("success!");
                    $("#comment").val("");
                } else {
                    alert("error!");
                }
            },
        });
    }
    $("#comment-button").click(function(event) {
        let url = $(this).attr("url");
        comment(url);
    });

    $(".ratings_stars").hover(
        function() {
            $(this)
                .prevAll()
                .andSelf()
                .addClass("ratings_hover");
        },
        function() {
            $(this)
                .prevAll()
                .andSelf()
                .removeClass("ratings_hover");
        }
    );

    $(".ratings_stars").click(function() {
        var rate_value = parseInt($(this).data("value"));
        var product_id = parseInt($(this).data("product_id"));
        var user_id = parseInt($(this).data("user_id"));
        alert(rate_value);
        if ($(this).hasClass("ratings_over")) {
            $(".ratings_stars").removeClass("ratings_over");
            $(this)
                .prevAll()
                .andSelf()
                .addClass("ratings_over");
        } else {
            $(this)
                .prevAll()
                .andSelf()
                .addClass("ratings_over");
        }
        $.ajax({
            url: "{{ route('rating') }}",
            method: "POST",
            headers: {
                "X-CSRF-Token": "{{ csrf_token() }}",
            },
            data: {
                rate_value: rate_value,
                product_id: product_id,
                user_id: user_id,
            },
            success: function(res) {
                
            },
        });
    });
});

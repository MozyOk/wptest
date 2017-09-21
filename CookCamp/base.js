$(function () {
    $("h2").on("click", function () {
        $(this).next().not(":animated").slideToggle(500);
    })

    $("#page_top").on("click", function () {
        $("html, body").animate({
            "scrollTop": 0
        }, 500);
    });
});
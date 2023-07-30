import "./bootstrap";

/*------------------------------------------------------------------------
        Làm active(hiển thị đang ở đâu trên header) của riêng mỗi trang

        Make active(show where in header) for each page separately
    --------------------------------------------------------------------------*/
// url
let url = location.pathname.trim("/");
$(".collapse .navbar-collapse ul > li > a").each((i, item) => {
    if ($(item).attr("href").trim("/") == url) {
        $(item).closest("li").addClass("active");
    } else {
        $(item).closest("li").removeClass("active");
    }
});

$("#tab_list ul > li > a").each((i, item) => {
    if ($(item).attr("href").trim("/") == url) {
        $(item).closest("li").addClass("active");
    } else {
        $(item).closest("li").removeClass("active");
    }
});

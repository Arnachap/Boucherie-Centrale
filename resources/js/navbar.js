var pathname = window.location.pathname;
if (pathname === '/') {
    window.onscroll = function () { navbarCollapse() };
}

function navbarCollapse() {
    if ($('.navbar').offset().top > 100) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').removeClass('scrolled');
    }
}
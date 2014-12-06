$(function () {
    $('.nav__link').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});

$(document).ready(function() {
    $(".portfolio__item-description").dotdotdot();

    new jBox('Modal', {
        width: 300,
        height: 200,
        attach: $('#myModal'),
        title: 'My Modal Window',
        content: '<i>Hello there!</i>'
    });
});

$(document).ready(function() {
    new jBox('Modal', {
        width: 300,
        height: 200,
        attach: $('#myModal'),
        title: 'My Modal Window',
        content: '<i>Hello there!</i>'
    });
});
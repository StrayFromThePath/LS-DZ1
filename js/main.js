/*$(function () {
    $('.nav__link').each(function () {
        var location = window.location.href;
        var link = this.href;
        if(location == link) {
            $(this).addClass('active');
        }
    });
});



$(document).ready(function() {
    $('.file').each(function(){
        $(this).find('.inputbox span').text($(this).find('input').val());
    });
    $(document).on('change', '.file input', function(){
        $(this).parents('.file').find('.inputbox span').text($(this).val());
    })
});

$(document).ready(function() {
   $('.portfolio__add').click(function(){
        $('.popup').fadeIn(600);
        $('.overlay').show();
   });

   $('.popup__close').click(function(){
        $('.popup').fadeOut(600);
        $('.overlay').hide();
   });
});

$(document).ready(function() {
    $('.portfolio__item-description').dotdotdot();
});
 */
(function() {

    var app = {


        initialize : function () {
            this.setUpListeners();
            this.activeMenu();
            this.fileInputVal();
            this.plugins();
        },

        //Прослушка событий
        setUpListeners: function () {
            $(document).on('change', '.file input', app.fileInput);
            $('.portfolio__add').on('click', app.showPopup);
            $('.popup__close').on('click',app.closePopup);
        },

        //Modal show
        showPopup : function () {
            $('#add__project').fadeIn(600);
            $('.overlay').show();
        },

        //Modal close
        closePopup : function() {
            $('.popup').fadeOut(600);
            $('.overlay').hide();
        },

        //активный пункт меню
        activeMenu: function () {
            $('.nav__link').each(function () {
                var location = window.location.href;
                var link = this.href;
                if(location == link) {
                    $(this).addClass('active');
                }
            });
        },

        //Стилизация input[type='file']
        fileInput : function () {
            $(this).parents('.file').find('.inputbox span').text($(this).val());
        },

        //Стилизация input[type='file']
        fileInputVal : function () {
            $('.file').each(function(){
                $(this).find('.inputbox span').text($(this).find('input').val());
            });
        },

        plugins : function () {
            //Замена непомещающегося текста по высоте многоточием
            $(".portfolio__item-description").dotdotdot();
        }
    };

    app.initialize();

}());



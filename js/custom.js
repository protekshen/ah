$(document).ready(function() {

    $('.popup').magnificPopup();

    $("#form_call").submit(function() {
            //var form_data = $(this).serialize();
            $.ajax({
            type: "POST",
            url: "http://autohouse.su/mail/callmail.php",
            data: $("#form_call").serialize(),
                success: function() {
                    //alert("The server says: " + response);
                    alert("Ваше сообщение отпрвлено. Скоро мы Вам перезвоним!");
                    yaCounter45509052.reachGoal('form_call');
                }
            });
            $.magnificPopup.close();
            return false;
    });



    $("#form_wash").submit(function() {
            $.ajax({
            type: "POST",
            url: "http://autohouse.su/mail/carwashmail.php",
            data: $("#form_wash").serialize(),
                success: function() {
                   //alert("Ваше сообщение отпрвлено!");
                   //yaCounter45509052.reachGoal('form_wash'); TODO
                }
            });
            return false;
    });

}) 

 
$(document).ready(function() {
// Scroll top
    function addFixedProperty() {
        var heightHeader = jQuery('#masthead').height();
        var topMenu = jQuery('.top-menu').height();
        var heightWpadminbar = jQuery('#wpadminbar').height();
        scrolltop = jQuery(this).scrollTop();
        topMarginContent = topMenu;
        if (scrolltop > heightHeader) {
            jQuery('.top-menu').addClass('fixed-header  animated  fadeInDown');
            jQuery('#content').css('margin-top', topMarginContent);
            if (heightWpadminbar) {
                jQuery('.top-menu').css('top', heightWpadminbar);
            }
        } else {
            jQuery('.top-menu').removeClass('fixed-header  animated  fadeInDown');
            jQuery('#content').css('margin-top', 0);
            jQuery('#masthead').css('top', '0');
        }
    }


    function fixedMenu () {
    jQuery(document).ready(function () {
        
        jQuery(document).scroll(function () {
            addFixedProperty()
        })

        if (jQuery(document).scrollTop() > 0) {
            addFixedProperty()
        }

    })
    }
    fixedMenu()
});
/* ---------------------------- */




// Add sroll top menu
function addScrollMenu() {
//scrolltop = jQuery(this).scrollTop()

    jQuery(document).scroll(function () {
        scrolltop = jQuery(this).scrollTop();

        if(scrolltop > 400) {
            $('#header-menu').removeClass('hide');
            $('.header__label').addClass('hide');
            $('.header__label').addClass('animated fadeInDown');
        } else {
            $('#header-menu').addClass('hide');
            $('#header-menu').addClass('animated fadeInUp');
            $('.header__label').removeClass('hide');
        }
    })
}
addScrollMenu()











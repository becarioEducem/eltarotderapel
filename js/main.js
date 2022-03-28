$(window).on('load', function() {
    $("#cover").hide();
 });
 
$(function () {
    //Codi que permet posar la barra de navegació fosca al fer scroll
    var nav = $(".navbar");
    var downarrow = $("#downarrow");
    var uparrow = $("#uparrow");
    var header = $("header");
    var sizeheader = $("header").height();

    if ( $(window).scrollTop() >= 200){
       downarrow.hide();
       uparrow.show();
       header.show();
    }else {
       downarrow.show();
       uparrow.hide();
       header.hide();
    }

    $(window).scroll(function(){    
         if ( $(window).scrollTop() >= 200){
            downarrow.hide();
            uparrow.show();
            header.show();
        }else{
            downarrow.show();
            uparrow.hide();
            header.hide();
        }
    });

    $(".hovereffect").on("mouseenter mouseleave touchstart touchend", function(e){
        if(e.type == 'touchstart') {
          $(this).off('mouseenter mouseleave');
        }
      
        $(this).toggleClass("hover");
      });


    //Ús de scrollspy per tal de canviar el menú mentre es va fent scroll per la pàgina
    $('body').scrollspy({target: ".navbar", offset: 500}); 

    //Cal considerar que la mida del header varia amb el menú desplegat o no (smartphone)
    $(window).resize(function(event) {
        sizeheader = $("header").height();
    });

    // Efecte de scroll pels links del menú (requereix JQuery Full no Slim)
    $(".nav-link,#downarrow,#uparrow, #mainbrand, #main-title-link").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - sizeheader + 2
            }, 1000);
            $(".navbar-collapse").collapse('hide');
        }
    });


    $('#contactform').validator();
    $('#contactform').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "./php/contact.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;
                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    var customModal = $('<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">' +
                        '<div class="modal-dialog modal-dialog-centered" role="document">' +
                            '<div class="modal-content">' +
                                '<div class="modal-header text-white" style="background-color:purple;">' +
                                    '<h5 class="modal-title" id="exampleModalLongTitle">Petición procesada con éxito</h5>' +
                                '</div>' +
                                '<div class="modal-body text-justify">' +
                                    'En breve me pondré en contacto contigo, aunque si lo prefieres me puedes contactar también a través de <a href="mailto:info@tarotderapel.es">info@tarotderapel.es</a>' +
                                        '</div>' +
                                '<div class="modal-footer">' +
                                    '<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>' +
                                '</div>' +
                           '</div>' +
                        '</div>' +
                    '</div>');

                    if (messageAlert && messageText) {
                        $('#contactform').find('.messages').html(alertBox);
                        $('body').append(customModal);
                        $('#myModal').modal();
                        $('#contactform')[0].reset();
                    }
                }
            });
            return false;
        }
    });

});




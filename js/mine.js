 $(function () {
    
    $(window).on("scroll  load", function () { 
        if ($(this).scrollTop() > 0) {
            $('.navbar').addClass('scrol')
        }else{
            $('.navbar').removeClass('scrol')
        }
    });

    $('.openmenu, .close').click(function (e) { 
        e.preventDefault();
        $('.mobnavbar').toggleClass('show');
    });

    $('.showform').click(function (e) { 
        e.preventDefault();
        $('.search').toggleClass('d-none')
    });

    $('.options').click(function (e) { 
        e.preventDefault();
        $(this).find('.moreops').toggleClass('show')
        
      
        $(this).find('i.changs').toggleClass('bi-chevron-up')
    
        
        
    });

    $('.dropeds').click(function (e) { 
        e.preventDefault();

 

        let price = $(this).children('p').eq(0).text();
        let person = $(this).children('p').eq(1).text();
        let coun = $(this).children('p').eq(2).text();
        let time = $(this).children('p').eq(3).text();

  
        $(this).parents(".options").find('.parcs .price').text(price);
        $(this).parents(".options").find('.parcs .pers').text(person);
        $(this).parents(".options").find('.parcs .coun').text(coun);
        $(this).parents(".options").find('.parcs .time').text(time);

    });

    $(document).click(function (e) { 
      //  e.preventDefault();
        let eclass = e.target.classList[0];
        
        if (eclass !== 'options' &&     eclass !== 'parcs' &&  eclass !== 'price' &&  eclass !== 'changs') {
              $('.options').find('.moreops').removeClass('show');
              $('i.changs').removeClass('bi-chevron-up')
        }
 
    });

    $('.edit').click(function (e) { 
        e.preventDefault();
        let value = $(this).parent().find('p').text();
        let updtxt = $(this).data('title');
        $('[name="useraddr"]').val(value);
        $('.save-user').text(updtxt)
    });

    $('.openreg').click(function (e) { 
        e.preventDefault();
        $('.modal-content.login').addClass('d-none');
        $('.modal-content.register').removeClass('d-none');
    });

    $('.openlogin').click(function (e) { 
        e.preventDefault();
        $('.modal-content.login').removeClass('d-none');
        $('.modal-content.register').addClass('d-none');
    });

    $('.datsc').click(function (e) { 
        e.preventDefault();
        let cl = this.classList[1];
        let scl =  $('.calensec').scrollLeft();
        if (cl == 'scleft') {
            $('.calensec').scrollLeft(scl - 100);
        }else{
            $('.calensec').scrollLeft(scl + 100);
        }
        
    });

    // next step
 let step = 0;
    $('.ord').click(function (e) { 
        e.preventDefault();
 
        if (step == 1) {
            $(this).prop('disabled', true).css('opacity', '.6');

            $('[data-st]').addClass('steped');
        }
       
            $('.mine-cart').find('.show').removeClass('show').next().addClass('show');
            $('.base-step').find('.active').next().addClass('active');
 
 
            step++;
    });

    // ordertype

    $('.packs').click(function (e) { 
        e.preventDefault();
        $('.packs.curr').removeClass('curr');
        $(this).addClass('curr');
    });

        // addrtype

        $('.addrs').click(function (e) { 
            e.preventDefault();
            $('.addrs.curr').removeClass('curr');
            $(this).addClass('curr');
        });

    // change card img

    $("#cards img").click(function (e) { 
        e.preventDefault();
        let img = $(this).data('img');
        let name = $(this).data('name');
        let price = $(this).data('price');

        $("#cards img.act").removeClass('act');
        $(this).addClass('act')

        $('#cardimg').attr('src', img);

        $('.cardname').text(name);
        $("#crp").text(price + "₾");
    });

        // change package img

        $("#packs img").click(function (e) { 
            e.preventDefault();
            let img = $(this).data('img');
            let name = $(this).data('name');
            let price = $(this).data('price');
    
            $("#packs img.act").removeClass('act');
            $(this).addClass('act')

            $('#pckimg').attr('src', img);
    
            $('.packname').text(name);
            $("#pcp").text(price + "₾");
        });

        // cert type

        $('.orderType').click(function (e) { 
            e.preventDefault();
            if ($(this).hasClass('dely')) {
                $('.packing').css('display', 'flex')
                $('.digitals').css('display', 'none')
            }else{
                $('.packing').css('display', 'none')
                $('.digitals').css('display', 'flex')
            }
        });

        $(document).on("click", '.steped', function (e) { 
            e.preventDefault();
            let stepopen = $(this).data('st');

            $('.mine-cart .show').removeClass('show');
            $("#"+stepopen).addClass('show')
        });

        $('.openfill').click(function (e) { 
            e.preventDefault();
            $('.searchform').addClass('opens');
            $('.closeform').addClass('opens');
            $('.mobsrch').addClass('opens');
        });

        $('.closeform, .mobsrch').click(function (e) { 
            e.preventDefault();
            $('.searchform').removeClass('opens');
            $('.closeform').removeClass('opens');
            $('.mobsrch').removeClass('opens');
        });

        $('.burg button').click(function (e) { 
            e.preventDefault();
            if ($(this).find('i').hasClass('bi-list')) {
                $(this).find('i').removeClass('bi-list').addClass('bi-x-lg')
            }else{
                $(this).find('i').addClass('bi-list').removeClass('bi-x-lg')
            }
            
            $('.usermenus').toggleClass('shoved')
        });

 });
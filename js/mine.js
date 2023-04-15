 $(function () {
    

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
        e.preventDefault();
        let eclass = e.target.classList[0];
        
        if (eclass !== 'options' &&     eclass !== 'parcs' &&  eclass !== 'price' &&  eclass !== 'changs') {
              $('.options').find('.moreops').removeClass('show');
              $('i.changs').removeClass('bi-chevron-up')
        }
 
    });

 });
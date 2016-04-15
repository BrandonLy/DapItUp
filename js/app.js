jQuery(document).ready(function($) {

    //scroll function for the home page
    $(window).on('scroll', function() {
        var y_scroll_pos = window.pageYOffset;
        var scroll_pos_test = 50;             // set to whatever you want it to be

        if(y_scroll_pos > scroll_pos_test) {
            $('.back-to-top .arrow').css('transform', 'rotate(180deg)');
            $('.back-to-top').parent().attr('href', '#top');
        }

        if(y_scroll_pos < scroll_pos_test) {
            $('.back-to-top .arrow').css('transform', 'rotate(0deg)');
            $('.back-to-top').parent().attr('href', '#about');
        }
    });

    //mobile menu script
    $('.menu-icon').click(function() {
        $('.mobile-menu').toggle(400);
    });

    //Check Boxes to switch between Men and Women

    $('.women').hide();

    $('#men').change(function() {
        if($(this).is(':checked')) {
            $('#women').prop('checked', false);
            $('.men').show();
            $('.women').hide();
        } else {
            $('.men').hide();
        }
    });

    $('#women').change(function() {
        if($(this).is(':checked')) {
            $('#men').prop('checked', false);
            $('.women').show();
            $('.men').hide();
        } else {
            $('.women').hide();
        }
    });

    // Product Slider

    var mensHatsIndex = 0;
    var $mensHats = $('.hats .men .products-div');
    var mensHatsAmount = ($mensHats.length);

    function sliceMensHats() {
        //shows the four mensHats starting at the current index
        $mensHats.slice(mensHatsIndex, mensHatsIndex+1).css('visibility', 'visible').css('z-index', '50');
        //hides all the items before the current index
        $mensHats.slice(0, mensHatsIndex).css('visibility', 'hidden').css('z-index', '-50');
        for(i = 0; i < ($mensHats.slice(0, mensHatsIndex)).length; i++) {
            if($(($mensHats.slice(0, mensHatsIndex)[i])).children('li').hasClass('dropped')) {
                $(($mensHats.slice(0, mensHatsIndex)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
        //hides all the items after the last shown item
        $mensHats.slice(mensHatsIndex+1, mensHatsAmount).css('visibility', 'hidden').css('z-index', '-100');
        for(i = 0; i < ($mensHats.slice(mensHatsIndex+1, mensHatsAmount)).length; i++) {
            if($(($mensHats.slice(mensHatsIndex+1, mensHatsAmount)[i])).children('li').hasClass('dropped')) {
                $(($mensHats.slice(mensHatsIndex+1, mensHatsAmount)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
    }

    console.log('you have ' + mensHatsAmount + ' men\'s hats product divs');
    sliceMensHats();

    function cycleMensHatsForward() {
        if (mensHatsIndex+1 >= mensHatsAmount) {
            mensHatsIndex = 0;
        }
        else if (mensHatsIndex+1 < mensHatsAmount) {
            mensHatsIndex+=1;
        }
        sliceMensHats();
        console.log('mensHatsIndex is '+ mensHatsIndex);
    }

    function cycleMensHatsBackward() {
        if (mensHatsIndex-1 < 0) {
            mensHatsIndex = mensHatsAmount - 1;
        }
        else if (mensHatsIndex-1 >= 0) {
            mensHatsIndex-=1;
        }
        sliceMensHats();
    }

    $('.mens-hats-right').click(cycleMensHatsForward);

    $('.mens-hats-left').click(cycleMensHatsBackward);

        //Mens Tops

        var mensTopsIndex = 0;
        var $mensTops = $('.tops .men .products-div');
        var mensTopsAmount = ($mensTops.length);
        sliceMensTops();

        function sliceMensTops() {
            //shows the four mensHats starting at the current index
            $mensTops.slice(mensTopsIndex, mensTopsIndex+1).css('visibility', 'visible').css('z-index', '50');
            // $mensTops.slice(mensTopsIndex, mensTopsIndex+1).children('li').css('visibility', 'visible').css('z-index', '50');
            //hides all the items before the current index
            $mensTops.slice(0, mensTopsIndex).css('visibility', 'hidden').css('z-index', '-50');
            for(i = 0; i < ($mensTops.slice(0, mensTopsIndex)).length; i++) {
                if($(($mensTops.slice(0, mensTopsIndex)[i])).children('li').hasClass('dropped')) {
                    $(($mensTops.slice(0, mensTopsIndex)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
                }
            }
            //hides all the items after the last shown item
            $mensTops.slice(mensTopsIndex+1, mensTopsAmount).css('visibility', 'hidden').css('z-index', '-100');
            for(i = 0; i < ($mensTops.slice(mensTopsIndex+1, mensTopsAmount)).length; i++) {
                if($(($mensTops.slice(mensTopsIndex+1, mensTopsAmount)[i])).children('li').hasClass('dropped')) {
                    $(($mensTops.slice(mensTopsIndex+1, mensTopsAmount)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
                }
            }
        }

        console.log('you have ' + mensHatsAmount + ' men\'s tops product divs');

        function cycleMensTopsForward() {
            if (mensTopsIndex+1 >= mensTopsAmount) {
                mensTopsIndex = 0;
            }
            else if (mensTopsIndex+1 < mensTopsAmount) {
                mensTopsIndex+=1;
            }
            sliceMensTops();
            console.log('mensTopsIndex is '+ mensTopsIndex);
        }

        function cycleMensTopsBackward() {
            if (mensTopsIndex-1 < 0) {
                mensTopsIndex = mensTopsAmount - 1;
            }
            else if (mensTopsIndex-1 >= 0) {
                mensTopsIndex-=1;
            }
            sliceMensTops();
        }

    $('.mens-tops-right').click(cycleMensTopsForward);

    $('.mens-tops-left').click(cycleMensTopsBackward);

        //Mens Bottoms

    var mensBottomsIndex = 0;
    var $mensBottoms = $('.bottoms .men .products-div');
    var mensBottomsAmount = ($mensBottoms.length);
    sliceMensBottoms();

    function sliceMensBottoms() {
        //shows the four mensHats starting at the current index
        $mensBottoms.slice(mensBottomsIndex, mensBottomsIndex+1).css('visibility', 'visible').css('z-index', '50');
        // $mensTops.slice(mensTopsIndex, mensTopsIndex+1).children('li').css('visibility', 'visible').css('z-index', '50');
        //hides all the items before the current index
        $mensBottoms.slice(0, mensBottomsIndex).css('visibility', 'hidden').css('z-index', '-50');
        for(i = 0; i < ($mensBottoms.slice(0, mensBottomsIndex)).length; i++) {
            if($(($mensBottoms.slice(0, mensBottomsIndex)[i])).children('li').hasClass('dropped')) {
                $(($mensBottoms.slice(0, mensBottomsIndex)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
        //hides all the items after the last shown item
        $mensBottoms.slice(mensBottomsIndex+1, mensBottomsAmount).css('visibility', 'hidden').css('z-index', '-100');
        for(i = 0; i < ($mensBottoms.slice(mensBottomsIndex+1, mensBottomsAmount)).length; i++) {
            if($(($mensBottoms.slice(mensBottomsIndex+1, mensBottomsAmount)[i])).children('li').hasClass('dropped')) {
                $(($mensBottoms.slice(mensBottomsIndex+1, mensBottomsAmount)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
    }

    console.log('you have ' + mensHatsAmount + ' men\'s bottoms product divs');

    function cycleMensBottomsForward() {
        if (mensBottomsIndex+1 >= mensBottomsAmount) {
            mensBottomsIndex = 0;
        }
        else if (mensBottomsIndex+1 < mensBottomsAmount) {
            mensBottomsIndex+=1;
        }
        sliceMensBottoms();
        console.log('mensBottomsIndex is '+ mensBottomsIndex);
    }

    function cycleMensBottomsBackward() {
        if (mensBottomsIndex-1 < 0) {
            mensBottomsIndex = mensBottomsAmount - 1;
        }
        else if (mensBottomsIndex-1 >= 0) {
            mensBottomsIndex-=1;
        }
        sliceMensBottoms();
    }

    $('.mens-bottoms-right').click(cycleMensBottomsForward);

    $('.mens-bottoms-left').click(cycleMensBottomsBackward);

    //start women's clothing slider

    var womensHatsIndex = 0;
    var $womensHats = $('.hats .women .products-div');
    var womensHatsAmount = ($womensHats.length);

    function sliceWomensHats() {
        //shows the four womensHats starting at the current index
        $womensHats.slice(womensHatsIndex, womensHatsIndex+1).css('visibility', 'visible').css('z-index', '50');
        //hides all the items before the current index
        $womensHats.slice(0, womensHatsIndex).css('visibility', 'hidden').css('z-index', '-50');
        for(i = 0; i < ($womensHats.slice(0, womensHatsIndex)).length; i++) {
            if($(($womensHats.slice(0, womensHatsIndex)[i])).children('li').hasClass('dropped')) {
                $(($womensHats.slice(0, womensHatsIndex)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
        //hides all the items after the last shown item
        $womensHats.slice(womensHatsIndex+1, womensHatsAmount).css('visibility', 'hidden').css('z-index', '-100');
        for(i = 0; i < ($womensHats.slice(womensHatsIndex+1, womensHatsAmount)).length; i++) {
            if($(($womensHats.slice(womensHatsIndex+1, womensHatsAmount)[i])).children('li').hasClass('dropped')) {
                $(($womensHats.slice(womensHatsIndex+1, womensHatsAmount)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
    }

    console.log('you have ' + womensHatsAmount + ' women\'s hats product divs');
    sliceWomensHats();

    function cycleWomensHatsForward() {
        if (womensHatsIndex+1 >= womensHatsAmount) {
            womensHatsIndex = 0;
        }
        else if (womensHatsIndex+1 < womensHatsAmount) {
            womensHatsIndex+=1;
        }
        sliceWomensHats();
        console.log('womensHatsIndex is '+ womensHatsIndex);
    }

    function cycleWomensHatsBackward() {
        if (womensHatsIndex-1 < 0) {
            womensHatsIndex = womensHatsAmount - 1;
        }
        else if (womensHatsIndex-1 >= 0) {
            womensHatsIndex-=1;
        }
        sliceWomensHats();
    }

    $('.womens-hats-right').click(cycleWomensHatsForward);

    $('.womens-hats-left').click(cycleWomensHatsBackward);

        //womens Tops

        var womensTopsIndex = 0;
        var $womensTops = $('.tops .women .products-div');
        var womensTopsAmount = ($womensTops.length);
        sliceWomensTops();

        function sliceWomensTops() {
            //shows the four womensHats starting at the current index
            $womensTops.slice(womensTopsIndex, womensTopsIndex+1).css('visibility', 'visible').css('z-index', '50');
            // $womensTops.slice(womensTopsIndex, womensTopsIndex+1).children('li').css('visibility', 'visible').css('z-index', '50');
            //hides all the items before the current index
            $womensTops.slice(0, womensTopsIndex).css('visibility', 'hidden').css('z-index', '-50');
            for(i = 0; i < ($womensTops.slice(0, womensTopsIndex)).length; i++) {
                if($(($womensTops.slice(0, womensTopsIndex)[i])).children('li').hasClass('dropped')) {
                    $(($womensTops.slice(0, womensTopsIndex)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
                }
            }
            //hides all the items after the last shown item
            $womensTops.slice(womensTopsIndex+1, womensTopsAmount).css('visibility', 'hidden').css('z-index', '-100');
            for(i = 0; i < ($womensTops.slice(womensTopsIndex+1, womensTopsAmount)).length; i++) {
                if($(($womensTops.slice(womensTopsIndex+1, womensTopsAmount)[i])).children('li').hasClass('dropped')) {
                    $(($womensTops.slice(womensTopsIndex+1, womensTopsAmount)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
                }
            }
        }

        console.log('you have ' + womensHatsAmount + ' women\'s tops product divs');

        function cycleWomensTopsForward() {
            if (womensTopsIndex+1 >= womensTopsAmount) {
                womensTopsIndex = 0;
            }
            else if (womensTopsIndex+1 < womensTopsAmount) {
                womensTopsIndex+=1;
            }
            sliceWomensTops();
            console.log('womensTopsIndex is '+ womensTopsIndex);
        }

        function cycleWomensTopsBackward() {
            if (womensTopsIndex-1 < 0) {
                womensTopsIndex = womensTopsAmount - 1;
            }
            else if (womensTopsIndex-1 >= 0) {
                womensTopsIndex-=1;
            }
            sliceWomensTops();
        }

    $('.womens-tops-right').click(cycleWomensTopsForward);

    $('.womens-tops-left').click(cycleWomensTopsBackward);

        //womens Bottoms

    var womensBottomsIndex = 0;
    var $womensBottoms = $('.bottoms .women .products-div');
    var womensBottomsAmount = ($womensBottoms.length);
    sliceWomensBottoms();

    function sliceWomensBottoms() {
        //shows the four mensHats starting at the current index
        $womensBottoms.slice(womensBottomsIndex, womensBottomsIndex+1).css('visibility', 'visible').css('z-index', '50');
        // $womensTops.slice(womensTopsIndex, womensTopsIndex+1).children('li').css('visibility', 'visible').css('z-index', '50');
        //hides all the items before the current index
        $womensBottoms.slice(0, womensBottomsIndex).css('visibility', 'hidden').css('z-index', '-50');
        for(i = 0; i < ($womensBottoms.slice(0, womensBottomsIndex)).length; i++) {
            if($(($womensBottoms.slice(0, womensBottomsIndex)[i])).children('li').hasClass('dropped')) {
                $(($womensBottoms.slice(0, womensBottomsIndex)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
        //hides all the items after the last shown item
        $womensBottoms.slice(womensBottomsIndex+1, womensBottomsAmount).css('visibility', 'hidden').css('z-index', '-100');
        for(i = 0; i < ($womensBottoms.slice(womensBottomsIndex+1, womensBottomsAmount)).length; i++) {
            if($(($womensBottoms.slice(womensBottomsIndex+1, womensBottomsAmount)[i])).children('li').hasClass('dropped')) {
                $(($womensBottoms.slice(womensBottomsIndex+1, womensBottomsAmount)[i])).children('li.dropped').children('img').css('visibility', 'visible').css('z-index', '50');
            }
        }
    }

    console.log('you have ' + womensHatsAmount + ' women\'s bottoms product divs');

    function cycleWomensBottomsForward() {
        if (womensBottomsIndex+1 >= womensBottomsAmount) {
            womensBottomsIndex = 0;
        }
        else if (womensBottomsIndex+1 < womensBottomsAmount) {
            womensBottomsIndex+=1;
        }
        slicewomensBottoms();
        console.log('womensBottomsIndex is '+ womensBottomsIndex);
    }

    function cycleWomensBottomsBackward() {
        if (womensBottomsIndex-1 < 0) {
            womensBottomsIndex = womensBottomsAmount - 1;
        }
        else if (womensBottomsIndex-1 >= 0) {
            womensBottomsIndex-=1;
        }
        sliceWomensBottoms();
    }

    $('.womens-bottoms-right').click(cycleWomensBottomsForward);

    $('.womens-bottoms-left').click(cycleWomensBottomsBackward);

        // Initialize Interact.js Drag & Drop
    interact('.product img').draggable({
        inertia: true,
        restrict: {
          restriction: ".application-wrapper",
          endOnly: true,
          elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
        },
        onmove: function (event) {
          var target = event.target,
              // keep the dragged position in the data-x/data-y attributes
              x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
              y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

          // translate the element
          target.style.webkitTransform =
          target.style.transform =
            'translate(' + x + 'px, ' + y + 'px)';

          // update the posiion attributes
          target.setAttribute('data-x', x);
          target.setAttribute('data-y', y);
        },
        onend: function(event) {
            console.log(event);
            var target = event.target;
            $(target).parent().addClass('dropped');
        }
    });

    interact('#hat-drop').dropzone({
        accept: '.hat',
        overlap: 0.01,

        // add / remove dropzone feedback
        ondropactivate: function (event) {
            event.target.classList.add('drop-active');
        },
        ondropdeactivate: function (event) {
            event.target.classList.remove('drop-active');
        },

        // add / remove dropzone feedback
        ondragenter: function (event) {
            var draggableElement = event.relatedTarget,
                dropzoneElement = event.target;
            dropzoneElement.classList.add('drop-target');
            draggableElement.classList.add('can-drop');
        },
        ondragleave: function (event) {
            event.target.classList.remove('drop-target');
            event.relatedTarget.classList.remove('can-drop');
        },

        // drop successful
        ondrop: function (event) {
            console.log(event);
        }
    });

    //grid system
    var element = $('.product img'), x = 0, y = 0;

    interact(element)
      .draggable({
        snap: {
          targets: [
            interact.createSnapGrid({ x: 40, y: 40 })
          ],
          range: Infinity,
          relativePoints: [ { x: 0, y: 0 } ]
        },
        inertia: true,
        restrict: {
          restriction: element.parentNode,
          elementRect: { top: 0, left: 0, bottom: 1, right: 1 },
          endOnly: true
        }
      })
      .on('dragmove', function (event) {
        x += event.dx;
        y += event.dy;

        event.target.style.webkitTransform =
        event.target.style.transform =
            'translate(' + x + 'px, ' + y + 'px)';
      });

    //Cycle Between Clothing Sections

    //hats to tops
    $('.hats-to-tops').click(function() {
        if ($("#men").is(':checked')) {
            $('.hats .category-heading').css('visibility', 'hidden');
            $('.hats .men .arrow').css('visibility', 'hidden');
            $('.hats').css('z-index', '-30');
            for (i = 0; i < $('.men .hat').length; i++) {
                var $currentHat = $('.men .hat').get(i);
                if ($($currentHat).hasClass('dropped')) {
                    $($currentHat).css('visiblity', 'visible');
                }
            }
            $('.tops').css('z-index', '99');
            $('.tops .category-heading').css('visibility', 'visible');
            $('.tops .men .arrow').css('visibility', 'visible');
            $($(('.tops .men .products-div')).get(0)).css('visibility', 'visible');
        } else if ($("#women").is(':checked')) {
            $('.hats .category-heading').css('visibility', 'hidden');
            $('.hats .women .arrow').css('visibility', 'hidden');
            $('.hats').css('z-index', '-30');
            for (i = 0; i < $('.women .hat').length; i++) {
                var $currentHat = $('.women .hat').get(i);
                if ($($currentHat).hasClass('dropped')) {
                    $($currentHat).css('visibility', 'visible');
                }
            }
            $('.tops').css('z-index', '99');
            $('.tops .category-heading').css('visibility', 'visible');
            $('.tops .women .arrow').css('visibility', 'visible');
            $($(('.tops .women .products-div')).get(0)).css('visibility', 'visible');
        }
    });

    //hats to bottoms

    $('.hats-to-bottoms').click(function() {
        if ($("#men").is(':checked')) {
            $('.hats .category-heading').css('visibility', 'hidden');
            $('.hats .men .arrow').css('visibility', 'hidden');
            $('.hats .men .products-div').css('visibility', 'hidden');
            $('.hats').css('z-index', '-30');
            for (i = 0; i < $('.men .hat').length; i++) {
                var $currentHat = $('.men .hat').get(i);
                if ($($currentHat).hasClass('dropped')) {
                    $($currentHat).css('visibility', 'visible');
                }
            }
            $('.bottoms').css('z-index', '99');
            $('.bottoms .category-heading').css('visibility', 'visible');
            $('.bottoms .men .arrow').css('visibility', 'visible');
            $($('.bottoms .men .products-div').get(0)).css('visibility', 'visible');
        } else if ($("#women").is(':checked')) {
            $('.hats .category-heading').css('visibility', 'hidden');
            $('.hats .women .arrow').css('visibility', 'hidden');
            $('.hats .women .products-div').css('visibility', 'hidden');
            $('.hats').css('z-index', '-30');
            for (i = 0; i < $('.women .hat').length; i++) {
                var $currentHat = $('.women .hat').get(i);
                if ($($currentHat).hasClass('dropped')) {
                    $($currentHat).css('visibility', 'visible');
                }
            }
            $('.bottoms').css('z-index', '99');
            $('.bottoms .category-heading').css('visibility', 'visible');
            $('.bottoms .women .arrow').css('visibility', 'visible');
            $($('.bottoms .women .products-div').get(0)).css('visibility', 'visible');
        }
    });

    //tops to hats
    $('.tops-to-hats').click(function() {
        if ($("#men").is(':checked')) {
            $('.tops .category-heading').css('visibility', 'hidden');
            $('.tops .men .arrow').css('visibility', 'hidden');
            $('.tops .men .products-div').css('visibility', 'hidden');
            $('.tops').css('z-index', '-30');
            for (i = 0; i < $('.men .top').length; i++) {
                var $currentTop = $('.men .top').get(i);
                if ($($currentTop).hasClass('dropped')) {
                    $($currentTop).css('visibility', 'visible');
                }
            }
            $('.hats').css('z-index', '99');
            $('.hats .category-heading').css('visibility', 'visible');
            $('.hats .men .arrow').css('visibility', 'visible');
            $($('.hats .men .products-div').get(0)).css('visibility', 'visible');
        } else if ($("#women").is(':checked')) {
            $('.tops .category-heading').css('visibility', 'hidden');
            $('.tops .women .arrow').css('visibility', 'hidden');
            $('.tops .women .products-div').css('visibility', 'hidden');
            $('.tops').css('z-index', '-30');
            for (i = 0; i < $('.women .top').length; i++) {
                var $currentTop = $('.women .top').get(i);
                if ($($currentTop).hasClass('dropped')) {
                    $($currentTop).css('visibility', 'visible');
                }
            }
            $('.hats').css('z-index', '99');
            $('.hats .category-heading').css('visibility', 'visible');
            $('.hats .women .arrow').css('visibility', 'visible');
            $($('.hats .women .products-div').get(0)).css('visibility', 'visible');
        }
    });

    //tops to bottoms
    $('.tops-to-bottoms').click(function() {
        if ($("#men").is(':checked')) {
            $('.tops .category-heading').css('visibility', 'hidden');
            $('.tops .men .arrow').css('visibility', 'hidden');
            $('.tops .men .products-div').css('visibility', 'hidden');
            $('.tops').css('z-index', '-60');
            for (i = 0; i < $('.men .top').length; i++) {
                var $currentTop = $('.men .top').get(i);
                if ($($currentTop).hasClass('dropped')) {
                    $($currentTop).css('visibility', 'visible');
                }
            }
            $('.bottoms').css('z-index', '99');
            $('.bottoms .category-heading').css('visibility', 'visible');
            $('.bottoms .men .arrow').css('visibility', 'visible');
            $($(('.bottoms .men .products-div')).get(0)).css('visibility', 'visible');
        } else if ($("#women").is(':checked')) {
            $('.tops .category-heading').css('visibility', 'hidden');
            $('.tops .women .arrow').css('visibility', 'hidden');
            $('.tops .women .products-div').css('visibility', 'hidden');
            $('.tops').css('z-index', '-60');
            for (i = 0; i < $('.women .top').length; i++) {
                var $currentTop = $('.women .top').get(i);
                if ($($currentTop).hasClass('dropped')) {
                    $($currentTop).css('visibility', 'visible');
                }
            }
            $('.bottoms .category-heading').css('visibility', 'visible');
            $('.bottoms .women .arrow').css('visibility', 'visible');
            $('.bottoms').css('z-index', '99');
            $($(('.bottoms .women .products-div')).get(0)).css('visibility', 'visible');
        }
    });

    //bottoms to tops
    $('.bottoms-to-tops').click(function() {
        if ($("#men").is(':checked')) {
            $('.bottoms .category-heading').css('visibility', 'hidden');
            $('.bottoms .men .arrow').css('visibility', 'hidden');
            $(('.bottoms .men .products-div')).css('visibility', 'hidden');
            $('.bottoms').css('z-index', '-30');
            for (i = 0; i < $('.men .bottom').length; i++) {
                var $currentBottom = $('.men .bottom').get(i);
                if ($($currentBottom).hasClass('dropped')) {
                    $($currentBottom).css('visibility', 'visible');
                }
            }
            $('.tops').css('z-index', '99');
            $('.tops .category-heading').css('visibility', 'visible');
            $('.tops .men .arrow').css('visibility', 'visible');
            $($(('.tops .men .products-div')).get(0)).css('visibility', 'visible');
        } else if ($("#women").is(':checked')) {
            $('.bottoms .category-heading').css('visibility', 'hidden');
            $('.bottoms .women .arrow').css('visibility', 'hidden');
            $(('.bottoms .women .products-div')).css('visibility', 'hidden');
            $('.bottoms').css('z-index', '-30');
            for (i = 0; i < $('.women .bottom').length; i++) {
                var $currentBottom = $('.women .bottom').get(i);
                if ($($currentBottom).hasClass('dropped')) {
                    $($currentBottom).css('visibility', 'visible');
                }
            }
            $('.tops').css('z-index', '99');
            $('.tops .category-heading').css('visibility', 'visible');
            $('.tops .women .arrow').css('visibility', 'visible');
            $($(('.tops .women .products-div')).get(0)).css('visibility', 'visible');
        }
    });

    //bottoms to hats
    $('.bottoms-to-hats').click(function() {
        if ($("#men").is(':checked')) {
            $('.bottoms .category-heading').css('visibility', 'hidden');
            $('.bottoms .men .arrow').css('visibility', 'hidden');
            $('.bottoms').css('z-index', '-30');
            $('.bottoms .men .products-div').css('visibility', 'hidden');
            for (i = 0; i < $('.men .bottom').length; i++) {
                var $currentBottom = $('.men .bottom').get(i);
                if ($($currentBottom).hasClass('dropped')) {
                    $($currentBottom).css('visibility', 'visible');
                }
            }
            $('.hats').css('z-index', '99');
            $('.hats .category-heading').css('visibility', 'visible');
            $('.hats .men .arrow').css('visibility', 'visible');
            $($(('.hats .men .products-div')).get(0)).css('visibility', 'visible');
        } else if ($("#women").is(':checked')) {
            $('.bottoms .category-heading').css('visibility', 'hidden');
            $('.bottoms .women .arrow').css('visibility', 'hidden');
            $('.bottoms').css('z-index', '-30');
            $('.bottoms .women .products-div').css('visibility', 'hidden');
            for (i = 0; i < $('.women .bottom').length; i++) {
                var $currentBottom = $('.women .bottom').get(i);
                if ($($currentBottom).hasClass('dropped')) {
                    $($currentBottom).css('visibility', 'visible');
                }
            }
            $('.hats').css('z-index', '99');
            $('.hats .category-heading').css('visibility', 'visible');
            $('.hats .women .arrow').css('visibility', 'visible');
            $($(('.hats .women .products-div')).get(0)).css('visibility', 'visible');
        }
    });

    //clear method
    function clear() {
        for (i = 0; i < $('.product').length; i++) {
            if($($('.product').get(i)).hasClass('dropped')) {
                $($('.product').get(i)).removeClass('dropped');
                $($('.product img').get(i)).css('transform', 'none');
                $($('.product img').get(i)).removeAttr('style');
                $($('.product img').get(i)).removeAttr('data-x');
                $($('.product img').get(i)).removeAttr('data-y');
            }

        }
    }

    $('.clear').click(clear);

});

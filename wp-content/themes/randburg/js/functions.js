$(document).ready(function() {

  /* CATEGORIES GRID */
  function setCategoriesGridCSS() {
    $('#categories-grid .item').each(function(index, ele) {
      $(ele).height($(ele).width());
    });
  } setCategoriesGridCSS();

  /* SLIDER */
  var slideCount, slideWidth, slideHeight, sliderUlWidth, paginationItemWidth, sliderInterval;

  function setSliderCSS() {
     slideCount = $('#slider .slide').length;
     slideWidth = $(window).width();
     slideHeight = $('#slider .slide').height();
     sliderUlWidth = slideCount * slideWidth;
     paginationItemWidth = ($(window).width() / slideCount) - 20;

     $('#slider .slide').width(slideWidth);

     if ($('.pagination-item').length > 0) {
       $('.pagination-item').width(paginationItemWidth);
     }

     $('#slider').css({width: slideWidth, height: slideHeight});
     $('#slider ul').css({width: sliderUlWidth});
     $('#slider ul .slide:first-child').addClass('active');
  } setSliderCSS();


  function addPagination() {
    var pagination = $('#slider .pagination');

    for (var i = 0; i < slideCount; i++) {
      $('#slider .slide:nth-child('+ (i + 1) +')').attr('data-position', i + 1);

      var item = $('<a></a>');
      item.attr('href', 'javascript:void(0)')
        .attr('data-target', i + 1)
        .addClass('pagination-item')
        .width(paginationItemWidth);

      if (i === 0) {item.addClass('active');}

      pagination.append(item);
    }


  } addPagination();

  function moveSliderTo(position) {
    var left = (position - 1) * slideWidth;
    $('#slider ul').animate({
      left: - left
    }, 300);

    $('#slider .slide.active').removeClass('active');
    $('#slider .slide').each(function(index, ele) {
      if ($(ele).data('position') == position) {
        $(ele).addClass('active');
      }
    });
  }

  function moveSliderLeft(e) {
    e.preventDefault();
    var activePos = parseInt($('.pagination-item.active').data('target'));
    var pos = (activePos === 1) ? slideCount : activePos - 1;
    moveSliderTo(pos);
    movePaginationTo(pos);
    stopSliderInterval();
    startSliderInterval();
  }

  function moveSliderRight(e) {
    e.preventDefault();
    var activePos = parseInt($('.pagination-item.active').data('target'));
    var pos = (activePos === slideCount) ? 1 : activePos + 1;
    moveSliderTo(pos);
    movePaginationTo(pos);
    stopSliderInterval();
    startSliderInterval();
  }

  function movePaginationTo(position) {
    $('.pagination-item').removeClass('active')
      .each(function(index, ele) {
        if ($(ele).data('target') == position) {
          $(ele).addClass('active');
        }
      });
  }



  $('a.control-prev').click(moveSliderLeft);
  $('a.control-next').click(moveSliderRight);
  $('#slider').on('swipeleft', moveSliderRight);
  $('#slider').on('swiperight', moveSliderLeft);

  $('.pagination-item').click(function() {
    var pos = $(this).data('target');
    moveSliderTo(pos);
    movePaginationTo(pos);
    stopSliderInterval();
    startSliderInterval();
  });

  function startSliderInterval() {
    sliderInterval = setInterval(function() {
      var active = $('#slider .slide.active'),
        pos = (active.next().length > 0) ? active.next().data('position') : $('#slider .slide:first-child').data('position');
      moveSliderTo(pos);
      movePaginationTo(pos);
    }, 5000);
  } startSliderInterval();

  function stopSliderInterval() {
    clearInterval(sliderInterval);
  }





    $(window).resize(function() {
      setSliderCSS();
      setCategoriesGridCSS();
    });

});

$(document).ready(function() {

  var slideCount, slideWidth, slideHeight, sliderUlWidth, paginationItemWidth, sliderInterval;

  function setCSS() {
     slideCount = $('#slider .slide').length;
     slideWidth = $('#slider .slide').width();
     slideHeight = $('#slider .slide').height();
     sliderUlWidth = slideCount * slideWidth;
     paginationItemWidth = ($(window).width() / slideCount) - 20;

     if ($('.pagination-item').length > 0) {
       $('.pagination-item').width(paginationItemWidth);
     }

     $('#slider').css({ width: slideWidth, height: slideHeight });
     $('#slider ul').css({ width: sliderUlWidth});
     $('#slider ul .slide:first-child').addClass('active');
  } setCSS();

  $(window).resize(setCSS);

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

  // Slider
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

  function movePaginationTo(position) {
    $('.pagination-item').removeClass('active')
      .each(function(index, ele) {
        if ($(ele).data('target') == position) {
          $(ele).addClass('active');
        }
      });
  }

  $('a.control-prev').click(function(e) {
     e.preventDefault();
     moveLeft();
  });

  $('a.control-next').click(function(e) {
     e.preventDefault();
     moveRight();
  });

  $('.pagination-item').click(function() {
    var pos = $(this).data('target');
    moveSliderTo(pos);
    movePaginationTo(pos)
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


});

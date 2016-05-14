$(document).ready(function() {

  var slideCount, slideWidth, slideHeight, sliderUlWidth;

  function setCSS() {
     slideCount = $('#slider .slide').length;
     slideWidth = $('#slider .slide').width();
     slideHeight = $('#slider .slide').height();
     sliderUlWidth = slideCount * slideWidth;

     $('#slider').css({ width: slideWidth, height: slideHeight });
     $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
     $('#slider ul .slide:first-child').addClass('active');
  } setCSS();

  $(window).resize(setCSS);

  function addPagination() {
    var pagination = $('#slider .pagination'),
      itemWidth = ($(window).width() / slideCount) - 20;

    for (var i = 0; i < slideCount; i++) {
      $('#slider .slide:nth-child('+ (i + 1) +')').attr('data-position', i + 1);

      var item = $('<a></a>');
      item.attr('href', 'javascript:void(0)')
        .attr('data-target', i + 1)
        .addClass('pagination-item')
        .width(itemWidth);

      if (i === 0) {item.addClass('active');}

      pagination.append(item);
    }


  } addPagination();

  // slider
  function moveLeft() {
     $('#slider ul').animate({
        left: + slideWidth
     }, 300, function () {
        $('#slider ul .slide:last-child').prependTo('#slider ul');
        $('#slider ul').css('left', '');
     });

     $('#slider ul .slide.active').removeClass('active').prev('.slide').addClass('active');
     $('#slider .pagination-item.active').removeClass('active').prev('.pagination-item').addClass('active');
  }

  function moveRight() {
     $('#slider ul').animate({
        left: "-"+ slideWidth
     }, 300, function () {
        $('#slider ul .slide:first-child').appendTo('#slider ul');
        $('#slider ul').css('left', '');
     });

     $('#slider ul .slide.active').removeClass('active').next('.slide').addClass('active');
     if ($('#slider .pagination-item.active').next('.pagination-item').length > 0) {
       $('#slider .pagination-item.active').removeClass('active').next('.pagination-item').addClass('active');
     } else {
       $('#slider .pagination-item.active').removeClass('active');
       $('#slider .pagination-item:first-child').addClass('active');
     }
  }

  function moveTo(position) {
    var left = (position - 1) * slideWidth;
    console.log(left);
    $('#slider ul').animate({
      left: - left
    }, 300);

    $('#slider .slide.active').removeClass('active');
    $('#slider .slide').each(function(index, ele) {
      if ($(ele).data('position') == position) {
        $(ele).addClass('active');
      }
    });

    if ($('#slider .pagination-item.active').next('.pagination-item').length > 0) {
      $('#slider .pagination-item.active').removeClass('active').next('.pagination-item').addClass('active');
    } else {
      $('#slider .pagination-item.active').removeClass('active');
      $('#slider .pagination-item:first-child').addClass('active');
    }
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
    $('.pagination-item.active').removeClass('active');
    $(this).addClass('active');
    moveTo($(this).data('target'));
  });

  setInterval(function() {
    var active = $('#slider .slide.active'),
      pos = (active.next().length > 0) ? active.next().data('position') : $('#slider .slide:first-child').data('position');
    moveTo(pos);
  }, 5000);

});

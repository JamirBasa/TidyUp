$('#left-arrow').on('click', function(e) {
    e.preventDefault();
    $('#carousel').animate({scrollLeft: '-=400'}, 600);
}); 
$('#right-arrow').on('click', function(e) {
    e.preventDefault();
    $('#carousel').animate({scrollLeft: '+=400'}, 600);
});

$('#left-arrow2').on('click', function(e) {
    e.preventDefault();
    $('#carousel2').animate({scrollLeft: '-=400'}, 600);
}); 
$('#right-arrow2').on('click', function(e) {
    e.preventDefault();
    $('#carousel2').animate({scrollLeft: '+=400'}, 600);
});

$('#left-arrow3').on('click', function(e) {
    e.preventDefault();
    $('#carousel3').animate({scrollLeft: '-=400'}, 600);
}); 
$('#right-arrow3').on('click', function(e) {
    e.preventDefault();
    $('#carousel3').animate({scrollLeft: '+=400'}, 600);
});

$('#left-arrow4').on('click', function(e) {
    e.preventDefault();
    $('#carousel4').animate({scrollLeft: '-=400'}, 600);
}); 
$('#right-arrow4').on('click', function(e) {
    e.preventDefault();
    $('#carousel4').animate({scrollLeft: '+=400'}, 600);
});

$('#left-arrow5').on('click', function(e) {
    e.preventDefault();
    $('#carousel5').animate({scrollLeft: '-=400'}, 600);
}); 
$('#right-arrow5').on('click', function(e) {
    e.preventDefault();
    $('#carousel5').animate({scrollLeft: '+=400'}, 600);
});

// Carousel Snap
$('#carousel').on('scroll', function() {
    const $carousel = $('#carousel');
    const scrollLeft = $carousel.scrollLeft();
    const width = $carousel.width();
    const scrollWidth = $carousel[0].scrollWidth;
    const scrollRight = scrollWidth - width - scrollLeft;
    
});
const cardWidth = $('#shop-card').outerWidth(true);
const snapPoints = [];

$('#shop-card').each(function(index) {
    snapPoints.push(index * cardWidth);
});

$carousel.on('scroll', function() {
    const scrollLeft = $carousel.scrollLeft();
    const closestSnapPoint = snapPoints.reduce((prev, curr) => {
        return (Math.abs(curr - scrollLeft) < Math.abs(prev - scrollLeft) ? curr : prev);
    });

    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        $carousel.animate({scrollLeft: closestSnapPoint}, 300);
    }, 150));
});
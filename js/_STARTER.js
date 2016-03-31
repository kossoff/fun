jQuery(document).ready(function($){
  $(document.body).on("closed.fndtn.clearing", function(event) {
    $('.grid-masonry').masonry();
  });

  $(window).on("load", function() {
    $('.grid-masonry').masonry({
      itemSelector: '.grid-masonry-item',
      columnWidth: 330
    });
  });
});

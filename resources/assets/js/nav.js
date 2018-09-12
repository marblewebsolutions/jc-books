Nav = {}

Nav.initialize = function() {
    var $nav = $('.nav-js');
    var $links = $nav.find('.nav-link-js');
    var $pageContent = $('.page-content-js');
    var activePage = 'home';
    
    $links.click(function() {
        var $view = $('.view-js');
        var $link = $(this);
        var page = $link.attr('data-page');
        
        // Show the page content
        $pageContent.removeClass('active');
        $('.'+page+'-content-js').addClass('active');
        
        // Activate tab
        $links.removeClass('active');
        $link.addClass('active');
        
        // Change background color
        $view.attr('data-page', page);
        console.log($view.attr('page'));
        
    });
}

Nav.initialize();
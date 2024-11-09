$(document).ready(function() {
    const $loadingScreen = $('#loading-screen');
    
    // Function to show loading screen
    function showLoadingScreen() {
        $loadingScreen
            .css('visibility', 'visible')
            .delay(50) // Small delay to ensure visibility is applied before opacity
            .queue(function(next) {
                $(this).css('opacity', '1');
                next();
            });
    }

    // Function to hide loading screen
    function hideLoadingScreen() {
        $loadingScreen
            .css('opacity', '0')
            .one('transitionend', function() {
                $(this).css('visibility', 'hidden');
                sessionStorage.setItem('loadingScreenShown', 'true');
            });
    }

    // Initial page load handling
    if (!sessionStorage.getItem('loadingScreenShown')) {
        showLoadingScreen();
        setTimeout(hideLoadingScreen, 1000);
    } else {
        $loadingScreen.css({
            'opacity': '0',
            'visibility': 'hidden'
        });
    }

    // Handle navigation clicks
    $('.nav-link').click(function(e) {
        e.preventDefault();
        
        const $this = $(this);
        const url = $this.data('url');
        const href = $this.attr('href');
        const isCurrentPage = window.location.pathname === href;

        // Remove background from all links and add to clicked
        $('.nav-link').removeClass('bg-neutral-150');
        $this.addClass('bg-neutral-150');

        // Don't show loading screen if clicking current page
        if (isCurrentPage) {
            return;
        }

        // Show loading screen for navigation
        showLoadingScreen();

        // Load content
        $.ajax({
            url: url,
            type: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(response) {
                $('#content').html(response);
                history.pushState({}, '', href);
                hideLoadingScreen();
            },
            error: function(xhr) {
                if (xhr.status === 401) {
                    window.location = '/login';
                } else if (xhr.status === 302) {
                    window.location = xhr.responseJSON.redirect;
                }
                hideLoadingScreen();
            }
        });
    });

    // Handle browser back/forward
    window.addEventListener('popstate', function() {
        const path = window.location.pathname;
        const contentUrl = path === '/' ? '/home-content' : path + '-content';
        
        // Update active state in sidebar
        $('.nav-link').removeClass('bg-neutral-150');
        if(path === '/') {
            $('#home-link').addClass('bg-neutral-150');
        } else if (path === '/appointments') {
            $('#appointments-link').addClass('bg-neutral-150');
        } else if (path === '/explore') {
            $('#explore-link').addClass('bg-neutral-150');
        }

        // Show loading screen
        showLoadingScreen();
        
        // Load content
        $.ajax({
            url: contentUrl,
            type: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(response) {
                $('#content').html(response);
                hideLoadingScreen();
            },
            error: function(xhr) {
                hideLoadingScreen();
                if (xhr.status === 401) {
                    window.location = '/login';
                }
            }
        });
    });
});




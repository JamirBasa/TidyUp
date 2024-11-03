$(document).ready(function() {
    

    let url = window.location.pathname;
    if(url === '/') {
        $('#home-link').addClass('bg-neutral-150');
    } else if (url === '/appointments') {
        $('.nav-link').removeClass('bg-neutral-150');
        $('#appointments-link').addClass('bg-neutral-150');
    } else if (url === '/explore') {
        $('.nav-link').removeClass('bg-neutral-150');
        $('#explore-link').addClass('bg-neutral-150');
        $('#explore-link').trigger('click');
        // Initialize carousel
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.nav-link').click(function(e) {
        e.preventDefault();
        
        // Remove active class from all links
        $('.nav-link').removeClass('bg-neutral-150');
        // Add active class to clicked link
        $(this).addClass('bg-neutral-150');
        
        var url = $(this).data('url');
        var href = $(this).attr('href');
        
        // Show loading state
        $('#content').addClass('loading');
        
        loadContent(url);
        // Update URL without reload
        history.pushState({}, '', href);
    });

    $('#get-started-btn').click(function(e) {
        e.preventDefault();
        
        // Remove active class from all links
        $('.nav-link').removeClass('bg-neutral-150');
        // Add active class to clicked link
        $('#explore-link').addClass('bg-neutral-150');
        var url = $('#explore-link').data('url');
        var href = $('#explore-link').attr('href');
        
        // Show loading state
        $('#content').addClass('loading');
        
        loadContent(url);
        // Update URL without reload
        history.pushState({}, '', href);
    });

    


    function loadContent(url) {
        $.ajax({
            url: url,
            type: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            success: function(response) {
                $('#content').html(response);
            },
            error: function(xhr) {
                if (xhr.status === 401) {
                    // Unauthorized, redirect to login
                    window.location = '/login';
                } else if (xhr.status === 302) {
                    window.location = xhr.responseJSON.redirect;
                }
            },
            complete: function() {
                // Remove loading state
                $('#content').removeClass('loading');
            }
        });
    }

    // Handle browser back/forward buttons
    window.addEventListener('popstate', function() {
        let path = window.location.pathname;
        let contentUrl;
        
        if (path === '/') {
            contentUrl = '/home-content';
        } else {
            contentUrl = path + '-content';
        }
        
        // Update active state in sidebar
        $('.nav-link').removeClass('active');
        $(`a[href="${path}"]`).addClass('active');
        
        loadContent(contentUrl);
    });
});
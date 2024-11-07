// this is for the menu tabs in the appointments page to make the transition of the line indicator smooth
$(document).ready(function() {
    const $tabs = $('li');
    const $indicator = $('.slide-indicator');

    function updateIndicator($tab) {
        $indicator.css({
            'width': $tab.outerWidth() + 'px',
            'transform': `translateX(${$tab.position().left}px)`
        });
    }

    // Initialize indicator position
    const $activeTab = $('li.active');
    if ($activeTab.length) {
        updateIndicator($activeTab);
    }

    // Add click handlers
    $tabs.on('click', function(e) {
        e.preventDefault();

        // Remove active class and text color from all tabs
        $tabs.removeClass('active')
            .find('a')
            .removeClass('text-gray-900')
            .addClass('text-gray-500');

        // Add active class and text color to clicked tab
        $(this).addClass('active')
            .find('a')
            .removeClass('text-gray-500')
            .addClass('text-gray-900');

        // Update indicator position
        updateIndicator($(this));
    });
});

//

function loadUpcomingAppointments() {
    $.ajax({
        url: url,
        type: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        },
        success: function(response) {
            $('#appointments-content').html(response);
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
            $('#appointments-content').removeClass('loading');
        }
    });
}

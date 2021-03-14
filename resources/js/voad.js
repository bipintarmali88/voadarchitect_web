$(document).ready(function() {


    var width = $(window).width();

    if (width < 770) {
        $('#stickyMenu').fadeIn();
    } else {
        $('#stickyMenu').fadeOut();
    }
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 100) {
            $('header').fadeOut();
            $('#stickyMenu').fadeIn();
        } else {
            $('header').fadeIn();
            if (width > 770) {
                $('#stickyMenu').fadeOut();
            }
        }
    });

    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });

    $(".zoom").hover(function() {

        $(this).addClass('transition');
    }, function() {

        $(this).removeClass('transition');
    });

    $('.modal').on('hidden.bs.modal', function() {
        $('#projects,#services,#aboutus').css('filter', 'none');
        $('#stickyMenu').fadeIn();
    });

    /* START OF DEMO JS - NOT NEEDED */
    if (window.location == window.parent.location) {
        $('#fullscreen').html('<span class="glyphicon glyphicon-resize-small"></span>');
        $('#fullscreen').attr('href', 'http://bootsnipp.com/mouse0270/snippets/PbDb5');
        $('#fullscreen').attr('title', 'Back To Bootsnipp');
    }
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location = $('#fullscreen').attr('href');
    });
    $('#fullscreen').tooltip();
    /* END DEMO OF JS */

    $('.navbar-toggler').click(function(event) {
        event.preventDefault();
        $(this).closest('.navbar-minimal').toggleClass('open');
    });

    $('#stickyMenu .home').click(function(event) {
        event.preventDefault();
        $(this).closest('.navbar-minimal').removeClass('open');
        location.href = "#";
    });

    $('#submitBtn').click(function(event) {
        event.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var query = $('#query').val();
        if (name && email && query) {
            submitQueryAjax(name, email, query);
        } else {
            alert("Name ,Email , and Query are mandatory fields. please enter the details.");
        }
    });



});

function getProjectsFileForModal(projectName) {
    $.ajax({
        url: 'projectModal.php',
        type: 'POST',
        data: { projectName: projectName },
        error: (function() {
            alert("server error!!!");
            return;
        }),
        success: function(data) {
            $('#projects,#services,#aboutus').css('filter', 'blur(5px)');
            $('#stickyMenu').fadeOut();
            $('#projectModal').html('');
            $('#projectModal').html(data);
        }
    });
}

function submitQueryAjax(name, fromEmail, query) {
    $.ajax({
        url: 'submitQueryAjax.php',
        type: 'POST',
        data: { name: name, fromEmail: fromEmail, query: query },
        error: (function() {
            alert("server error!!!");
            return;
        }),
        success: function(data) {
            $('#projects,#services,#aboutus').css('filter', 'blur(5px)');
            $('#stickyMenu').fadeOut();
            $('#projectModal').html('');
            $('#projectModal').html(data);
        }
    });
}
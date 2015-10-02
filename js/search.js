$(document).ready(function () {
    $('form.search').submit(function () {
        
        $.ajax({
            method: 'POST',
            url: "ajax/buddyschool-first-profile",
            //cache: false,
            data: {
                search: $('form.search input').val(),
            }
        })
        .done(function( msg ) {
            $( "p#link_to_file" ).show().html( '<a target="_blank" href="'+msg+'">link to file</a>' );
        })
        .fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });
        
        return false;
    });
})
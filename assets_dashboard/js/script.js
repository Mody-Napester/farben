$(document).ready(function(){

    // Delete items
    $('body').on('click', ".confirm-delete", function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $('#confirm-delete-form').attr('action', link);
        $("#confirm_delete_modal").modal({backdrop: true});
    });

    // Update items
    $('body').on('click', ".update-item", function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $.get(link, function( data ) {
            console.log(data);
            $('#roles_update_modal').find('.modal-body').html(data);
            $("#roles_update_modal").modal({backdrop: true});
        });
    });

});

$(function () {
    $('#campaign_log_table').DataTable({
    'paging'      : true,
    'lengthChange': true,
    'searching'   : false,
    'ordering'    : true,
    'info'        : false,
    'autoWidth'   : true
    })
})
$(document).ready(function(){
    $('.sidebar-menu .treeview.active').removeClass('active');
    $('.sidebar-menu .treeview .treeview-menu li.active').removeClass('active');

    $('.sidebar-menu .youtube_seo_menu').addClass('active');
    $('.sidebar-menu .youtube_seo_menu').addClass('menu-open');
    $('.sidebar-menu .youtube_seo_menu .treeview-menu li.list').addClass('active');

    var campaign_id = $('#campaign_id').text();

    $('button.delete-campaign').click(function(){
        $.ajax({
            method: 'POST', // Type of response and matches what we said in the route
            url: '/youtube_seo/del_campaign_ajax', // This is the url we gave in the route
            data: {'campaign_id' : campaign_id}, // a JSON object to send back
            success: function(response){ // What to do if we succeed
                console.log('success');
            },
            error: function() { // What to do if we fail
                console.log('error');
            }
        });
    });

});

$('#add').submit(function () {
    var name = $('input[name="name"]').val();
    var ip = $('input[name="ip"]').val();
    var port = $('input[name="port"]').val();
    var domain = $('input[name="domain"]').val();
    var rules = $('input[name="rules"]').val();

    $.post('/api/add_client', {
        'name': name,
        'ip': ip,
        'port': port,
        'domain': domain,
        'rules': rules,
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('#update').submit(function () {
    var name = $('input[name="name"]').val();
    var ip = $('input[name="ip"]').val();
    var port = $('input[name="port"]').val();
    var domain = $('input[name="domain"]').val();
    var rules = $('input[name="rules"]').val();
    var _id = $('input[name="_id"]').val();

    $.post('/api/update_client', {
        'name': name,
        'ip': ip,
        'port': port,
        'domain': domain,
        'rules': rules,
        '_id': _id
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});


$('.notice').click(function () {
    var mid = $(this).attr('mid');
    $.post('/api/client_notice', {
        'id': mid,
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
    });

});

$('.delete_client').click(function () {
    var mid = $(this).attr('mid');

    $.post('/api/del_client', {
        'mid': mid
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    })
});

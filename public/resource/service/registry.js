$('#add').submit(function () {
    var title = $('input[name="title"]').val();
    var name = $('input[name="name"]').val();
    var ip = $('input[name="ip"]').val();
    var description = $('input[name="description"]').val();
    var group_id = $('#form_group_id option:selected').val();

    $.post('/api/add_registry', {
        'title': title,
        'description': description,
        'name': name,
        'ip': ip,
        'group_id': group_id,
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('#update').submit(function () {
    var _id = $('input[name="_id"]').val();
    var title = $('input[name="title"]').val();
    var name = $('input[name="name"]').val();
    var ip = $('input[name="ip"]').val();
    var description = $('input[name="description"]').val();
    var group_id = $('#form_group_id option:selected').val();

    $.post('/api/update_registry', {
        'title': title,
        'description': description,
        'name': name,
        'ip': ip,
        'group_id': group_id,
        '_id': _id
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});


$('.delete_registry').click(function () {
    var rid = $(this).attr('rid');

    $.post('/api/del_registry', {
        'rid': rid
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    })
});

$('.update_weight').click(function () {
    var rid = $(this).attr('rid');
    var weight = $(this).prev('input[name="weight"]').val();

    $.post('/api/weight_registry', {
        'id': rid,
        'weight': weight
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    })
});
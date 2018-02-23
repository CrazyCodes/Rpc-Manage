$('#add').submit(function () {
    var name = $('input[name="name"]').val();
    var url = $('input[name="url"]').val();
    var icon = $('input[name="icon"]').val();
    var sort = $('input[name="sort"]').val();
    var pid = $('#form_pid option:selected').val();

    $.post('/api/add_manage_menu', {
        'name': name,
        'url': url,
        'icon': icon,
        'sort': sort,
        'pid': pid
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('#add_operate').submit(function () {
    var name = $('input[name="name"]').val();
    var url = $('input[name="url"]').val();
    var manage_menu_id = $('#form_manage_menu_id option:selected').val();

    $.post('/api/add_manage_operate', {
        'name': name,
        'url': url,
        'manage_menu_id': manage_menu_id
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('#update').submit(function () {
    var name = $('input[name="name"]').val();
    var url = $('input[name="url"]').val();
    var icon = $('input[name="icon"]').val();
    var sort = $('input[name="sort"]').val();
    var pid = $('#form_pid option:selected').val();
    var _id = $('input[name="_id"]').val();

    $.post('/api/update_manage_menu', {
        'name': name,
        'url': url,
        'icon': icon,
        'sort': sort,
        'pid': pid,
        '_id': _id
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('.deleteMenu').click(function () {
    var mid = $(this).attr('mid');

    $.post('/api/del_manage_menu', {
        'mid': mid
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    })
});
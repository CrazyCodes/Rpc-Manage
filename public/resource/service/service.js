$('#add').submit(function () {
    var service_name = $('input[name="service_name"]').val();
    var description = $('input[name="description"]').val();
    var functions = $('input[name="function"]').val();
    var params = $('input[name="params"]').val();
    var response = $('input[name="response"]').val();
    var group_id = $('#form_group_id option:selected').val();

    $.post('/api/add_service', {
        'service_name': service_name,
        'description': description,
        'function': functions,
        'params': params,
        'response': response,
        'group_id': group_id,
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('#test').submit(function () {
    var params = $('textarea[name="params"]').val();
    var service_id = $('#service').find('option:selected').val();

    $.post('/api/test_service', {
        'service_id': service_id,
        'params': params,
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('#update').submit(function () {
    var _id = $('input[name="_id"]').val();
    var service_name = $('input[name="service_name"]').val();
    var description = $('input[name="description"]').val();
    var functions = $('input[name="function"]').val();
    var params = $('input[name="params"]').val();
    var response = $('input[name="response"]').val();
    var group_id = $('#form_group_id option:selected').val();

    $.post('/api/update_service', {
        'service_name': service_name,
        'description': description,
        'function': functions,
        'params': params,
        'response': response,
        'group_id': group_id,
        '_id': _id
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });
    return false;
});

$('.deleteService').click(function () {
    var sid = $(this).attr('sid');

    $.post('/api/del_service', {
        'sid': sid
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    })
});


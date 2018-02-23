$(function () {


    var ParentCheckBox = $('.parentCheckbox');
    var ChildrenCheckBox = $('.childrenCheckbox');
    var GrandSonCheckBox = $('.grandsonCheck');

    //操作全部
    // var ParentCheckFunc = function (obj) {
    //     if (obj.is(':checked') == true){
    //         ChildrenCheckBox.children('.childrenInput').attr('checked',true);
    //         GrandSonCheckBox.find('.grandsonCheckbox').attr('checked',true);
    //     }
    // };
    //


    //父级操作
    $(document).on('click', '.parentCheckbox', function () {

        var parentCheckbox = $(this).children('.parentCheckboxInput');
        var childrenCheckbox = $(this).siblings('.checkbox').children('.childrenCheckbox');


        var Grandson = childrenCheckbox.siblings('.checkbox');
        if (parentCheckbox.is(':checked') == true) {
            childrenCheckbox.children('.childrenInput').attr('checked', true);
            Grandson.find('.grandsonCheckbox').attr('checked', true);
        } else {
            childrenCheckbox.children('.childrenInput').attr('checked', false);
            Grandson.find('.grandsonCheckbox').attr('checked', false);
        }

    });
    //子级操作
    $(document).on('click', '.childrenCheckbox', function () {
        if ($(this).children('.childrenInput').is(':checked') == true) {
            $(this).parents('.checkbox').siblings('.parentCheckbox').children('.parentCheckboxInput').attr('checked', true);
        } else {
            $(this).parents('.checkbox').siblings('.parentCheckbox').children('.parentCheckboxInput').attr('checked', false);
        }
    });
    //孙子级操作
    $(document).on('click', '.grandsonCheck', function () {
        if ($(this).children('.grandsonCheckbox').is(':checked') == true) {
            $(this).parents('.checkbox').siblings('.childrenCheckbox').children('.childrenInput').attr('checked', true);
            $(this).parents('.checkbox').siblings('.parentCheckbox').children('.parentCheckboxInput').attr('checked', true);
        } else {
            $(this).parents('.checkbox').siblings('.childrenCheckbox').children('.childrenInput').attr('checked', false);
            $(this).parents('.checkbox').siblings('.parentCheckbox').children('.parentCheckboxInput').attr('checked', false);
        }
    })
});


$('#add').submit(function () {
    var name = $('input[name="name"]').val();
    var menu_data = new Array();
    var operate_data = new Array();


    var ParentCheckboxInput = $('.parentCheckboxInput');
    var ChildrenInput = $('.childrenInput');
    var GrandsonCheckbox = $('.grandsonCheckbox');

    for (var i = 0; i < ParentCheckboxInput.length; i++) {
        if (ParentCheckboxInput[i].checked) {
            menu_data.push(ParentCheckboxInput[i].value);
        }
    }

    for (var j = 0; j < ChildrenInput.length; j++) {

        if (ChildrenInput[j].checked) {
            menu_data.push(ChildrenInput[j].value);
        }
    }

    for (var k = 0; k < GrandsonCheckbox.length; k++) {

        if (GrandsonCheckbox[k].checked) {
            operate_data.push(GrandsonCheckbox[k].value);
        }
    }


    $.post('/api/add_user_group', {
        'name': name,
        'menu_permis': menu_data,
        'operate_permis': operate_data
    }, function (output) {
        var result = $.parseJSON(output);
        alert(result.message);
        location.href = location.href;
    });

    return false;


});
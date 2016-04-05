$(function () {
    $('#sel-member-name').change(function () {
        $('#phone-num').val($(this).find('option:selected').data('phno'));
        if ($(this).find('option:selected').data('issponsor') === 'yes') {
            $('#sponsor-chkbx').prop('checked', true);
        } else {
            $('#sponsor-chkbx').prop('checked', false);
        }
    }).change();
});


$(function () {
    $('.highlighteddate').on('click', function () {
        $("#daily-cnt")[0].textContent = "CorkCnt., Amt. :" + $(this)[0].title;
    });
});

$(function () {
    $('.normaldate').on('click', function () {
        $("#daily-cnt")[0].textContent = "";
    });
});

$(function () {
    $('#distribute-crk-form .fm-submit').on('click', function () {
        var existing_member_names = availableTags;
        var member_names = $('#distribute-crk-form .tags');
        for (var i = 0; i < member_names.length; i++) {
            if (existing_member_names.indexOf(member_names[i].value) < 0) {
                member_names[i].value = "";
            }
        }
    });
});
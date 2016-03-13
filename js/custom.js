$(function () {
    $('#membername').change(function () {
        $('#phone-num').val($(this).find('option:selected').data('phno'));
        if ($(this).find('option:selected').data('issponsor') === 'yes') {
            $('#sponsor-chkbx').prop('checked', true);
        } else {
            $('#sponsor-chkbx').prop('checked', false);
        }
    }).change();
});

$('#edit-member-bck-btn').on('click', function () {
    window.location.href = "adminhome.php";
});

fdslajflasdjlj
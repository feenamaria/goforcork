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
    $('.highlighteddate').on('click',function(){
        alert("(count, price) : "+$(this)[0].title);
    });
});
$(document).ready(function() {
    $('select[name="client"]').on('change', function() {
        var clientId = $(this).val();
        console.log(clientId);
        if(clientId) {
            $.ajax({
                url: '/parking/dropDown/' + clientId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="car"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="car"]').append('<option value="'+value.id+'">' +value.brand + " " +value.model+'</option>');
                    });
                }
            });
        }else{
            $('select[name="car"]').empty();
        }
    });
});

const div = document.getElementById('form-wrapper');
function addForm() {
    console.log("Work");
    let forms = div.getElementsByClassName('form');
    let firstForm = forms[0];
    let formClone = firstForm.cloneNode(true);
    div.appendChild(formClone);
}
$('button').on('click', function() {
    var $form = $('form').eq(0);
    $form.clone().insertAfter($form);
});

$(document).ready(function(){
    $('#addNewForm').click(function(){
    var newel = $('.form-wrapper:last').clone();
    $(newel).insertAfter(".form-wrapper:last");  });
    $('.txt').focus(function(){
        $(this).css('border-color','red');  });
    $('.txt').focusout(function(){
        $(this).css('border-color','initial');
    });
});

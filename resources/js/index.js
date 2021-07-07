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

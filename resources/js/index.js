// $(function(){
//
//     $('#client').change(function(){
//         var id = $(this).val();
//
//         $('#car').load('parking.php', {id: id}, function(){
//             console.log("is change");
//             $('.car-select').fadeIn('slow');
//         });
//
//     });
//
// });

//     $.ajaxSetup({
//     headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// }
// });
//     $(document).ready(function () {
//     $('#client').on('change',function(e) {
//         var clientId = e.target.value;
//         $.ajax({
//             url:"{{ route('subcat') }}",
//             type:"POST",
//             data: {
//                 cat_id: cat_id
//             },
//             success:function (data) {
//                 $('#subcategory').empty();
//                 $.each(data.subcategories[0].subcategories,function(index,subcategory){
//                     $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.name+'</option>');
//                 })
//             }
//         })
//     });
// });
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

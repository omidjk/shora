$(document).ready(function() {

    $('select[name="oprovinces"]').on('change', function(){
        var oprovincesid = $(this).val();
        if(oprovincesid) {
            $.ajax({
                url: 'ocity/'+oprovincesid,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="city"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="city"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="city"]').empty();
        }

    });

});
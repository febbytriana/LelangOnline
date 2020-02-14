$(document).ready(function(){

    var host = window.location.href;    

  $("#country").change(function() {

            $.getJSON(host + "/getStates/" + $("#country option:selected").val(), function(data) {
             //console.log(data);            
                var temp = [];
                //CONVERT INTO ARRAY
                $.each(data, function(key, value) {
                    temp.push({v:value, k: key});
                });
                //SORT THE ARRAY
                temp.sort(function(a,b){
                   if(a.v > b.v){ return 1}
                    if(a.v < b.v){ return -1}
                      return 0;
                });
                //APPEND INTO SELECT BOX
                $('#state').empty();
                $('#state').append('<option>Select State/Province</option>');
                $('#city').empty();
                $('#city').append('<option>NA</option>');
                $.each(temp, function(key, obj) {
                    $('#state').append('<option value="' + obj.k +'">' + obj.v + '</option>');
                });
            });                
            
        }); 

});//end of document ready
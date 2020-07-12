$(document).ready(
  function() {
    $("input#city").autocomplete({

      source: function(request, response){
        $.ajax({
          url:"/register/teacher/cities",
          type:'post',
          dataType: "json",
          data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            city:request.term
          },
          success: function(data){
            response($.map(data,function(item){
              return{
                value: item.title + (item.area != null ?  ', '+item.area : ''),
                id: item.id
              }
            })
              
            );
          }
        });
      },
      minLength: 3,delay: 500,
      select: function(event, ui){
        $('#city').val(ui.item.value);
        $('#cityid').val(ui.item.id);
      }
    });
  }
);

$(document).ready(
  function() {
    $("input#shortnameschool").autocomplete({  
      source: function(request, response){
        $.ajax({
          url:"/register/teacher/school",
          type:'post',
          dataType: "json",
          data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            cityid:$("#cityid").val(),
            shortnameschool:request.term
          },
          success: function(data){
            response($.map(data.response.items,function(item){
              return{
                value: item.title
              }
            })
              
            );
          }
        });
      },
      minLength: 1,delay: 500,
      select: function(event, ui){
        $.ajax({
          url:"/register/teacher/fullschool",
          type:'post',
          dataType: "json",
          data:{
            "_token": $('meta[name="csrf-token"]').attr('content'),
            cityname:$("#city").val(),
            shortnameschool:ui.item.value
          },
          success: function(data){
            $("#fullnameschool").val(data.features[0].properties.CompanyMetaData.name);
          }
        });
      }
    });
  }
);

$(document).ready(
    function(){
        $("#phone").mask("+7(999) 999-9999");
});

$(document).ready(function () {
  bsCustomFileInput.init()
});

$('#galleryselectyear').change(function(){
  var year1 = $("#galleryselectyear").val();
  var data = {"_token": $('meta[name="csrf-token"]').attr('content'),year: year1}
  $.post('/gallery', data, function(response) {
      $('.album .photos .row').remove();
      var $newPhoto = $(response).find('.album .photos .row');
      $('.album .photos').append($newPhoto);
    })
});

$(document).ready(function(){
  $('.spoiler_link').click(function(){
   $(this).parent().children('.spoiler_body').toggle('normal');
   return false;
  });
 });

 $(document).ready(function(){
   $('#citystudent').select2({
    theme: "bootstrap",
    language:{
      noResults: function(){
        return "Нет результатов"
      }
    }
   });
   $('#fullnameschoolstudent').select2({
    theme: "bootstrap",
    language:{
      noResults: function(){
        return "Нет результатов"
      }
    }
   });
   $('#teacher').select2({
    theme: "bootstrap",
    language:{
      noResults: function(){
        return "Нет результатов"
      }
    }
   });
 })

 $('#citystudent').change(function(){
  var city = $("#citystudent").val();
  var data = {
    "_token": $('meta[name="csrf-token"]').attr('content'),
    city: city
  }
  $.post('/register/student/schools', data, function(response) {
      $('#fullnameschoolstudent option').remove();
      var $newEl = $(response).find('#fullnameschoolstudent option');
      $('#fullnameschoolstudent').append($newEl);
      $('#fullnameschoolstudent option').eq(0).prop('selected',true)
    })
});
$('#fullnameschoolstudent').change(function(){
  var fullnameschool = $("#fullnameschoolstudent").val();
  var city = $("#citystudent").val();
  var data = {
    "_token": $('meta[name="csrf-token"]').attr('content'),
    city: city,
    fullnameschool: fullnameschool
  }
  $.post('/register/student/teacher', data, function(response) {
      $('#teacher option').remove();
      var $newEl = $(response).find('#teacher option');
      $('#teacher').append($newEl);
      $('#teacher option').eq(0).prop('selected',true)
    })
});








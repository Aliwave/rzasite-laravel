$(document).ready(function() {
  $('#summernote').summernote();
});
	
$(document).ready( function () {
    $('#data-table, #math-table, #ph-table, #inf-table').DataTable({
      "info":     false,
      "paging": false,
      "searching": false, 
      "aaSorting": [],
      "aoColumnDefs": [
        { 'bSortable': false, 'aTargets': [ 0,3,5,7,8 ] }
     ], 
    });
} );

$(document).ready( function () {
  $('#team-table').DataTable({
    "info":     false,
    "paging": false,
    "searching": false, 
    "aaSorting": [],
    "aoColumnDefs": [
      { 'bSortable': false, 'aTargets': [ 0,1,3,5,7,9 ] }
   ], 
  });
} );

$(document).ready(function(){
  $('.spoiler_link').click(function(){
   $(this).parent().children('.spoiler_body').toggle('normal');
   return false;
  });
 });

 let fields = document.querySelectorAll('.field__file');
Array.prototype.forEach.call(fields, function (input) {
  let label = input.nextElementSibling,
    labelVal = label.querySelector('.field__file-fake').innerText;
 
  input.addEventListener('change', function (e) {
    let countFiles = '';
    if (this.files && this.files.length >= 1)
      countFiles = this.files.length;
 
    if (countFiles)
      label.querySelector('.field__file-fake').innerText = 'Выбрано файлов: ' + countFiles;
    else
      label.querySelector('.field__file-fake').innerText = labelVal;
  });
});

$(document).ready(
  function(){
      $("#phone").mask("+7(999) 999-9999");
});
$(document).ready(
  function(){
      $("#dekanphone").mask("(8999) 999-999");
});
$(document).ready(
  function(){
      $("#orgphone").mask("8-999-999-99-99");
});

$(document).ready(
function(){
    $("#regtimeend").mask("99:99");
});

$('#confirm').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.attr('href')
  $.get(recipient, function(response) {
    $('#confirm .modal-body').empty();
    var $newEl = $(response).find('.card-body');
    $('#confirm .modal-body').append($newEl);
  })
  var sear = button.data('sear');
  var data = {
    "_token": $('meta[name="csrf-token"]').attr('content'),
    searchnum:sear
  }
  $.post('/adminpanel/live/search', data, function(response) {
    $('#tableplace div').remove();
    var $newEl = $(response).find('#tableplace #tableoly');
    $('#tableplace').append($newEl);
  })
})


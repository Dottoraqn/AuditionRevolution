$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'inline';     
    $.fn.editable.defaults.save = "always";
    
    $('.pUpdate').editable({
        validate: function(value) {
            if($.trim(value) == '') 
                return 'Value is required.';
    },
        type: 'text',
        placement: 'right',
        url:'{{URL::to("/")}}/home',
        send:'always',
                ajaxOptions: {
                dataType: 'json'
              }     
    });
});
// function 
// name{{$audition->id}}
function clickEnable(id) {
  var disabled = document.getElementById(id).value;
  console.log(disabled);
  if(disabled) {
    $('#name'+id).editable('enable');
    $('#loc'+id).editable('enable');
    document.getElementById(id).innerHTML = "Done";   
    document.getElementById(id).value = false;   
  }
  else {
    $('#name'+id).editable('disable');
    $('#loc'+id).editable('disable');
    document.getElementById(id).innerHTML = "Edit"; 
    document.getElementById(id).value = true;   
  }

  return id;
};


$('#save').click(function() {
   $('.pUpdate').editable('submit', { 
       url: '/post', 
       //ajaxOptions: { dataType: 'json' },           
       success: function(data, config) {
           $(this).removeClass('editable-unsaved') //remove unsaved class
           		  .removeAttr('oldValue');	// clear oldValue
       },
       error: function(errors) {
           console.log('error');
           var msg = '';
           if(errors && errors.responseText) { //ajax error, errors = xhr object
               msg = errors.responseText;
           } else { //validation error (client-side or server-side)
               $.each(errors, function(k, v) { msg += k+": "+v+"<br>"; });
           } 
       }
   });
});

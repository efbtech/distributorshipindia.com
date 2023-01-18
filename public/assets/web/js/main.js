function opensubcat(id,url) {
  $('#subcatview input:checkbox').removeAttr('checked');
  $.ajax({
    url: url+'/'+id, // this is the object instantiated in wp_localize_script function
    type: 'GET',
    dataType: 'json',
    success: function( data ){
      str = '';
      $.each(data, function(index, item) {
        str += '<li><input type="checkbox" name="scats[]" value="'+item.id+'"> '+item.name+'</li>'; 
      });
      $('#subcatview ul').html(str);
    }
  });
}

function openform(id){
  if(id == 'becomemode'){
    $('.appointmode').css('display','none');
  }
  if(id == 'appointmode'){
    $('.becomemode').css('display','none');
  }
  $('.'+id).css('display','block');
}
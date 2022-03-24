$(document).ready(function(){
  console.log('document has been loaded!');
  $('#search').on('input', function() {
    console.log('query accepted!');
    var keyword = $('#search').val();
    if(keyword.length < 2) {
      $('#result').html('No Result');
      console.log('Keyword length < 2');
    }
    else {
      $.ajax({
        method: 'GET',
        url: 'demoajax.php?query=' + keyword,
      }).done(function(resultText) {
        if(resultText != null && resultText.length > 0) {
          $('#result').html(resultText);
        }
        else {
          $('#result').html('No Result');
        }
      });
    }
  });
});
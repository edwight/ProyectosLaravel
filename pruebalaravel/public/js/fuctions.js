$(document).ready(function() {
  var jsonp = '[{"Lang":"jQuery","ID":"1"},{"Lang":"C#","ID":"2"}]';
  var lang = '';
  var obj = $.parseJSON(jsonp);
  $.each(obj, function() {
      lang += this['Lang'] + "<br/>";
  });
  $('span').html(lang);
});
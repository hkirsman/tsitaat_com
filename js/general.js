$(function (){
      $('a.dialog__add_quote').click(function() {
          var url = "/?ajax=1&dialog__add_quote=1";
          var dialog = $('<div id="dialog" title="Lisa tsitaat" style="display:hidden"></div>').appendTo('body');
          // load remote content
          dialog.load(
              url, 
              {},
              function (responseText, textStatus, XMLHttpRequest) {
                  dialog.dialog({
                     draggable: true,
                     minWidth: 500,
                     close: function(event, ui) {
                        $("#dialog").remove();
                     }
                  });
              }
          );
          //prevent the browser to follow the link
          return false;
      });
  });
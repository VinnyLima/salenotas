<html>
<head>
 <title>New document</title>
 <script language="javascript" type="text/javascript">
 
 function focusNextAuto(Id, event) {
  if( !event ) event = window.event;
  var iKeyCode = String(event.keyCode ? event.keyCode : event.which);
  var oSrcElement = event.srcElement ? event.srcElement : event.target;       
  var elementFocus = document.getElementById(Id);  

  if (iKeyCode != 27 && iKeyCode != 8){
            var totPalavras = oSrcElement.value.length +1;
          var totDefinido = oSrcElement.getAttribute('maxlength');               
         if (totPalavras == totDefinido){
            setTimeout(function(){ elementFocus.focus();
                                    },1);
   }
  }
 }
 
 function focusNext(Id, event) {
  if( !event ) event = window.event;
  var iKeyCode = String(event.keyCode ? event.keyCode : event.which);
  var oSrcElement = event.srcElement ? event.srcElement : event.target;       
  var elementFocus = document.getElementById(Id);      
  
  
  if (iKeyCode == 9 || iKeyCode == 13){
      elementFocus.focus();
   //w3c stop default behavior
   if( event.cancelable ) event.preventDefault();
   //ie stop default behavior
   event.returnValue = false;
   //DOM level 0 stop default behavior
   return false;
  }  
  }  
 </script> 
</head>

<body onload="document.getElementById('Text1').focus(); " >

<input type="text" ID="Text1" maxlength="3" onkeypress="focusNextAuto('Text2', event)"; onkeydown="return focusNext('Text2', event)"; >
<input type="text" ID="Text2" maxlength="5" onkeypress="focusNextAuto('Text1', event)"; onkeydown="return focusNext('Text1', event)";>

</body>
</html>
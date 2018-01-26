 function calcularMB1(){
            var teste1 = parseInt(document.getElementById('TB1').value,10);
            var prova1 = parseInt(document.getElementById('PB1').value, 10);
            var ICA1 = parseInt(document.getElementById('ICA12').value, 10);
            
            var MB1 = ((prova1 + teste1)*0.666)+(ICA1*0.333);      
     
            document.getElementById('MB1').value = (MB1.toFixed(2));
        }
        
function calcularMB2(){
            var teste2 = parseInt(document.getElementById('TB2').value,10);
            var prova2 = parseInt(document.getElementById('PB2').value, 10);
            var ICA2 = parseInt(document.getElementById('ICA34').value, 10);
            
            var MB2 = ((prova2 + teste2)*0.666)+(ICA2*0.333);
            
          
            
            document.getElementById('MB2').value = (MB2.toFixed(2));
        }
        
        function calcularMF(){
            var MB1 = parseInt(document.getElementById('MB1').value, 10);
            var MB2 = parseInt(document.getElementById('MB2').value, 10);
            var MF = (MB1+MB2)/2;
            
            document.getElementById('MF').value = (MF.toFixed(2)); 
        }





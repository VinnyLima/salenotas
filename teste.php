<!DOCTYPE html>
<html>
<head>
<title>Usando eventos no Javascript</title>
<script>
function calcular(){
    var valor1 = parseInt(document.getElementById('txt1').value, 10);
    var valor2 = parseInt(document.getElementById('txt2').value, 10);
    document.getElementById('result').value = valor1 + valor2;
}
</script>
</head>
<body>


<input id="txt1" type="text" value="1" onfocus="calcular()"/>
<input id="txt2" type="text" value="1" onblur="calcular()"/>

<input id="result" type="text"/>

</body>
</html>
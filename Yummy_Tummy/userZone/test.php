<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function show(){
		var a=document.getElementById('veg');
		var b=document.getElementById('nonveg');
		if(a.checked==true)
		{
			alert(a.value);
		}
		else if(b.checked==true)
		{
			alert(b.value);
		}
	}
</script>
	<title></title>
</head>
<body>
<input id="veg" type="radio" name="meal" value="veg">veg<br/>
<input id="nonveg" type="radio" name="meal" value="nonveg">Nonveg<br/>
<input type="button" name="" value="show" onclick="show()">
</body>
</html>
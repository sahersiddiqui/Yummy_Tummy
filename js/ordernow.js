function calculate(){
	var a=document.getElementById('veg');
	var b=document.getElementById('nonveg');
	var c=document.getElementById('stnd');
	var d=document.getElementById('mini');
	
	var e=document.getElementById('daily');
	var f=document.getElementById('weekly');
	var g=document.getElementById('monthly');
	var h=document.getElementById('price');
	if(a.checked==true)
	{
		if(c.checked==true)
		{
			if(e.checked==true)
			{
				h.value="80";
			}
			else if(f.checked==true)
			{
				h.value="550";
			}
			else if(g.checked==true)
			{
				h.value="2350";
			}
			
		}
		else if(d.checked==true)
		{
			if(e.checked==true)
			{
				h.value="70";
			}
			else if(f.checked==true)
			{
				h.value="480";
			}
			else if(g.checked==true)
			{
				h.value="2000";
			}
			
		}
	}
else if(b.checked==true)
	{
		if(c.checked==true)
		{
			if(e.checked==true)
			{
				h.value="90";
			}
			else if(f.checked==true)
			{
				h.value="610";
			}
			else if(g.checked==true)
			{
				h.value="2650";
			}
		}	
		else if(d.checked==true)
		{
			
			if(e.checked==true)
			{
				h.value="80";
			}
			else if(f.checked==true)
			{
				h.value="550";
			}
			else if(g.checked==true)
			{
				h.value="2350";
			}
			
		}
	}

}
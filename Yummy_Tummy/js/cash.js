function amount(){
var a=document.getElementById('plan').value;
var b=document.getElementById('type').value;
var c=document.getElementById('package').value;
	if(a==='Veg')
	{
		if(b==='Mini')
		{
			if(c==='daily')
			{
				document.getElementById('cash').value="Rs. 70/-";
			}
			else if(c==='weekly')
			{
				document.getElementById('cash').value="Rs. 450/-";	
			}
			else if(c==='monthly')
			{
				document.getElementById('cash').value="Rs. 1990/-";
			}
		}
		else if(b==='Standard')
		{
			if(c==='daily')
			{
				document.getElementById('cash').value="Rs. 80/-";
			}
			else if(c==='weekly')
			{
				document.getElementById('cash').value="Rs. 520/-";	
			}
			else if(c==='monthly')
			{
				document.getElementById('cash').value="Rs. 2300/-";
			}
		}
	}
	else if(a==='Nonveg')
	{
		if(b==='Mini')
		{
			if(c==='daily')
			{
				document.getElementById('cash').value="Rs. 70/-";
			}
			else if(c==='weekly')
			{
				document.getElementById('cash').value="Rs. 520/-";	
			}
			else if(c==='monthly')
			{
				document.getElementById('cash').value="Rs. 2300/-";
			}
		}
		else if(b==='Standard')
		{
			if(c==='daily')
			{
				document.getElementById('cash').value="Rs. 90/-";
			}
			else if(c==='weekly')
			{
				document.getElementById('cash').value="Rs. 600/-";	
			}
			else if(c==='monthly')
			{
				document.getElementById('cash').value="Rs. 2650/-";
			}
		}
	}

}
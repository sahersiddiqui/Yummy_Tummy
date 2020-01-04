function validate()
{
	var a=document.getElementById('check');
	var b=document.getElementById('submit');
	if(a.checked===true){
		
	b.disabled=false;
	/*else if(a.checked===false)
		b.disabled=true;*/
	}
}
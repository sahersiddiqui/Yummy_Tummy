function date(){
var today = new Date().toISOString().split('T')[0];
 document.getElementsByName("dateField")[0].setAttribute('min', today);

}
function confirm(){
	
	var a=document.getElementsByName('type');
	var b=document.getElementsByName('Rpackage').value;
	alert(a.value);
	var len=a.length;
	for(i=0;i<len;i++)
	{
		if(a[i].checked)
			b.value=a[i].value;}
	/*var b=document.getElementsByName('type');
	var c=document.getElementsByName('plan').value;
	var d=document.getElementsByName('package').value;
	var e=document.getElementsByName('dataField').value;
	
	var f=document.getElementsByName('Rtime');
	var g=document.getElementsByName('Rplan');
	var h=document.getElementsByName('Rtype').value;*/
	
	
	}
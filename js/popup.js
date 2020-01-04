function show(obj)
{
   
    if(obj==="Lgn")
    {
        var a=document.getElementById('main');
        var b=document.getElementById('LoginMain');
        a.style.visibility='visible';
        a.style.opacity='1';
        a.style.transform='scale(1.1)';
        a.style.transition='1s';
        b.style.visibility='visible';
        b.style.backgroundColor='gray';
        b.style.opacity='0.7';
    }
    else if(obj==='Feedback')
    {
        var a=document.getElementById('feedback');
        var b=document.getElementById('FeedbackMain');
        a.style.visibility='visible';
        a.style.opacity='1';
        a.style.transform='scale(1.1)';
        a.style.transition='1s';
        b.style.visibility='visible';
        b.style.backgroundColor='gray';
        b.style.opacity='0.7';
    }
    
}
function hide(obj)
{
   if(obj==='closeFB')
   {
    var a=document.getElementById('feedback');
    var b=document.getElementById('FeedbackMain');
 
       a.style.visibility='hidden';
      a.style.opacity='0';
       a.style.transform='scale(1)';
       a.style.transition='1s';
       b.style.visibility='hidden';
       b.style.opacity='0';
        b.style.transition='1s';
   }
    else if(obj==='closeLog')
    {
        var a=document.getElementById('main');
        var b=document.getElementById('LoginMain');
         a.style.visibility='hidden';
      a.style.opacity='0';
       a.style.transform='scale(1)';
       a.style.transition='1s';
        b.style.visibility='hidden';
        b.style.opacity='0';
        b.style.transition='1s';
    }
      
}
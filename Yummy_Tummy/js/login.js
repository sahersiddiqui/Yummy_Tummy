function show_hide(obj)
{
    if(obj==='btnLogin')
    {
        document.getElementById('btnLogin').style.backgroundColor='white';
         document.getElementById('btnSignup').style.backgroundColor='silver';
        
        // document.getElementById('login').style.transition='1s';
        document.getElementById('login').style.visibility='visible';
      
        document.getElementById('signup').style.visibility='hidden';
    }
    else if(obj==='btnSignup')
    {
        document.getElementById('btnLogin').style.backgroundColor='silver';
         document.getElementById('btnSignup').style.backgroundColor='white';

       //  document.getElementById('signup').style.transition='1s';
        document.getElementById('login').style.visibility='hidden';
        document.getElementById('signup').style.visibility='visible';
    }
   
    
}

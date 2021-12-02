document.getElementById("btn_Register").addEventListener("click",register);
document.getElementById("btn_Login").addEventListener("click",inicio);
window.addEventListener("resize",AnchoPg )

//variables
var con_LoginRegister= document.querySelector (".conLoginRegister")
var form_Login= document.querySelector (".formLogin")
var form_Register= document.querySelector (".formRegister")
var caj_Login= document.querySelector (".cajLogin")
var caj_Register= document.querySelector (".cajRegister")

 function AnchoPg(){
     if(window.innerWidth > 850 ){
        caj_Login.style.display="block";
        caj_Register.style.display="block";
     }
     else{
        caj_Register.style.display="block";
        caj_Register.style.opacity="1";
        caj_Login.style.display="none";
        form_Login.style.display="block";
        form_Register.style.display="none";
        con_LoginRegister.style.left="0px";
     }
 }

 AnchoPg();
 
 function inicio(){
    if(window.innerWidth > 850 ){
            form_Register.style.display="none";
            con_LoginRegister.style.left="10px";
            form_Login.style.display="block";
            caj_Register.style.opacity="1";
            caj_Login.style.opacity="0";
    }
    else{
        form_Register.style.display="none";
        con_LoginRegister.style.left="0px";
        form_Login.style.display="block";
        caj_Register.style.display="block";
        caj_Login.style.display="none";
    }
}
function register(){
     if(window.innerWidth > 850 ){
            form_Register.style.display="block";
            con_LoginRegister.style.left="410px";
            form_Login.style.display="none";
            caj_Register.style.opacity="0";
            caj_Login.style.opacity="1";
     }
     else{
        form_Register.style.display="block";
        con_LoginRegister.style.left="0px";
        form_Login.style.display="none";
        caj_Register.style.display="none";
        caj_Login.style.display="block";  
        caj_Login.style.opacity="1";
     }
    
 }
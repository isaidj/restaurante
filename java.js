/* Variable Publicas*/
let estado=false;
/* Funciones de menus*/
function openNavleft() {
 
    document.getElementById("mySidenav").style.width = "35vh";
  }
  
  
  function closeNavleft() {
    document.getElementById("mySidenav").style.width = "0";
  }
  
function openNavRight() {
  document.getElementById("mySidenavRight").style.height = "20vh";
}


function closeNavRight() {
  document.getElementById("mySidenavRight").style.height = "0";
}
/* Funcion para validad ventana abierta-cerrada menu derecho*/
function validarVentana(){
  if(estado){
    let navderecha =  document.getElementById("mySidenavRight").style.height= "0vh";
    estado=false;
  }else{
    let navderecha =  document.getElementById("mySidenavRight").style.height= "20vh";
    estado=true;
  }
  
  

  
 
  
}





/*
let navderecha =  document.getElementById("mySidenavRight");
navderecha.addEventListener ('click' ,()=>{

navderecha.style = 'height :20vh';



  
})*/







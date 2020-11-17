/* Variable Publicas*/
let estado=false;
function openNavleft() {
  /* Set the width of the side navigation to 250px */
    document.getElementById("mySidenav").style.width = "35vh";
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNavleft() {
    document.getElementById("mySidenav").style.width = "0";
  }
  /* Set the width of the side navigation to 250px */
function openNavRight() {
  document.getElementById("mySidenavRight").style.height = "20vh";
}

/* Set the width of the side navigation to 0 */
function closeNavRight() {
  document.getElementById("mySidenavRight").style.height = "0";
}

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







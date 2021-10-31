// hp request object


"use strict";

document.addEventListener('DOMContentLoaded', () =>{
  let button = document.querySelector('.btn');


  button.addEventListener('click', () => search());
 
  function search(){

  let xhr = new XMLHttpRequest();
  document.getElementById("result").innerHTML = "";
  xhr.open('GET',"superheroes.php",true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function(){
    if(xhr.readyState === XMLHttpRequest.DONE){  
      alert(xhr.response);
        
     
      
    }
  }
  xhr.send();

 
  }


 
 
});



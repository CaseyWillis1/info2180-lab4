//ID#: 620132112
//Name: Casey Willis


"use strict";

document.addEventListener('DOMContentLoaded', () =>{
  let button = document.querySelector('.btn');


  button.addEventListener('click', () => search());
 
  function search(){

  let xhr = new XMLHttpRequest();
  
  let search = sanitizeString(document.getElementById('search').value);
    
    xhr.open('GET',`superheroes.php?query=${search}`);
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4){
        if(xhr.status == 200){ 
          document.getElementById("result").innerHTML = xhr.responseText; 
        }
      }
    }
    xhr.send();

  }

  function sanitizeString(str) {
    str = str.replace(/[^a-z0-9áéíóúñü \.,_-]/gim, " ");
    return str.trim();
}
 
});



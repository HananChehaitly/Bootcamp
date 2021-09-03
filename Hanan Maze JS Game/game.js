window.onload = function example(){
    var arr = document.getElementsByClassName("boundary");
    var s = document.getElementById("start");
    var status  = document.getElementById("status");   
    var end=  document.getElementById("end");
    var score= document.getElementsByClassName("example");
    score[0].innerHTML="0";


/*Here are our events*/
    s.addEventListener("click", reset );
    end.addEventListener("mouseover", win);


function reset(){   
    score[0].innerHTML="0";
    /* I reset all wall colors to the original color whenever I click on S*/
   for(i=0; i<arr.length; i++){
        
        arr[i].setAttribute("style","background-color:#eeeeee;")       
    }
}

function win(){
    
    status.innerHTML="You won! :)";
  
     /*We add 5 points to the score*/

    currentScore = parseInt(score[0].innerText);
    if (currentScore ==0){
        score[0].innerHTML= "5" ;
    }
    else{
    var newscore = currentScore+5;
    var dumby =newscore.toString();
    score[0].innerHTML= dumby ;
    }
}

/*Here are the events on every wall */

for(i=0; i<arr.length; i++){  /* Here I am calling the loose function whenever the mouse is over any wall  */
   
    arr[i].onmouseover=function() {loose()};
    }


function loose(){   
    /*reducts 10 points from the score*/
    currentScore = parseInt(score[0].innerText);
    if (currentScore ==0){
        score[0].innerHTML= "-10" ;
    }
    else{
    var newscore = currentScore-10;
    var dumby =newscore.toString();
    score[0].innerHTML= dumby ;
    }
    /*Change status to you lost*/
    status.innerHTML="You lost :("; 
    
    for(i=0; i<arr.length; i++){
            arr[i].setAttribute("style","background-color:red;")
         }
    }
 

}
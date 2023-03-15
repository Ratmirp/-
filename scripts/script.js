
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos < 130) {
    console.log(prevScrollpos, prevScrollpos)
    document.getElementById("navbar").style.top = "50px";
  } else {
    document.getElementById("navbar").style.top = "0px";
  }
  prevScrollpos = currentScrollPos;
}


let ads = document.querySelectorAll(".ad");
let profile_btn = document.querySelector(".profile_btn");
let more_btn = document.querySelector(".more_btn");
let cos = 6;
let enter_plate = document.querySelector(".enter_plate");
let query = 0;
let enter_btn = document.querySelector(".enter_btn");
let redistr_btn  = document.querySelector(".redistr_btn");
let orders_btn = document.querySelector(".orders_btn");

orders_btn.onclick = function(){
    window.location.href = 'http://furmarket/orders.php';  
}


/*for(let i=6; i< ads.length; i++){
    if(ads.length >= 5){
        ads[i].style.display = "none";
    }
    
}

more_btn.onclick = function(){  
        for(let k=5; k<ads.length; k++){
            ads[k].style.display = "block"; 
            console.log(k)
    }
    
}*/

profile_btn.onclick = function(){
    window.location.href = 'http://furmarket/account.php';
}





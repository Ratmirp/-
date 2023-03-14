
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
let ads_count;
let enter_plate = document.querySelector(".enter_plate");
let query = 0;
let enter_btn = document.querySelector(".enter_btn");

enter_btn.onclick = function(){
    window.location.href = 'http://furmarket/login.php';
}


function adsCount(){
    ads_count = ads.length - cos;
    cos = cos-4;
}

for(let i=6; i< ads.length; i++){
    if(ads.length >= 5){
        ads[i].style.display = "none";
    }
    
}

more_btn.onclick = function(){
    adsCount()
    if(ads_count >= ads.length){
        alert("похожe это все объявления");
        more_btn.style.display = "none";
    }else {
        for(let k=0; k<ads_count ; k++){
            ads[k].style.display = "block"; 
            console.log(k)
    }
    }
    
}

profile_btn.onclick = function(){
    if(query==1){
        document.body.style.overflowY = "auto";
        enter_plate.style.display = "none";
        if(prevScrollpos >= 1920){
            enter_plate.style.top = "1900px";
        }else {
            enter_plate.style.top = prevScrollpos + "75px";
        }
        query = 0;
    }else if (query == 0){
        document.body.style.overflowY = "hidden";
        enter_plate.style.display = "block";
        
        if(prevScrollpos >= 1920){
            enter_plate.style.top = "2050px";
        }else {
            enter_plate.style.top = prevScrollpos + "75px";
        }
        query = 1;
    }
}





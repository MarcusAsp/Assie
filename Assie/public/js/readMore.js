let introTextElem = document.getElementById("introText");
let introTextButtonElem = document.getElementById("readMoreText");
let onOff = false;
introTextButtonElem.addEventListener("click", function(){
   if(onOff == false){
      introTextElem.classList.add("longerIntroText");
      introTextButtonElem.innerHTML = "Read less";
      onOff = true;
      return;
   }else if(onOff == true);{
      introTextElem.classList.remove("longerIntroText");
      introTextButtonElem.innerHTML = "Read more";
      onOff = false;
   }
   
});

let newsTextElem = document.getElementById("newsText");
let newsTextButtonElem = document.getElementById("readMoreNews");
let onOff1 = false;
newsTextButtonElem.addEventListener("click", function(){
   if(onOff1 == false){
      newsTextElem.classList.add("longerNewsText");
      newsTextButtonElem.innerHTML = "Read less";
      onOff1 = true;
      return;
   }else if(onOff1 == true);{
      newsTextElem.classList.remove("longerNewsText");
      newsTextButtonElem.innerHTML = "Read more";
      onOff1 = false;
   }
   
});

let inputBox = document.getElementById("hamburgerBox");
let mainContent = document.querySelector("main");
let footerContent = document.querySelector("footer");
let closeOpen = false;
inputBox.addEventListener("change", function(){
    if(closeOpen == false){
        mainContent.setAttribute("style", "display:none");
        footerContent.setAttribute("style", "display:none");
        closeOpen = true;
        console.log(closeOpen);
    }else if(closeOpen == true){
        mainContent.setAttribute("style", "display:block");
        footerContent.setAttribute("style", "display:block");
        closeOpen = false;
        console.log(closeOpen);
    }
});
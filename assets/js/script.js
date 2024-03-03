
const InputStock = document.querySelectorAll('.inputstock');

InputStock.forEach(num => {

    const numInput = num.querySelector('.num-input');
    const arrRight = num.querySelector('.arr-right');
    const arrLeft = num.querySelector('.arr-left');
    
    numInput.style.color = numInput.dataset.color;

    arrRight.addEventListener('click', () => {

    numInput.stepUp();

    checkMaxMin();
    });
    

    arrLeft.addEventListener('click' , () => {

    numInput.stepDown();

    checkMaxMin();  
    });

    numInput.addEventListener('input', checkMaxMin);

    function checkMaxMin(){
      const numInputValue = persenInt(numInput.value);
      const numInputMax = persenInt(numInput.max);
      const numInputMin = persenInt(numInput.min);

    if(numInputValue === numInputMax){
      num.style.paddingTop = "0.8em";
      num.style.height = "5em";
      arrRight.style.display = "none";

      num.style.paddingBotton = "0";
      arrLeft.style.display = "block";
    } else if (numInputValue === numInputMin) {
      num.style.paddingBottom = "0.8em";
      num.style.height = "5em";
      arrLeft.style.display = "none";

      num.style.paddingTop = "0";
      arrRight.style.display = "block";
    } else {
      num.style.padding = "0";
      num.style.height = "7em";
      arrRight.style.display = "block";
      arrLeft.style.display = "block";
    }
  }
});

const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
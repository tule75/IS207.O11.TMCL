const showbtn = document.querySelector('.show');
const passage = document.querySelector('.texting');


showbtn.addEventListener("click" , () => {
    if(showbtn.classList.contains('less')) {
        passage.style.height = "50px";
        showbtn.innerHTML = "Show more";
       showbtn.classList.remove("less");
    } else if(showbtn.classList.contains("more")) {
       showbtn.classList.add("less");
    }
})
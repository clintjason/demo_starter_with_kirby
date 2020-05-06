function makeResponsive() {
    let x = document.getElementById("menuItems");
    let y = document.querySelector("header");
    let hamburger = document.querySelector('.icon');
    if (hamburger.style.display === "none" && window.innerWidth >= 900) {
        x.style.display = "block";
        y.style.height = "auto";
        x.style.top = "unset";
        x.style.right = "unset";
    } else if(x.style.display === "block" && window.innerWidth < 900) {
        x.style.display = "none";
        y.style.height="auto";
        x.style.top = "unset";
        x.style.right = "unset";
    } else {
        x.style.top = "50px";
        x.style.right = "22vw";
        y.style.height = "180px";
        x.style.display = "block";
    }
}

function scrollToTop() {
    let up = document.getElementById("up-btn");
    if(window.scrollY >=10) {
        up.style.display = "block"
    } else {
        up.style.display = "none"
    }
}

function resetForm() {
    let text = document.getElementById("text");
    let name = document.getElementById("name");
    let email = document.getElementById("email");

    //reset values
    text.value = "";
    name.value = "";
    email.value ="";

}

window.addEventListener('scroll',scrollToTop);

    
/*
    window.addEventListener('resize',()=> {
        let x = document.getElementById("menuItems");
        let y = document.querySelector("header");
        let hamburger = document.querySelector('.icon');
        
        if (hamburger.style.display === "none" && window.innerWidth >= 900) {
            x.style.display = "block";
            y.style.height = "auto";
            x.style.top = "unset";
            x.style.right = "unset";
        } else if(hamburger.style.display === "block" && window.innerWidth < 900) {
            x.style.display = "none";
            y.style.height="auto";
            x.style.top = "unset";
            x.style.right = "unset";
        } else if( window.innerWidth >= 900) {
            x.style.display = "block ruby";
            y.style.height="auto";
            x.style.top = "unset";
            x.style.right = "unset";
        } else {
            x.style.top = "70px";
            x.style.right = "22vw";
            y.style.height = "180px";
            x.style.display = "block";
        }

    });
    */
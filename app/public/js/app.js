// const hamburger = document.querySelector('#header .hamburger');

// const mobile_menu = document.querySelector('#header .header');
// // const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
// const header = document.querySelector('header.container');

// hamburger.addEventListener('click',()=>{
//     hamburger.classList.toggle('active');
//     mobile_menu.classList.toggle('active');
// });

let timerC = document.querySelector(".conutdown");
let countDown = new Date("Jan 27, 2022 24:30:59").getTime();

let counter = setInterval(() => {
    let dateNow = new Date().getTime();

    let dateDiff = countDown - dateNow;
    let days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));
    let hours = Math.floor((dateDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((dateDiff % (1000 * 60 * 60)) / (1000 * 60));
    let second = Math.floor((dateDiff % (1000 * 60)) / 1000);
    
    if(dateDiff < 0){
        clearInterval(counter);
        timerC.style.display="none";
    }
    
    
}, 1000);


const loginModel = document.querySelector(".model-log");
const login = document.querySelector(".login");
const loginCloseBtn = login.querySelector(".popup-close-btn");
const loginCloseIcon = login.querySelector(".popup-close-icon");

loginModel.addEventListener("click", function(event){
    if(event.target.tagName.toLowerCase() == "a"){
        event.target.parentElement;
        loginBox();
    }
});

loginCloseBtn.addEventListener("click", loginBox);
loginCloseIcon.addEventListener("click", loginBox);

login.addEventListener("click", function(event){
    if(event.target == login){
        loginBox();
    }
})

function loginBox(){
    login.classList.toggle("open");
}


const signupModel = document.querySelector(".model-signup");
const signup = document.querySelector(".signup");
const signupCloseBtn = signup.querySelector(".popup-close-btn");
const signupCloseIcon = signup.querySelector(".popup-close-icon");
signupModel.addEventListener("click", function(e){
    if(e.target.tagName.toLowerCase() == "a"){
        e.target.parentElement;
        signupBox();
        showBox();
    }
});
signupCloseBtn.addEventListener("click", signupBox);
signupCloseIcon.addEventListener("click", signupBox);

signup.addEventListener("click", function(e){
    if(e.target == signup){
        signupBox();
    }
});

function signupBox(){
    signup.classList.toggle("open");
};

function showBox(){
    login.classList.remove("open");
}

let cart = localStorage.getItem('name');
let i = cart;

const cardNum = document.querySelectorAll(".icons .fa-cart-arrow-down");
const num = document.querySelector(".num");
cardNum.forEach((btn) =>{
    
    btn.addEventListener("click", () =>{
        
        i++;
        localStorage.setItem('name', i);
        num.innerHTML = i;
        
    });
    num.innerHTML = cart;
});

/*const search = document.getElementById("search");
search.addEventListener("click", () => {
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let items = document.querySelectorAll(".filter");
    elements.forEach((element, index) =>{
        if(element.innerText.includes(searchInput.toUpperCase())){
            items[index].classList.remove("hide");
        }else{
            items[index].classList.add("hide");
        }
    })
})*/
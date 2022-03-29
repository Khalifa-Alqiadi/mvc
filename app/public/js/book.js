const imgModel = document.querySelector(".click-img");
const img = document.querySelector(".model-img");
const imgCloseIcon = img.querySelector(".popup-close-icon");
imgModel.addEventListener("click", function (ev) {
    if (ev.target.tagName.toLowerCase() == "img") {
        ev.target.parentElement;
        imgBox();
    }
});
imgCloseIcon.addEventListener("click", imgBox);

img.addEventListener("click", function (evn) {
    if (evn.target == img) {
        imgBox();
    }
});

function imgBox() {
    img.classList.toggle("open");
};

const shareLeft = document.querySelectorAll(".share-left");
const shareRight = document.querySelectorAll(".share-right");
const imgSteps = document.querySelectorAll(".img-step");
let imgStep = 0;

shareRight.forEach((btn) => {
    btn.addEventListener("click", () => {
        imgStep++;
        updateImg();
    })
});
shareLeft.forEach((btn) => {
    btn.addEventListener("click", () => {
        imgStep--;
        updateImg();
    })
});

function updateImg() {
    imgSteps.forEach((steps) => {
        steps.classList.contains("img-active") &&
            steps.classList.remove("img-active");
    });
    imgSteps[imgStep].classList.add("img-active");
}
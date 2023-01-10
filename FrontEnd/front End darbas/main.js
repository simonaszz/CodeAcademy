const btnAlert = document.getElementById('btn-alert')
btnAlert.addEventListener('click', () => {
    alert("Hello World!")
});

let registerButtons = [
    "button-to-upper-case",
    "button-to-lower-case",
    "button-first-upper-case",
    "button-first-lower-case"
];

let registerInputElement = document.getElementById("input-fill-me-in");

for (let i = 0; i < registerButtons.length; i++) {
    const buttonName = registerButtons[i];
    let button = document.getElementById(buttonName);
    button.addEventListener("click", () => { changeCase(registerInputElement, button.value) })
}
function changeCase(inputElement, action) {
    let inputValue = inputElement.value;
    let result = "";
    switch (action) {
        case "all-upper":
            result = inputValue.toUpperCase();
            break;
        case "all-lower":
            result = inputValue.toLowerCase();
            break;
        case "first-upper":
            result = inputValue[0].toUpperCase() + inputValue.slice(1);
            break;
        case "first-lower":
            result = inputValue[0].toLowerCase() + inputValue.slice(1);
            break;
        default:
            console.log("error");
            break;
    }
    inputElement.value = result;
}

let emailInput = document.getElementById("inputEmail");
let emailWarning = document.getElementById("inputEmailError");
let phoneInput = document.getElementById("inputPhone");
let phoneWarning = document.getElementById("inputPhoneError");
let saveButton = document.getElementById("save-button");
saveButton.addEventListener("click", () => {
    removeAllMistakes();
    if (!checkMistake(emailInput)) {
        markMistake(emailInput, emailWarning);
    }
    if (!checkMistake(phoneInput)) {
        markMistake(phoneInput, phoneWarning);
    }
});
function checkMistake(elementToCheck) {
    return !(elementToCheck?.value.length < 2);
}
function markMistake(elementToMark, warningToMark) {
    elementToMark.classList.add("border-danger");
    warningToMark.removeAttribute("hidden");
}
function removeAllMistakes() {
    let myMistakes = document.querySelectorAll(".my-form .border-danger");
    myMistakes.forEach(element => {
        element.classList.remove("border-danger");
    });
    let myWarnings = document.querySelectorAll(".my-form .text-danger");
    myWarnings.forEach(element => {
        element.hidden = true;
    });
}

let inputToBlock = document.getElementById("input-to-block");
let blockInputButton = document.getElementById("button-block");
let unblockInputButton = document.getElementById("button-unblock");
blockInputButton.addEventListener("click", () => {
    inputToBlock.disabled = true;
});
unblockInputButton.addEventListener("click", () => {
    inputToBlock.disabled = false;
})

function changeStyle() {
    const figure = document.getElementById('figure');

    let cursors = document.getElementById('cursor-list');
    let cursorsChildren = [...cursors.children];
    cursorsChildren.forEach(child => {
        child.firstChild.addEventListener('click', () => {
            figure.style.cursor = child.firstChild.value;
        });
    });

    let colors = document.getElementById('color-list');
    let colorsChildren = [...colors.children];
    colorsChildren.forEach(child => {
        child.firstChild.addEventListener('click', () => {
            figure.style.color = child.firstChild.value;
        });
    });

    let borders = document.getElementById('border-list');
    let bordersChildren = [...borders.children];
    bordersChildren.forEach(child => {
        child.firstChild.addEventListener('click', () => {
            figure.style.border = `1px solid ${child.firstChild.value}`;
        });
    });

    document.getElementById('btn-reset').addEventListener('click', () => {
        figure.style.removeProperty('border');
        figure.style.removeProperty('color');
        figure.style.removeProperty('cursor');
    });
}
changeStyle();


// let email = document.querySelector('#validationEmail');
// let phone = document.querySelector('#validationPhone');
// document.getElementById('btn-validation').addEventListener('click', () => {
//     document.querySelectorAll('.validation').forEach(element => { element.classList.remove("is-invalid") });
//     if (!emailValidated(email)) {
//         email.classList.add("is-invalid");
//     }
//     if (!phoneValidated(phone)) {
//         phone.classList.add("is-invalid");
//     }
// });
// function emailValidated(email) {
//     const emailFormat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return email?.value.toLowerCase().match(emailFormat);
// }
// function phoneValidated(phone) {
//     const phoneFormat = /^[0-9]{9}$/;
// return phone.value.match(phoneFormat);
// }
// let submit = document.getElementById("btn");

// let textInput = document.getElementById("text");
// let readInput = document.getElementById("outputText");

// submit.addEventListener("click", () => {
//     readInput.value = textInput.value;
//     textInput.value = "";
// });




let headerElement = document.querySelector("#h1");
headerElement.textContent = `Width: ${window.innerWidth}; Height: ${window.innerHeight}.`;

window.addEventListener("resize", () => { reportWindowSize() });

function reportWindowSize() {
    headerElement.textContent = `Width: ${window.innerWidth}, Height: ${window.innerHeight}.`;
}
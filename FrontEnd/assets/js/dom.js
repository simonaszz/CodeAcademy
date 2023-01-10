// Sukurkite HTML dokumentą su lentele (table) ir forma (form). Dokumentu turi būti žemiau aptartos žymos (angl. tags) ir jų atributai.

// Suraskite ir konsolėje atvaizduokite:
// Lentelę su id = "age-table".
let ageTable = document.querySelector('#age-table');
console.log(ageTable);

// Pirmasis <td> toje lentelėje (su id “age”).
let age = document.querySelector('#age');
console.log(age);

// Visus <label> elementus lentelės viduje (jų turėtų būti 3).
let labels = document.querySelectorAll('#age-table label');
console.log(labels);

// Pirmają įvestį (<input>) į formą.
let firstInput = document.querySelector('form input:first-child');
console.log(firstInput);

// Paskutinę įvestį (<input>) į formą.
let lastInput = document.querySelector('form input:last-child');

console.log(lastInput);
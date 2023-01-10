
// Sukurkite objektą green: žalia, red: raudona, blue: mėlyna. Parodykite šio objekto raktus ir elementus naudojant for ciklą
let colors = {
    green: "žalia",
    red: "raudona",
    blue: "mėlyna",
};

function showColors(colors) {

    for (let color in colors) {
        console.log(`${color}: ${colors[color]}`);
    }

    return colors;
}

showColors(colors);







// Sukurkite objektą su raktais Mantas, Paulius, Mindaugas ir reikšmėm 200, 300, 300. Parodykite eilutes tokiu formatu: Mantas - 200 EU atlyginimas.

let peoples = {
    Mantas: "200",
    Paulius: "300",
    Mindaugas: "300",
};


function peopleOutpuntInfo(peoples) {

    let outputText = 'EU atlyginimas.';

    for (let people in peoples) {
        console.log(`${people} - ${peoples[people]} ${outputText}`);
    }
    return peoples;
}

peopleOutpuntInfo(peoples);



// Sukurkite objektą su savaitės dienomis. Raktai jame turėtų būti dienų skaičiai nuo savaitės pradžios (1 -> pirmadienis ir t.t.). Parodykite dabartinę savaitės dieną.

let weekDays = {
    0: 'Sekmadienis',
    1: 'Pirmadienis',
    2: 'Antradienis',
    3: 'Trečiadienis',
    4: 'Ketvirtadienis',
    5: 'Penktadienis',
    6: 'Šeštadienis',

};

console.log(weekDays[(new Date).getDay()]);







// let num = 0;
// let output = '';


// if (num <= 0) {
//     output = 'ne grupė';
// }
// else if (num == 1) {
//     output = 'solo';

// }
// else if (num == 2) {
//     output = 'duetas';
// }
// else if (num == 3) {
//     output = 'trio';
// }
// else if (num == 4) {
//     output = 'kvartetas';
// }
// else if (num >= 4) {
//     output = 'didele grupe';
// }
// else { output = 'Klaida'; }
// console.log(`${output}`);







// function checkAge(age) {
//     if (age > 18) {
//       return true;
//     } else {
//       return confirm('Did parents allow you?');
//     }
//   }
// Perrašykite funkcijos kodą, kad jis būtų be if ir vienoje eilutėje: Naudokite: ternary operator ?

// function checkAge(age) {
//     return age > 18 ? true : confirm('Did parents allow you?');
// }
// console.log(checkAge(18));









// // Parašykite „JavaScript“ funkciją, kuri grąžina perduotą eilutę su raidėmis abėcėlės tvarka.

// console.assert(alphabetOrder('alphabetical') == 'aaabcehillpt');



// let message = 'aaabbccassssis';
// function alphabetOrder(alphabetical) {

// }






// // Parašykite „JavaScript“ funkciją, kuri grąžina perduotą eilutę su raidėmis abėcėlės tvarka.

// function alphabetOrder(str) {
//     return [...str].sort().join('');
// }

// console.assert(alphabetOrder('alphabetical') == 'aaabcehillpt');
// console.log(alphabetOrder('alphabetical'));




// Parašykitė funkciją pluspluskuri priima 2 parametrus:

// function pluPlusUsingFor(number, times) {
//     for (let i = 0; i < times; i++) {
//         number++;
//     }

//     return number;
// }

// console.log(pluPlusUsingFor(10, 3));

// function pluPlusUsingWhile(number, times) {
//     let i = 0;

//     while (i < times) {
//         i++;

//         number = number + 1;
//     }

//     return number;
// }

// console.log(pluPlusUsingWhile(10, 3));

// function pluPlusUsingDoWhile(number, times) {
//     let i = 0;

//     do {
//         i++;

//         number += 1;
//     } while (i < times);

//     return number;
// }

// console.log(pluPlusUsingWhile(10, 3));



// skaičius

// kiek kartu prie šio skaičiaus reikia pridėti 1

// Pvz.: plusPlus(10, 3) grąžina 13. Svarbu: turi pridėti butent 1, o ne tesiog sudėti du skaičius



/////////////////////////////////////

// finction plusPlusUsingFor(number, times) {
//     for (let i = 0; i < times; i++;) {
//         number++;
//     }
//     return number;
// }
///////
// function plusPlus(num, num2) {
//     for (let i = 0; i < num2; i++) {
//         number++;
//     }
//     return num;
// }
// console.log(plusPlus(10, 3));

// Perrašykite aukščiau pateiktą funkciją "plusPlus" taip, kad joje nebūtų naudojamas joks ciklas ar kitokios JS fukcijos.


let num = 10;
let times = 3;

let sum = num + times;
console.log(sum);


// function plusPlusWithoutLoop(num, times) {
//     num = num + 1 * times;
//     return num;
// }
// console.log(plusPlusWithoutLoop(10, 4));
function plusPlusRecursion(x, y) {
    if (y > 0) {
        x++;
        x = plusPlusRecursion(x, --y);
    }
    return x;
}
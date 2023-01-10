


// Sukurkite masyvą a, b, c. Parodykite masyvą naudodami console.log funkciją.


let a = [];
let b = [];
let c = [];

// console.log(a, b, c);
// Naudodamiesi ankstesnės užduoties masyvu, parodykite pirmojo, antrojo ir trečiojo elementų turinį.
// 	Sukurkite masyvą a, b, c, d ir naudodami jį parodykite eilutė a + b, c + d.
let a = ['a'];
let b = ['b'];
let c = ['c'];
let d = ['d'];
console.log(a + b, c + d);
// let arr = ['a', 'b', 'c', 'd'];
// console.log(`${arr2[0]} + ${arr2[1]}, ${arr2[2]} + ${arr2[3]}`)



// Sukurkite masyvą su elementais 2, 5, 3, 9.
// 	Pirmąjį masyvo elementą padauginkite iš antrojo, o trečiąjį elementą iš ketvirtojo.
// 	Sudėkite rezultatus, priskirkite kintamąjam. Parodykite šio kintamojo reikšmę.

let arr = [2, 5, 3, 9];
let sum = (arr[0] * arr[1]) + (arr[2] * arr[3]);
console.log(sum);


// Yra pateiktas masyvas [[1, 2, 3], [4, 5, 6], [7,8,9]]. Parodykite skaičių 4 iš šio masyvo.

let array = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
console.log(array[1][0]);


// Duoti du masyvai: 1, 2, 3 ir 4, 5, 6. Sujunkite juos.

let arr1 = [1, 2, 3];
let arr2 = [4, 5, 6];
let merged = [...arr1, ...arr2];
console.log(merged);


// Duotas masyvas 1, 2, 3. Iš jo padarykite masyvą 3, 2, 1.

let array1 = [1, 2, 3];
let reversed = array1.reverse();
console.log('reversed:', reversed);

// Duotas masyvas 1, 2, 3. Pridėkite elementus 4, 5, 6 į galą ir -1, -2, -3 į priekį.

array1.push(-1, -2, -3, 4, 5, 6);
array1.sort();
console.log(array1);

// Duotas masyvas html, css, js. Parodykite pirmąjį ir paskutinį elementus.

let array3 = ["html", "css", "js"];
console.log(array3[0] + "," + array3[2]);

// Duotas masyvas 3, 4, 1, 2, 7. Surūšiuokite jį.
let array4 = [3, 4, 1, 2, 7];
console.log(array4.sort());

// Duotas masyvas 1, 2, 3, 4, 5. Konvertuokite masyvą į 1, 2, 3.

let array5 = [1, 2, 3, 4, 5];
let array6 = array5.slice(0, 3);
console.log(array6);
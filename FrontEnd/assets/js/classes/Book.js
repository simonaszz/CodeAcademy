
// Susikurkite objektų konstruktorių pavadinimu Book, kuris galės kurti objektus, kurie turės šias savybes (properties): name, author, year ir metodus, kurių vienas parašys pavadinima ir autorių, o kitas parodys knygos amžių (senumą).

class Book {
    constructor(name, author, year) {
        this.name = name;
        this.author = author;
        this.year = year;
    }

    nameAuthor() {
        return (`${this.name} ${this.author}`);
    }

    age() {
        let ageNow = new Date().getFullYear() - this.year;
        return ageNow;
    }
}

let book = new Book('Book', 'Autor ', 2000);
console.log(`Knyga: ${book.nameAuthor()}`);
console.log(`Amžius: ${book.age()}`);
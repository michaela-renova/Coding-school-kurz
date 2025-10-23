//1 proměnné
let name = "Michaela";
let age = 29;
let jeStudent = false;

console.log(name, age, jeStudent);

//2 pole
let ovoce = ["jablko", "kiwi", "banán"];

ovoce.push("pomeranč");

ovoce.unshift("jahoda");

console.log(ovoce[0]);
console.log(ovoce.lenght);

ovoce.pop();

ovoce.includes("banán");


//3 a 4 objekty

let person = {
    name: "Michaela",
    surname: "Renová",
    age: 29,
    hobbies: ["running", "reading", "learning languages"],
    isMarried: false,
    fullname() {
        return this.name + " " + this.surname
    },
    kids: [
        {
            name: "David",
            age: 2,
            hobbies: ["running", "crying"],
            height: 70
            
        },
        {
            name: "Kristýna",
            age: 3,
            hobbies: ["screaming", "eating"],
            height: 90
        }
    ]
}

person.age = 32;

person.hobbies.push("crocheting");

console.log(person.fullname());

console.log(person.hobbies[0]);

console.log(person.hobbies.lenght);

console.log(person.kids[0].name);

console.log(person.kids[1].hobbies[1]);

person.kids[0].height = 75;

//5
function secti(a, b) {
  return a + b;
}

let vysledek = secti(2, 3);
console.log(vysledek);

function eurToCZK(value) {
    return value * 24;
}

function czkToEUR(value) {
    return value / 24;
}
console.log(eurToCZK(2));
console.log(czkToEUR(48));

//6
let auto = {
    brand: "Audi",
    model: "RS6",
    year: 2024,
    owners: [
        {
            name: "Jan",
            age: 38 
        },
        {
            name: "Jana",
            age: 48
        }
    ],
    start() {
        return "Auto nastartovalo!"
    },
    servisniKnihy: [
        {
            datum: "05-10-2024", 
            popis: "Výměna pneumatik"
        },
        {
            datum: "02-05-2025", 
            popis: "Výměna brzd" 
        },
        {
            datum: "06-08-2025", 
            popis: "Oprava stěračů"
        }
    ]
 };

console.log(auto.brand, auto.model);

auto.owners.push({name: "Marek", age: 45});

console.log(auto.owners[1].name);

console.log(auto.start());

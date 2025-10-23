

function CZKtoEUR(CZK) {
    return CZK / 24;
}

console.log(CZKtoEUR(48));






function EURtoCZK() {
    return EUR * 24;
} 

//délka stringu
const veta = "Programování je zábava!";
console.log (veta.length);

//práce s polem
const ovoce = ["jablko", "banán", "pomeranč"];
ovoce.push(hruška);

console.log(ovoce);

//přidá první prvek
let noveOvoce = ovoce.unshift("borůvky");

console.log(ovoce);

console.log(ovoce.length);

console.log(ovoce[0]);


let person = {
    name: "Tomáš",
    surname: "Zaharowski",
    
    fullname() {
        return this.name + this.name
    },
    
    pozdrav()
    {
        return "Ahoj, světe"
    },

    age: 31,
    isMarried: true,
    height: 170,
    hobbies: ["ice hockey", "programming", "fishing"],
    kids: [
    {
        name: "Eva",
        surname: "Zaharowski",
        age: 5,
        isMarried: false,
        height: 170,
        hobbies: ["running", "screaming"],
    },

    {
        name: "Marie",
        surname: "Zaharowski",
        age: 6,
        isMarried: false,
        height: 170,
        hobbies: ["ice hockey", "programming", "fishing"]
    },

 ]

};   

person.age;
person.isMarried;
person.hobbies[1];

let hobby = person.hobbies[1];

person.kids[0].name

person.hobbies = ["football", "sleeping"];
//najdu koníčky člověka a prohlásím, že od teď jsou tohle

console.log(person);

console.log(person.fullname());

person.pozdrav();

//zachytávání elementů ze schránky
let hero = document.getElementById('hero');
console.log(hero.classList.add('border'));

console.log(hero.classList);

//všechny třídy v CSS
console.log(hero.style);

hero.style.display = "none";
hero.style.display = "block";
hero.style.display = "flex";

//zachytávání elementů ze schránky
let cards = document.getElementById('cards');


cards.style.display = "block";

//traverzování - najdu všechny děti a něco udělám

// u formulářů budeme používat hranaté závorky, do kterých vepíšeme jméno formuláře a následně prvku
const email = document.forms['prihlaseni']['email'];
const heslo = document.forms['prihlaseni']['heslo'];
console.log(email.value);

//lepší uložit do proměnných
const otevrit = document.getElementById('otevrit');
const zavrit = document.getElementById('zavrit');
const dialog = document.getElementById('dialog');

// přidáme posluchače na kliknutí - v callbacku otevřeme dialog, v kulatých závorkách může být i argument
otevrit.addEventListener('click', () => {
    dialog.showModal();
});

// zde v callbacku zavřeme dialog|
zavrit.addEventListener('click', () => {
    dialog.close();
});

document.addEventListener('mousemove', () => {
    console.log('Pohyb myší');
});


//document.addEventListener('keydown', (event) => {
//    console.log(event); 
//}); odchycení události

document.addEventListener('keydown', (event) => {
    console.log('Stisk klávesy', event.key); 
}) ;

//validace pole
const input = document.getElementById('jmeno');
    console.log(input);

//vypíše do konzole co uživatel mačká
//input.addEventListener('keyup', (event) => {
 //   console.log(event.target.value);
//})

//kontrola délky
input.addEventListener('keyup', (event) => {
    let value = event.target.value;
    console.log(value.length);

    if (value.length < 5) {
        input.style.border = "2px solid red";
    } else {
        input.style.border = "2px solid green";
    }
});



// if(1==="1") neplatí, porovnává to i datový typ
// if (1=="1") platí, dojde k přetypování
// === rychlejší, nemusí přetypovávat, bezpečnější

if (1 === true) {
}
//false, bolean a číslo není stejný datový typ

if (1 === true){
}
//true

if (1== 1){

}else{
}

// && a musí platit obě podmínky
// || nebo musí platit jedna podmínka (i ze 3)

let fruit = ['jablko','hruška']

if (fruit.includes('banán'))
{
    console.log('V poli je banán');
}

if(fruit[0] === "jablíčko")
{
    console.log('V poli je banán');
}  

//cyklické zpracovávání, funkce vykonává iteraci
let phones = ['android', 'iphone', 'samsung']

phones.forEach((phone) => {
    console.log(phone);
});


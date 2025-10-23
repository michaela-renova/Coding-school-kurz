<?php

echo "Ahoj jsem tady a funguju";

var_dump("Ahoj, jsem něco jako console.log");

//string
$promenna = "Jsem string";

//čísla
$float = 2.4;
$int = 4;

//boolean
$prav = false;
$lez = (int) true;

$pole = ['jablíčko', 'hruška', 'borůvky'];



$asociativniPole = [
    "prvni_ovoce" => "jablko",
    "druhe_ovoce" => "hruška",
    "treti_ovoce" => "borůvky",
];

$novePoleKlicu = array_keys($asociativniPole);
?>

<pre>
  <?php var_dump($novePoleKlicu); ?>
</pre>   

<?php
//multidimenzionální pole
$multiPole = [
    "name" => "Tomas",
    "kids" => [
        [
            "name" => "Jáchym"
        ],
        [
            "name" => "Meda"
        ]
        ],
];

$nic = NULL;

//funkce, striktní typování
function pozdrav(string $name, string $surname = ""): ?string
    {
        return "Ahoj {$name} {$surname}";
    }

$pozdrav = pozdrav ('Tome');

//přijímá adresu a nic jiného nedělá
function odesliMail(string|int $adress): void
{

}

if($podminka){
    //tenhle kód se vykoná pokud je to pravda
}elseif($dalsiPodminka){
    //tohle se vykoná pokud platí druhá podmínka
}else{
    //tohle pokud ani jedna a podmínka neplatí
}

?>

<form action="/test.php" method="POST">
    <input type="text" name="name" id="name">
    <button type="submit">Odeslat na test.php</button>
</form>

<?php

class Person
{
    public $name = "Tomáš";
    public $age = 32;
    public $isMarried = true;

    public function pozdrav()
    {
        return "Ahoj já jsem {$this->name}";
    }
}

$person = new Person();

?>
<pre>
<?php var_dump($person->name = "Tomáš"); ?>
</pre>

<?php

class Car
{
public $name = "Fabie";
public $gear = "manual";
public $fuel = "diesel";

public function __construct ($name, $gear, $fuel)
{
    $this->name = $name;
    $this->gear = $gear;
    $this->fuel = $fuel;
    
}

public function nastartuj()
{
return "vruuuum";
}
}



$Octavka = new Car("Octavie", "automat", "diesel");
$karoq = new Car("Karoq", "manual", "gas");
?>

<pre>
<?php var_dump($Octavka); ?>
<?php var_dump($karoq); ?>
</pre>


<?php
//načtení obsahu souboru
require "Car.php";


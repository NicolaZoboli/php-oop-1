<!-- GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->


<?php

class User {

  public $username;
  public $password;
  public $mail;
  public $age;

  public function __construct($username, $password, $mail, $age) {

    $this -> username = $username;
    $this -> password = $password;
    $this -> mail = $mail;
    $this -> age = $age;
  }

  public function __toString() {

    return "User:<br>username: " .$this -> username . "<br>"
         . "password: " . $this -> password . "<br>"
         . "mail: " . $this -> mail . "<br>"
         . "age: " . $this -> age . "<br>";
  }
}

$u1 = new User ("Tizio99", "leRosesonoRosse", "tizio99@mail.com", 21);
$u2 = new User ("Caio73", "unaPasswordSicura", "caiothebest73@mail.com", 47);

echo $u1 . "<br>" . $u2;

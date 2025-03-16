<<?php

// Zakladna trieda pre osoby na VS
class Osoba {
    protected string $meno;
    protected string $priezvisko;
    
    public function __construct(string $meno, string $priezvisko) {
        $this->meno = $meno;
        $this->priezvisko = $priezvisko;
    }
    
    public function __toString(): string {
        return "$this->meno $this->priezvisko";
    }
}

// Trieda Student dedia z Osoba
class Student extends Osoba {
    private int $idStudenta;
    
    public function __construct(string $meno, string $priezvisko, int $idStudenta) {
        parent::__construct($meno, $priezvisko);
        $this->idStudenta = $idStudenta;
    }
}

// Trieda Ucitel dedia z Osoba
class Ucitel extends Osoba {
    private string $odbor;
    
    public function __construct(string $meno, string $priezvisko, string $odbor) {
        parent::__construct($meno, $priezvisko);
        $this->odbor = $odbor;
    }
}

// Trieda Ucebna
class Ucebna {
    private string $cislo;
    private int $kapacita;
    
    public function __construct(string $cislo, int $kapacita) {
        $this->cislo = $cislo;
        $this->kapacita = $kapacita;
    }
}

// Trieda Cvicenie
class Cvicenie {
    private Ucitel $ucitel;
    private array $studenti;
    private Ucebna $ucebna;
    
    public function __construct(Ucitel $ucitel, array $studenti, Ucebna $ucebna) {
        $this->ucitel = $ucitel;
        $this->studenti = $studenti;
        $this->ucebna = $ucebna;
    }
}

// Vytvorenie instancii tried
$student1 = new Student("Jan", "Novak", 12345);
$student2 = new Student("Eva", "Svobodova", 67890);
$ucitel = new Ucitel("Petr", "Dvorak", "Katedra informatiky");
$ucebna = new Ucebna("NB 300", 30);

$cvicenie = new Cvicenie($ucitel, [$student1, $student2], $ucebna);

// Vypis objektov
var_dump($student1, $student2, $ucitel, $ucebna, $cvicenie);

?>
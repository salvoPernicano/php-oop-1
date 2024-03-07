<?php
class Movie 
{
    public $titolo;
    public $dataUscita;
    public $regista;

    function __construct($_titolo, $_dataUscita,$_regista)
    {
        $this->titolo = $_titolo;
        $this->dataUscita = $_dataUscita;
        $this->regista = $_regista;
    }

    public function displayInfo()
    {
        return "Titolo: {$this->titolo}, Data di Uscita: {$this->dataUscita}, Regista : {$this->regista} </br>";
    }
}

$dune = new Movie('Dune', '14/02/2024', 'Pinco Pallo');
$napoleon = new Movie('Napoleon', '01/01/2024', 'Panco Pillo');

echo $dune->displayInfo();
echo $napoleon->displayInfo();
?>
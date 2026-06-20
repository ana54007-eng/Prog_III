<?php

class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus() {
        return $this->salario * 0.10;
    }

    public function exibirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . static::class . "<br>";
        echo "Bônus: " . $this->calcularBonus() . "<br>";
    }
}


class Gerente extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.20;
    }
}

class Desenvolvedor extends Funcionario {
    public function calcularBonus() {
        return $this->salario * 0.15;
    }
}


echo "<h2>Exercício 1 - Sistema de Funcionários</h2>";

$gerente1 = new Gerente("João", 10000);
$dev1 = new Desenvolvedor("Maria", 5000);

echo "Nome: " . $gerente1->nome . "<br>";
echo "Cargo: Gerente<br>";
echo "Bônus: " . $gerente1->calcularBonus() . "<br><br>";

echo "Nome: " . $dev1->nome . "<br>";
echo "Cargo: Desenvolvedor<br>";
echo "Bônus: " . $dev1->calcularBonus() . "<br>";

echo "<hr>";


echo "<h2>Exercício 2 - Sobrescrita de Métodos</h2>";

$gerente1->exibirDados();
echo "<br>";
$dev1->exibirDados();

echo "<hr>";

echo "<h2>Exercício 3 - Polimorfismo na prática</h2>";

$funcionarios = [
    new Gerente("João", 10000),
    new Desenvolvedor("Maria", 8000),
    new Gerente("Carlos", 12000),
    new Desenvolvedor("Ana", 6000),
];

foreach ($funcionarios as $funcionario) {
    echo "Funcionario: " . $funcionario->nome . " (" . get_class($funcionario) . ")<br>";
    echo "Bônus: " . $funcionario->calcularBonus() . "<br><br>";
}

?>
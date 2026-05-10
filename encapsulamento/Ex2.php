<?php

class Funcionario {

    private $nome;
    private $idade;
    private $salario;

    public function setNome($nome) {
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            echo "Erro: nome não pode ser vazio.<br>";
        }
    }

    public function setIdade($idade) {
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        } else {
            echo "Erro: idade inválida.<br>";
        }
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Erro: salário inválido.<br>";
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSalario() {
        return $this->salario;
    }
}
$funcionario = new Funcionario();
$funcionario->setNome("");
$funcionario->setIdade(-5);
$funcionario->setSalario(0);

$funcionario->setNome("Guido Van Rossum");
$funcionario->setIdade(25);
$funcionario->setSalario(3500);

echo "Nome: " . $funcionario->getNome() . "<br>";
echo "Idade: " . $funcionario->getIdade() . "<br>";
echo "Salário: " . $funcionario->getSalario() . "<br>";
?>
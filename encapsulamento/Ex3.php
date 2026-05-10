<?php

class Funcionario {

    private $nome;
    private $idade;
    private $salario;

    public function setNome($nome) {
        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!<br>";
        }
    }

    public function setIdade($idade) {
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        } else {
            echo "Idade inválida!<br>";
        }
    }
    public function definirSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido!<br>";
        }
    }
    public function aumentarSalario($valor) {
        if ($valor > 0) {
            $this->salario += $valor;
            echo "Salário aumentado com sucesso!<br>";
        } else {
            echo "O aumento deve ser positivo!<br>";
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

$funcionario->setNome("Ana");
$funcionario->setIdade(30);
$funcionario->definirSalario(4000);


$funcionario->aumentarSalario(500);
$funcionario->aumentarSalario(-200);

echo "Salário atual: R$ " . $funcionario->getSalario();

?>
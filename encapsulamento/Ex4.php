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

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido!<br>";
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

    // Método para exibir dados
    public function exibirDados() {
        echo "<h2>Dados do Funcionário</h2>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Idade: " . $this->getIdade() . "<br>";
        echo "Salário: R$ " . $this->getSalario() . "<br>";
    }
}

// Criando objeto
$funcionario = new Funcionario();

$funcionario->setNome("Ana");
$funcionario->setIdade(28);
$funcionario->setSalario(5200);

// Exibindo dados
$funcionario->exibirDados();

?>
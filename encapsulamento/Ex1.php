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
   public function getNome() {
        return $this->nome;
    }
    public function setIdade($idade) {
        if ($idade >= 0 && $idade <= 120) {
            $this->idade = $idade;
        } else {
            echo "Idade inválida!<br>";
        }
    }

   
    public function getIdade() {
        return $this->idade;
    }
    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido!<br>";
        }
    }
    public function getSalario() {
        return $this->salario;
    }
}

?>
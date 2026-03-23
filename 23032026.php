<?php 

class Livro {

public $titulo;
public $autor;
public $npag;
public $anopubli;

}

$LivroX = new Livro();
$LivroX->titulo = "Cem anos de Solidão";
$LivroX->autor = "Gabriel Garcia Marques";
$LivroX->npag = 450;
$LivroX->anopubli = 1967;

echo "<h2> 1 - Livro </h2>";
echo $LivroX->titulo . "<br>";
echo $LivroX->autor . "<br>";
echo $LivroX->npag . "<br>";
echo $LivroX->anopubli . "<br> <br>";


class Funcionario {

public $nomeFunc;
public $cargo;
public $salario;
public $dataadmi;

public function salario_anual() {
    return $this->salario * 12;
}

}

$FuncionarioX = new Funcionario();
$FuncionarioX->nomeFunc = "Michael Scott";
$FuncionarioX->cargo = "Gerente";
$FuncionarioX->salario = 5000;
$FuncionarioX->dataadmi = "25/12/1988";

echo "<h2> 2 - Funcionário </h2>";
echo $FuncionarioX->nomeFunc . "<br>";
echo $FuncionarioX->cargo . "<br>";
echo $FuncionarioX->salario . "<br>";
echo $FuncionarioX->dataadmi . "<br>";
echo $FuncionarioX->salario_anual() . "<br> <br>";

class Carro {

public $marca;
public $modelo;
public $ano;
public $cor;
public $vMax;
public $vAtual;

public function Estado() {
    if ($this->vAtual > 0) {
        echo "O carro está em movimento.<br>";
    } else {
        echo "O carro está parado.<br>";
    }
}
}

$CarroX = new Carro();
$CarroX->marca = "DMC";
$CarroX->modelo = "Delorean";
$CarroX->ano = 1981;
$CarroX->cor = "Prata";
$CarroX->vMax = 180;
$CarroX->vAtual = 0;

echo "<h2> 3 - Carro </h2>";
echo $CarroX->marca . "<br>";
echo $CarroX->modelo . "<br>";
echo $CarroX->ano . "<br>";
echo $CarroX->cor . "<br>";
echo $CarroX->vMax . "<br>";
echo $CarroX->Estado();
echo $CarroX->vAtual . "<br>";

class Aluno {

public $nomeAluno;
public $NumMatr;
public $nota1sem;
public $nota2sem;

public function Media () {
    return ($this->nota1sem * 0.4) + ($this->nota2sem * 0.6);
}

public function situacao () {

    if ($this->Media() >= 7.0) {
        return "Aprovado";
    } elseif ($this->Media() < 7.0 and $this->Media() >= 1.7) {
    echo "Exame";
    }elseif ($this->Media()< 0){
        echo "Nota inválida";
    }
    else {
        return "Reprovado";
    }
}
}

$AlunoX = new Aluno;
$AlunoX->nomeAluno = "João<br>";
$AlunoX->NumMatr = 12345 . "<br>";
$AlunoX->nota1sem = 8.0;
$AlunoX->nota2sem = 9.0;
$AlunoX->Media();
$AlunoX->situacao();

echo "<h2> 4 - Aluno </h2>";
echo $AlunoX->nomeAluno;
echo $AlunoX->NumMatr;
echo $AlunoX->nota1sem;
echo $AlunoX->nota2sem;
echo $AlunoX->Media();
echo "<br>";
echo $AlunoX->situacao();

class Retangulo {

public $comprimento;
public $largura;

public function Area() {
    return $this->comprimento * $this->largura;
}

}

$RetanguloX = new Retangulo;
$RetanguloX->comprimento = 10;
$RetanguloX->largura = 5;
$RetanguloX->Area();

echo "<h2> 5 - Retângulo </h2>";
echo $RetanguloX->comprimento . "<br>";
echo $RetanguloX->largura . "<br>"; 
echo "Área: " . $RetanguloX->Area() . "<br><br>";


class Conta {
    public $NumCont;
    public $Titular;
    public $saldo;
    public $TaxJuros;
    
    public function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
    }
    
    public function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }
    
    public function saldoComJuros() {
        return $this->saldo + ($this->saldo * $this->TaxJuros / 100);
    }
}

$ContaX = new Conta;
$ContaX->NumCont = 12345;
$ContaX->Titular = "Michael Scott";
$ContaX->saldo = 1000;
$ContaX->TaxJuros = 5;

echo "<h2> 6 - Conta Bancária </h2>";
echo $ContaX->Titular . "<br>";
echo "Conta: " . $ContaX->NumCont . "<br>";
echo "Saldo: " . $ContaX->saldo . "<br>";
echo "Taxa de Juros: " . $ContaX->TaxJuros . "%<br><br>";

echo "Sacando R$ 200<br>";
$ContaX->sacar(200);
echo "Novo saldo: " . $ContaX->saldo . "<br><br>";

echo "Depositando R$ 500<br>";
$ContaX->depositar(500);
echo "Novo saldo: " . $ContaX->saldo . "<br><br>";

echo "Saldo com juros: " . $ContaX->saldoComJuros() . "<br>";

class Triangulo {
    public $base;
    public $altura;
    public $lado1;
    public $lado2;
    public $lado3;
    
    public function area() {
        return ($this->base * $this->altura) / 2;
    }
    
    public function tipo() {
        if ($this->lado1 == $this->lado2 and $this->lado2 == $this->lado3) {
            return "Equilátero";
        } elseif ($this->lado1 == $this->lado2 || $this->lado1 == $this->lado3 || $this->lado2 == $this->lado3) {
            return "Isósceles";
        } else {
            return "Escaleno";
        }
    }
}

$TrianguloX = new Triangulo();
$TrianguloX->base = 10;
$TrianguloX->altura = 8;
$TrianguloX->lado1 = 8;
$TrianguloX->lado2 = 8;
$TrianguloX->lado3 = 5;

echo "<h2> 7 - Triângulo </h2>";
echo "Área: " . $TrianguloX->area() . "<br>";
echo "Tipo: " . $TrianguloX->tipo() . "<br>";

class Circulo {
    public $raio;
    
    public function area() {
        return 3.14 * ($this->raio * $this->raio);
    }
    
    public function perimetro() {
        return 2 * 3.14 * $this->raio;
    }
}

$CirculoX = new Circulo();
$CirculoX->raio = 5;

echo "<h2> 8 - Círculo </h2>";
echo "Raio: " . $CirculoX->raio . "<br>";
echo "Área: " . $CirculoX->area() . "<br>";
echo "Perímetro: " . $CirculoX->perimetro() . "<br>";


 class Pessoa {
    public $nomePessoa;
    public $PessoaDatanacs;
    public $genero;
    
    public function calcnas() {
        $anoAtual = date("Y");
        $idade = $anoAtual - $this->PessoaDatanacs;
        return $idade;
    }
} 


$PessoaX = new Pessoa();
$PessoaX->nomePessoa = "João Silva";
$PessoaX->PessoaDatanacs = 1990;
$PessoaX->genero = "Masculino";

echo "<h2> 9 - Pessoa </h2>";
echo $PessoaX->nomePessoa . "<br>";
echo "Data de Nascimento: " . $PessoaX->PessoaDatanacs . "<br>";
echo "Idade: " . $PessoaX->calcnas() . " anos<br>";
echo "Gênero: " . $PessoaX->genero . "<br><br>"; 
class Produto {
    public $NomeProduto;
    public $Preco;
    public $QuantidadeEstoque;
    
    public function adicionar($quantidade) {
        $this->QuantidadeEstoque = $this->QuantidadeEstoque + $quantidade;
    }
    
    public function remover($quantidade) {
        $this->QuantidadeEstoque = $this->QuantidadeEstoque - $quantidade;
    }
    
    public function exibir() {
        echo "Produto: " . $this->NomeProduto . "<br>";
        echo "Preço: R$ " . $this->Preco . "<br>";
        echo "Estoque: " . $this->QuantidadeEstoque . " unidades<br>";
    }
}

$ProdutoX = new Produto();
$ProdutoX->NomeProduto = "Guitarra";
$ProdutoX->Preco = 2500;
$ProdutoX->QuantidadeEstoque = 10;

echo "<h2> 10 - Produto </h2>";
$ProdutoX->exibir();
echo "<br>";

echo "Adicionando 5 unidades<br>";
$ProdutoX->adicionar(5);
$ProdutoX->exibir();
echo "<br>";

echo "Removendo 3 unidades<br>";
$ProdutoX->remover(3);
$ProdutoX->exibir();







 /*class Animal {


    public $tamanho;
    public $cor;
    public $numeropatas;
    public $pelagem;

    public function andar(){

        echo "O animal andou";
    }

    public function falar (){

        echo "O animal faz um som";
    }

    public function comer () {

        echo "O animal está comendo";
    }
 }


 $gatopreto = new Animal();
    $gatopreto->tamanho = "Grande e Obeso";
    $gatopreto->cor = "Preto";
    $gatopreto->numeropatas = 3;
    $gatopreto->pelagem = "Fofa e brilhante";
    $gatopreto->andar();
    $gatopreto->falar();
    $gatopreto->comer();

    echo "O gato preto tem a cor " . $gatopreto->cor . "<br>";
    echo "O gato preto tem " . $gatopreto->numeropatas . " patas<br>";
    echo "O gato preto tem o tamanho " . $gatopreto->tamanho . " de tamanho<br>";
    echo "O gato preto tem a pelagem" . $gatopreto->pelagem . " de pelagem<br>";


    $Bidu = new Animal();
    $Bidu->tamanho = "Médio";
    $Bidu->cor = "Azul";
    $Bidu->numeropatas = 4;
    $Bidu->pelagem = "grande";
    $Bidu->andar();
    $Bidu->falar();
    $Bidu->comer();

    echo "O gato azul tem a cor " . $Bidu->cor . "<br>";
    echo "O gato azul tem " . $Bidu->numeropatas . " patas<br>";
    echo "O gato azul tem o tamanho " . $Bidu->tamanho . " de tamanho<br>";
    echo "O gato azul tem a pelagem" . $Bidu->pelagem . " de pelagem<br>"; */

?> 
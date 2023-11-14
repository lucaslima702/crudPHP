<?php  
class Usuario {
    private string $nome;
    private int $idade;
    
    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }   
    
    public function getIdade(){
        return $this->idade;
    }
    
    public function getNome(){
        return $this->nome;
    }
}

function exibirMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}



// $usuario1 = new Usuario("Lucas", 20);
// $usuario2 = new Usuario("Jefferson", 18);
// $usuario3 = new Usuario("Matheus", 22);

// $array = [$usuario1,$usuario2,$usuario3];

// for($i = 0; $i < count($array); ++$i) {
//     exibirMensagem($array[$i]->getNome());
// }

// $nome = $usuario1->getNome();
// $idade = $usuario1->getIdade();

// exibirMensagem("O $nome tem $idade anos");


// if($usuario1->getIdade() >= 18){
//     exibirMensagem("Vc é maior de idade");
// }else{
//     exibirMensagem("Vc ainda é menor de idade");
// }

// $contador = 1;

// while ($contador < 15) {
//     exibirMensagem($contador);
//     $contador += 1;
//     ;
// }

// for ($contador = 1; $contador < 15; $contador++){
//     exibirMensagem($contador);
// }

// for ($contador = 0; $contador < 100; $contador++){
//     if ($contador % 2 == 0) {
//         exibirMensagem($contador);
//     }
// }

// $variavel = 2;
// for ($contador = 1; $contador < 10; $contador++){
//     exibirMensagem($variavel * $contador);
// }

// $lista = [10, 15, 20, 25, 30, 35, 40, 45, 50, 55];
// exibirMensagem($lista[2]);

// for($i = 0; $i < count($lista); $i++){
//     exibirMensagem($lista[$i]);
// }

// $conta1 = ['titular' => "Lucas", 'saldo' => 300];
// $conta2 = ['titular' => "Joao", 'saldo' => 500];
// $conta3 = ['titular' => "Matheus", 'saldo' => 700];
// $contasCorrentes = [$conta1, $conta2, $conta3];

// for ($i = 0; $i < count($contasCorrentes); $i++) {
//     exibirMensagem($contasCorrentes[$i]['titular']);
    
// }

// $contasCorrentes = 
//     ['123.456.789-50' => ['titular' => "Maria", 'saldo' => 700], 
//     '987.654.321-30' => ['titular' => "Joao", 'saldo' => 900], 
//     '456.123.789-55' => ['titular' => "Matheus", 'saldo' => 400]];

// function sacar($conta, $valorParaSacar){
//     if($valorParaSacar > $conta['saldo']){
//         exibirMensagem("Você não tem o valor suficiente para sacar");
//     }else{
//         $conta['saldo'] -= $valorParaSacar;
//     }
    
//     return $conta;
// }

// function depositar($conta, $valorParaDeposito){
//     $conta['saldo'] += $valorParaDeposito;
//     return $conta;
// }

// $contasCorrentes ['123.456.789-50'] = depositar($contasCorrentes['123.456.789-50'], 200);


// foreach ($contasCorrentes as $cpf=>$conta){
//     exibirMensagem("$cpf $conta[titular] $conta[saldo]");
// }
     
?>
<?php // Início do código

// Declaração de variáveis
$idade = 19;
$idade2 = '19';
$altura = 1.73;

// Formas de declarar array
// $lista[1, 2, 3];
$arr = array(1, '2', 3);

echo sizeof($arr); // Utilizado para verificar o tamanho do array

// Comparação
23 == '23'; // True
23 === '23'; // False, compara os tipos

// Operadores
$p++; // Só é adicionado após sair dessa linha;
++$p; // É adicionado na mesma linha;
$p--; // Adicionado após sair da linha
--$p; // Removido na mesma linha

// $_GET[]
// $_POST[]

// Comparação
if ($idade == $idade2) {
    gettype($idade); // Int
    echo "iguais"; // Comando para exibir mensagem ("print do PHP")
} else if ($idade > 25)
    echo "Maior que 25 anos";
else
    echo "Última opção";

// $i > 3 ? echo "i maior que 3" : echo "i menor que 3";

// Loops
for($i = 0; $i < 5; $i++){
    echo $i;
}

$j = 0;
while($j != sizeof($arr)) {
    echo $arr[$j];
    $j++;
}

$count = 0;
do {
    $count++;
    echo $count;
} while($count < 3);

// Final do código
?>
<?php

require __DIR__ . "/vendor/autoload.php";

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
print_r($carrinho1->getItems());
echo 'Valor Total: ' . $carrinho1->getTotal();

$carrinho1->addItem('Bicicleta', 750.10);
$carrinho1->addItem('Geladeira', 1950.99);
$carrinho1->addItem('Tapete', 350.00);

echo "<br />";
print_r($carrinho1->getItems());
echo 'Valor Total recalculado: ' . $carrinho1->getTotal();

echo "<br />";
echo 'status: ' . $carrinho1->getStatus();

echo "<br />";
if ($carrinho1->confirmOrder()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro na confirmação do pedido.';
}

echo "<br />";
echo 'status: ' . $carrinho1->getStatus();

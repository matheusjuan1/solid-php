<?php

require __DIR__ . "/vendor/autoload.php";

use src\CarrinhoCompra;
use src\Item;
use src\Order;
use src\EmailService;

$order = new Order();

$item1 = new Item();
$item2 = new Item();

$item1->setDescription('Bicicleta');
$item1->setValue(500.0);

$item2->setDescription('Televisão');
$item2->setValue(1200.0);


echo '<h4>Pedido sem itens</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';

$order->getShoppingCart()->addItem($item1);
$order->getShoppingCart()->addItem($item2);

echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';

echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($order->getShoppingCart()->getItems());
echo '</pre>';

echo '<h4>Valor do pedido</h4>';
$total = 0;
foreach ($order->getShoppingCart()->getItems() as $key => $item) {
    $total += $item->getValue();
};
echo $total;

echo '<h4>Carrinho está valido?</h4>';
echo $order->getShoppingCart()->validateCart();

echo '<h4>Status pedido</h4>';
echo $order->getStatus();

echo '<h4>Confirmar pedido</h4>';
echo $order->confirmOrder();

echo '<h4>Status pedido</h4>';
echo $order->getStatus();

echo '<h4>E-mail</h4>';
if ($order->getStatus() == 'confirmed') {
    echo EmailService::sendEmail();
}

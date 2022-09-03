<?php
include("Invoice.php");

$invoice = new Invoice(1, "PHP", 10, 10);
 
echo "número item: " . $invoice->num_item; 
echo "<br>";

echo "descrição: " . $invoice->descricao; 
echo "<br>";

echo "quantidade: " . $invoice->quantidade; 
echo "<br>";

echo "preço:" . $invoice->preco_unitario;
echo "<br>";

echo "total: " . $invoice->getInvoiceAmount();
 
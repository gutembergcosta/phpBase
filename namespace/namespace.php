<?php 

    include("classes/exemplo.php");
    include("models/exemplo.php");

    use App\Classes\Produto as produto;

    $item = new App\Classes\Produto();
    $model = new App\Modelos\Produto();

    $item->exibir();
    $item::funcaEstatica();
    produto::funcaEstatica();
    $model->exibir();


?>
@extends('layouts.main')

@section('content')

<?php 
	foreach ($lista as $linha) 
		{			echo 
			"<div class='col-md-4 col-xs-6'>
					<div class='product'>
						<div class='product-img'>
							<img src='./img/opala.jpg' alt=''>
						</div>
						<div class='product-body'>
							<p class='product-category'>".$linha['categoria']."</p>
							<h3 class='product-name'>".$linha['veiculo']."</h3>
							<h4 class='product-price'>".$linha['preco']."</h4>
						</div>
						<div class='add-to-cart'>
							<button class='add-to-cart-btn'><i class='fa fa-shopping-cart'></i>Reservar</button>
						</div>
					</div>
				</div>";
		}




?>
@endsection

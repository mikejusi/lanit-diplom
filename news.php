<?php
    require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/preloader.css">
    <title>Ланит</title>
</head>
<body>

    <!-- <div id="before-load">
        <div id="preloader">
            <div id="loader"></div>
        </div>
    </div> -->
    <div class="wrapper">
    <header>
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <div class="container">
                    <a class="navbar-brand text__head p-0" href="index.php">
                        <img class="w__logo" src="assets/img/logo.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav mx-auto">
                            <a class="nav-link text__head active" aria-current="page" href="index.php">Главная</a>
                            <a class="nav-link text__head" href="news.php">Новости</a>
                            <a class="nav-link text__head" href="contact.php">Контакты</a>
                            <a class="nav-link text__head" href="about.php">О нас</a>
                        </div>
                        <div class="icon__head">
                            <a class="text__head ms-3" href="index.php">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a class="text__head ms-3" href="cabinet/dashboard.php">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <a class="text__head ms-3" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="main">
            <div class="container pt-4">
                <nav class="mt-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                    </ol>
                </nav>

</div>
            

            <div class="container mt-3">
                <h1 class="text-center">Новости</h1>
                <hr class="custom__hr mb-4">

                <div class="container__custom d-flex mx-auto flex-wrap">

                    <?php foreach ($news as $all) : ?>
                        <div class="card news__shadow mb-3" style="width: 18rem;">
                            <img src="assets/img/news/<?= $all['img'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $all['title'];?></h5>
                                <p class="card-text"><?= $all['description']; ?>...</p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

                <div class="text-center mt-3">
                    <button id="add-item" class="btn btn__custom">Показать больше</button>
                </div>


            </div>

        </main>

        <footer class="p-4">
            <div class="right text-white justify-content-center d-flex">
                <p class="mb-0 me-2">Ланит 1989 – 2022</p> 
                <a class="text-white text-decoration-underline" href="https://www.lanit.ru/copyright/">Права на использование сайта</a>
            </div>
        </footer>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
					<tbody class="cart">
					</tbody>
					<tfoot>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="text-right">Всего: <strong class="total"></strong></td>
						<td></td>
					</tfoot>
                </table>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
            </div>
        </div>
        </div>
               

    <script src="https://unpkg.com/cart-localstorage@1.1.4/dist/cart-localstorage.min.js" type="text/javascript"></script>
    <script>
		function renderCart(items) {
			const $cart = document.querySelector(".cart")
			const $total = document.querySelector(".total")

			$cart.innerHTML = items.map((item) => `
					<tr>
						<td>#${item.id}</td>
						<td>${item.name}</td>
						<td>${item.quantity}</td>
						<td style="width: 60px;">	
							<button type="button" class="btn btn-block btn-sm btn-outline-primary"
								onClick="cartLS.quantity(${item.id},1)">+</button>
						</td>
						<td style="width: 60px;">	
							<button type="button" class="btn btn-block btn-sm btn-outline-primary"
								onClick="cartLS.quantity(${item.id},-1)">-</button>
						</td>
						<td class="text-right">₽${item.price}</td>
						<td class="text-right"><Button class="btn btn-primary" onClick="cartLS.remove(${item.id})">Удалить</Button></td>
					</tr>`).join("")

			$total.innerHTML = "₽" + cartLS.total()
		}
		renderCart(cartLS.list())
		cartLS.onChange(renderCart)
    </script>

    <script src="assets/js/add-item.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="assets/js/preloader.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
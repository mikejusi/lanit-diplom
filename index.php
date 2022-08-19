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
    <!-- jquerry animation -->
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
                            <a class="text__head ms-3" href="">
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

        <main>
            <div class="card__cataloge container mt-4">
                <div class="search__panel p-4 d-flex rounded">
                    
                    <div class="search-box d-flex form-control me-2">
                        <input id="search" autocomplete="off" class="border-0 form-control animated-search-filter" placeholder="Найти нужную программу"/>
                        <span id="emty" class="emty btn">&times;</span>
                    </div>

                    <div class="btn-group me-2" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle border bg-white" data-bs-toggle="dropdown" aria-expanded="false">
                        Категории
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <li id="1"><a  class="dropdown-item" href="#">1</a></li>
                            <li id="2"><a  class="dropdown-item" href="#">2</a></li>
                            <li id="3"><a  class="dropdown-item" href="#">3</a></li>
                            <li id="all"><a  class="dropdown-item" href="#">Другие</a></li>
                        </ul>
                    </div>

                    <a class="btn btn__custom align-self-center p-13" href="#ct">Найти</a>
                </div>

                <div class="cataloge mt-2 py-4">
                        <div id="ct" class="row flex-wrap">
            
                        <?php foreach ($product as $pr) : ?>

                            <div class="col-md-3 results">
                                <div class="card product__shadow mb-3 news__shadow size__product">
                                <img src="assets/img/product/<?= $pr['img'];?>" class="card-img-top pt-3" alt="...">
                                    <div class="card-body">
                                        <span class="badge btn__custom p-03 mb-2"><?= $pr['category'];?></span>
                                        <h5 class="card-title"><?= $pr['name'];?></h5>
                                        <p class="card-text"><?= $pr['price'];?> ₽</p>
                                        <button type="button" class="btn btn-success"onClick="cartLS.add({id: <?= $pr['id'];?>, name: '<?= $pr['name'];?>', price: <?= $pr['price'];?>})">Купить</button>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; ?>                        
                        </div>
                </div>
                <div class="w-100 text-center results">
                <button class="btn btn__custom mb-2" id="add-item">
                    Показать больше
                </button>
                </div>

            </div>


            <div class="container__custom mx-auto flex-wrap">
                <div class="card__plus">
                    <div class="face face1">
                        <div class="content">
                            <img src="assets/img/card1.png">
                            <h3>Качество</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Мы гарантируем качество продаваемых программ. На каждую покупку действует гарантия 2 года.</p>
                        </div>
                    </div>
                </div>

                <div class="card__plus">
                    <div class="face face1">
                        <div class="content">
                            <img src="assets/img/card2.png">
                            <h3>Права</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Мы продаем только официальные лицензионные программы и соблюдаем все законы.</p>
                        </div>
                    </div>
                </div>

                <div class="card__plus">
                    <div class="face face1">
                        <div class="content">
                            <img src="assets/img/card3.png">
                            <h3>Сервис</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Простота оформления заказа и в любой сложной ситуации мы сможем помочь и подобрать нужную программу.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <h1 class="text-center">Свежие новости</h1>
                <hr class="custom__hr mb-4">

                <div class="container__custom d-flex mx-auto flex-wrap">

                    <?php foreach ($last as $news) : ?>
                        <div class="card mb-3 card-cursor" style="width: 18rem;">
                            <img src="assets/img/news/<?= $news['img'];?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $news['title'];?></h5>
                                <p class="card-text"><?= $news['description']; ?>...</p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="text-center mt-4">
                    <a href="news.php" class="btn mx-auto btn__custom">
                        Остальные новости
                    </a>
                </div>

            </div>

            <?php foreach ($reviews as $otz) : ?>
            <blockquote class="pullquote"><h4>Последний отзыв</h4><?= $otz['username'];?> &mdash; "<?= $otz['text']; ?>" 
                <br>
                <a class="btn btn__custom mt-3" href="addrewiew.php">Оставить отзыв</a>
            </blockquote>
            <?php endforeach; ?>

        </main>

        <footer class="p-4">
            <div class="right text-white justify-content-center d-flex">
                <p class="mb-0 me-2">Ланит 1989 – 2022</p> 
                <a class="text-white text-decoration-underline" href="https://www.lanit.ru/copyright/">Права на использование сайта</a>
            </div>
        </footer>
    </div>

                <?php
                    if(!isset($_SESSION["username"])) {?>
                        <div class='floating-chat'>
                        <i class='fa fa-comments' id='#close-chat' aria-hidden='true'></i>
                        <div class='chat'>
                            <div class='header'>
                                <span class='title'>
                                    Появились вопросы?
                                </span>
                                <button>
                                    <i class='fa fa-times' aria-hidden='true'></i>
                                </button>
                                            
                            </div>
                            <ul class='messages'>

                        <li class='self'>Здравствуйте! Чтобы чат работал корректно перейдите к <a class='login-chat' href='cabinet/login.php'>авторизации</a>.</li>

                        </ul>
                                <div class='footer'>                                    
                                    <input placeholder='Авторизируйтесь' type='email' class='form-control text-box' id='exampleFormControlInput1' contenteditable='true' disabled readonly>
                                    <button id='sendMessage'>Отправить</button>
                                </div>
                            </div>
                        </div>

                    
                    <?php }
                    else { ?>
                       
                        <div class='floating-chat'>
                        <i class='fa fa-comments' id='#close-chat' aria-hidden='true'></i>
                        <div class='chat'>
                            <div class='header'>
                                <span class='title'>
                                    Появились вопросы?
                                </span>
                                <button>
                                    <i class='fa fa-times' aria-hidden='true'></i>
                                </button>
                                            
                            </div>
                            <ul class='messages'>


                        <li class='self'>Здравствуйте! Есть у вас появились вопросы я всегда готов вас выслушать.</li>

                        <?php foreach ($mees as $ms) : ?>
                            <li class='<?=$ms['userclass'];?>'><?=$ms['message'];?></li>
                        <?php endforeach; ?>
                                    </ul>
                                <div class='footer'>
                                    <form class='d-flex' action='server/chat.php' method='POST' autocomplete='off'>
                                        <input name='message' placeholder='Введите сообщение' type='text' class='form-control text-box' id='exampleFormControlInput1' contenteditable='true'>
                                        <button type='submit' id='sendMessage'>Отправить</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        
                        
                    <?php }
                ?>



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
                <a class="btn btn-success text-white" href="zay.php">Оформить заявку</a>
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
    
    <script src="assets/js/search.js"></script>

    <script src="assets/js/add-product.js"></script>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="assets/js/preloader.js"></script>

    <!-- чат -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script  src="assets/js/chat.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
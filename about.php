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

        <main>
            <div class="container mt-5">
                <nav class="mt-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Оставить отзыв</li>
                    </ol>
                </nav>
                <h1 class="text-center">О нас</h1>
                <hr class="custom__hr mb-4">

                <h4>ЛАНИТ<h4>
                <h6 class="mb-2">ЛАБОРАТОРИЯ НОВЫХ ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ</h6>
                <p>Многопрофильная группа ИТ-компаний, лидер российской отрасли информационных технологий и партнер более двухсот пятидесяти мировых производителей оборудования и программных решений. Компании группы предоставляют полный комплекс ИТ-услуг, который расширяется за счет освоения передовых и востребованных технологий.</p>

                <h4 class="pt-3">НАМ ДОВЕРЯЮТ РЕШАТЬ ЗАДАЧИ РАЗЛИЧНОЙ СЛОЖНОСТИ, ПОТОМУ ЧТО КОМПАНИЯ ЛАНИТ:<h4>
                <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            ЛИДИРУЮЩАЯ
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="about-list">
                                <li>
                                    ЛАНИТ занимает первые позиции в рейтингах национальных предприятий, работающих в сфере информационных технологий.
                                </li>

                                <li>
                                    Широкий спектр продуктов, услуг, технологий, подходов, идей многопрофильной группы компаний открывает новые возможности для клиентов.
                                </li>

                                <li>
                                    Консолидированный оборот группы компаний ЛАНИТ в 2020 году составил 216,8 млрд руб. с НДС (рост 24,7%).
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            ПРОФЕССИОНАЛЬНАЯ
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="about-list">
                                <li>
                                    Команда ЛАНИТ – более 14 000 человек. 
                                </li>

                                <li>
                                    Более 3000 специалистов сертифицированы ведущими мировыми вендорами высокотехнологичного оборудования и программного обеспечения.
                                </li>

                                <li>
                                    «Сетевая Академия ЛАНИТ» – один из крупнейших в стране учебных центров, в котором прошли обучение более 1 000 000 специалистов и пользователей информационных систем.
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            КЛИЕНТООРИЕНТИРОВАННАЯ
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="about-list">
                                <li>
                                    ЛАНИТ вместе с заказчиками разрабатывает комплексную стратегию развития бизнеса, учитывающую специфику предприятия клиента.
                                </li>

                                <li>
                                    Обладает опытом и возможностями реализации проектов федерального масштаба.
                                </li>

                                <li>
                                    Со всеми клиентами строится долгосрочная программа сотрудничества.
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            ИННОВАЦИОННАЯ
                        </button>
                        </h2>
                        <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="about-list">
                                <li>
                                    ЛАНИТ постоянно открывает новые направления деятельности, осваивает передовые технологии, которые помогают заказчикам повышать эффективность и развиваться.
                                </li>

                                <li>
                                    В компании создано подразделение, системно занимающееся анализом проектов и управлением портфелем стартапов. ЛАНИТ поддерживает высокотехнологичные проекты, существенно увеличивая их инвестиционный потенциал.
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            ТЕХНОЛОГИЧНАЯ
                        </button>
                        </h2>
                        <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="about-list">
                                <li>
                                    ЛАНИТ является крупнейшим на территории России и стран СНГ партнером ведущих мировых производителей высокотехнологичного оборудования, решений и услуг.
                                </li>

                                <li>
                                    Специалисты группы компании ЛАНИТ обладают уникальными компетенциями, предвидят развитие технологий в соответствии с потребностями рынка и предлагают заказчикам решения, отвечающие их текущим и перспективным потребностям.
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            ВСЕРОССИЙСКАЯ
                        </button>
                        </h2>
                        <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="about-list">
                                <li>
                                    В составе группы компаний ЛАНИТ действует 38 подразделений: региональные филиалы, дочерние предприятия, ресурсные и учебные центры.
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>
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


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="assets/js/preloader.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
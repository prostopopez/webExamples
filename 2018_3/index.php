<?php
get_header();
?>
	<!-- Page Content -->
	<div class="container">
		<?php if(have_posts()) {?>
			<?php while(have_posts()){?>
				<?php the_post(); ?>
				<!-- Page Heading/Breadcrumbs -->
				<!-- Content -->
                <div class="row">
                    <div id="artcard">
                        <!-- Start	Product details -->
                        <div class="product-details">
                            <!-- 	Product Name -->
                            <h1>Арт</h1>
                            <!-- The most important information about the product -->
                            <p class="information">Дешёвый и качественный рисунок в компьютерной графике или от руки по
                                вашему описанию.</p>
                            <!-- 		Control -->
                            <div class="control">
                                <!-- Start Button buying -->
                                <button type="button" class="btn">
                                    <!-- 		the Price -->
                                    <span class="price">35 рублей</span>
                                    <!-- 		Buy Now / ADD to Cart-->
                                    <a href="https://vk.com/im?sel=-169421391" onclick="yaCounter50302755.reachGoal('zakaznagatie', goalParams, goalCallback); return true;">
                                        <span class="buy">Заказать сейчас</span>
                                    </a>
                                </button>
                                <!-- End Button buying -->
                            </div>
                        </div>
                        <!-- 	End	Product details   -->
                        <!-- 	Start product image & Information -->
                        <div class="product-image">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://i.imgur.com/rICmXvV.png" alt="Тут должен был быть артик" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.imgur.com/Ewi5RIF.png" alt="Тут должен был быть артик" class="d-block w-100">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.imgur.com/cnrPkxc.png" alt="Тут должен был быть артик" class="d-block w-100">
                                    </div>
                                </div>
                                <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- 	product Information-->
                            <div class="info">
                                <h2>О заказе</h2>
                                <ul>
                                    <li><strong>Сервис: </strong>вносим поправки в адекватных рамках вплоть до
                                        удовлетоврения заказчика
                                    </li>
                                    <li><strong>Оплата: </strong>электронные кошельки, карточка, телефон</li>
                                </ul>
                            </div>
                        </div>
                        <!--  End product image  -->
                    </div>
                </div>
                <div class="row">
                        <h1 class="eh">Отзывы</h1>
                </div>
                <div class="row">
                    <div id="vk_comments"></div>
                    <script type="text/javascript">
                        window.onload = function () {
                            VK.init({apiId: 6683101, onlyWidgets: true});
                            VK.Widgets.Comments('vk_comments', {limit: 100}, 321);
                        }
                    </script>
                </div>
                <!-- /.row -->
			<?php } ?>
		<?php } ?>
	</div>
	<!-- /.container -->
    <!-- .modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">GAddess</h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form action="#">
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-center">
                                        <img id="kartinkamodul" src="https://i.imgur.com/8LiFBrM.jpg" alt="хм, что-то пошло не так">
                                        <br>
                                        Мы - творческий коллектив художников-любителей и дизайнеров. У нас есть собственная
                                        <a href="https://www.vk.com/creative_caterpillar">группа ВКонтакте</a>, посвящённая Аниме, Манге, Артам, Фотошопу, Музыке.
                                        <br>
                                        На данный момент мы делаем всё, что в наших силах для того, чтобы заинтересовать потенциальную аудиторию.
                                        Делаем свою работу качественно, доводим все заказы до конца, прислушиваясь к пожеланиям заказчиков. Поэтому, пожалуйста, дайте нам шанс.
                                        <br>
                                        Также мы являемся сплочённой и опытной <a href="https://www.vk.com/gaddusenici">игровой гильдией</a>.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
<?php
get_footer();
?>
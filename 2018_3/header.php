<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

    <title>
        <?php
            the_title();
        ?>
    </title>

	<!-- Bootstrap core CSS -->
	<link href="<?php e_template_path();?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php e_template_path();?>/css/custom_popez.css" rel="stylesheet">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter50302755 = new Ya.Metrika2({
                        id:50302755,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        webvisor:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/tag.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks2");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/50302755" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- ЯМ -->
    <script type="text/javascript">
        var goalParams =
            {
                order_price: 35,
                currency: "RUB"
            };
        function goalCallback () {
            console.log('запрос в Метрику успешно отправлен');
        }
    </script>
    <!-- /ЯМ -->

    <script type="text/javascript" src="//vk.com/js/api/openapi.js?159"></script>

    <!-- VK Widget -->
    <div id="vk_community_messages"></div>
    <script type="text/javascript">
        VK.Widgets.CommunityMessages("vk_community_messages", 169421391, {expanded: "1",tooltipButtonText: "Есть вопрос?"});
    </script>
 </head>

 <body>
 <div id="page-preloader" class="preloader">
	 <div class="loader">
		 <span class="prostopreload">G</span><span class="prostopreload">A</span><span
				 class="prostopreload">D</span><span class="prostopreload">D</span><span
				 class="prostopreload">E</span><span class="prostopreload">S</span><span
				 class="prostopreload">S</span>
	 </div>
 </div>
 <!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="https://www.prostopopez.com">
            <span class="brand_popez">G</span><span class="brand_popez">A</span><span class="brand_popez">D</span><span class="brand_popez">D</span><span class="brand_popez">E</span><span class="brand_popez">S</span><span class="brand_popez">S</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
			<?php
			$args=array(
				"theme_location"=>"top",
				"menu_class"=>"nav navbar-nav navbar-right"
			);
			wp_nav_menu($args);
			?>
	</div>
</nav>
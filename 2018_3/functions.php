<?php
	add_theme_support( 'html5', array( 'search-form' ) );

	function main_author(){
		echo "prostopopez";
	}
	//	echo DB_HOST;
	function e_template_path(){
		echo get_template_directory_uri();
	}

	//	Функция изменения переменной - заготовки при добавлении новой записи в WP
	function change_default_content($begin_content) {
		$begin_content="Тут можно что-то написать...";
		return $begin_content;
	}

	//	Функция изменения переменной - ника автора поста
	function change_author_name($author){
		if($author="prostopopez") {
			return "Админчик попец";
		}
		else{
			return $author;
		}
	}
	/*  Применение/Отмена хука "фильтр", находящего применение
	the_author и добавляющего функцию change_author_name */
	add_filter("the_author","change_author_name");

	/*  Функция, добавляющая поддержку миниатюр в шаблон и устанавливающая
	базовые размеры для этих миниатюр + поддержка выбора формата записи*/
	function set_initial_options() {
		add_theme_support("post-thumbnails");

		set_post_thumbnail_size(1920, 1080, false);

		add_theme_support( "post-formats", array(
			"aside", "audio", "chat", "gallery", "image", "quote", "status","link","video") );
	}
	/*  Добавление хука-действия, применяющего поддержку миниатюр и выбора
	формата записи после инициализации темы wordpress*/
	add_action("after_setup_theme", "set_initial_options");

	register_nav_menu("top","Top header menu");

	/*Функция, изменяющая the_date таким образом, чтобы месяц отображался
	в буквенном формате*/
	function change_date_format_month($myDate){
		$newDate = explode(".",$myDate); // результат - массив newDate["16","05","2018"]
	//		$myDate = explode(".", get_the_Date());
		$date = $newDate[0];
		$month = "";
		$year= $newDate[2];

		switch($newDate[1]){
			case 1: $month="января";
				break;
			case 2: $month="февраля";
				break;
			case 3: $month="марта";
				break;
			case 4: $month="апреля";
				break;
			case 5: $month="мая";
				break;
			case 6: $month="июня";
				break;
			case 7: $month="июля";
				break;
			case 8: $month="августа";
				break;
			case 9: $month="сентября";
				break;
			case 10: $month="октября";
				break;
			case 11: $month="ноября";
				break;
			case 12: $month="декабря";
		}

		$newDate=$date.' '.$month.' '.$year;
		return $newDate;
	}

	//  Добавление хука-фильтра, применяющего изменение формата вывода месяца
	add_filter("the_date","change_date_format_month");
?>

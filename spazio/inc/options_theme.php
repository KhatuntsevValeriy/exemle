<?php
/*--------------добавления нового пункта меню в админ панель-------------*/

function page_settings_theme(){
	add_theme_page(
		'Страница настройки темы',
		'Настройка темы',
		'administrator',
		'burlesque',
		'show_page_settings_burlesque'
	);
}

add_action('admin_menu', 'page_settings_theme');

/*-------------функция отображающая содержимое страницы настройки темы------------*/

function show_page_settings_burlesque(){
	?>
		<!--Создаем заголовок в стандартном контейнере wrap-->
		<div class="wrap">
		<!--добавляем иконки к странице-->
		<div id="icon-themes" class="icon32"></div>  
		<h2>Настройки темы SPAZIO</h2>

		  <!-- Делаем вызов функции WordPress для вывода ошибок, возникающих при сохранении настроек. -->  
        <?php settings_errors(); ?>  

        <!-- Создаем форму, которая будет использоваться для вывода наших опций -->
        <form method="post" action="options.php">
        	<?php settings_fields('burlesque'); ?>
        	<?php do_settings_sections('burlesque'); ?>
        	<?php submit_button(); ?>
        </form>
		</div><!--end wrap-->
	<?php
}


function mytheme_settings(){

	add_settings_section(  
        'general_settings_section',           // ID, который будет использоваться для идентификации этой секции и по которому мы будем регистрировать опции
        'Контактная информация',                      // Заголовок, который будет отображаться на странице административной панели
        'show_field_settings',   // Вызов, который используется для отображения описания секции  
        'burlesque'                             // Страница, на которую будет добавлена секция
    );



	/*------регистрируем текстовое поле для первого телефона-------*/
	add_settings_field(
		'phone1',
		'Представительство',
		'show_content_phone1',
		'burlesque',
		'general_settings_section'
	);

	register_setting(
		'burlesque',
		'phone1'
	);
    /*------регистрируем текстовое поле для первого телефона-------*/
    add_settings_field(
        'salon',
        'Салон',
        'show_content_salon',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'salon'
    );


/*------регистрируем текстовое поле для первого телефона-------*/
    add_settings_field(
        'phone11',
        'Салон укр',
        'show_content_phone11',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'phone11'
    );

    /*------регистрируем текстовое поле для первого телефона-------*/
    add_settings_field(
        'phone12',
        'Вулиця укр',
        'show_content_phone12',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'phone12'
    );

    /*------регистрируем текстовое поле для первого телефона-------*/
    add_settings_field(
        'phone13',
        'Мiсто укр',
        'show_content_phone13',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'phone13'
    );
    /*------регистрируем текстовое поле для второго телефона-------*/
	add_settings_field(
		'phone2',
		'Улица',
		'show_content_phone2',
		'burlesque',
		'general_settings_section'
	);

	register_setting(
		'burlesque',
		'phone2'
	);


    /*------регистрируем текстовое поле для третьего телефона-------*/
    add_settings_field(
        'phone3',
        'Город',
        'show_content_phone3',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'phone3'
    );

    
    register_setting(
        'burlesque',
        'adres'
    );


    /*------регистрируем текстовое поле для адреса-------*/
    add_settings_field(
        'mail',
        'e-mail',
        'show_content_mail',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'mail'
    );

    /*------регистрируем текстовое поле для адреса-------*/
    add_settings_field(
        'telefon',
        'Телефон',
        'show_content_telefon',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'telefon'
    );

  /*------регистрируем текстовое поле для адреса-------*/
    add_settings_field(
        'telefon2',
        'Телефон2',
        'show_content_telefon2',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'telefon2'
    );

    /*------регистрируем текстовое поле для адреса-------*/
    add_settings_field(
        'facebook',
        'Cсылка facebook',
        'show_content_facebook',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'facebook'
    );

    /*------регистрируем текстовое поле для адреса-------*/
    add_settings_field(
        'instagram',
        'Cсылка инстаграма',
        'show_content_instagram',
        'burlesque',
        'general_settings_section'
    );

    register_setting(
        'burlesque',
        'instagram'
    );

}

add_action('admin_init', 'mytheme_settings');


/*-----------функция отображающая содержимое в секции---------*/

function show_field_settings(){
	echo "<p>В данном разделе вы можете изменять контактную информацию</p>";
}




/*--------------вывод текстового поля для первого телефона-----------*/
function show_content_phone1(){
	$country = get_option('phone1');
	$country_field = "<input type='text' id='phone1' class='regular-text'  name='phone1' value='".get_option('phone1')."' />";
	echo $country_field;
}

/*--------------вывод текстового поля для первого телефона-----------*/
function show_content_phone11(){
    $country = get_option('phone11');
    $country_field = "<input type='text' id='phone11' class='regular-text'  name='phone11' value='".get_option('phone11')."' />";
    echo $country_field;
}



function show_content_phone12(){
    $country = get_option('phone12');
    $country_field = "<input type='text' id='phone12' class='regular-text'  name='phone12' value='".get_option('phone12')."' />";
    echo $country_field;
}


function show_content_phone13(){
    $country = get_option('phone13');
    $country_field = "<input type='text' id='phone13' class='regular-text'  name='phone13' value='".get_option('phone13')."' />";
    echo $country_field;
}

/*--------------вывод текстового поля для первого телефона-----------*/
function show_content_salon(){
    $country = get_option('salon');
    $country_field = "<input type='text' id='salon' class='regular-text'  name='salon' value='".get_option('salon')."' />";
    echo $country_field;
}


/*--------------вывод текстового поля для второго телефона-----------*/
function show_content_phone2(){
    $country = get_option('phone2');
    $country_field = "<input type='text' id='phone2' class='regular-text'  name='phone2' value='".get_option('phone2')."' />";
    echo $country_field;
}


/*--------------вывод текстового поля для третьего телефона-----------*/
function show_content_phone3(){
    $country = get_option('phone3');
    $country_field = "<input type='text' id='phone3' class='regular-text'  name='phone3' value='".get_option('phone3')."' />";
    echo $country_field;
}




/*--------------вывод текстового поля для третьего телефона-----------*/
function show_content_mail(){
    $country = get_option('mail');
    $country_field = "<input type='text' id='mail' class='regular-text'  name='mail' value='".get_option('mail')."' />";
    echo $country_field;
}


/*--------------вывод текстового поля для третьего телефона-----------*/
function show_content_telefon(){
    $country = get_option('telefon');
    $country_field = "<input type='text' id='telefon' class='regular-text'  name='telefon' value='".get_option('telefon')."' />";
    echo $country_field;
}


/*--------------вывод текстового поля для третьего телефона-----------*/
function show_content_telefon2(){
    $country = get_option('telefon2');
    $country_field = "<input type='text' id='telefon2' class='regular-text'  name='telefon2' value='".get_option('telefon2')."' />";
    echo $country_field;
}

function show_content_facebook(){
    $country = get_option('facebook');
    $country_field = "<input type='text' id='facebook' class='regular-text'  name='facebook' value='".get_option('facebook')."' />";
    echo $country_field;
}

function show_content_instagram(){
    $country = get_option('instagram');
    $country_field = "<input type='text' id='instagram' class='regular-text'  name='instagram' value='".get_option('instagram')."' />";
    echo $country_field;
}
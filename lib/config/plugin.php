<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Qrcode',
    'description' => 'Плагин для генерации Бар-кода',
    'vendor' => '985310',
    'version' => '1.0.0',
    'img' => 'img/qrcode.png',
    'frontend' => true,
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
        'frontend_category' => 'frontendСategory',
    ),
);
//EOF

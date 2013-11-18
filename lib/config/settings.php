<?php

return array(
    'status' => array(
        'title' => 'Статус плагина',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'qrcode_size' => array(
        'title' => 'Размер изображения',
        'description' => '',
        'value' => '4',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '10' => '10',
        )
    ),
    'frontend_product' => array(
        'title' => 'Вывод в карточке товара',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    'frontend_product_output' => array(
        'title' => 'Вывод в карточке товара(место)',
        'description' => '',
        'value' => 'cart',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'cart' => 'Содержимое, добавляемое рядом с кнопкой «В корзину».',
            'block_aux' => 'Блок дополнительной информации в боковой части страницы.',
            'block' => 'Блок дополнительной информации в основной части описания товара.',
        )
    ),
    'frontend_category' => array(
        'title' => 'Вывод на странице категории',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',
        )
    ),
    
    'custom_text' => array(
        'title' => 'Произвольный текст',
        'description' => 'Вы можете сформировать QR-код c произвольным текстом, для вставки используйте хелпер {shopQrcodePlugin::display()}',
        'value' => 'Произвольный текст',
        'control_type' => waHtmlControl::INPUT,
    ),
);

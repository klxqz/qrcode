<?php

return array(
    'status' => array(
        'title' => 'Статус',
        'description' => '',
        'value' => '1',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            '0' => 'Выключен',
            '1' => 'Включен',

        )
    ),
    
    'text' => array(
        'title' => 'Текс',
        'description' => '',
        'value' => '&uarr;',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'width' => array(
        'title' => 'Ширина',
        'description' => 'Ширина блока в пикселях',
        'value' => '100',
        'control_type' => waHtmlControl::INPUT,
    ),
    'height' => array(
        'title' => 'Высота',
        'description' => 'Высота блока в пикселях',
        'value' => '50',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'position_horizontal' => array(
        'title' => 'Размещение по горизонтали',
        'description' => '',
        'value' => 'right',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'right' => 'Справа',
            'left' => 'Слева',

        )
    ),
    'position_vertical' => array(
        'title' => 'Размещение по вертикале',
        'description' => '',
        'value' => 'bottom',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'top' => 'Сверху',
            'bottom' => 'Снизу',

        )
    ),
    
    'text_align' => array(
        'title' => 'Выравнивание текста',
        'description' => '',
        'value' => 'center',
        'control_type' => waHtmlControl::SELECT,
        'options' => array(
            'center' => 'По центру',
            'justify' => 'По ширине',
            'left' => 'По левому краю',
            'right' => 'По правому краю',

        )
    ),
    'text_color' => array(
        'title' => 'Цвет текста',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#666666',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'font_size' => array(
        'title' => 'Размер текста',
        'description' => 'Размер текста в пикселях',
        'value' => '36',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'background_color' => array(
        'title' => 'Цвет фона',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/ none - без фона',
        'value' => '#F4FFBF',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'opacity' => array(
        'title' => 'Прозрачность',
        'description' => '1 - непрозрачный, 0 - полностью прозрачный',
        'value' => '0.8',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'padding' => array(
        'title' => 'Оступы',
        'description' => 'отступы от текста по бокам в пикселях',
        'value' => '5',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'border_radius' => array(
        'title' => 'Радиус закругления углов',
        'description' => '0 - без закругления',
        'value' => '5',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    'border_width' => array(
        'title' => 'Толщина бордюра',
        'description' => 'в пикселях',
        'value' => '1',
        'control_type' => waHtmlControl::INPUT,
    ),
    'border_color' => array(
        'title' => 'Цвет бордюра',
        'description' => 'Цвет в шестнадцатиричном виде #000000, http://getcolor.ru/',
        'value' => '#CCCCCC',
        'control_type' => waHtmlControl::INPUT,
    ),
    
    
     

);
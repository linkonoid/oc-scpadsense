<?php return [

    'plugin' => [           
        'name' =>'SCPAdsense',
        'description' => 'Позволяет использовать на странице рекламу AdSense',        
        'settings' => [
            'label' => 'Adsense',            
            'description' => 'Позволяет использовать на странице рекламу AdSense',
            'category' => 'Shortcodes',
            'keywords' => 'shortcodes, short, code, BBCode, plugin, settings, include, content, Google, AdSense',
            'permissions' => [
                'tab'   => 'Разрешения для SCPAdsense',
                'label' => 'Показывать плагин SCPAdsense в панели управления во вкладке настроек плагина', 
            ],  
        ],
    ],

    'settings' => [
        'tab' => 'Настройки по умолчанию',
        'type' => 'Тип отображения',
        'type_banner' => 'Баннер',
        'type_fixed' => 'Фиксировано',
        'orientation' => 'Ориентация',
        'orientation_left' => 'Слева',
        'orientation_right' => 'Справа',
        'orientation_top' => 'Вверху',
        'orientation_bottom' => 'Внизу',
        'client' => 'AdSense Client-ID',
        'slot' => 'AdSense Slot-ID',
        'sandy' => 'Включить режим песочницы',
        'sandy_comment' => 'Песочница показывает вам демонстрационную рекламу для тестирования',
        'resource' => 'AdSense API JavaScript'
    ],

    'component_adsense' => [
        'property_type' =>[
            'title' => 'Тип отображения',
            'description' => 'Баннер или Фиксировано',
        ],
        'property_direction' => [
            'title' => 'Направление',
            'description' => 'Вертикально или горизонтально',
        ],        
        'property_client' => [
            'title' => 'AdSense Client-ID',
            'description' => 'AdSense Client-ID',
        ],
        'property_slot' => [
            'title' => 'AdSense Slot-ID',
            'description' => 'AdSense Slot-ID',
        ],
        'property_class' => [
            'title' => 'Class',
            'description' => 'Пользовательский класс AdSense',
        ]
    ]
];
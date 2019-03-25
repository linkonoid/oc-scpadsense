<?php return [

    'plugin' => [           
        'name' =>'SCPAdsense',
        'description' => 'Enables to use AdSense on page',        
        'settings' => [
            'label' => 'Adsense',            
            'description' => 'Enables to use AdSense on page',
            'category' => 'Shortcodes',
            'keywords' => 'shortcodes, short, code, BBCode, plugin, settings, include, content, Google, AdSense',
            'permissions' => [
                'tab'   => 'Permissions for SCPAdsense plugin settings',
                'label' => 'Show SCPAdsense plugin settings tab in control panel', 
            ],  
        ],
    ],
    
    'settings' => [
        'tab' => 'Default settings',
        'type' => 'Display Type',
        'type_banner' => 'Banner',
        'type_fixed' => 'Fixiert',
        'orientation' => 'Direction',
        'orientation_left' => 'Left',
        'orientation_right' => 'Right',
        'orientation_top' => 'Top',
        'orientation_bottom' => 'Bottom',
        'client' => 'AdSense Client-ID',
        'slot' => 'AdSense Slot-ID',
        'sandy' => 'On sandbox mode',
        'sandy_comment' => 'Sandbox shows you demo ads for testing purposes',
        'resource' => 'AdSense API JavaScript'
    ],

    'component_adsense' => [
        'property_type' =>[
            'title' => 'Display Type',
            'description' => 'Banner or Fixiert',
        ],
        'property_direction' => [
            'title' => 'Direction',
            'description' => 'Vertical or gorizontal',
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
            'description' => 'User AdSense class',
        ]
    ]
];
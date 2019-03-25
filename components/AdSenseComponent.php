<?php namespace Linkonoid\SCPAdsense\Components;

use Event;
use Cache;
use Flash;
use Cms\Classes\ComponentBase;
use RainLab\Translate\Classes\Translator;
use Linkonoid\SCPAdsense\Models\Settings;
use Linkonoid\SCPAdsense\Classes\IncludeContent;

/**
 * @package linkonoid\scpadsense
 * @author Max Barulin (https://github.com/linkonoid)
 */ 

class AdsenseComponent extends ComponentBase
{
    public function componentDetails()
	{
		return [
			'name'			=> 'Adsense',
            'description'	=> 'Include Adsense blok on page'
		];
	}

    public function defineProperties()
    {
        return [
            'type' => [
                'title' => 'linkonoid.scpadsense::lang.component_adsense.property_type.title',
                'description' => 'linkonoid.scpadsense::lang.component_adsense.property_type.description',
                'type' => 'dropdown',
                'options' => [
                    'banner' => 'linkonoid.scpadsense::lang.settings.type_banner',
                    'fixed' => 'linkonoid.scpadsense::lang.settings.type_fixed',
                ],                
                'default' => 'banner',
            ],
            'orientation' => [
                'title' => 'linkonoid.scpadsense::lang.component_adsense.property_direction.title',
                'description' => 'linkonoid.scpadsense::lang.component_adsense.property_direction.description',
                'type' => 'dropdown',
                'options' => [
                    'left' => 'linkonoid.scpadsense::lang.settings.orientation_left',
                    'right' => 'linkonoid.scpadsense::lang.settings.orientation_right',
                    'top' => 'linkonoid.scpadsense::lang.settings.orientation_top',
                    'bottom' => 'linkonoid.scpadsense::lang.settings.orientation_bottom',
                ],                
                'default' => 'top',
            ],
            'client' => [
                'title' => 'linkonoid.scpadsense::lang.component_adsense.property_client.title',
                'description' => 'linkonoid.scpadsense::lang.component_adsense.property_client.description',
                'type' => 'string',
                'default' => '',
                'placeholder' => 'ca-pub-1147018993230160', 
            ],
            'slot' => [
                'title' => 'linkonoid.scpadsense::lang.component_adsense.property_slot.title',
                'description' => 'linkonoid.scpadsense::lang.component_adsense.property_slot.description',
                'type' => 'string',                
                'default' => '',
                'placeholder' => '1160605533',
            ],
            'class' => [
                'title' => 'linkonoid.scpadsense::lang.component_adsense.property_class.title',
                'description' => 'linkonoid.scpadsense::lang.component_adsense.property_class.description',
                'type' => 'string',                
                'default' => '',
            ]
        ];
    }

    public function onRun()
    {
        if (!is_null(Settings::instance()->get('sandy'))) {
            if (Settings::instance()->get('sandy')) {$this->page['adsense_sandy'] = true;} else $this->page['adsense_sandy'] = false;
        } else $this->page['adsense_sandy'] = false;
        if (!$this->page['adsense_sandy']) {
            $this->addJs(Settings::instance()->get('resource'));
            $this->addJs('/plugins/linkonoid/scpadsense/assets/js/adsense.js');          
        } 
    }

    public function onRender()
    {
        $this->page['adsense_hash'] = substr(md5($this->alias),0,10);
        $this->page['adsense_type'] = $this->property('adsense_type') ? $this->property('adsense_type') : Settings::instance()->get('type');
        $this->page['adsense_direction'] = $this->property('adsense_orientation') ? $this->property('adsense_orientation') : Settings::instance()->get('orientation');
        $this->page['adsense_client'] = $this->property('adsense_client') ? $this->property('adsense_client') : Settings::instance()->get('client');
        $this->page['adsense_slot'] = $this->property('adsense_slot') ? $this->property('adsense_slot') : Settings::instance()->get('slot');
        $this->page['adsense_class'] = $this->property('adsense_class') ? $this->property('adsense_class') : '';
        //$this->page['adsense_testing'] = $this->property('adsense_testing') ? $this->property('adsense_testing') : '';        
    }
}
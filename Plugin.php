<?php namespace Linkonoid\SCPAdsense;

use Event;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;
use Linkonoid\SCPAdsense\Components\AdSenseComponent;

/**
 * @package linkonoid\scpadsense
 * @author Max Barulin (https://github.com/linkonoid)
 */ 

class Plugin extends PluginBase
{	    

    public function pluginDetails()
    {
        return [
            'name' => 'SCPAdSense',
            'description' => 'Enables to use AdSense on page',
            'author' => 'Linkonoid',
			'icon' => 'icon-code',
			'homepage'    => 'https://github.com/linkonoid'
        ];
    }
      
	public function registerComponents()
    {
        return [
            AdSenseComponent::class => 'adsense',
        ];
    } 

    public function registerPermissions()
    {      
 		return [
            'linkonoid.scpadsense.access_settings'  => [
                'tab'   => 'linkonoid.scpadsense::lang.plugin.settings.permissions.tab',
                'label' => 'linkonoid.scpadsense::lang.plugin.settings.permissions.label',
			],
        ];
    }

    public function registerSettings()
    {	
        return [
            'settings' => [
                'label' => 'linkonoid.scpadsense::lang.plugin.settings.label',
                'description' => 'linkonoid.scpadsense::lang.plugin.settings.description',
                'category' => 'Shortcodes',
                'icon' => 'icon-code',
                'class' => 'Linkonoid\SCPAdsense\Models\Settings',
				'keywords' => 'linkonoid.scpadsense::lang.plugin.settings.keywords',
                'order' => 550,               
                'permissions' => ['linkonoid.scpadsense.access_settings']
            ]
        ];
	}

	public function boot()
    {    
        Event::listen('linkonoid.shortcodesengine.onshortcodeHandlers', function ($shortcodes) {
            return $shortcodes->registerAllshortcodes(__DIR__.'/shortcodes',$shortcodes);            
        });
    }
       
}

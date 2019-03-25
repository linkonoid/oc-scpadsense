<?php namespace Linkonoid\ShortcodesEngine\Classes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Thunder\Shortcode\Shortcode\ProcessedShortcode;
use Linkonoid\SCPAdsense\Models\Settings;
use Twig;
use File;

class AdSenseShortcode extends Shortcode
{ 
    public function __construct($manager)
    {
        parent::__construct();
        $this->manager = $manager;
        
        if (!is_null(Settings::instance()->get('sandy'))) {
            if (Settings::instance()->get('sandy')) {$this->sandy = true;} else $this->sandy = false;
        } else $this->sandy = false;;
        if (!$this->sandy) {
            $this->manager->addAssets('js', Settings::instance()->get('resource'));
            $this->manager->addAssets('js', '/plugins/linkonoid/scpadsense/assets/js/adsense.js');          
        }
    }
 
    public function init()
    {
        $this->manager->getHandlers()->add('adsense', function(ProcessedShortcode $sc) {

            $hash = $this->manager->getId($sc);
            $testing = $sc->getParameter('testing');
            $type = $sc->getParameter('type');
            $direction = $sc->getParameter('direction');
            $client = $sc->getParameter('client');
            $slot = $sc->getParameter('slot');
            $class = $sc->getParameter('class');
            //google_adtest = "on;
            $output = Twig::parse(File::get(__DIR__.'/../components/adsensecomponent/default.htm'), array(
                'adsense_hash' => $hash,
                'adsense_sandy' => $this->sandy,
                'adsense_type' => !empty($type) ? $type : Settings::instance()->get('type'),
                'adsense_direction' => !empty($direction) ? $direction : Settings::instance()->get('orientation'),
                'adsense_client' => !empty($client) ? $client : Settings::instance()->get('client'),
                'adsense_slot' => !empty($slot) ? $slot : Settings::instance()->get('slot'),
                'adsense_class' => $class,
            ));
            return $output;
        });
    }
}

 
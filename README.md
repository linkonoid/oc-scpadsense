Beginning of work.

First create general default settings. Default variables:

Display Type - Assets type (either "banner" or "fixed")
Direction - Assets direction (either "left", "right", "top", "bottom")
AdSense Client-ID - AdSense client
AdSense Slot-ID - AdSense slot
On sandbox mode - Enables a demo mode for local purpose
AdSense API JavaScript - AdSense script url (https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js)



1. Work use Component "Adsense" ("SCPADSENSE" plugin, "SCP" signify "ShortCodesPlugin").
Component settings variables:

Display Type - Assets type (either "banner" or "fixed"), if not set is taken from default plugin settings
Direction - Assets direction (either "left", "right", "top", "bottom"), if not set is taken from default plugin settings
AdSense Client-ID - AdSense client-id, if not set is taken from default plugin settings
AdSense Slot-ID - AdSense slot-id, if not set is taken from default plugin settings
On sandbox mode - Enables a demo mode for local purpose
Class - specifed class for this AdSense blok adding to class="adsbygoogle ..YOUR CLASS..")



2. Work use shortcode (works only with ShortcodesEngine plugin present):

[adsense type="" direction="" client="" slot="" class=""][/adsense]

type - either "banner" or "fixed", if not set is taken from default plugin settings
direction - either "left", "right", "top", "bottom", if not set is taken from default plugin settings
client - AdSense client-id, if not set is taken from default plugin settings
slot - AdSense slot-id, if not set is taken from default plugin settings
class - specifed class for this AdSense blok adding to class="adsbygoogle ..YOUR CLASS..")


Use Twig for this shortcode:
{% set twig_adsense = '[adsense type="" direction="" client="" slot="" class=""][/adsense]' %} {{ twig_adsense|shortcodes }}
 
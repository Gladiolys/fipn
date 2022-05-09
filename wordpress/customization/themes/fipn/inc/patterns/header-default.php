<?php
/**
 * Default header block pattern
 */
return [
	'title' => __('Default header', 'fipn'),
	'categories' => ['header'],
	'blockTypes' => ['core/template-part/header'],
	'content' =>
		'
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"},"className":"header"} -->
<div class="wp-block-group alignwide header">
    <!-- wp:group {"layout":{"type":"flex"},"className":"header__logo"} -->
    <div class="wp-block-group header__logo">
        <!-- wp:site-logo {"width":63} /-->
        <!-- wp:site-title {"className":"header__site-title"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"},"className":"header__right"} -->
    <div class="wp-block-group header__right">
        <!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"className":"header__navigation"} -->
            <!-- wp:navigation-submenu {"label":"'. __('About faculty', 'fipn') .'","type":"page","id":193,"url":"http://10.227.22.5/o-fakultete/","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Dean\'s office', 'fipn') .'","type":"page","id":203,"url":"http://10.227.22.5/o-fakultete/dekanat/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Mission & history', 'fipn') .'","type":"page","id":205,"url":"http://10.227.22.5/o-fakultete/missija-i-istorija/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Departments', 'fipn') .'","type":"page","id":207,"url":"http://10.227.22.5/o-fakultete/kafedry/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Dissertation councils', 'fipn') .'","type":"page","id":209,"url":"http://10.227.22.5/o-fakultete/dissertacionnye-sovety/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Accreditation', 'fipn') .'","type":"page","id":211,"url":"http://10.227.22.5/o-fakultete/akkreditacija/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Contacts', 'fipn') .'","type":"page","id":254,"url":"http://10.227.22.5/o-fakultete/kontakty/","kind":"post-type","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
                <!-- wp:navigation-submenu {"label":"'. __('Applicant', 'fipn') .'","type":"page","id":195,"url":"http://10.227.22.5/abiturientu/","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Bachelor\'s degree', 'fipn') .'","type":"page","id":213,"url":"http://10.227.22.5/abiturientu/bakalavriat/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Master\'s degree', 'fipn') .'","type":"page","id":215,"url":"http://10.227.22.5/abiturientu/magistratura/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Graduate school', 'fipn') .'","type":"page","id":217,"url":"http://10.227.22.5/abiturientu/aspirantura/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Scholarships and competitions', 'fipn') .'","type":"page","id":219,"url":"http://10.227.22.5/abiturientu/stipendii-i-konkursy/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Dormitory', 'fipn') .'","type":"page","id":221,"url":"http://10.227.22.5/abiturientu/obshhezhitie/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Accessible environment', 'fipn') .'","rel":"https://www.tsu.ru/sveden/ovz.php","url":"https://www.tsu.ru/sveden/ovz.php","kind":"custom","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
            <!-- wp:navigation-submenu {"label":"'. __('Student', 'fipn') .'","type":"page","id":197,"url":"http://10.227.22.5/studentu/","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Schedule', 'fipn') .'","rel":"https://intime.tsu.ru/","url":"https://intime.tsu.ru/","kind":"custom","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('E-learning', 'fipn') .'","type":"page","id":225,"url":"http://10.227.22.5/studentu/jelektronnoe-obuchenie/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Teaching staff', 'fipn') .'","type":"page","id":227,"url":"http://10.227.22.5/studentu/prepodavatelskij-sostav/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Order certificates', 'fipn') .'","rel":"http://web.tsu.ru/poluchenie-spravki-ob-obuchenii","url":"http://web.tsu.ru/poluchenie-spravki-ob-obuchenii","kind":"custom","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Normative documents', 'fipn') .'","type":"page","id":229,"url":"http://10.227.22.5/studentu/normativnyj-dokumenty/","kind":"post-type","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
                <!-- wp:navigation-submenu {"label":"'. __('Science', 'fipn') .'","type":"page","id":201,"url":"http://10.227.22.5/nauka/","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Publications', 'fipn') .'","type":"page","id":231,"url":"http://10.227.22.5/nauka/publikacii/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('International cooperation', 'fipn') .'","type":"page","id":233,"url":"http://10.227.22.5/nauka/mezhdunarodnoe-sotrudnichestvo/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('TSU Bulletin.History', 'fipn') .'","rel":"http://journals.tsu.ru/history/","url":"http://journals.tsu.ru/history/","kind":"custom","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Laboratory of social anthropological research', 'fipn') .'","type":"page","id":235,"url":"http://10.227.22.5/nauka/laboratorija-socialno-antropologicheskih-issledovanij/","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Library', 'fipn') .'","rel":"https://vital.lib.tsu.ru/vital/access/manager/Index","url":"https://vital.lib.tsu.ru/vital/access/manager/Index","kind":"custom","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
        <!-- /wp:navigation -->
        <!-- wp:group {"layout":{"type":"flex"},"className":"header__icons"} -->
        <div class="wp-block-group header__icons">
            <!-- wp:group {"layout":{"type":"flex"},"className":"header__action-buttons"} -->
            <div class="wp-block-group header__action-buttons">
                <!-- wp:html -->
                    <button class="header__button">
                    <object data="' .
    esc_url(get_template_directory_uri()) .
    '/assets/icons/search.svg" alt="' .
    esc_attr__('Search icon', 'fipn') .
    '" width="20px" height="20px"></object>
                    </button>
                <!-- /wp:html -->
                <!-- wp:shortcode -->
                    [bvi]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group {"layout":{"inherit":true},"className":"header__language-switcher"} -->
            <div class="wp-block-group header__language-switcher">
                <!-- wp:shortcode -->
                    [languages-switcher]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->',
];

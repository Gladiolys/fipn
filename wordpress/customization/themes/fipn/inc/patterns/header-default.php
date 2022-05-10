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
            <!-- wp:navigation-submenu {"label":"'. __('About faculty', 'fipn') .'","type":"page","id":193,"url":"'. __('/en/about-faculty/', 'fipn') .'","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Dean\'s office', 'fipn') .'","type":"page","id":203,"url":"'. __('/en/about-faculty/dean-s-office/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Mission & history', 'fipn') .'","type":"page","id":205,"url":"'. __('/en/about-faculty/mission-history/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Departments', 'fipn') .'","type":"page","id":207,"url":"'. __('/en/about-faculty/departments/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Dissertation councils', 'fipn') .'","type":"page","id":209,"url":"'. __('/en/about-faculty/dissertation-councils/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Accreditation', 'fipn') .'","type":"page","id":211,"url":"'. __('/en/about-faculty/accreditation/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Contacts', 'fipn') .'","type":"page","id":254,"url":"'. __('/en/about-faculty/contacts/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
                <!-- wp:navigation-submenu {"label":"'. __('Applicant', 'fipn') .'","type":"page","id":195,"url":"'. __('/en/applicant/', 'fipn') .'","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Bachelor\'s degree', 'fipn') .'","type":"page","id":213,"url":"'. __('/en/applicant/bachelor-s-degree/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Master\'s degree', 'fipn') .'","type":"page","id":215,"url":"'. __('/en/applicant/master-s-degree/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Graduate school', 'fipn') .'","type":"page","id":217,"url":"'. __('/en/applicant/graduate-school/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Scholarships and competitions', 'fipn') .'","type":"page","id":219,"url":"'. __('/en/applicant/scholarships-and-competitions/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Dormitory', 'fipn') .'","type":"page","id":221,"url":"'. __('/en/applicant/dormitory/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Accessible environment', 'fipn') .'","rel":"https://www.tsu.ru/sveden/ovz.php","url":"https://www.tsu.ru/sveden/ovz.php","kind":"custom","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
            <!-- wp:navigation-submenu {"label":"'. __('Student', 'fipn') .'","type":"page","id":197,"url":"'. __('/en/student/', 'fipn') .'","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Schedule', 'fipn') .'","rel":"https://intime.tsu.ru/","url":"https://intime.tsu.ru/","kind":"custom","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('E-learning', 'fipn') .'","type":"page","id":225,"url":"'. __('/en/student/e-learning/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Teaching staff', 'fipn') .'","type":"page","id":227,"url":"'. __('/en/student/teaching-staff/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Order certificates', 'fipn') .'","rel":"http://web.tsu.ru/poluchenie-spravki-ob-obuchenii","url":"http://web.tsu.ru/poluchenie-spravki-ob-obuchenii","kind":"custom","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Normative documents', 'fipn') .'","type":"page","id":229,"url":"'. __('/en/student/normative-documents/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
            <!-- /wp:navigation-submenu -->
                <!-- wp:navigation-submenu {"label":"'. __('Science', 'fipn') .'","type":"page","id":201,"url":"'. __('/en/science/', 'fipn') .'","kind":"post-type","isTopLevelItem":true} -->
                <!-- wp:navigation-link {"label":"'. __('Publications', 'fipn') .'","type":"page","id":231,"url":"'. __('/en/science/publications/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('International cooperation', 'fipn') .'","type":"page","id":233,"url":"'. __('/en/science/international-cooperation/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('TSU Bulletin.History', 'fipn') .'","rel":"http://journals.tsu.ru/history/","url":"http://journals.tsu.ru/history/","kind":"custom","isTopLevelLink":false} /-->
                <!-- wp:navigation-link {"label":"'. __('Laboratory of social anthropological research', 'fipn') .'","type":"page","id":235,"url":"'. __('/en/science/laboratory-of-social-anthropological-research/', 'fipn') .'","kind":"post-type","isTopLevelLink":false} /-->
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

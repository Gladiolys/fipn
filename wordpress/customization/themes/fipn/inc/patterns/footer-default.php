<?php
/**
 * Default footer
 */
return [
	'title' => __('Default footer', 'fipn'),
	'categories' => ['footer'],
	'blockTypes' => ['core/template-part/footer'],
	'content' =>
		'
<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
<div class="wp-block-group alignwide footer">
    <!-- wp:html -->
    <div class="footer__menu">
        <div class="footer__menu-line-wrapper">
            <hr class="footer__menu-line">
        </div>
        <ul class="footer__menu-section">
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/', 'fipn') .'">
                   <h5 class="footer__menu-section-header">
                          '. __('About faculty', 'fipn') .'
                    </h5>
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/dean-s-office/', 'fipn') .'">
                '. __('Dean\'s office', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/mission-history/', 'fipn') .'">
                '. __('Mission & history', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/departments/', 'fipn') .'">
                '. __('Departments', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/dissertation-councils/', 'fipn') .'">
                '. __('Dissertation councils', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/accreditation/', 'fipn') .'">
                '. __('Accreditation', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/about-faculty/contacts/', 'fipn') .'">
                '. __('Contacts', 'fipn') .'
                </a>
            </li>
        </ul>
        <div class="footer__menu-line-wrapper">
            <hr class="footer__menu-line">
        </div>
        <ul class="footer__menu-section">
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/applicant/', 'fipn') .'">
                    <h5 class="footer__menu-section-header">
                          '. __('Applicant', 'fipn') .'
                    </h5>
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/applicant/bachelor-s-degree/', 'fipn') .'">
                '. __('Bachelor\'s degree', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/applicant/master-s-degree/', 'fipn') .'">
                '. __('Master\'s degree', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/applicant/graduate-school/', 'fipn') .'">
                '. __('Graduate school', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/applicant/scholarships-and-competitions/', 'fipn') .'">
                '. __('Scholarships and competitions', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/applicant/dormitory/', 'fipn') .'">
                '. __('Dormitory', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="https://www.tsu.ru/sveden/ovz.php">
                '. __('Accessible environment', 'fipn') .'
                </a>
            </li>
        </ul>
        <div class="footer__menu-line-wrapper">
            <hr class="footer__menu-line">
        </div>
        <ul class="footer__menu-section">
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/student/', 'fipn') .'">
                    <h5 class="footer__menu-section-header">
                        '. __('Student', 'fipn') .'
                    </h5>
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="https://intime.tsu.ru/">
                '. __('Schedule', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/student/e-learning/', 'fipn') .'">
                '. __('E-learning', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/student/teaching-staff/', 'fipn') .'">
                '. __('Teaching staff', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="http://web.tsu.ru/poluchenie-spravki-ob-obuchenii">
                '. __('Order certificates', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/student/normative-documents/', 'fipn') .'">
                '. __('Normative documents', 'fipn') .'
                </a>
            </li>
        </ul>
        <div class="footer__menu-line-wrapper">
            <hr class="footer__menu-line">
        </div>
        <ul class="footer__menu-section">
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/science/', 'fipn') .'">
                    <h5 class="footer__menu-section-header">
                        '. __('Science', 'fipn') .'
                    </h5>
                </a>
            </li>
               <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/science/publications/', 'fipn') .'">
                '. __('Publications', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/science/international-cooperation/', 'fipn') .'">
                '. __('International cooperation', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="http://journals.tsu.ru/history/">
                '. __('TSU Bulletin.History', 'fipn') .'
                </a>
            </li>
            <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="'. __('/en/science/laboratory-of-social-anthropological-research/', 'fipn') .'">
                '. __('Laboratory of social anthropological research', 'fipn') .'
                </a>
            </li>
             <li class="footer__menu-item">
                <a class="footer__menu-item-link" href="https://vital.lib.tsu.ru/vital/access/manager/Index">
                '. __('Library', 'fipn') .'
                </a>
            </li>
        </ul>
    </div>
    <hr class="footer__section-divider">
    <section class="footer__contacts">
        <div class="footer__contacts-item">
            <a class="footer__tsu-logo-link" href="/">
                <object data="' .
		esc_url(get_template_directory_uri()) .
		'/assets/icons/'. __('footer-logo-en', 'fipn') .'.svg" alt="' .
		esc_attr__('TSU Logo icon', 'fipn') .
		'" width="188px" height="82px"></object>
            </a>
        </div>
        <div class="footer__contacts-item">
            <h5 class="footer__contacts-item-header">'. __('Dean\'s office address', 'fipn') .':</h5>
            <p class="footer__contacts-item-content footer__contacts-address">
            '. __('34 Lenin Ave., TSU Building No. 3, 3rd floor, room 32', 'fipn') .'
            </p>
        </div>
        <div class="footer__contacts-item">
            <h5 class="footer__contacts-item-header">'. __('Dean\'s office E-mail', 'fipn') .':</h5>
            <p class="footer__contacts-item-content">
                <a class="footer__contacts-item-link" href="mailto:if.tgu@mail.ru">if.tgu@mail.ru</a>
            </p>
             <h5 class="footer__contacts-item-header">'. __('Screening committee', 'fipn') .':</h5>
            <p class="footer__contacts-item-content">
                <a class="footer__contacts-item-link" href="mailto:ab.fipn@gmail.com">ab.fipn@gmail.com</a>
            </p>
        </div>
        <div class="footer__contacts-item">
            <h5 class="footer__contacts-item-header">'. __('Dean\'s office phone', 'fipn') .':</h5>
            <p class="footer__contacts-item-content">
                <a class="footer__contacts-item-link" href="tel:+73822785212">+7 (3822) 785-212</a>
            </p>
            <div class="footer__social-icons">
                <a class="footer__vk-icon" href="https://vk.com/fipn_tsu">
              <object data="' .
		esc_url(get_template_directory_uri()) .
		'/assets/icons/vk.svg" alt="' .
		esc_attr__('VK icon', 'fipn') .
		'" width="31px" height="18px"></object>
                </a>
            </div>
        </div>
    </section>
    <section class="footer__end">
        <div class="footer__end-content">
            <p class="footer__faculty-label has-caption-font-size">
            © '. __('Department of history and political science', 'fipn') .' ' . date('Y') . '
            </p>
            <div class="footer__end-line-wrapper">
                <hr class="footer__end-line">
            </div>
            <p class="footer__politic has-caption-font-size">
                <a class="footer__politic-link" href="'. __('/uslovija-ispolzovanija-materialov/', 'fipn') .'">
                '. __('Terms of use of materials', 'fipn') .'
                </a>
            </p>
            <p class="footer__politic has-caption-font-size">
              <a class="footer__politic-link" href="'. __('/politika-konfidencialnosti/', 'fipn') .'">
                '. __('Privacy policy', 'fipn') .'
              </a>
           </p>
        </div>
    </section>
    <!-- /wp:html -->
</div>
<!-- /wp:group -->',
];

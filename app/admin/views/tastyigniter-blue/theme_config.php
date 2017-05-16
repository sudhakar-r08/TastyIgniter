<?php if (!defined('BASEPATH')) exit('No direct access allowed');

/**
 * Theme configuration options for admin panel customization.
 * This file contains an array of options for use with the theme customizer.
 * ONLY $theme = array() allowed
 *
 */

// Set a custom theme title.
$theme['title'] = 'TastyIgniter Admin Blue';
$theme['author'] = 'SamPoyigi';
$theme['version'] = '1.1';
$theme['description'] = 'Responsive theme for admin panel';

$theme['nav_menu'] = [
    'dashboard'    => [
        'priority'   => '0',
        'class'      => 'dashboard admin',
        'href'       => admin_url('dashboard'),
        'icon'       => 'fa-dashboard',
        'title'      => lang('menu_dashboard'),
        'permission' => 'Admin.Dashboard',
    ],
    'kitchen'      => [
        'priority'   => '1',
        'class'      => 'kitchen',
        'icon'       => 'fa-cutlery',
        'title'      => lang('menu_kitchen'),
        'permission' => 'Admin.Menus|Admin.MenuOptions|Admin.Categories',
        'child'      => [
            'menus'        => ['priority' => '1', 'class' => 'menus', 'href' => admin_url('menus'), 'title' => lang('menu_menu'), 'permission' => 'Admin.Menus'],
            'menu_options' => ['priority' => '2', 'class' => 'menu_options', 'href' => admin_url('menu_options'), 'title' => lang('menu_option'), 'permission' => 'Admin.MenuOptions'],
            'categories'   => ['priority' => '3', 'class' => 'categories', 'href' => admin_url('categories'), 'title' => lang('menu_category'), 'permission' => 'Admin.Categories'],
        ],
    ],
    'sales'        => [
        'priority'   => '2',
        'class'      => 'sales',
        'icon'       => 'fa-bar-chart-o',
        'title'      => lang('menu_sale'),
        'permission' => 'Admin.Orders|Admin.Reservations|Admin.Coupons',
        'child'      => [
            'orders'       => ['priority' => '1', 'class' => 'orders', 'href' => admin_url('orders'), 'title' => lang('menu_order'), 'permission' => 'Admin.Orders'],
            'reservations' => ['priority' => '2', 'class' => 'reservations', 'href' => admin_url('reservations'), 'title' => lang('menu_reservation'), 'permission' => 'Admin.Reservations'],
            'coupons'      => ['priority' => '3', 'class' => 'coupons', 'href' => admin_url('coupons'), 'title' => lang('menu_coupon'), 'permission' => 'Admin.Coupons'],
        ],
    ],
    'marketing'    => [
        'priority'   => '3',
        'class'      => 'marketing',
        'icon'       => 'fa-line-chart',
        'title'      => lang('menu_marketing'),
        'permission' => 'Admin.Banners|Admin.Reviews|Admin.Messages',
        'child'      => [
            'reviews'  => ['priority' => '1', 'class' => 'reviews', 'href' => admin_url('reviews'), 'title' => lang('menu_review'), 'permission' => 'Admin.Reviews'],
            'messages' => ['priority' => '2', 'class' => 'messages', 'href' => admin_url('messages'), 'title' => lang('menu_messages'), 'permission' => 'Admin.Messages'],
            'banners'  => ['priority' => '3', 'class' => 'banners', 'href' => admin_url('banners'), 'title' => lang('menu_banner'), 'permission' => 'Admin.Banners'],
        ],
    ],
    'restaurant'   => [
        'priority'   => '4',
        'class'      => 'restaurant',
        'icon'       => 'fa-map-marker',
        'title'      => lang('menu_restaurant'),
        'permission' => 'Admin.Locations|Admin.Tables',
        'child'      => [
            'locations' => ['priority' => '1', 'class' => 'locations', 'href' => admin_url('locations'), 'title' => lang('menu_location'), 'permission' => 'Admin.Locations'],
            'tables'    => ['priority' => '2', 'class' => 'tables', 'href' => admin_url('tables'), 'title' => lang('menu_table'), 'permission' => 'Admin.Tables'],
        ],
    ],
    'users'        => [
        'priority'   => '10',
        'class'      => 'users',
        'icon'       => 'fa-user',
        'title'      => lang('menu_user'),
        'permission' => 'Admin.Customers|Admin.CustomerGroups|Admin.CustomersOnline|Admin.Staffs|Admin.StaffGroups',
        'child'      => [
            'customers'        => ['priority' => '1', 'class' => 'customers', 'href' => admin_url('customers'), 'title' => lang('menu_customer'), 'permission' => 'Admin.Customers'],
            'customer_groups'  => ['priority' => '2', 'class' => 'customer_groups', 'href' => admin_url('customer_groups'), 'title' => lang('menu_customer_group'), 'permission' => 'Admin.CustomerGroups'],
            'customers_online' => ['priority' => '3', 'class' => 'customers_online', 'href' => admin_url('customers_online'), 'title' => lang('menu_customer_online'), 'permission' => 'Admin.CustomersOnline'],
            'staffs'           => ['priority' => '4', 'class' => 'staffs', 'href' => admin_url('staffs'), 'title' => lang('menu_staff'), 'permission' => 'Admin.Staffs'],
            'staff_groups'     => ['priority' => '5', 'class' => 'staff_groups', 'href' => admin_url('staff_groups'), 'title' => lang('menu_staff_group'), 'permission' => 'Admin.StaffGroups'],
            'activities'       => ['priority' => '6', 'class' => 'activities', 'href' => admin_url('activities'), 'title' => lang('menu_activities'), 'permission' => 'Admin.Activities'],
        ],
    ],
    'extensions'   => [
        'priority'   => '20',
        'class'      => 'extensions',
        'href'       => admin_url('extensions'),
        'icon'       => 'fa-puzzle-piece',
        'title'      => lang('menu_extension'),
        'permission' => 'Admin.Extensions',
    ],
    'design'       => [
        'priority'   => '30',
        'class'      => 'design',
        'icon'       => 'fa-paint-brush',
        'title'      => lang('menu_design'),
        'permission' => 'Site.Pages|Site.Layouts|Site.Themes|Admin.MailTemplates',
        'child'      => [
            'pages'          => ['priority' => '1', 'class' => 'pages', 'href' => admin_url('pages'), 'title' => lang('menu_page'), 'permission' => 'Site.Pages'],
            'layouts'        => ['priority' => '2', 'class' => 'layouts', 'href' => admin_url('layouts'), 'title' => lang('menu_layout'), 'permission' => 'Site.Layouts'],
            'themes'         => ['priority' => '3', 'class' => 'themes', 'href' => admin_url('themes'), 'title' => lang('menu_theme'), 'permission' => 'Site.Themes'],
            'mail_templates' => ['priority' => '4', 'class' => 'mail_templates', 'href' => admin_url('mail_templates'), 'title' => lang('menu_mail_template'), 'permission' => 'Admin.MailTemplates'],
        ],
    ],
    'localisation' => [
        'priority'   => '40',
        'class'      => 'localisation',
        'icon'       => 'fa-globe',
        'title'      => lang('menu_localisation'),
        'permission' => 'Site.Languages|Site.Currencies|Site.Countries|Admin.SecurityQuestions|Admin.Ratings|Admin.Statuses',
        'child'      => [
            'languages'          => ['priority' => '1', 'class' => 'languages', 'href' => admin_url('languages'), 'title' => lang('menu_language'), 'permission' => 'Site.Languages'],
            'currencies'         => ['priority' => '2', 'class' => 'currencies', 'href' => admin_url('currencies'), 'title' => lang('menu_currency'), 'permission' => 'Site.Currencies'],
            'countries'          => ['priority' => '3', 'class' => 'countries', 'href' => admin_url('countries'), 'title' => lang('menu_country'), 'permission' => 'Site.Countries'],
            'mealtimes'          => ['priority' => '4', 'class' => 'mealtimes', 'href' => admin_url('mealtimes'), 'title' => lang('menu_mealtimes'), 'permission' => 'Admin.Mealtimes'],
            'security_questions' => ['priority' => '5', 'class' => 'security_questions', 'href' => admin_url('security_questions'), 'title' => lang('menu_security_question'), 'permission' => 'Admin.SecurityQuestions'],
            'ratings'            => ['priority' => '6', 'class' => 'ratings', 'href' => admin_url('ratings'), 'title' => lang('menu_rating'), 'permission' => 'Admin.Ratings'],
            'statuses'           => ['priority' => '7', 'class' => 'statuses', 'href' => admin_url('statuses'), 'title' => lang('menu_status'), 'permission' => 'Admin.Statuses'],
        ],
    ],
    'system'       => [
        'priority'   => '999',
        'class'      => 'system',
        'icon'       => 'fa-cog',
        'title'      => lang('menu_system'),
        'permission' => 'Admin.Permissions|Admin.ErrorLogs|Site.Settings',
        'child'      => [
            'updates'     => ['priority' => '1', 'class' => 'updates', 'href' => admin_url('updates'), 'title' => lang('menu_updates'), 'permission' => 'Site.Updates'],
            'settings'    => ['priority' => '2', 'class' => 'settings', 'href' => admin_url('settings'), 'title' => lang('menu_setting'), 'permission' => 'Site.Settings'],
            'permissions' => ['priority' => '3', 'class' => 'permissions', 'href' => admin_url('permissions'), 'title' => lang('menu_permission'), 'permission' => 'Admin.Permissions'],
//			'uri_routes' => array('priority' => '3', 'class' => 'uri_routes', 'href' => admin_url('uri_routes'), 'title' => lang('menu_uri_route')),
            'error_logs'  => ['priority' => '4', 'class' => 'error_logs', 'href' => admin_url('error_logs'), 'title' => lang('menu_error_log'), 'permission' => 'Admin.ErrorLogs'],
            'tools'       => [
                'priority'   => '5',
                'class'      => 'tools',
                'title'      => lang('menu_tool'),
                'permission' => 'Admin.MediaManager|Admin.Maintenance',
                'child'      => [
                    'image_manager' => ['priority' => '1', 'class' => 'image_manager', 'href' => admin_url('image_manager'), 'title' => lang('menu_media_manager'), 'permission' => 'Admin.MediaManager'],
                    'maintenance'   => ['priority' => '2', 'class' => 'maintenance', 'href' => admin_url('maintenance'), 'title' => lang('menu_maintenance'), 'permission' => 'Admin.Maintenance'],
                ],
            ],

        ],
    ],
    'collapse'     => [
        'priority' => '9999',
        'class'    => 'hidden-xs sidebar-toggle',
        'icon'     => 'fa-chevron-circle-left',
        'title'    => lang('menu_collapse'),
    ],
];


/* End of file theme_config.php */
/* Location: ./admin/views/themes/tastyigniter-blue/theme_config.php */
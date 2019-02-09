<?php
    // load necessary JS and CSS files for theme
    function anew_files() {
        // js loading
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js');
        // wp_enqueue_script('foundation_scripts', get_template_directory_uri() . '/js/vendor/foundation.min.js');
        // wp_enqueue_script('what-input_scripts', get_template_directory_uri() . '/js/vendor/what-input.js');

        // stylesheet loading
        wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600,700,800');
        wp_enqueue_style('foundation_styles', get_template_directory_uri() . '/styles/foundation.css');
        wp_enqueue_style('navigation_styles', get_template_directory_uri() . '/styles/navigation.css');
        wp_enqueue_style('home_styles', get_template_directory_uri() . '/styles/home.css');
        wp_enqueue_style('blog_styles', get_template_directory_uri() . '/styles/blog.css');
        wp_enqueue_style('faq_styles', get_template_directory_uri() . '/styles/faq.css');
        wp_enqueue_style('started_styles', get_template_directory_uri() . '/styles/get-started.css');
        wp_enqueue_style('footer_styles', get_template_directory_uri() . '/styles/footer.css');
        wp_enqueue_style('fontawesome_icons', '//use.fontawesome.com/releases/v5.7.0/css/all.css');
        wp_enqueue_style('motion_ui', '//cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css');
        wp_enqueue_style('global_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'anew_files');

    // remove the WP header margin
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    // allow featured images for posts
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 'auto', 450);

    // CUSTOM WPFORM FORM
    if ( class_exists( 'WPForms_Template', false ) ) :
        /**
         * Simple Contact Form
         * Template for WPForms.
         */
        class WPForms_Template_simple_contact_form extends WPForms_Template {

            /**
             * Primary class constructor.
             *
             * @since 1.0.0
             */
            public function init() {

                // Template name
                $this->name = 'Simple Contact Form';

                // Template slug
                $this->slug = 'simple_contact_form';

                // Template description
                $this->description = '';

                // Template field and settings
                $this->data = array (
            'field_id' => 8,
            'fields' => array (
                1 => array (
                    'id' => '1',
                    'type' => 'name',
                    'label' => 'First Name',
                    'format' => 'simple',
                    'required' => '1',
                    'size' => 'large',
                    'css' => 'wpforms-one-half wpforms-first',
                ),
                2 => array (
                    'id' => '2',
                    'type' => 'text',
                    'label' => 'Occupation',
                    'required' => '1',
                    'size' => 'large',
                    'css' => 'wpforms-one-half',
                ),
                3 => array (
                    'id' => '3',
                    'type' => 'name',
                    'label' => 'Last Name',
                    'format' => 'simple',
                    'required' => '1',
                    'size' => 'large',
                    'css' => 'wpforms-one-half wpforms-first',
                ),
                4 => array (
                    'id' => '4',
                    'type' => 'select',
                    'label' => 'Country',
                    'choices' => array (
                        4 => array (
                            'label' => 'Afghanistan',
                        ),
                        5 => array (
                            'label' => 'Åland Islands',
                        ),
                        6 => array (
                            'label' => 'Albania',
                        ),
                        7 => array (
                            'label' => 'Algeria',
                        ),
                        8 => array (
                            'label' => 'American Samoa',
                        ),
                        9 => array (
                            'label' => 'Andorra',
                        ),
                        10 => array (
                            'label' => 'Angola',
                        ),
                        11 => array (
                            'label' => 'Anguilla',
                        ),
                        12 => array (
                            'label' => 'Antarctica',
                        ),
                        13 => array (
                            'label' => 'Antigua and Barbuda',
                        ),
                        14 => array (
                            'label' => 'Argentina',
                        ),
                        15 => array (
                            'label' => 'Armenia',
                        ),
                        16 => array (
                            'label' => 'Aruba',
                        ),
                        17 => array (
                            'label' => 'Australia',
                        ),
                        18 => array (
                            'label' => 'Austria',
                        ),
                        19 => array (
                            'label' => 'Azerbaijan',
                        ),
                        20 => array (
                            'label' => 'Bahamas',
                        ),
                        21 => array (
                            'label' => 'Bahrain',
                        ),
                        22 => array (
                            'label' => 'Bangladesh',
                        ),
                        23 => array (
                            'label' => 'Barbados',
                        ),
                        24 => array (
                            'label' => 'Belarus',
                        ),
                        25 => array (
                            'label' => 'Belgium',
                        ),
                        26 => array (
                            'label' => 'Belize',
                        ),
                        27 => array (
                            'label' => 'Benin',
                        ),
                        28 => array (
                            'label' => 'Bermuda',
                        ),
                        29 => array (
                            'label' => 'Bhutan',
                        ),
                        30 => array (
                            'label' => 'Bolivia (Plurinational State of)',
                        ),
                        31 => array (
                            'label' => 'Bosnia and Herzegovina',
                        ),
                        32 => array (
                            'label' => 'Botswana',
                        ),
                        33 => array (
                            'label' => 'Bouvet Island',
                        ),
                        34 => array (
                            'label' => 'Brazil',
                        ),
                        35 => array (
                            'label' => 'British Indian Ocean Territory',
                        ),
                        36 => array (
                            'label' => 'Brunei Darussalam',
                        ),
                        37 => array (
                            'label' => 'Bulgaria',
                        ),
                        38 => array (
                            'label' => 'Burkina Faso',
                        ),
                        39 => array (
                            'label' => 'Burundi',
                        ),
                        40 => array (
                            'label' => 'Cabo Verde',
                        ),
                        41 => array (
                            'label' => 'Cambodia',
                        ),
                        42 => array (
                            'label' => 'Cameroon',
                        ),
                        43 => array (
                            'label' => 'Canada',
                        ),
                        44 => array (
                            'label' => 'Cayman Islands',
                        ),
                        45 => array (
                            'label' => 'Central African Republic',
                        ),
                        46 => array (
                            'label' => 'Chad',
                        ),
                        47 => array (
                            'label' => 'Chile',
                        ),
                        48 => array (
                            'label' => 'China',
                        ),
                        49 => array (
                            'label' => 'Christmas Island',
                        ),
                        50 => array (
                            'label' => 'Cocos (Keeling) Islands',
                        ),
                        51 => array (
                            'label' => 'Colombia',
                        ),
                        52 => array (
                            'label' => 'Comoros',
                        ),
                        53 => array (
                            'label' => 'Congo',
                        ),
                        54 => array (
                            'label' => 'Congo (Democratic Republic of the)',
                        ),
                        55 => array (
                            'label' => 'Cook Islands',
                        ),
                        56 => array (
                            'label' => 'Costa Rica',
                        ),
                        57 => array (
                            'label' => 'Côte d\'Ivoire',
                        ),
                        58 => array (
                            'label' => 'Croatia',
                        ),
                        59 => array (
                            'label' => 'Cuba',
                        ),
                        60 => array (
                            'label' => 'Curaçao',
                        ),
                        61 => array (
                            'label' => 'Cyprus',
                        ),
                        62 => array (
                            'label' => 'Czech Republic',
                        ),
                        63 => array (
                            'label' => 'Denmark',
                        ),
                        64 => array (
                            'label' => 'Djibouti',
                        ),
                        65 => array (
                            'label' => 'Dominica',
                        ),
                        66 => array (
                            'label' => 'Dominican Republic',
                        ),
                        67 => array (
                            'label' => 'Ecuador',
                        ),
                        68 => array (
                            'label' => 'Egypt',
                        ),
                        69 => array (
                            'label' => 'El Salvador',
                        ),
                        70 => array (
                            'label' => 'Equatorial Guinea',
                        ),
                        71 => array (
                            'label' => 'Eritrea',
                        ),
                        72 => array (
                            'label' => 'Estonia',
                        ),
                        73 => array (
                            'label' => 'Ethiopia',
                        ),
                        74 => array (
                            'label' => 'Falkland Islands (Malvinas)',
                        ),
                        75 => array (
                            'label' => 'Faroe Islands',
                        ),
                        76 => array (
                            'label' => 'Fiji',
                        ),
                        77 => array (
                            'label' => 'Finland',
                        ),
                        78 => array (
                            'label' => 'France',
                        ),
                        79 => array (
                            'label' => 'French Guiana',
                        ),
                        80 => array (
                            'label' => 'French Polynesia',
                        ),
                        81 => array (
                            'label' => 'French Southern Territories',
                        ),
                        82 => array (
                            'label' => 'Gabon',
                        ),
                        83 => array (
                            'label' => 'Gambia',
                        ),
                        84 => array (
                            'label' => 'Georgia',
                        ),
                        85 => array (
                            'label' => 'Germany',
                        ),
                        86 => array (
                            'label' => 'Ghana',
                        ),
                        87 => array (
                            'label' => 'Gibraltar',
                        ),
                        88 => array (
                            'label' => 'Greece',
                        ),
                        89 => array (
                            'label' => 'Greenland',
                        ),
                        90 => array (
                            'label' => 'Grenada',
                        ),
                        91 => array (
                            'label' => 'Guadeloupe',
                        ),
                        92 => array (
                            'label' => 'Guam',
                        ),
                        93 => array (
                            'label' => 'Guatemala',
                        ),
                        94 => array (
                            'label' => 'Guernsey',
                        ),
                        95 => array (
                            'label' => 'Guinea',
                        ),
                        96 => array (
                            'label' => 'Guinea-Bissau',
                        ),
                        97 => array (
                            'label' => 'Guyana',
                        ),
                        98 => array (
                            'label' => 'Haiti',
                        ),
                        99 => array (
                            'label' => 'Heard Island and McDonald Islands',
                        ),
                        100 => array (
                            'label' => 'Honduras',
                        ),
                        101 => array (
                            'label' => 'Hong Kong',
                        ),
                        102 => array (
                            'label' => 'Hungary',
                        ),
                        103 => array (
                            'label' => 'Iceland',
                        ),
                        104 => array (
                            'label' => 'India',
                        ),
                        105 => array (
                            'label' => 'Indonesia',
                        ),
                        106 => array (
                            'label' => 'Iran (Islamic Republic of)',
                        ),
                        107 => array (
                            'label' => 'Iraq',
                        ),
                        108 => array (
                            'label' => 'Ireland (Republic of)',
                        ),
                        109 => array (
                            'label' => 'Isle of Man',
                        ),
                        110 => array (
                            'label' => 'Israel',
                        ),
                        111 => array (
                            'label' => 'Italy',
                        ),
                        112 => array (
                            'label' => 'Jamaica',
                        ),
                        113 => array (
                            'label' => 'Japan',
                        ),
                        114 => array (
                            'label' => 'Jersey',
                        ),
                        115 => array (
                            'label' => 'Jordan',
                        ),
                        116 => array (
                            'label' => 'Kazakhstan',
                        ),
                        117 => array (
                            'label' => 'Kenya',
                        ),
                        118 => array (
                            'label' => 'Kiribati',
                        ),
                        119 => array (
                            'label' => 'Korea (Democratic People\'s Republic of)',
                        ),
                        120 => array (
                            'label' => 'Korea (Republic of)',
                        ),
                        121 => array (
                            'label' => 'Kuwait',
                        ),
                        122 => array (
                            'label' => 'Kyrgyzstan',
                        ),
                        123 => array (
                            'label' => 'Lao People\'s Democratic Republic',
                        ),
                        124 => array (
                            'label' => 'Latvia',
                        ),
                        125 => array (
                            'label' => 'Lebanon',
                        ),
                        126 => array (
                            'label' => 'Lesotho',
                        ),
                        127 => array (
                            'label' => 'Liberia',
                        ),
                        128 => array (
                            'label' => 'Libya',
                        ),
                        129 => array (
                            'label' => 'Liechtenstein',
                        ),
                        130 => array (
                            'label' => 'Lithuania',
                        ),
                        131 => array (
                            'label' => 'Luxembourg',
                        ),
                        132 => array (
                            'label' => 'Macao',
                        ),
                        133 => array (
                            'label' => 'Macedonia (Republic of)',
                        ),
                        134 => array (
                            'label' => 'Madagascar',
                        ),
                        135 => array (
                            'label' => 'Malawi',
                        ),
                        136 => array (
                            'label' => 'Malaysia',
                        ),
                        137 => array (
                            'label' => 'Maldives',
                        ),
                        138 => array (
                            'label' => 'Mali',
                        ),
                        139 => array (
                            'label' => 'Malta',
                        ),
                        140 => array (
                            'label' => 'Marshall Islands',
                        ),
                        141 => array (
                            'label' => 'Martinique',
                        ),
                        142 => array (
                            'label' => 'Mauritania',
                        ),
                        143 => array (
                            'label' => 'Mauritius',
                        ),
                        144 => array (
                            'label' => 'Mayotte',
                        ),
                        145 => array (
                            'label' => 'Mexico',
                        ),
                        146 => array (
                            'label' => 'Micronesia (Federated States of)',
                        ),
                        147 => array (
                            'label' => 'Moldova (Republic of)',
                        ),
                        148 => array (
                            'label' => 'Monaco',
                        ),
                        149 => array (
                            'label' => 'Mongolia',
                        ),
                        150 => array (
                            'label' => 'Montenegro',
                        ),
                        151 => array (
                            'label' => 'Montserrat',
                        ),
                        152 => array (
                            'label' => 'Morocco',
                        ),
                        153 => array (
                            'label' => 'Mozambique',
                        ),
                        154 => array (
                            'label' => 'Myanmar',
                        ),
                        155 => array (
                            'label' => 'Namibia',
                        ),
                        156 => array (
                            'label' => 'Nauru',
                        ),
                        157 => array (
                            'label' => 'Nepal',
                        ),
                        158 => array (
                            'label' => 'Netherlands',
                        ),
                        159 => array (
                            'label' => 'New Caledonia',
                        ),
                        160 => array (
                            'label' => 'New Zealand',
                        ),
                        161 => array (
                            'label' => 'Nicaragua',
                        ),
                        162 => array (
                            'label' => 'Niger',
                        ),
                        163 => array (
                            'label' => 'Nigeria',
                        ),
                        164 => array (
                            'label' => 'Niue',
                        ),
                        165 => array (
                            'label' => 'Norfolk Island',
                        ),
                        166 => array (
                            'label' => 'Northern Mariana Islands',
                        ),
                        167 => array (
                            'label' => 'Norway',
                        ),
                        168 => array (
                            'label' => 'Oman',
                        ),
                        169 => array (
                            'label' => 'Pakistan',
                        ),
                        170 => array (
                            'label' => 'Palau',
                        ),
                        171 => array (
                            'label' => 'Palestine (State of)',
                        ),
                        172 => array (
                            'label' => 'Panama',
                        ),
                        173 => array (
                            'label' => 'Papua New Guinea',
                        ),
                        174 => array (
                            'label' => 'Paraguay',
                        ),
                        175 => array (
                            'label' => 'Peru',
                        ),
                        176 => array (
                            'label' => 'Philippines',
                        ),
                        177 => array (
                            'label' => 'Pitcairn',
                        ),
                        178 => array (
                            'label' => 'Poland',
                        ),
                        179 => array (
                            'label' => 'Portugal',
                        ),
                        180 => array (
                            'label' => 'Puerto Rico',
                        ),
                        181 => array (
                            'label' => 'Qatar',
                        ),
                        182 => array (
                            'label' => 'Réunion',
                        ),
                        183 => array (
                            'label' => 'Romania',
                        ),
                        184 => array (
                            'label' => 'Russian Federation',
                        ),
                        185 => array (
                            'label' => 'Rwanda',
                        ),
                        186 => array (
                            'label' => 'Saint Barthélemy',
                        ),
                        187 => array (
                            'label' => 'Saint Helena, Ascension and Tristan da Cunha',
                        ),
                        188 => array (
                            'label' => 'Saint Kitts and Nevis',
                        ),
                        189 => array (
                            'label' => 'Saint Lucia',
                        ),
                        190 => array (
                            'label' => 'Saint Martin (French part)',
                        ),
                        191 => array (
                            'label' => 'Saint Pierre and Miquelon',
                        ),
                        192 => array (
                            'label' => 'Saint Vincent and the Grenadines',
                        ),
                        193 => array (
                            'label' => 'Samoa',
                        ),
                        194 => array (
                            'label' => 'San Marino',
                        ),
                        195 => array (
                            'label' => 'Sao Tome and Principe',
                        ),
                        196 => array (
                            'label' => 'Saudi Arabia',
                        ),
                        197 => array (
                            'label' => 'Senegal',
                        ),
                        198 => array (
                            'label' => 'Serbia',
                        ),
                        199 => array (
                            'label' => 'Seychelles',
                        ),
                        200 => array (
                            'label' => 'Sierra Leone',
                        ),
                        201 => array (
                            'label' => 'Singapore',
                        ),
                        202 => array (
                            'label' => 'Sint Maarten (Dutch part)',
                        ),
                        203 => array (
                            'label' => 'Slovakia',
                        ),
                        204 => array (
                            'label' => 'Slovenia',
                        ),
                        205 => array (
                            'label' => 'Solomon Islands',
                        ),
                        206 => array (
                            'label' => 'Somalia',
                        ),
                        207 => array (
                            'label' => 'South Africa',
                        ),
                        208 => array (
                            'label' => 'South Georgia and the South Sandwich Islands',
                        ),
                        209 => array (
                            'label' => 'South Sudan',
                        ),
                        210 => array (
                            'label' => 'Spain',
                        ),
                        211 => array (
                            'label' => 'Sri Lanka',
                        ),
                        212 => array (
                            'label' => 'Sudan',
                        ),
                        213 => array (
                            'label' => 'Suriname',
                        ),
                        214 => array (
                            'label' => 'Svalbard and Jan Mayen',
                        ),
                        215 => array (
                            'label' => 'Swaziland',
                        ),
                        216 => array (
                            'label' => 'Sweden',
                        ),
                        217 => array (
                            'label' => 'Switzerland',
                        ),
                        218 => array (
                            'label' => 'Syrian Arab Republic',
                        ),
                        219 => array (
                            'label' => 'Taiwan, Province of China',
                        ),
                        220 => array (
                            'label' => 'Tajikistan',
                        ),
                        221 => array (
                            'label' => 'Tanzania (United Republic of)',
                        ),
                        222 => array (
                            'label' => 'Thailand',
                        ),
                        223 => array (
                            'label' => 'Timor-Leste',
                        ),
                        224 => array (
                            'label' => 'Togo',
                        ),
                        225 => array (
                            'label' => 'Tokelau',
                        ),
                        226 => array (
                            'label' => 'Tonga',
                        ),
                        227 => array (
                            'label' => 'Trinidad and Tobago',
                        ),
                        228 => array (
                            'label' => 'Tunisia',
                        ),
                        229 => array (
                            'label' => 'Turkey',
                        ),
                        230 => array (
                            'label' => 'Turkmenistan',
                        ),
                        231 => array (
                            'label' => 'Turks and Caicos Islands',
                        ),
                        232 => array (
                            'label' => 'Tuvalu',
                        ),
                        233 => array (
                            'label' => 'Uganda',
                        ),
                        234 => array (
                            'label' => 'Ukraine',
                        ),
                        235 => array (
                            'label' => 'United Arab Emirates',
                        ),
                        236 => array (
                            'label' => 'United Kingdom of Great Britain and Northern Ireland',
                        ),
                        237 => array (
                            'default' => '1',
                            'label' => 'United States of America',
                        ),
                        238 => array (
                            'label' => 'United States Minor Outlying Islands',
                        ),
                        239 => array (
                            'label' => 'Uruguay',
                        ),
                        240 => array (
                            'label' => 'Uzbekistan',
                        ),
                        241 => array (
                            'label' => 'Vanuatu',
                        ),
                        242 => array (
                            'label' => 'Vatican City State',
                        ),
                        243 => array (
                            'label' => 'Venezuela (Bolivarian Republic of)',
                        ),
                        244 => array (
                            'label' => 'Viet Nam',
                        ),
                        245 => array (
                            'label' => 'Virgin Islands (British)',
                        ),
                        246 => array (
                            'label' => 'Virgin Islands (U.S.)',
                        ),
                        247 => array (
                            'label' => 'Wallis and Futuna',
                        ),
                        248 => array (
                            'label' => 'Western Sahara',
                        ),
                        249 => array (
                            'label' => 'Yemen',
                        ),
                        250 => array (
                            'label' => 'Zambia',
                        ),
                        251 => array (
                            'label' => 'Zimbabwe',
                        ),
                    ),
                    'required' => '1',
                    'size' => 'large',
                    'css' => 'wpforms-one-half',
                ),
                5 => array (
                    'id' => '5',
                    'type' => 'number',
                    'label' => 'Phone Number',
                    'required' => '1',
                    'size' => 'large',
                    'placeholder' => '(123)456-7890',
                    'css' => 'wpforms-one-half wpforms-first',
                ),
                6 => array (
                    'id' => '6',
                    'type' => 'select',
                    'label' => 'Preferred Language',
                    'choices' => array (
                        1 => array (
                            'label' => 'First Choice',
                        ),
                        2 => array (
                            'label' => 'Second Choice',
                        ),
                        3 => array (
                            'label' => 'Third Choice',
                        ),
                    ),
                    'size' => 'large',
                    'css' => 'wpforms-one-half',
                ),
                7 => array (
                    'id' => '7',
                    'type' => 'email',
                    'label' => 'Email',
                    'required' => '1',
                    'size' => 'large',
                    'css' => 'wpforms-one-half wpforms-first',
                ),
                8 => array (
                    'id' => '8',
                    'type' => 'submit',
                    'size' => 'large',
                    'css' => 'wpforms-one-half button primary',
                )
            ),
            'settings' => array (
                'form_title' => 'Simple Contact Form',
                'submit_text' => 'Submit',
                'notification_enable' => '1',
                'notifications' => array (
                    1 => array (
                        'email' => '{admin_email}',
                        'subject' => 'New Simple Contact Form Entry',
                        'sender_name' => 'anew',
                        'sender_address' => '{admin_email}',
                        'message' => '{all_fields}',
                    ),
                ),
                'confirmations' => array (
                    1 => array (
                        'type' => 'message',
                        'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
                        'message_scroll' => '1',
                        'page' => '10',
                    ),
                ),
            ),
            'meta' => array (
                'template' => 'simple_contact_form',
            ),
        );
            }
        }
        new WPForms_Template_simple_contact_form;
        endif;

?>
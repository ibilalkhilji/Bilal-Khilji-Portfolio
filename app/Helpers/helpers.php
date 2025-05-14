<?php

function getWorkEmailAddress(): string
{
    return 'ibilalkhilji.dev@gmail.com';
}

if (!function_exists('workExperiences')) {
    function workExperiences(): array
    {
        return [
            [
                'date' => '07-2007 - Present',
                'title' => 'KHAEEJ Infotech',
                'subtitle' => 'Full Stack Developer, Freelancer, Founder',
            ],
            [
                'date' => '03-2019 - 12-2022',
                'title' => 'AJV Exports',
                'subtitle' => 'Software Developer & IT Consultant (Contract)',
            ],
            [
                'date' => '06-2018 - 01-2019',
                'title' => 'Marwar Muslim Educational & Welfare Society',
                'subtitle' => 'Web Developer (Remote/Freelance)',
            ],
            [
                'date' => '05-2014 - 04-2019',
                'title' => 'Mai Khadija Institute of Nursing Sciences',
                'subtitle' => 'Web Developer (Remote/Freelance)',
            ],
        ];
    }
}

if (!function_exists('expertAreas')) {
    function expertAreas(): array
    {
        return [
            [
                'icon' => asset('assets/img/icons/laravel.svg'),
                'title' => 'Laravel',
            ],
            [
                'icon' => asset('assets/img/icons/php.svg'),
                'title' => 'PHP',
            ],
            [
                'icon' => asset('assets/img/icons/mysql.svg'),
                'title' => 'MySQL',
            ],
            [
                'icon' => asset('assets/img/icons/postman.svg'),
                'title' => 'Postman',
            ],
            [
                'icon' => asset('assets/img/icons/notion.svg'),
                'title' => 'Notion',
            ],
            [
                'icon' => asset('assets/img/icons/firebase.svg'),
                'title' => 'Firebase',
            ],
        ];
    }
}

if (!function_exists('reviews')) {
    function reviews(): array
    {
        return [
            [
                'review' => "We used their logo creation services along with their app development services. They have been a pleasure to work with and have been responsive to all questions asked. We have recommended them to some of our clients and will continue to do so as we have been very happy with the logos and mobile app that they have created for us.",
                'person' => "Absar Alam",
                'company' => "KHOJKAR"
            ],
            [
                'review' => "We have been using their services for the last four years and are happy with the quality of service they provide. Social media management requires 24/7 ownership, and we’ve been able to get that. Thanks to the team for being a great partner in our journey.",
                'person' => "Saleem Khilji",
                'company' => "Adarsh Muslim Newspaper"
            ],
            [
                'review' => "We are very happy that we chose them for the development of our new website. It looks great, is easy to navigate, and updates are done in no time. Our customers love it.",
                'person' => "Usama Khilji",
                'company' => "Adarsh Muslim Publication"
            ],
            [
                'review' => "We have worked with them for many years and they have developed several websites for us. Their expertise in website development and graphic design is unmatchable in the industry, along with their quality of work and ongoing support.",
                'person' => "Mr. Atique",
                'company' => "Marwar Muslim Educational & Welfare Society"
            ],
            [
                'review' => "Fantastic work! I am just impressed by their service quality and working strategy. I hired them for the development of my online store, and they have satisfied me fully by delivering an exceptional solution. They have great expertise, are dedicated, attentive, talented, and truly care about client needs. Highly recommended.",
                'person' => "Kamal Gupta",
                'company' => "KBG Mart"
            ],
            [
                'review' => "It was and still is very nice to work with them. The team is very polite and has given me quick answers, always trying to meet our needs. The quality of the work is very good!",
                'person' => "Shadab Khan",
                'company' => "Fashprix"
            ],
            [
                'review' => "All work done by them is exceptional, and I couldn't have it any other way. They delivered as promised, and the work is exactly as requested.",
                'person' => "Aazam Khan",
                'company' => "KabaadKhana App"
            ]
        ];
    }
}

if (!function_exists('projects')) {
    function projects(): array
    {
        return [
            [
                'image' => asset('assets/img/projects/jgk.png'),
                'title' => 'JGK Kirana Store',
                'subtitle' => 'Online Grocery Store | eCommerce Website',
                'url' => 'https://jgkkiranastore.com',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'A user-friendly grocery website that allows customers to browse daily essentials, add items to their cart, and place orders online. The system supports easy order management and home delivery for a local retail business',
            ],
            [
                'image' => asset('assets/img/projects/skoolsathi.png'),
                'title' => 'SkoolSathi',
                'subtitle' => 'School Management System | Web Application',
                'url' => 'https://skoolsathi.in',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'A school management application designed to simplify daily administrative tasks. It includes modules for student records, attendance, exam results, staff management, and communication—helping schools operate more efficiently.',
            ],
            [
                'image' => asset('assets/img/projects/invoicepanda.png'),
                'title' => 'InvoicePanda',
                'subtitle' => 'Invoice Management System | Web Application',
                'url' => 'https://invoicepanda.in',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'An online invoicing solution built for small businesses and professionals. It includes features like recurring invoices, expense tracking, client management, and payment reminders—all designed to streamline billing operations.',
            ],
            [
                'image' => asset('assets/img/projects/artisansjodhpur.png'),
                'title' => 'Artisans Jodhpur',
                'subtitle' => 'Antique Hardware & Furniture Store | Website',
                'url' => 'https://artisansjodhpur.com',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'A product catalog website for handcrafted wooden furniture and home décor. It highlights traditional craftsmanship with detailed galleries, product info, and export-focused presentation to attract global buyers.',
            ],
            [
                'image' => asset('assets/img/projects/adarshmuslim.png'),
                'title' => 'Adarsh Muslim Newspaper ',
                'subtitle' => 'News Platform | Website',
                'url' => 'https://adarshmuslim.com',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'A digital news platform that publishes community news, articles, and religious content. The site is regularly updated and features an intuitive content management system for smooth publishing and user engagement',
            ],
            [
                'image' => asset('assets/img/projects/adarshmuslimpub.png'),
                'title' => 'Adarsh Muslim Publication ',
                'subtitle' => 'Books Store | eCommerce Website',
                'url' => 'https://adarshmuslim.in',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'An eCommerce platform offering a variety of Islamic books across different categories. It features a categorized product listing, advanced search, and a seamless shopping experience from browsing to checkout',
            ],


            [
                'image' => asset('assets/img/projects/khojkar.png'),
                'title' => 'KHOJKAR',
                'subtitle' => 'Local Service Provider | Android App',
                'url' => '',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => 'A local service provider Android app designed to connect users with nearby professionals and essential services quickly and conveniently.',
            ],
            [
                'image' => asset('assets/img/projects/mau.png'),
                'title' => 'Maualana Azad University',
                'subtitle' => 'Educational Institute | Website',
                'url' => '',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => '',
            ],
            [
                'image' => asset('assets/img/projects/mmews.png'),
                'title' => 'Marwar Muslim Educational & Welfare Society',
                'subtitle' => 'Social Welfare Organization | Website',
                'url' => '',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => '',
            ],
            [
                'image' => asset('assets/img/projects/kabaad.png'),
                'title' => 'KabaadKhana',
                'subtitle' => 'Waste Management | Mobile App',
                'url' => '',
                'tags' => [
                    'Laravel', 'PHP', 'MySQL',
                ],
                'description' => '',
            ],
        ];
    }
}

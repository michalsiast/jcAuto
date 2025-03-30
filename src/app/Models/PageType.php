<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'top_text_about_us' => ['head', 'Górny tekst - O nas'],
            'header_about_us' => ['head', 'Nagłówek - O nas'],
            'description_about_us' => ['text', 'Opis - O nas'],
            'subtitle_offer_1' => ['head', 'Podtytuł - Oferta 1'],
            'header_offer_1' => ['head', 'Nagłówek - Oferta 1'],
            'description_offer_1' => ['text', 'Opis - Oferta 1'],
            'offer_offer_1' => ['text', 'Oferta - Oferta 1'],
            'subtitle_offer_2' => ['head', 'Podtytuł - Oferta 2'],
            'header_offer_2' => ['head', 'Nagłówek - Oferta 2'],
            'description_offer_2' => ['text', 'Opis - Oferta 2'],
            'offer_offer_2' => ['text', 'Oferta - Oferta 2'],
            'subtitle_why_us' => ['head', 'Podtytuł - Dlaczego my'],
            'title_why_us' => ['head', 'Tytuł - Dlaczego my'],
            'subtitle_testimonials' => ['head', 'Podtytuł - Opinie'],
            'title_testimonials' => ['head', 'Tytuł - Opinie'],
            'subtitle_contact' => ['head', 'Podtytuł - Kontakt'],
            'title_contact' => ['head', 'Tytuł - Kontakt'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}

<?php

namespace Fabio\WordpressAcfOrm;

use Doctrine\Common\Annotations\AnnotationReader;
use Fabio\WordpressAcfOrm\Annotation\AcfField;
use Fabio\WordpressAcfOrm\Annotation\OptionsPage;

class AnnotationFactory {

    static function register($class) {
        $reader = new AnnotationReader();



        $reflectionClass = new \ReflectionClass($class);

        /** @var OptionsPage $optionsPage */
        $optionsPage = $reader->getClassAnnotation($reflectionClass, OptionsPage::class);

        if($optionsPage) {

            if(!$optionsPage->post_id) {
                $optionsPage->post_id = $class;
            }

            $args = (array) $optionsPage;

            $return = acf_add_options_page($args);

            $menu_id = $return['menu_slug'];

            acf_add_local_field_group(array (
                'key' => 'group_' . $menu_id,
                'title' => $optionsPage->page_title,
                'fields' => [],
                'location' => array (
                    array (
                        array (
                            'param' => 'options',
                            'operator' => '==',
                            'value' => $menu_id,
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
            ));
            $props = $reflectionClass->getProperties();

            foreach($props as $prop) {
                /** @var AcfField $field */
                $field = $reader->getPropertyAnnotation($prop, AcfField::class);

                dump($prop);
            }
        }
    }
}

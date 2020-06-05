<?php

namespace Fabio\WordpressAcfOrm;

use Doctrine\Common\Annotations\AnnotationReader;
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
            acf_add_options_page($args);
        }
    }
}

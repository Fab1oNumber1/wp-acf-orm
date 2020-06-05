<?php


require 'vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;
use Fabio\WordpressAcfOrm\Annotation\OptionsPage;
use Fabio\WordpressAcfOrm\Annotation\AcfField;

AnnotationRegistry::loadAnnotationClass(OptionsPage::class);

function acf_add_options_page($a) {}

/**
 * @OptionsPage(page_title="test")
 */
class ExampleOptions {

    /**
     * @AcfField(label="Test")
     */
    public $test_field;

}

\Fabio\WordpressAcfOrm\AnnotationFactory::register(AcfField::class);
\Fabio\WordpressAcfOrm\AnnotationFactory::register(ExampleOptions::class);

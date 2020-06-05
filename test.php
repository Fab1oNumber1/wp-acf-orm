<?php


require 'vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;
use Fabio\WordpressAcfOrm\Annotation\OptionsPage;

AnnotationRegistry::loadAnnotationClass(OptionsPage::class);


/**
 * @OptionsPage(page_title="test")
 */
class ExampleOptions {

}

\Fabio\WordpressAcfOrm\AnnotationFactory::register(ExampleOptions::class);

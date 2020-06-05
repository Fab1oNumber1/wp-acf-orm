<?php
namespace Fabio\WordpressAcfOrm\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\AnnotationRegistry;

/** @Annotation
 * @Target("CLASS")
 */
class OptionsPage {
    public $page_title;
    public $menu_title;
    public $capability;
    public $redirect;
    public $post_id;

    public function __construct() {

    }
}

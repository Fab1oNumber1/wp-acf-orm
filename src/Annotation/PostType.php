<?php
namespace Fabio\WordpressAcfOrm\Annotation;

/** @Annotation
 * @Target("CLASS")
 */
class PostType {

    /** @Required */
    public $name;
    public $public = true;
    public $label;
    public $rewrite = false;
    public $supports = ['title', 'editor', 'author'];

}

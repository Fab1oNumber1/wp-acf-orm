<?php


namespace Fabio\WP\ORM\Annotations;


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

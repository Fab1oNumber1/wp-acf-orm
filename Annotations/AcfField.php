<?php

namespace Fabio\WP\ORM\Annotations;


/** @Annotation
 * @Target("PROPERTY")
 */
class AcfField {
    /** @Required */
    public $label;
    public $type = 'text';
    public $required = false;
    public $post_type;
    public $instructions;
}


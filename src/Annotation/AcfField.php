<?php

namespace Fabio\WordpressAcfOrm\Annotation;

/** @Annotation
 * @Target("PROPERTY")
 */
class AcfField {
    /** @Required */
    public $label;
    public $type = 'text';
}


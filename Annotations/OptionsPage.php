<?php


namespace Fabio\WPACFORM\Annotations;

/** @Annotation
 * @Target("CLASS")
 */
class OptionsPage {
    public $page_title;
    public $menu_title;
    public $menu_slug;
    public $capability;
    public $redirect;
    public $post_id;
}

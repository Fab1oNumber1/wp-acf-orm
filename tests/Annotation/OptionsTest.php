<?php

namespace Fabio\WordpressAcfOrm\Test\Annotation;
require __DIR__ . '/Options/Example.php';

use Fabio\WordpressAcfOrm\Test\Annotation\Options\Example;
use PHPUnit\Framework\TestCase;



class OptionsTest extends TestCase
{
    public function testNewOptionsPage()
    {


        echo 123;
        $ex = new Example();
        print_r($ex);
        exit;
    }
}

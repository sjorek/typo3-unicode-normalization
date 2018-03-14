<?php

/*
 * This file is part of the TYPO3 Unicode Normalization Extension.
 *
 * (c) Stephan Jorek <stephan.jorek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sjorek\UnicodeNormalization\Typo3Cms\Tests\Unit;

use Sjorek\UnicodeNormalization\Typo3Cms\Tests\Unit\Fixtures\LoadableClass;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class FirstClassTest extends UnitTestCase
{
    /**
     * @coversNothing
     */
    public function testMethodReturnsTrue()
    {
        $firstClassObject = new LoadableClass();
        $this->assertTrue($firstClassObject->returnsTrue());
    }

    /**
     * @coversNothing
     */
    public function testViewHelperBaseClassIsLoadable()
    {
        $this->assertTrue(class_exists('TYPO3\\CMS\\Fluid\\Tests\\Unit\\ViewHelpers\\ViewHelperBaseTestcase'));
    }
}

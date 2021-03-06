<?php
/**
 * Input mismatch exception
 *
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Exception\Test\Unit\State;

use \Magento\Framework\Exception\State\InputMismatchException;
use Magento\Framework\Phrase;

class InputMismatchExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return void
     */
    public function testConstructor()
    {
        $instanceClass = 'Magento\Framework\Exception\State\InputMismatchException';
        $message =  'message %1 %2';
        $params = [
            'parameter1',
            'parameter2',
        ];
        $cause = new \Exception();
        $stateException = new InputMismatchException(new Phrase($message, $params), $cause);
        $this->assertInstanceOf($instanceClass, $stateException);
    }
}

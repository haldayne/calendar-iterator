<?php
namespace Haldayne\CalendarIterator;

class IteratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provides_constructor_arguments_and_validity
     */
    public function test_constructor($begin, $end, $interval, $valid)
    {
        if (! $valid) {
            $this->setExpectedException(IteratorException::class);
        }
        $iterator = new Iterator($begin, $end, $interval);
        $this->assertInstanceOf(\Iterator::class, $iterator);
    }

    // -=-= Data Providers =-=-

    public static function provides_constructor_arguments_and_validity()
    {
        return [
            [ '2013-05-13', '2013-10-17', 'P1W', true ],
        ];
    }
}

<?php

require_once BASEPATH . '/library/classes/Number.php';

/**
 * Testclass for Class Number
 *
 * @uses PHPUnit_Framework_TestCase
 */
class NumberTest extends PHPUnit_Framework_TestCase {

    /**
     * Test data for testAddOrdinal()
     *
     * @access protected
     * @static
     * @var array
     */
    protected static $testDataAddOrdinal = array(

        array('', '0th'),
        array('0', '0th'),
        array(0, '0th'),
        array(1, '1st'),
        array('1', '1st'),
        array('11', '11th'),
        array('12', '12th'),
        array('13', '13th'),
        array('2', '2nd'),
        array('3', '3rd'),
        array('4', '4th'),
        array('90', '90th'),
        array('433', '433rd'),
        array(2141, '2141st'),
        array('12038', '12038th'),
        array('12341232', '12341232nd'),
        array('123abc', '123rd')
    );

    /**
     * Data provider for testAddOrdinal()
     *
     * @access public
     * @static
     * @return array
     */
    public static function providerAddOrdinal() {
        return self::$testDataAddOrdinal;
    }

    /**
     * @dataProvider providerAddOrdinal
     * @access public
     * @return void
     */
    public function testAddOrdinal($input, $result) {
        $Number = new Number();
        $this->assertSame($result, $Number->addOrdinal($input));
    }

}

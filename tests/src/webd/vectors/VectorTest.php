<?php

namespace webd\vectors;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-08-07 at 16:39:52.
 */
class VectorTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Vector
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Vector(1,2,3);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers webd\vectors\Vector::getValue
     */
    public function testGetValue() {
        $this->assertEquals(array(1,2,3), $this->object->getValue());

    }

    /**
     * @covers webd\vectors\Vector::display
     * @todo   Implement testDisplay().
     */
    public function testDisplay() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers webd\vectors\Vector::add
     */
    public function testAdd() {
        $this->assertEquals(array(5,7,9), $this->object->add(new Vector(4,5,6))->getValue());
        
    }
    
    public function testAdd2() {
        $this->assertEquals(array(2.1,3.1,4.1), $this->object->add(1.1)->getValue());

    }

    /**
     * @covers webd\vectors\Vector::sub
     */
    public function testSub() {
        $this->assertEquals(array(0.5, 1.5, 2.5), $this->object->sub(0.5)->getValue());
    }
    
    
    /**
     * @covers webd\vectors\Vector::sub
     */
    public function testSub2() {
        $this->assertEquals(array(-3,-2,-1), $this->object->sub(new Vector(4,4,4))->getValue());
    }

    /**
     * @covers webd\vectors\Vector::dotProduct
     */
    public function testDotProduct() {
        $this->assertEquals(14, $this->object->dotProduct($this->object));
    }

    /**
     * @covers webd\vectors\Vector::crossProduct
     */
    public function testCrossProduct() {
        $other = new Vector(4,5,6);
        $r = $this->object->crossProduct($other);
        $this->assertEquals(array(-3,6,-3), $r->getValue());
    }

    /**
     * @covers webd\vectors\Vector::div
     */
    public function testDiv() {
        $this->assertEquals(array(0.5,1,1.5), $this->object->div(2)->getValue());
    }

    /**
     * @covers webd\vectors\Vector::__add
     * @todo   Implement test__add().
     */
    public function test__add() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers webd\vectors\Vector::__sub
     * @todo   Implement test__sub().
     */
    public function test__sub() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers webd\vectors\Vector::__concat
     * @todo   Implement test__concat().
     */
    public function test__concat() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers webd\vectors\Vector::__mul
     * @todo   Implement test__mul().
     */
    public function test__mul() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers webd\vectors\Vector::__div
     * @todo   Implement test__div().
     */
    public function test__div() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers webd\vectors\Vector::mean
     */
    public function testMean() {
        $this->assertEquals(2, $this->object->mean());
    }

    /**
     * @covers webd\vectors\Vector::variance
     */
    public function testVariance() {
        $this->assertEquals(1, $this->object->variance());
    }

    /**
     * @covers webd\vectors\Vector::standardDeviation
     */
    public function testStandardDeviation() {
        $this->assertEquals(1, $this->object->standardDeviation());
    }

    /**
     * @covers webd\vectors\Vector::standardNormal
     */
    public function testStandardNormal() {
        $sn = $this->object->standardNormal();
        $this->assertEquals(0, $sn->mean(), "", 0.0001);
        $this->assertEquals(1, $sn->standardDeviation(), "", 0.0001);
    }

    /**
     * @covers webd\vectors\Vector::sort
     */
    public function testSort() {
        $v = new Vector(array(3,2,1));
        $this->assertEquals(array(1,2,3), $v->sort()->getValue());
        
        // Check original vector has not been modified
        $this->assertEquals(array(3,2,1), $v->getValue());
    }

    /**
     * @covers webd\vectors\Vector::ecdf
     * @todo   Implement testEcdf().
     */
    public function testEcdf() {
        $this->assertEquals(0.3333, $this->object->ecdf(1.5), '', 0.0001);
    }

    /**
     * @covers webd\vectors\Vector::adtest
     */
    public function testAdtest() {        
        $normal = new Vector(0.1917,    1.2441,   -1.1642,    1.6353,    0.6863,   -1.1495,    1.1102,    1.1826,    1.7073,   -0.4203,    1.6394,    0.2635,   -1.4635,   -0.7762,    0.9295,    1.7930,   -1.1832,   -0.1112,   -0.6568,    1.8797,   -0.8961,    1.3315,   -0.6246,    0.7767,   -1.3243,    1.5003,   -2.2029,    0.3225,    0.4210,   -0.8207,   -0.9665,    0.6093,   -1.0362,   -0.0282,   -2.8198,   -2.0810,   -0.0448,    1.1180,   -1.6495,    0.6787,    0.4943,   -0.5885,   -0.0239,    2.1913,   -1.4006,    0.4801,    0.2076,    0.3221,   -0.0059,    0.2814,   -0.2513,   -1.6935,   -0.5840,    0.2344,    0.2588,    0.6037,    2.2210,   -1.6541,    0.6804,    0.1358,   -0.0380,   -0.6931,   -0.1275,    0.6804,    0.4262,   -1.6057,    0.9062,    0.2495,    1.8942,   -1.1124,   -0.7220,   -1.7522,    0.0036,    0.9951,   -0.4790,   -0.5191,   -0.2947,   -0.1605,    1.0235,    0.0159,   -0.4827,    0.6347,   -1.3644,    0.5986);
        $this->assertEquals(true, $normal->adtest());
    }
    
        /**
     * @covers webd\vectors\Vector::adtest
     */
    public function testAdtest2() {        
        $exp = new Vector(0.7918,    4.5890,    0.5124,    0.5082,    0.4317,    1.0708,    0.7066,    0.3541,    0.1190,    2.8994,    2.3191,    0.4311,    0.2691,    0.0121,    2.0768,    1.0093,    0.3912,    0.9788,    0.1468,    1.2311);
        $this->assertEquals(false, $exp->adtest());
        
        $unif = new Vector(0.5502,
    0.1805,
    0.6785,
    0.0557,
    0.0341,
    0.2865,
    0.0774,
    0.9006,
    0.8466,
    0.3957,
    0.1692,
    0.4305,
    0.4162,
    0.7288,
    0.4065,
    0.9518,
    0.9120,
    0.9514,
    0.3460,
    0.2902);
        $this->assertEquals(false, $unif->adtest());
    }

    /**
     * @covers webd\vectors\Vector::normalize
     */
    public function testNormalize() {
        $this->assertEquals(1, $this->object->normalize()->norm());
    }

    /**
     * @covers webd\vectors\Vector::norm
     */
    public function testNorm() {
        $this->assertEquals(3.7417, $this->object->norm(), '', 0.0001);
    }

    /**
     * @covers webd\vectors\Vector::length
     */
    public function testLength() {
        $this->assertEquals(3, $this->object->length());
    }

    /**
     * @covers webd\vectors\Vector::scalarProject
     */
    public function testScalarProject() {
        $a = new Vector(1,2,3);
        $b = new Vector(4,5,6);
        $this->assertEquals(3.6467, $b->scalarProject($a), '', 0.0001);
    }

}

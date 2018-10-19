<?php
namespace Test\Subscriber\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SubscriberModelTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Test\Subscriber\Domain\Model\SubscriberModel
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Test\Subscriber\Domain\Model\SubscriberModel();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}

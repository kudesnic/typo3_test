<?php
namespace Test\TestTaskSubscribe\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SubscriberTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Test\TestTaskSubscribe\Domain\Model\Subscriber
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Test\TestTaskSubscribe\Domain\Model\Subscriber();
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

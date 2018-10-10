<?php
namespace Test\TestTaskSubscribe\Tests\Unit\Controller;

/**
 * Test case.
 */
class SubscriberControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Test\TestTaskSubscribe\Controller\SubscriberController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Test\TestTaskSubscribe\Controller\SubscriberController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSubscribersFromRepositoryAndAssignsThemToView()
    {

        $allSubscribers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberRepository = $this->getMockBuilder(\Test\TestTaskSubscribe\Domain\Repository\SubscriberRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $subscriberRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSubscribers));
        $this->inject($this->subject, 'subscriberRepository', $subscriberRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('subscribers', $allSubscribers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSubscriberToView()
    {
        $subscriber = new \Test\TestTaskSubscribe\Domain\Model\Subscriber();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subscriber', $subscriber);

        $this->subject->showAction($subscriber);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSubscriberToSubscriberRepository()
    {
        $subscriber = new \Test\TestTaskSubscribe\Domain\Model\Subscriber();

        $subscriberRepository = $this->getMockBuilder(\Test\TestTaskSubscribe\Domain\Repository\SubscriberRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberRepository->expects(self::once())->method('add')->with($subscriber);
        $this->inject($this->subject, 'subscriberRepository', $subscriberRepository);

        $this->subject->createAction($subscriber);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSubscriberToView()
    {
        $subscriber = new \Test\TestTaskSubscribe\Domain\Model\Subscriber();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subscriber', $subscriber);

        $this->subject->editAction($subscriber);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSubscriberInSubscriberRepository()
    {
        $subscriber = new \Test\TestTaskSubscribe\Domain\Model\Subscriber();

        $subscriberRepository = $this->getMockBuilder(\Test\TestTaskSubscribe\Domain\Repository\SubscriberRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberRepository->expects(self::once())->method('update')->with($subscriber);
        $this->inject($this->subject, 'subscriberRepository', $subscriberRepository);

        $this->subject->updateAction($subscriber);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSubscriberFromSubscriberRepository()
    {
        $subscriber = new \Test\TestTaskSubscribe\Domain\Model\Subscriber();

        $subscriberRepository = $this->getMockBuilder(\Test\TestTaskSubscribe\Domain\Repository\SubscriberRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberRepository->expects(self::once())->method('remove')->with($subscriber);
        $this->inject($this->subject, 'subscriberRepository', $subscriberRepository);

        $this->subject->deleteAction($subscriber);
    }
}

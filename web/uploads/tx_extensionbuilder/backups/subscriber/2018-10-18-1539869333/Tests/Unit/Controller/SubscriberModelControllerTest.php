<?php
namespace Test\Subscriber\Tests\Unit\Controller;

/**
 * Test case.
 */
class SubscriberModelControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Test\Subscriber\Controller\SubscriberModelController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Test\Subscriber\Controller\SubscriberModelController::class)
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
    public function listActionFetchesAllSubscriberModelsFromRepositoryAndAssignsThemToView()
    {

        $allSubscriberModels = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberModelRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $subscriberModelRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSubscriberModels));
        $this->inject($this->subject, 'subscriberModelRepository', $subscriberModelRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('subscriberModels', $allSubscriberModels);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSubscriberModelToView()
    {
        $subscriberModel = new \Test\Subscriber\Domain\Model\SubscriberModel();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subscriberModel', $subscriberModel);

        $this->subject->showAction($subscriberModel);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSubscriberModelToSubscriberModelRepository()
    {
        $subscriberModel = new \Test\Subscriber\Domain\Model\SubscriberModel();

        $subscriberModelRepository = $this->getMockBuilder(\::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberModelRepository->expects(self::once())->method('add')->with($subscriberModel);
        $this->inject($this->subject, 'subscriberModelRepository', $subscriberModelRepository);

        $this->subject->createAction($subscriberModel);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSubscriberModelToView()
    {
        $subscriberModel = new \Test\Subscriber\Domain\Model\SubscriberModel();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('subscriberModel', $subscriberModel);

        $this->subject->editAction($subscriberModel);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSubscriberModelInSubscriberModelRepository()
    {
        $subscriberModel = new \Test\Subscriber\Domain\Model\SubscriberModel();

        $subscriberModelRepository = $this->getMockBuilder(\::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberModelRepository->expects(self::once())->method('update')->with($subscriberModel);
        $this->inject($this->subject, 'subscriberModelRepository', $subscriberModelRepository);

        $this->subject->updateAction($subscriberModel);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSubscriberModelFromSubscriberModelRepository()
    {
        $subscriberModel = new \Test\Subscriber\Domain\Model\SubscriberModel();

        $subscriberModelRepository = $this->getMockBuilder(\::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $subscriberModelRepository->expects(self::once())->method('remove')->with($subscriberModel);
        $this->inject($this->subject, 'subscriberModelRepository', $subscriberModelRepository);

        $this->subject->deleteAction($subscriberModel);
    }
}

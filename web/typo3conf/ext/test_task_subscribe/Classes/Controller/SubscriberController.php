<?php
namespace Test\TestTaskSubscribe\Controller;

/***
 *
 * This file is part of the "subscribe" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * SubscriberController
 */
class SubscriberController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * subscriberRepository
     *
     * @var \Test\TestTaskSubscribe\Domain\Repository\SubscriberRepository
     * @inject
     */
    protected $subscriberRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $subscribers = $this->subscriberRepository->findAll();
        $this->view->assign('subscribers', $subscribers);
    }

    /**
     * action show
     *
     * @param \Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber
     * @return void
     */
    public function showAction(\Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber)
    {
        $this->view->assign('subscriber', $subscriber);
    }

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \Test\TestTaskSubscribe\Domain\Model\Subscriber $newSubscriber
     * @return void
     */
    public function createAction(\Test\TestTaskSubscribe\Domain\Model\Subscriber $newSubscriber)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberRepository->add($newSubscriber);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber
     * @ignorevalidation $subscriber
     * @return void
     */
    public function editAction(\Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber)
    {
        $this->view->assign('subscriber', $subscriber);
    }

    /**
     * action update
     *
     * @param \Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber
     * @return void
     */
    public function updateAction(\Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberRepository->update($subscriber);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber
     * @return void
     */
    public function deleteAction(\Test\TestTaskSubscribe\Domain\Model\Subscriber $subscriber)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberRepository->remove($subscriber);
        $this->redirect('list');
    }
}

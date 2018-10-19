<?php
namespace Test\Subscriber\Controller;

/***
 *
 * This file is part of the "Subscriber" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * SubscriberModelController
 */
class SubscriberModelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $subscriberModels = $this->subscriberModelRepository->findAll();
        $this->view->assign('subscriberModels', $subscriberModels);
    }

    /**
     * action show
     *
     * @param \Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel
     * @return void
     */
    public function showAction(\Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel)
    {
        $this->view->assign('subscriberModel', $subscriberModel);
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
     * @param \Test\Subscriber\Domain\Model\SubscriberModel $newSubscriberModel
     * @return void
     */
    public function createAction(\Test\Subscriber\Domain\Model\SubscriberModel $newSubscriberModel)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberModelRepository->add($newSubscriberModel);
        $this->view->assign('subscriberModel', $newSubscriberModel);

        /// $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel
     * @ignorevalidation $subscriberModel
     * @return void
     */
    public function editAction(\Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel)
    {
        $this->view->assign('subscriberModel', $subscriberModel);
    }

    /**
     * action update
     *
     * @param \Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel
     * @return void
     */
    public function updateAction(\Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberModelRepository->update($subscriberModel);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel
     * @return void
     */
    public function deleteAction(\Test\Subscriber\Domain\Model\SubscriberModel $subscriberModel)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberModelRepository->remove($subscriberModel);
        $this->redirect('list');
    }
}

<?php
namespace Test\Subscriber\Domain\Model;

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
 * SubscriberModel
 */
class SubscriberModel extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
}

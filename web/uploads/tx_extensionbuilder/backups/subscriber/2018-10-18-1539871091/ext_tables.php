<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Test.Subscriber',
            'Subscriberform',
            'Subscriber'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('subscriber', 'Configuration/TypoScript', 'Subscriber');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_subscriber_domain_model_subscribermodel', 'EXT:subscriber/Resources/Private/Language/locallang_csh_tx_subscriber_domain_model_subscribermodel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_subscriber_domain_model_subscribermodel');

    }
);

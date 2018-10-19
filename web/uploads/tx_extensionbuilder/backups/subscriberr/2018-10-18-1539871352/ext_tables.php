<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Test.Subscriberr',
            'Subscriberform',
            'Subscriber'
        );

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'Test.Subscriberr',
                'web', // Make module a submodule of 'web'
                'subscribers', // Submodule key
                '', // Position
                [
                    'SubscriberModel' => 'list, show, new, create, edit, update, delete',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:subscriberr/Resources/Public/Icons/user_mod_subscribers.svg',
                    'labels' => 'LLL:EXT:subscriberr/Resources/Private/Language/locallang_subscribers.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('subscriberr', 'Configuration/TypoScript', 'Subscriber');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_subscriberr_domain_model_subscribermodel', 'EXT:subscriberr/Resources/Private/Language/locallang_csh_tx_subscriberr_domain_model_subscribermodel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_subscriberr_domain_model_subscribermodel');

    }
);

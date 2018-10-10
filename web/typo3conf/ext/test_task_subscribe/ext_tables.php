<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('test_task_subscribe', 'Configuration/TypoScript', 'subscribe');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_testtasksubscribe_domain_model_subscriber', 'EXT:test_task_subscribe/Resources/Private/Language/locallang_csh_tx_testtasksubscribe_domain_model_subscriber.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_testtasksubscribe_domain_model_subscriber');

    }
);

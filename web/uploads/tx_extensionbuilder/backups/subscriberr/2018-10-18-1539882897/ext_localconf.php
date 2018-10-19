<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Test.Subscriberr',
            'Subscriberform',
            [
                'SubscriberModel' => 'new'
            ],
            // non-cacheable actions
            [
                'SubscriberModel' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    subscriberform {
                        iconIdentifier = subscriberr-plugin-subscriberform
                        title = LLL:EXT:subscriberr/Resources/Private/Language/locallang_db.xlf:tx_subscriberr_subscriberform.name
                        description = LLL:EXT:subscriberr/Resources/Private/Language/locallang_db.xlf:tx_subscriberr_subscriberform.description
                        tt_content_defValues {
                            CType = list
                            list_type = subscriberr_subscriberform
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'subscriberr-plugin-subscriberform',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:subscriberr/Resources/Public/Icons/user_plugin_subscriberform.svg']
			);
		
    }
);

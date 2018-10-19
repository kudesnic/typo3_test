<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Test.Subscriber',
            'Subscriberform',
            [
                'SubscriberModel' => 'list, show, new, create, edit, update, delete'
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
                        iconIdentifier = subscriber-plugin-subscriberform
                        title = LLL:EXT:subscriber/Resources/Private/Language/locallang_db.xlf:tx_subscriber_subscriberform.name
                        description = LLL:EXT:subscriber/Resources/Private/Language/locallang_db.xlf:tx_subscriber_subscriberform.description
                        tt_content_defValues {
                            CType = list
                            list_type = subscriber_subscriberform
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'subscriber-plugin-subscriberform',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:subscriber/Resources/Public/Icons/user_plugin_subscriberform.svg']
			);
		
    }
);

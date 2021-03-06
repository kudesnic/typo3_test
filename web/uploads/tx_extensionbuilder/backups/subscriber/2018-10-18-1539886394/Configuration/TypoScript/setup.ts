
plugin.tx_subscriber_subscriberform {
    view {
        templateRootPaths.0 = EXT:subscriber/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_subscriber_subscriberform.view.templateRootPath}
        partialRootPaths.0 = EXT:subscriber/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_subscriber_subscriberform.view.partialRootPath}
        layoutRootPaths.0 = EXT:subscriber/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_subscriber_subscriberform.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_subscriber_subscriberform.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_subscriber_subscriberadmin {
    view {
        templateRootPaths.0 = EXT:subscriber/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_subscriber_subscriberadmin.view.templateRootPath}
        partialRootPaths.0 = EXT:subscriber/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_subscriber_subscriberadmin.view.partialRootPath}
        layoutRootPaths.0 = EXT:subscriber/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_subscriber_subscriberadmin.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_subscriber_subscriberadmin.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

# these classes are only used in auto-generated templates
plugin.tx_subscriber._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-subscriber table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-subscriber table th {
        font-weight:bold;
    }

    .tx-subscriber table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

# Module configuration
module.tx_subscriber_web_subscribersubscribers {
    persistence {
        storagePid = {$module.tx_subscriber_subscribers.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:subscriber/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_subscriber_subscribers.view.templateRootPath}
        partialRootPaths.0 = EXT:subscriber/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_subscriber_subscribers.view.partialRootPath}
        layoutRootPaths.0 = EXT:subscriber/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_subscriber_subscribers.view.layoutRootPath}
    }
}


plugin.tx_subscriberr_subscriberform {
    view {
        templateRootPaths.0 = EXT:subscriberr/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_subscriberr_subscriberform.view.templateRootPath}
        partialRootPaths.0 = EXT:subscriberr/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_subscriberr_subscriberform.view.partialRootPath}
        layoutRootPaths.0 = EXT:subscriberr/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_subscriberr_subscriberform.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_subscriberr_subscriberform.persistence.storagePid}
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
plugin.tx_subscriberr._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-subscriberr table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-subscriberr table th {
        font-weight:bold;
    }

    .tx-subscriberr table td {
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
module.tx_subscriberr_web_subscriberrsubscribers {
    persistence {
        storagePid = {$module.tx_subscriberr_subscribers.persistence.storagePid}
    }
    view {
        templateRootPaths.0 = EXT:subscriberr/Resources/Private/Backend/Templates/
        templateRootPaths.1 = {$module.tx_subscriberr_subscribers.view.templateRootPath}
        partialRootPaths.0 = EXT:subscriberr/Resources/Private/Backend/Partials/
        partialRootPaths.1 = {$module.tx_subscriberr_subscribers.view.partialRootPath}
        layoutRootPaths.0 = EXT:subscriberr/Resources/Private/Backend/Layouts/
        layoutRootPaths.1 = {$module.tx_subscriberr_subscribers.view.layoutRootPath}
    }
}

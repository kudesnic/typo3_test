
plugin.tx_subscriberr_subscriberform {
    view {
        # cat=plugin.tx_subscriberr_subscriberform/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:subscriberr/Resources/Private/Templates/
        # cat=plugin.tx_subscriberr_subscriberform/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:subscriberr/Resources/Private/Partials/
        # cat=plugin.tx_subscriberr_subscriberform/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:subscriberr/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_subscriberr_subscriberform//a; type=string; label=Default storage PID
        storagePid =
    }
}

module.tx_subscriberr_subscribers {
    view {
        # cat=module.tx_subscriberr_subscribers/file; type=string; label=Path to template root (BE)
        templateRootPath = EXT:subscriberr/Resources/Private/Backend/Templates/
        # cat=module.tx_subscriberr_subscribers/file; type=string; label=Path to template partials (BE)
        partialRootPath = EXT:subscriberr/Resources/Private/Backend/Partials/
        # cat=module.tx_subscriberr_subscribers/file; type=string; label=Path to template layouts (BE)
        layoutRootPath = EXT:subscriberr/Resources/Private/Backend/Layouts/
    }
    persistence {
        # cat=module.tx_subscriberr_subscribers//a; type=string; label=Default storage PID
        storagePid =
    }
}

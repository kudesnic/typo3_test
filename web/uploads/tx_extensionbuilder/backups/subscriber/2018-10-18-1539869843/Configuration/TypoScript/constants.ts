
plugin.tx_subscriber_subscriberform {
    view {
        # cat=plugin.tx_subscriber_subscriberform/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:subscriber/Resources/Private/Templates/
        # cat=plugin.tx_subscriber_subscriberform/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:subscriber/Resources/Private/Partials/
        # cat=plugin.tx_subscriber_subscriberform/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:subscriber/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_subscriber_subscriberform//a; type=string; label=Default storage PID
        storagePid =
    }
}

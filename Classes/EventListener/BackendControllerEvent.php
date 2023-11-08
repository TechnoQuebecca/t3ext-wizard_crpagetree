<?php
declare(strict_types=1);

namespace MichielRoos\WizardCrpagetree\EventListener;

use TYPO3\CMS\Backend\Controller\BackendController;
use TYPO3\CMS\Backend\Controller\Event\AfterBackendPageRenderEvent;
use TYPO3\CMS\Backend\Routing\Exception\RouteNotFoundException;
use TYPO3\CMS\Backend\Routing\UriBuilder;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * This class adds WizardCrpagetree related JavaScript to the backend
 */
class BackendControllerEvent
{
    /**
     * Adds WizardCrpagetree-specific JavaScript
     * @throws RouteNotFoundException
     */
    public function __invoke(AfterBackendPageRenderEvent $event): void
    {
        /** @var UriBuilder $uriBuilder */
        $uriBuilder = GeneralUtility::makeInstance(UriBuilder::class);
        $url = (string)$uriBuilder->buildUriFromRoute('pagetree_new');
        GeneralUtility::makeInstance(PageRenderer::class)
            ->addInlineSetting('WizardCrpagetree', 'wizardCrpagetreeUrl', $url);
    }
}

/**
 * Module: @t3docs/examples/context-menu-actions
 *
 * JavaScript to handle the click action of the "Hello World" context menu item
 */

class ContextMenuActions {

  pagesNewTree(e, t) {
    const n = "pages" === e ? t : a.default(this).data("page-uid");
    "pages" === e ? top.TYPO3.Backend.ContentContainer.setUrl(top.TYPO3.settings.WizardCrpagetree.wizardCrpagetreeUrl + "&id=" + n) : '';
  };
}

export default new ContextMenuActions();

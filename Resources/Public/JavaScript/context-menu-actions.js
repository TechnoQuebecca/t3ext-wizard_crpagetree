"use strict";

import Viewport from "@typo3/backend/viewport.js";

/**
 * @exports @michielroos/wizardcrpagetree/context-menu-actions
 */
class ContextMenuActions {
  static pagesNewTree(table, uid, dataset){
    const moduleUrl = dataset.pageNewTreeUrl;
    if (moduleUrl) {
      Viewport.ContentContainer.setUrl(moduleUrl + "&returnUrl=" + ContextMenuActions.getReturnUrl());
    }
  }

  static getReturnUrl() {
    return encodeURIComponent(top.list_frame.document.location.pathname + top.list_frame.document.location.search)
  }
}

export {ContextMenuActions as default};

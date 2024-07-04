<?php

namespace Drupal\directory_datatable\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Directory Datatable routes.
 */
class DirectoryDatatableController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}

<?php

namespace Drupal\directory_datatable\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

/**
 * Returns responses for Directory DataTable routes.
 */
class DirectoryDataTableController extends ControllerBase {

  /**
   * Returns data for the DataTable.
   */
  public function getData() {
    $query = \Drupal::entityQuery('node')
      ->condition('type', 'directory')
      ->condition('status', 1);
    $nids = $query->execute();
    $nodes = Node::loadMultiple($nids);

    $data = [];
    foreach ($nodes as $node) {
      $data[] = [
        'id' => $node->id(),
        'title' => $node->getTitle(),
        'email' => $node->get('field_email')->value,
      ];
    }

    return new JsonResponse($data);
  }

}

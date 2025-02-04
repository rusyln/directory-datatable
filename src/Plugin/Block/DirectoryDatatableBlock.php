<?php

namespace Drupal\directory_datatable\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
/**
 * Provides an example block.
 *
 * @Block(
 *   id = "directory_datatable_block",
 *   admin_label = @Translation("Directory Datatable"),
 *   category = @Translation("Directory Datatable")
 * )
 */
class DirectoryDatatableBlock extends BlockBase {

 
  /**
   * {@inheritdoc}
   */
  public function build() {
    // Attach the library for DataTable.
    $build['#attached']['library'][] = 'directory_datatable/datatable';

    // Generate the URL for the data endpoint.
    $data_url = Url::fromRoute('directory_datatable.data')->toString();

    // Attach Drupal settings for the data URL.
    $build['#attached']['drupalSettings']['directory_datatable'] = [
      'dataUrl' => $data_url,
    ];

    // Return the custom Twig template.
    return [
      '#theme' => 'directory_datatable',
    ];
  }

}
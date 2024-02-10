<?php
namespace Drupal\react_json_app\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'react_json_block' block.
 *
 * @Block(
 *  id = "react_json_block",
 *  admin_label = @Translation("React Json block"),
 * )
 */
class ReactJsonBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['react_json_block'] = [
      '#markup' => '<div id="react-json-app"></div>',
      '#attached' => [
        'library' => array('react_json_app/react_json_block'),
      ],
    ];
    return $build;
  }
}
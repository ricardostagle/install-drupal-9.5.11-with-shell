<?php
namespace Drupal\react_app\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'react_block' block.
 *
 * @Block(
 *  id = "react_block",
 *  admin_label = @Translation("React block"),
 * )
 */
class ReactBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['react_block'] = [
      '#markup' => '<div id="react-app"></div>',
      '#attached' => [
        'library' => array('react_app/react_block'),
      ],
    ];
    return $build;
  }
}
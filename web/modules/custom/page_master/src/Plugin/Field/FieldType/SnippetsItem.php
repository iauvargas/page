<?php

/**
 * @file
 * Contains \Drupal\page_master\Plugin\Field\FieldType\SnippetsItem.
 */

namespace Drupal\page_master\Plugin\Field\FieldType;


use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * @FieldType(
 *   id = "diff",
 *   label = @Translation("Diff"),
 *   module = "diff_field",
 *   description = @Translation("Allow insert two numeric values and show his difference."),
 *   default_widget = "diff_field_widget",
 *   default_formatter = "diff_field_formatter"
 * )
 */
class DiffFieldItem extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition) {
    return array(
      'columns' => array(
        'value' => array(
          'type' => 'int',
        ),
        'value2' => array(
          'type' => 'int',
        ),
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition) {
    $properties['value'] = DataDefinition::create('integer')
      ->setLabel(t('Value'))
      ->setRequired(TRUE);
    $properties['value2'] = DataDefinition::create('integer')
      ->setLabel(t('Value2'))
      ->setRequired(TRUE);

    return $properties;
  }

}

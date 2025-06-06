<?php

namespace Drupal\Tests\feeds_ex\Functional\Feeds\Parser;

/**
 * @coversDefaultClass \Drupal\feeds_ex\Feeds\Parser\JmesPathLinesParser
 * @group feeds_ex
 */
class JmesPathLinesParserTest extends ParserTestBase {

  /**
   * The ID of the parser to test.
   *
   * @var string
   */
  protected static $parserId = 'jmespathlines';

  /**
   * {@inheritdoc}
   */
  protected static $customSourceType = 'json';

  /**
   * {@inheritdoc}
   */
  public function testMapping() {
    $expected_sources = [
      'name' => [
        'label' => 'name',
        'value' => 'name',
        'machine_name' => 'name',
        'type' => static::$customSourceType,
      ],
    ];
    $custom_source = [
      'value' => 'name',
      'machine_name' => 'name',
    ];

    $this->doMappingTest($expected_sources, $custom_source);
  }

}

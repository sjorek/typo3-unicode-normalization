<?php
/*
 * This file is part of the TYPO3 Unicode Normalization Extension.
 *
 * (c) Stephan Jorek <stephan.jorek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (PHP_SAPI !== 'cli') {
    die('This script supports command line usage only. Please check your command.');
}

$header = <<<EOF
This file is part of the TYPO3 Unicode Normalization Extension.

(c) Stephan Jorek <stephan.jorek@gmail.com>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

// Define in which folders to search and which folders to exclude
// Exclude some directories that are excluded by Git anyways to speed up the sniffing
$finder = PhpCsFixer\Finder::create()
    ->exclude('.Build')
    ->exclude('Fixtures')
    ->notName('ext_emconf.php')
    ->in(__DIR__);

// Return a Code Sniffing configuration using
// all sniffers needed for PSR-2
// and additionally:
//  - Remove leading slashes in use clauses.
//  - PHP single-line arrays should not have trailing comma.
//  - Single-line whitespace before closing semicolon are prohibited.
//  - Remove unused use statements in the PHP source code
//  - Ensure Concatenation to have at least one whitespace around
//  - Remove trailing whitespace at the end of blank lines.
return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@DoctrineAnnotation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'cast_spaces' => ['space' => 'single'],
        'concat_space' => ['spacing' => 'one'],
        'function_typehint_space' => true,
        'header_comment' => ['header' => $header],
        'lowercase_cast' => true,
        'native_function_casing' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_empty_statement' => true,
        'no_extra_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_short_bool_cast' => true,
        'no_singleline_whitespace_before_semicolons' => true,
        'no_superfluous_elseif' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_in_blank_line' => true,
        'ordered_imports' => true,
        'php_unit_dedicate_assert' => true,
        'php_unit_strict' => true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_no_empty_return' => true,
        'phpdoc_no_package' => true,
        'phpdoc_order' => true,
        'phpdoc_scalar' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
        'psr0' => true,
        'single_line_comment_style' => true,
        'single_quote' => true,
        'whitespace_after_comma_in_array' => true,
    ])
    ->setFinder($finder)
;

/*
This document has been generated with
https://mlocati.github.io/php-cs-fixer-configurator/
you can change this configuration by importing this YAML code:

fixerSets:
  - '@PSR2'
  - '@DoctrineAnnotation'
fixers:
  array_syntax:
    syntax: short
  cast_spaces:
    space: single
  concat_space:
    spacing: one
  function_typehint_space: true
  header_comment:
    header: |
      This file is part of the TYPO3 Unicode Normalization Extension.

      (c) Stephan Jorek <stephan.jorek@gmail.com>

      For the full copyright and license information, please view the LICENSE
      file that was distributed with this source code.
  lowercase_cast: true
  native_function_casing: true
  no_blank_lines_after_phpdoc: true
  no_empty_statement: true
  no_extra_blank_lines: true
  no_leading_import_slash: true
  no_leading_namespace_whitespace: true
  no_short_bool_cast: true
  no_singleline_whitespace_before_semicolons: true
  no_superfluous_elseif: true
  no_trailing_comma_in_singleline_array: true
  no_unneeded_control_parentheses: true
  no_unused_imports: true
  no_useless_else: true
  no_useless_return: true
  no_whitespace_in_blank_line: true
  ordered_imports: true
  php_unit_dedicate_assert: true
  php_unit_strict: true
  phpdoc_add_missing_param_annotation: true
  phpdoc_no_empty_return: true
  phpdoc_no_package: true
  phpdoc_order: true
  phpdoc_scalar: true
  phpdoc_trim: true
  phpdoc_types: true
  phpdoc_types_order:
    null_adjustment: always_last
    sort_algorithm: none
  psr0: true
  single_line_comment_style: true
  single_quote: true
  whitespace_after_comma_in_array: true
risky: true

*/
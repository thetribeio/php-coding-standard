<?php

namespace TheTribe;

use PhpCsFixer\Console\Application;
use PhpCsFixer\Config;

class CodingStandard extends Config
{
    public function __construct()
    {
        parent::__construct();

        $this->setRiskyAllowed(true);

        $this->setRules([
            '@Symfony' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'concat_space' => [
                'spacing' => 'one',
            ],
            'declare_strict_types' => true,
            'doctrine_annotation_array_assignment' => [
                'operator' => ':',
            ],
            'doctrine_annotation_braces' => [
                'syntax' => 'with_braces',
                'ignored_tags' => [
                    'abstract',
                    'access',
                    'AfterScenario',
                    'BeforeScenario',
                    'code',
                    'deprec',
                    'encode',
                    'exception',
                    'final',
                    'ingroup',
                    'inheritdoc',
                    'inheritDoc',
                    'magic',
                    'name',
                    'toc',
                    'tutorial',
                    'private',
                    'static',
                    'staticvar',
                    'staticVar',
                    'throw',
                    'api',
                    'author',
                    'category',
                    'copyright',
                    'deprecated',
                    'example',
                    'filesource',
                    'global',
                    'ignore',
                    'internal',
                    'license',
                    'link',
                    'method',
                    'package',
                    'param',
                    'property',
                    'property-read',
                    'property-write',
                    'return',
                    'see',
                    'since',
                    'source',
                    'subpackage',
                    'throws',
                    'todo',
                    'TODO',
                    'usedBy',
                    'uses',
                    'var',
                    'version',
                    'after',
                    'afterClass',
                    'backupGlobals',
                    'backupStaticAttributes',
                    'before',
                    'beforeClass',
                    'codeCoverageIgnore',
                    'codeCoverageIgnoreStart',
                    'codeCoverageIgnoreEnd',
                    'covers',
                    'coversDefaultClass',
                    'coversNothing',
                    'dataProvider',
                    'depends',
                    'expectedException',
                    'expectedExceptionCode',
                    'expectedExceptionMessage',
                    'expectedExceptionMessageRegExp',
                    'group',
                    'large',
                    'medium',
                    'preserveGlobalState',
                    'requires',
                    'runTestsInSeparateProcesses',
                    'runInSeparateProcess',
                    'small',
                    'test',
                    'testdox',
                    'ticket',
                    'uses',
                    'SuppressWarnings',
                    'noinspection',
                    'package_version',
                    'enduml',
                    'startuml',
                    'fix',
                    'FIXME',
                    'fixme',
                    'override',
                    'database',
                    'Then',
                    'When',
                    'Given',
                ],
            ],
            'doctrine_annotation_indentation' => true,
            'doctrine_annotation_spaces' => [
                'after_array_assignments_colon' => false,
                'after_array_assignments_equals' => false,
                'before_array_assignments_colon' => false,
                'before_array_assignments_equals' => false,
            ],
            'list_syntax' => [
                'syntax' => 'short',
            ],
            'no_unneeded_final_method' => false,
            'non_printable_character' => [
                'use_escape_sequences_in_strings' => true,
            ],
            'ordered_class_elements' => [
                'order' => [
                    'use_trait',
                    'constant_public',
                    'constant_protected',
                    'constant_private',
                    'property_public',
                    'property_protected',
                    'property_private',
                    'construct',
                    'destruct',
                    'phpunit',
                    'method_public',
                    'method_protected',
                    'method_private',
                ],
            ],
            'ordered_imports' => true,
            'phpdoc_align' => false,
            'phpdoc_types_order' => [
                'null_adjustment' => 'always_last',
            ],
            'simplified_null_return' => false,
            'strict_comparison' => true,
            'strict_param' => true,
            'void_return' => true,
            'yoda_style' => false,
        ]);
    }
}

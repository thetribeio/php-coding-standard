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

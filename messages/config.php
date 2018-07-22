<?php
/**
 * Configuration file for 'yii message/extract' command.
 *
 * This file is automatically generated by 'yii message/config' command.
 * It contains parameters for source code messages extraction.
 * You may modify this file to suit your needs.
 *
 * You can use 'yii message/config-template' command to create
 * template configuration file with detailed description for each parameter.
 */
return [
    'sourcePath' => __DIR__ . '/..',
    'languages' => ['cs'],
    'sort' => false,
    'removeUnused' => true,
    'only' => ['*.php'],
    'except' => [
        '.idea',
        '.git',
        '.gitignore',
        '.gitkeep',
        '/messages',
        '/tests',
        '/vendor',
    ],
    'format' => 'php',
    'messagePath' => __DIR__,
    'overwrite' => true,
    'interactive' => false,
];
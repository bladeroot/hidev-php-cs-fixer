<?php

/*
 * PHP-CS-Fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpcsfixer\controllers;

/**
 * Goal for .php_cs (php-cs-fixer config) file.
 */
class PhpCsController extends \hidev\controllers\TemplateController
{
    public function getTemplate()
    {
        return 'php-cs.twig';
    }

    public function getFixer()
    {
        return $this->takeGoal('php-cs-fixer');
    }
}
<?php

/*
 * php-cs-fixer plugin for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-php-cs-fixer
 * @package   hidev-php-cs-fixer
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\phpcsfixer\goals;

use hidev\helpers\Helper;

/**
 * Goal for php-cs-fixer.
 */
class PhpCsFixerGoal extends \hidev\goals\BaseGoal
{
    public function init()
    {
        $this->setDeps('.php_cs');
    }

    public function getFinder1()
    {
        $res = [];
        foreach ($this->rawItem('finder') as $k => $vs) {
            $res[$k] = Helper::asplit($vs);
        }

        return 'finder';
    }

    public function save()
    {
        $this->actionFix();
    }

    public function actionFix()
    {
        exec('php-cs-fixer fix');
    }
}
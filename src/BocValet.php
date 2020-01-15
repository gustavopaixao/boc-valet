<?php

/**
 * This file is part of the gustavopaixao/boc-valet library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Gustavo Paixao <contact@gustavopaixao.com>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace GustavoPaixao\Boc\Valet;

/**
 * Interface to Bank of Canada public API, called Valet
 */
class BocValet
{
    /**
     * Returns a simple and friendly message.
     *
     * @return string
     */
    public function getHello(): string
    {
        return 'Hello, World!';
    }
}

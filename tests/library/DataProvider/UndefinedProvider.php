<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Test\DataProvider;

/**
 * Data provider to use when testing against undefined values.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
trait UndefinedProvider
{
    /**
     * Returns values that are considered as "undefined"
     *
     * @return mixed[][]
     */
    public function providerForUndefined(): array
    {
        return [
            [null],
            [''],
        ];
    }

    /**
     * Returns values that are not considered as "undefined"
     *
     * @return mixed[][]
     */
    public function providerForNotUndefined(): array
    {
        return [
            [0],
            [0.0],
            ['0'],
            [false],
            [true],
            [' '],
            [[]],
        ];
    }
}

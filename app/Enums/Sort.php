<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Sort extends Enum
{
    const SORT_ID_ASC = 1;
    const SORT_ID_DESC = 2;
    const SORT_CREATED_AT_ASC = 3;
    const SORT_CREATED_AT_DESC = 4;
    const SORT_NAME_ASC = 5;
    const SORT_NAME_DESC = 6;
    const SORT_PRICE_ASC = 7;
    const SORT_PRICE_DESC = 8;
    const SORT_VALUE_ASC = 9;
    const SORT_VALUE_DESC = 10;

    const SORT_VALUER_ASC = 11;
    const SORT_VALUER_DESC = 12;
}

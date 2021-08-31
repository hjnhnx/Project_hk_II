<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class CheckoutStatus extends Enum
{
    const PAID =   0;
    const UNPAID =   1;
}

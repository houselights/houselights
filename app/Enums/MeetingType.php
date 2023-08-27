<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static WEBINAR()
 * @method static static MEETING()
 */
final class MeetingType extends Enum
{
    const WEBINAR = 'WEBINAR';
    const MEETING = 'MEETING';
}

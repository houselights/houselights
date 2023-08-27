<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static CONFERENCE()
 * @method static static SIMPLE_EVENT()
 */
final class EventType extends Enum
{
    const CONFERENCE = 'CONFERENCE';
    const SIMPLE_EVENT = 'SIMPLE_EVENT';
}

<?php declare(strict_types=1);

namespace Formapro\Values\Cast;

class CastDateTimeZone
{
    public static function to(\DateTimeZone $timeZone): array
    {
        return [
            'tz' => $timeZone->getName(),
        ];
    }

    public static function from($value): ?\DateTimeZone
    {
        return null !== $value ? new \DateTimeZone($value['tz']) : null;
    }
}

<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Uuid;

use Vin\ShopwareSdk\Data\Uuid\Exception\InvalidUuidException;
use Vin\ShopwareSdk\Data\Uuid\Exception\InvalidUuidLengthException;

class Uuid
{
    /**
     * Regular expression pattern for matching a valid UUID of any variant.
     */
    public const VALID_PATTERN = '^[0-9a-f]{32}$';

    public static function randomHex(): string
    {
        $hex = bin2hex(random_bytes(16));
        $timeHi = self::applyVersion(mb_substr($hex, 12, 4), 4);
        $clockSeqHi = self::applyVariant(hexdec(mb_substr($hex, 16, 2)));

        return sprintf(
            '%08s%04s%04s%02s%02s%012s',
            // time low
            mb_substr($hex, 0, 8),
            // time mid
            mb_substr($hex, 8, 4),
            // time high and version
            str_pad(dechex($timeHi), 4, '0', \STR_PAD_LEFT),
            // clk_seq_hi_res
            str_pad(dechex($clockSeqHi), 2, '0', \STR_PAD_LEFT),
            // clock_seq_low
            mb_substr($hex, 18, 2),
            // node
            mb_substr($hex, 20, 12)
        );
    }

    public static function randomBytes(): string
    {
        return (string) hex2bin(self::randomHex());
    }

    /**
     * @throws InvalidUuidException
     * @throws InvalidUuidLengthException
     */
    public static function fromBytesToHex(string $bytes): string
    {
        if (mb_strlen($bytes, '8bit') !== 16) {
            throw new InvalidUuidLengthException(mb_strlen($bytes, '8bit'), bin2hex($bytes));
        }

        $uuid = bin2hex($bytes);

        if (! self::isValid($uuid)) {
            throw new InvalidUuidException($uuid);
        }

        return $uuid;
    }

    public static function fromBytesToHexList(array $bytesList): array
    {
        $converted = [];
        foreach ($bytesList as $key => $bytes) {
            $converted[$key] = self::fromBytesToHex($bytes);
        }

        return $converted;
    }

    public static function fromHexToBytesList(array $uuids): array
    {
        $converted = [];
        foreach ($uuids as $key => $uuid) {
            $converted[$key] = self::fromHexToBytes($uuid);
        }

        return $converted;
    }

    /**
     * @throws InvalidUuidException
     */
    public static function fromHexToBytes(string $uuid): string
    {
        if ($bin = @hex2bin($uuid)) {
            return $bin;
        }

        throw new InvalidUuidException($uuid);
    }

    public static function isValid(string $id): bool
    {
        return (bool) preg_match('/' . self::VALID_PATTERN . '/', $id);
    }

    private static function applyVersion(string $timeHi, int $version): int
    {
        $timeHi = hexdec($timeHi) & 0x0fff;
        $timeHi &= ~(0xf000);

        return $timeHi | $version << 12;
    }

    private static function applyVariant(float|int $clockSeqHi): int
    {
        // Set the variant to RFC 4122
        $clockSeqHi &= 0x3f;
        $clockSeqHi &= ~(0xc0);

        return $clockSeqHi | 0x80;
    }
}

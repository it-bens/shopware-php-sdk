<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Filter;

class ContainsFilter extends Filter
{
    public function __construct(
        private readonly string $field,
        private readonly string $value
    ) {
    }

    #[\Override]
    public function parse(): array
    {
        return [
            'type' => self::TYPE_CONTAINS,
            'field' => $this->field,
            'value' => $this->value,
        ];
    }
}

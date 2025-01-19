<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Aggregation;

class MaxAggregation extends Aggregation
{
    public function __construct(
        public string $name,
        public string $field
    ) {
    }

    #[\Override]
    public function parse(): array
    {
        return [
            'type' => self::TYPE_MAX,
            'name' => $this->name,
            'field' => $this->field,
        ];
    }
}

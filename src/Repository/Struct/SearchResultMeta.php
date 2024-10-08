<?php

declare(strict_types=1);

namespace Vin\ShopwareSdk\Repository\Struct;

use Vin\ShopwareSdk\Data\Struct;

class SearchResultMeta extends Struct
{
    public function __construct(
        private int $total,
        private int $totalCountMode
    ) {
    }

    public function getTotalCountMode(): int
    {
        return $this->totalCountMode;
    }

    public function setTotalCountMode(int $totalCountMode): void
    {
        $this->totalCountMode = $totalCountMode;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}

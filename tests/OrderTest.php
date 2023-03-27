<?php

declare(strict_types=1);

namespace Tests;

use TakeawayModels\Order\Customer;
use TakeawayModels\Order\Discount;
use TakeawayModels\Order\Order;
use TakeawayModels\Order\Product;

class OrderTest extends \Orchestra\Testbench\TestCase
{
    use CompareArrayModel;

    public function testCustomer(): void
    {
        $data = $this->getData();
        $data = $data['customer'];

        $object = new Customer($data);

        $this->compareArrayModel($data, $object);
    }

    public function testProducts(): void
    {
        $data = $this->getData();
        $data = $data['products'];

        $collection = Product::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testDiscounts(): void
    {
        $data = $this->getData();
        $data = $data['discounts'];

        $collection = Discount::collection($data);

        $collection->each(fn ($item, $key) => $this->compareArrayModel($data[$key], $item));
    }

    public function testOrder(): void
    {
        $data = $this->getData();

        $object = new Order($data);

        $this->compareArrayModel($data, $object);
    }

    /** @return array<mixed> */
    private function getData(): array
    {
        $filePath = __DIR__.'/order.json';
        $this->assertFileExists($filePath);
        $this->assertFileIsReadable($filePath);

        $jsonData = file_get_contents($filePath);

        $this->assertIsString($jsonData);

        $data = json_decode($jsonData, true);

        $this->assertNotEmpty($data);
        $this->assertIsArray($data);

        return $data;
    }
}

<?php

namespace Tests\Unit\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Product;
use Mockery;

class ProductUnitTest extends TestCase
{
    public function testAttribute()
    {
        $product = new Product(
            id: '1',
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals('prodx', $product->getName());
        $this->assertEquals('10', $product->getPrice());
        $this->assertEquals('10', $product->getPrice());
        $this->assertEquals('1', $product->getId());
    }

    public function testCalc()
    {
        $product = new Product(
            id: '1',
            name: "prodx",
            price: 10,
            total: 12
        );

        $this->assertEquals(120, $product->total());
        $this->assertEquals(132, $product->totalWithTax10());
    }

    public function testExampleMock()
    {
        $mockProduct = Mockery::mock(Product::class, [
            'id_prod', 'name_prod', 12, 1
        ]);
        $mockProduct->shouldReceive('getId')->andReturn('id_prod')->times(1);

        $this->assertEquals('id_prod', $mockProduct->getId());

        Mockery::close();
    }
}
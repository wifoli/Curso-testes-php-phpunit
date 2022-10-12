<?php

namespace Tests\Unit\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Cart;
use Core\Orders\Product;

class CartUnitTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();
        $cart->add(product: new Product(
            id: '1',
            name: 'teste',
            price: 12,
            total: 1
        ));
        $cart->add(product: new Product(
            id: '2',
            name: 'teste',
            price: 20,
            total: 1
        ));

        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(32, $cart->total());
    }

    public function testCartTotal()
    {
        $cart = new Cart();
        $product1 = new Product(
            id: '1',
            name: 'teste',
            price: 12,
            total: 1
        );
        $product2 = new Product(
            id: '2',
            name: 'teste',
            price: 20,
            total: 1
        );

        $cart->add(product: $product1);
        $cart->add(product: $product1);
        $cart->add(product: $product2);
        $cart->add(product: $product2);

        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(64, $cart->total());
    }

    public function testCartEmpty()
    {
        $cart = new Cart();

        $this->assertCount(0, $cart->getItems());
        $this->assertEquals(0, $cart->total());
    }
}

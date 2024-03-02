<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Models\Magazijn;
use app\Models\Product;

class CodeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index(): void
    {
        $response = $this->get('/', [
            'magazijns' => Magazijn::with('product')->orderBy(Product::select('barcode')->whereColumn('products.id', 'magazijns.product_id'))->get()
        ]);;

        $response->assertStatus(200);
    }
}

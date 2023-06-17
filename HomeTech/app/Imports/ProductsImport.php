<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $product = new Product([
            'name' => $row['name'],
            'slug' => $row['slug'],
            'short_description' => $row['short_description'],
            'description' => $row['description'],
            'regular_price' => $row['regular_price'],
            'sale_price' => $row['sale_price'],
            'SKU' => $row['SKU'],
            'stock_status' => $row['stock_status'],
            'featured' => $row['featured'],
            'quantity' => $row['quantity'],
            'image' => $row['image'],
            'images' => $row['images'],
            'category_id' => $row['category_id'],
        ]);

        $product->save();
        
        return $product;
    }
}

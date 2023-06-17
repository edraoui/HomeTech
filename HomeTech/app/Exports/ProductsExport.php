<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }

    public function headings(): array
    {
        return ["id","Name","Slug","Short description","Description","Regular Price","Sale Price","SKU","Stock Status","Featured","Quantity","Image","Images","Category"];
    }
}

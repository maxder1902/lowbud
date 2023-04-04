<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\Csv\Reader;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public static function importFromCsv($file, $fileName){

        $csv = Reader::createFromPath($file, 'r');
        $csv->setHeaderOffset(0);

        $records = $csv->getRecords();

        DB::beginTransaction();

        try{
            foreach ($records as $record) {
                $product = static::create([
                    'name' => $record['Producto'],
                    'price' => $record['Precio'],
                ]);

                if ( strpos($fileName, 'Carrefour') !== false ) {
                    $carrefourShop = Shop::where('name', 'CARREFOUR')->first();
                    $product->Shops()->attach($carrefourShop);
                }else if ( strpos($fileName, 'Aldi') !== false ) {
                    $aldiShop = Shop::where('name', 'ALDI')->first();
                    $product->Shops()->attach($aldiShop);
                }
            }
            DB::commit();
        } catch(\Exception $e){
            DB::rollBack();
            throw $e;
        }
        
    }

    public static function showProducts() {

    $products = Product::select('products.name', 'products.price', 'shop.logo')->
        join('product_shop', 'products.id', '=', 'product_shop.product_id')->
        join('shop', 'product_shop.shop_id', '=', 'shop.id')->
        get();
        
        return $products;        
    }
    public function Shops(){
        return $this->belongsToMany(Shop::class);
    }
}

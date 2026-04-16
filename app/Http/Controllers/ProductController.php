<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Demo::create([

        // 'product_name' => 'inserted from laravel using model',
        // 'price'=> 10,
        // 'description' => 'lorem apsum',
        // 'stock' => 12,

        // ]);

        // $product =  Demo::findOrFail(9);

        // $product->update([
        //     'price' => 100
        // ]);

        // $product =  Demo::where('id','=',9)->first();

        $product =  Demo::findOrFail(9);

        $product->delete();

        $tableData = Demo::get();

        // dd($product);

        foreach ($tableData as $product) {
            echo $product->id .' - ' . $product->product_name .'<br >';
            if($product->is_avaliable){
            echo $product->created_at .'<br >';

            }
        }


        return "All Products";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        return "Product ID - ${id}";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    /**
     * 
     * DB Class 
     */

    // https://laravel.com/docs/12.x/queries

        // $productsData = DB::table('products')->inRandomOrder()->limit(2)->get();

        // $insertedStatus = DB::table('products')->insert([

        // 'product_name' => 'inserted from laravel',
        // 'price'=> 10,
        // 'description' => 'lorem apsum',
        // 'stock' => 12,

        // 'created_at' => now(),
        // 'updated_at' => now(),

        // ]);


        // $updatedStatus = DB::table('products')->where('id','=',5)->update([

        // 'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores tempore quae repellendus similique totam impedit aliquid vitae magni nihil at, commodi aliquam, modi laudantium vero, veniam officiis sunt ab consequatur?'

        // ]);

        // $deletedStatus = DB::table('products')->delete('2');



        // dd($deletedStatus);
}

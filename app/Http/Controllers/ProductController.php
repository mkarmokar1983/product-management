<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;
use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    //
    public function productList(Request $request)
    {
        $query = Product::query();
        $search = $request->input('search');
        $query->where('product_id', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%");

        // Apply sorting based on the selected option
        $sort = $request->input('sort');
        switch ($sort) {
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'name_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('name', 'asc'); // Default sorting
                break;
        }
        $products = $query->paginate(5);



        return view('index')->with('products', $products);
    }

    //Show Create form
    public function createProduct()
    {
        return view('create');
    }

    // Store Product
    public function storeProduct(Request $request)
    {
        if ($request->hasFile('image')) {
            $request->validate(
                [
                    'product_id' => 'required|unique:products',
                    'name' => 'required',
                    'description' => '',
                    'price' => 'required|numeric',
                    'stock' => 'nullable|numeric',
                    'image' => 'nullable|mimes:jpeg,jpg,png,gif,jfif|required|max:4048'
                ]
            );
        }

        $request->validate(
            [
                'product_id' => 'required|unique:products',
                'name' => 'required',
                'description' => '',
                'price' => 'required|numeric',
                'stock' => 'nullable|numeric',
                'image' => ''
            ]
        );



        $product = new Product;
        $product->product_id = $request->input('product_id');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        //Store Image

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->input('product_id') . "." . $image->getClientOriginalExtension();
            //Delete if file Exist
            if (file_exists(public_path('product-image' . '/' . $imageName))) {
                unlink(public_path('product-image' . '/' . $imageName));
            }
            //Store Image
            $image->move(public_path('product-image'), $imageName);
            //store image name in database
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('products.index');
    }

    // Show Specific Product

    public function showProduct(Request $request)
    {
        // $product = Product::where('id', $id);
        $id = $request->id;
        $product = Product::find($id);
        return view('show')->with('product', $product);
    }

    //Edit product

    public function editProduct(Request $request, $id)
    {
        $product = Product::find($id);
        // return $product;
        return view('edit')->with('product', $product);
    }

    //Update Product
    public function updateProduct(Request $request, $id)
    {

        if ($request->hasFile('image')) {
            $request->validate(
                [
                    'product_id' => 'required|unique:products,product_id,' . $id,
                    'name' => 'required',
                    'description' => '',
                    'price' => 'required|numeric',
                    'stock' => 'nullable|numeric',
                    'image' => 'nullable|mimes:jpeg,jpg,png,gif,jfif|required|max:4048'
                ]
            );
        }

        $request->validate(
            [
                'product_id' => 'required|unique:products,product_id,' . $id,
                'name' => 'required',
                'description' => '',
                'price' => 'required|numeric',
                'stock' => 'nullable|numeric',
                'image' => ''
            ]
        );


        $product = Product::find($id);

        $product->product_id = $request->input('product_id');
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->input('product_id') . "." . $image->getClientOriginalExtension();

            //Delete if file Exist
            $filePath = public_path('product-image' . '/' . $imageName);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
            //Store Image
            $image->move(public_path('product-image'), $imageName);
            //store image name in database
            $product->image = $imageName;
        }

        $product->update();
        return redirect()->route('products.index');
    }


    //Delete Product

    public function deleteProduct(Request $request, $id)
    {
        $product = Product::find($id);

        if ($request->image != null) {
            $filePath = public_path('product-image/' . $product->image);
            unlink($filePath);
        }

        $product->delete();

        return redirect()->route('products.index');
    }
}

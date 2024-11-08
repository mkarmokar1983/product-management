@extends('Layout.app')

@section('content')
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Update Product</h4>
        </div>

        <div class="showForm">
            <div class="showFormContainer">
                <div class="subHeader">
                    <h4>Product Update</h4>
                </div>


                <form class="showFormContent" action="{{ route('product.update', $product->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label for="product_id">Product ID</label>
                    <div>
                        <input type="text" name="product_id" value="{{ $product->product_id }}"
                            placeholder="Enter Product ID">
                        @error('product_id')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="name">Product Name</label>
                    <div>
                        <input type="text" name="name" value="{{ $product->name }}" placeholder="Enter Product Name">
                        @error('name')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="description">Product Description</label>
                    <input type="text" name="description" value="{{ $product->description }}"
                        placeholder="Enter Product Description">

                    <label for="price">Product Price</label>
                    <div>
                        <input type="text" name="price" value="{{ $product->price }}"
                            placeholder="Enter Product Price">
                        @error('price')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="stock">Product Stock</label>
                    <div>
                        <input type="text" name="stock" value="{{ $product->stock }}"
                            placeholder="Enter Product Stock Quantity">
                        @error('stock')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for=""></label>

                    <img style="height: 34px; width:60px; border: 1px solid white; border-radius:4px"
                        src="{{ asset('./product-image/' . $product->image) }}" alt="No Img">
                    <label for="image">Change Image</label>

                    <div>

                        <input type="file" name="image" id="" value="{{ $product->image }}">
                        @error('image')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for=""></label>
                    <div class="showFormBtn">
                        <button><a href="{{ route('products.index') }}">Cancel</a></button>
                        <button type="submit">Update</button>
                        {{-- <p>{{$product->id}}</p> --}}
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

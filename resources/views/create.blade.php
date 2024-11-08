@extends('Layout.app')

@section('content')
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Create New Product</h4>
        </div>

        <div class="showForm">
            <div class="showFormContainer">
                <div class="subHeader">
                    <h4>Product Cteare</h4>
                </div>

                <form class="showFormContent" action="{{ route('product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <label for="product_id">Product ID</label>
                    <div>
                        <input type="text" name="product_id" value="{{ old('product_id') }}"
                            placeholder="Enter Product ID">
                        @error('product_id')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="name">Product Name</label>
                    <div>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Product Name">
                        @error('name')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="description">Product Description</label>
                    <input type="text" name="description" value="{{ old('description') }}"
                        placeholder="Enter Product Description">

                    <label for="price">Product Price</label>
                    <div>
                        <input type="text" name="price" value="{{ old('price') }}" placeholder="Enter Product Price">
                        @error('price')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>

                    <label for="stock">Product Stock</label>
                    <div>
                        <input type="text" name="stock" value="{{ old('stock') }}"
                            placeholder="Enter Product Stock Quantity">
                        @error('stock')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for="image">Upload Image</label>
                    <div>
                        <input type="file" name="image" id="" value="{{ old('image') }}">
                        @error('image')
                            <span class="validationMsg">{{ $message }}</span>
                        @enderror
                    </div>
                    <label for=""></label>
                    <div class="showFormBtn">
                        <button><a href="{{ route('products.index') }}">Cancel</a></button>
                        <button type="submit">Save</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection

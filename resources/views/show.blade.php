@extends('Layout.app')

@section('content')
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Product Detail</h4>
        </div>

        <div class="showForm">
            <div class="showFormContainer">
                <div class="subHeader">
                    <h4>Product Detail</h4>
                </div>


                <div class="showContent">
                    <div class="showDetail">
                        <label for="product_id">Product ID:</label>
                        <p>{{ $product->product_id }}</p>
                        <label for="name">Name:</label>
                        <p>{{ $product->name }}</p>
                        <label for="description">Description:</label>
                        <p>{{ $product->description }}</p>
                        <label for="price">Price:</label>
                        <p>{{ $product->price }}</p>
                        <label for="stock">Stock:</label>
                        <p>{{ $product->stock }}</p>

                        <label for="image">Created at:</label>
                        <p>{{ $product->created_at }}</p>
                        <label for="image">Updated at:</label>
                        <p>{{ $product->updated_at }}</p>
                        <label for=""></label>
                    </div>
                    <div>
                        <div class="show-image">
                            <img class="" src="{{ asset('./product-image/' . $product->image) }}"
                                alt="Product Management.">
                        </div>
                    </div>
                </div>
                <div class="showFormBtn">
                    <button><a href="{{ route('products.index') }}">Back</a></button>
                </div>

            </div>
        </div>

    </div>
@endsection

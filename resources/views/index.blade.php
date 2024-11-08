{{-- <style>
    .w-5 {
        display: none;
    }
</style> --}}

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@extends('Layout.app')

@section('content')
    {{-- Department Information --}}
    <!-- Body Excluding Header footer -->
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Product Information</h4>
        </div>
        <!-- SUB CONTAINER -->
        <div class="subContainer appBody">
            <!-- Searshing Section -->
            <div class="searchAdd">
                <div>
                    <form action="{{ route('products.index') }}" method="GET">
                        @csrf
                        <input id= "search" type="text" name="search" placeholder="Search by Product ID or Description"
                            value="{{ request('search') }}">
                        <button type="submit">Search</button>
                    </form>
                </div>

                {{-- Shorting Section --}}

                <div class="sort">
                    <form action="{{ route('products.index') }}" method="GET">
                        @csrf
                        <select name="sort" id="sort">
                            {{-- <option value="" selected>Sort Your Product</option> --}}
                            <option value="name_asc" selected>Sort By Name (A-Z)</option>
                            <option value="name_desc">Sort By Name (Z-A)</option>
                            <option value="price_asc">Sort By Price (A-Z)</option>
                            <option value="price_desc">Sort By Price (Z-A)</option>
                        </select>

                        <button type="submit">Sort</button>
                    </form>
                </div>

                <div>
                    <button style="background-color: green"><a href="{{ route('product.create') }}">Create</a></button>
                </div>
            </div>

            <!-- Table Section -->
            <div>
                <table class="tableGlobal">
                    <thead>
                        <tr class="tr-sicky">
                            <th>SL</th>
                            <th>Product_ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>Stock</th>
                            <th style="text-align: center; width:100px;">Image</th>
                            <th style="text-align:center; width:80px">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sl = 0;
                        @endphp

                        @if ($products->isNotEmpty())
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $sl += 1 }}</td>
                                    <td>{{ $product->product_id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        <div class="product-image">
                                            <img style="opacity: 100%; padding:1px" src="{{ asset('./product-image/' . $product->image) }}"
                                                alt="No-Image">
                                        </div>

                                    </td>
                                    <td class="tdAction">
                                        <div>

                                            <button class="showButton"><a
                                                    href="{{ route('product.show', $product->id) }}">Show</a></button>
                                        </div>
                                        <div>
                                            <button class="editButton"><a
                                                    href="{{ route('product.edit', $product->id) }}">Edit</a></button>
                                        </div>
                                        <div style="max-width: 50px; max-height:25px">
                                            <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="deleteButton" type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No Product Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                <div>{{ $products->links('pagination::bootstrap-5') }}</div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
@endsection

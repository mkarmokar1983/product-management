<!-- Header Body Start -->
<div class="header">
    <div class="logo">
        <!-- Header Image Logo -->
        <img src="{{asset("./images/logo.png")}}" alt="Product Management.">
    </div>
    <!-- Menue item inside Header -->
    <div class="menueBar">
        
        <ul>
            {{-- <li class="menue"> Home&#9662;
                <ul class="subMenue">
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </li> --}}
            <li class="menue"> Product&#9662;
                <ul class="subMenue">
                    <li><a href="{{route('products.index')}}">Product List</a></li>
                    <li><a href="{{route('product.create')}}">Create Product</a></li>
                </ul>
            </li>
        </ul>

    </div>

    <!-- User Information inside Header -->
    <div class="user">
        <img src="{{asset("./images/userimage.jpg")}}" alt="User Image">
        <span>Mrinal Karmokar</span>
    </div>
</div>



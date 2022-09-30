@extends('layouts.app')
@section('title',"Unique of IT Web Blogging")
@section('meta_description',"Unique of IT Web Blogging")
@section('meta_keyword',"Unique of IT Web Blogging")
@section('content')

    <div class="bg-danger py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel category-carousel owl-theme">
                        @foreach($all_categories as $category_item)
                        <div class="item">
                            <a href="{{ url('tutorial/'.$category_item->slug) }}" class="text-decoration-none">
                                <div class="card">
                                    <img src="{{ asset('uploads/category/'.$category_item->image) }}" alt="Image" width="100" height="150">
                                    <div class="card-body text-center">
                                        <h5 class="text-dark">{{ $category_item->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-1 bg-light">
        <div class="container">
            <div class="border p-3 text-center">
                <h3>Advertise Here</h3>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Unique: Just Be Unique</h4>
                    <div class="underline"></div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid animi atque aut cumque cupiditate deleniti harum, in ipsam neque, optio pariatur porro qui reiciendis rem sed similique tempora unde veniam voluptatem! Alias atque consectetur dolorem eligendi est hic ipsam iusto modi molestiae, molestias nulla optio perspiciatis rem sapiente sequi sint sunt voluptas voluptates.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>All Categories List</h4>
                    <div class="underline"></div>
                </div>
                @foreach($all_categories as $categoryItem)
                    <div class="col-md-3">
                        <div class="card card-body mb-3">
                            <a href="{{ url('tutorial/'.$categoryItem->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-0">{{ $categoryItem->name }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Latest Posts</h4>
                    <div class="underline"></div>
                </div>
                <div class="col-md-8">
                    @foreach($latest_posts as $postItem)
                            <div class="card card-body mb-3 bg-light shadow">
                                <a href="{{ url('tutorial/'.$postItem->category->slug.'/'.$postItem->slug) }}" class="text-decoration-none">
                                    <h5 class="text-dark mb-0">{{ $postItem->name }}</h5>
                                </a>
                                <h6>Posted On: {{ $postItem->created_at->format('Y-m-d') }}</h6>
                            </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="border p-3 text-center">
                        <h3>Advertise Here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

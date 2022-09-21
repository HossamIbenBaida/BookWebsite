@extends('client_layout.client')
@section('content')
<section class="content-inner-1 border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="title">Books</h4>
        </div>
        <div class="row book-grid-row">
            @foreach ($books as $book)
            <div class="col-book style-1">
                <div class="dz-shop-card style-1">
                    <div class="dz-media">
                        <img  src="{{asset('storage/book_images/'.$book->image)}}" alt="book">									
                    </div>
                    <div class="bookmark-btn style-2">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                        <label class="form-check-label" for="flexCheckDefault1">
                            <i class="flaticon-heart"></i>
                        </label>
                    </div>
                    <div class="dz-content">
                        <h5 class="title"><a href="{{url('/bookdetail/'.$book->id)}}">{{$book->titre}}</a></h5>
                        <ul class="dz-tags">
                            <li><a href="books-grid-view.html">{{$book->categorie}}</a></li>
                        </ul>
                        <ul class="dz-rating">
                            <li><i class="flaticon-star text-yellow"></i></li>	
                            <li><i class="flaticon-star text-yellow"></i></li>	
                            <li><i class="flaticon-star text-yellow"></i></li>	
                            <li><i class="flaticon-star text-yellow"></i></li>		
                            <li><i class="flaticon-star text-yellow"></i></li>		
                        </ul>
                        <br>
                        <div class="book-footer">
                            @if($book->book_file=="Null" && $book->direct_link!="Null")
                            <a href="/telecharger/{{$book->id}}" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fa-solid fa-download m-r10"></i>Telecharger</a>
                            @elseif($book->book_file=="Null" && $book->direct_link=="Null")
                            <a href="/404" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fa-solid fa-download m-r10"></i>Telecharger</a>
                            @else
                            <a href="/telecharger/?file={{$book->book_file}}" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fa-solid fa-download m-r10"></i>Telecharger</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
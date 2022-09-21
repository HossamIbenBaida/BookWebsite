@extends('client_layout.client')
@section('content')

<div class="page-content bg-grey">
    <section class="content-inner-1">
        <div class="container">
            <div class="row book-grid-row style-4 m-b60">
                <div class="col">
                    <div class="dz-box">
                        <div class="dz-media">
                            <img src="{{asset('storage/book_images/'.$book->image)}}" alt="book">
                        </div>
                        <div class="dz-content">
                            <div class="dz-header">
                                <h3 class="title">{{$book->titre}}</h3>
                            </div>
                            <div class="dz-body">
                                <div class="book-detail">
                                    <ul class="book-info">
                                        <li>
                                            <div class="writer-info">
                                                <div>
                                                    <span>auteur</span>{{$book->auteur}}
                                                </div>
                                            </div>
                                        </li>
                                        <li><span>année</span>{{$book->annee}}</li>
                                    </ul>
                                </div>
                                <p class="text-1">{{$book->description}}</p>
                                <div class="book-footer">
                                    <div class="product-num">
                                        @if($book->book_file=="Null" && $book->direct_link!="Null")
                                        <a href="/telecharger/{{$book->id}}" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fa-solid fa-download m-r10"></i>Telecharger</a>
                                        @elseif($book->book_file=="Null" && $book->direct_link=="Null")
                                        <a href="/404" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fa-solid fa-download m-r10"></i>Telecharger</a>
                                        @else
                                        <a href="/telecharger/?file={{$book->book_file}}" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fa-solid fa-download m-r10"></i>Telecharger</a>
                                        @endif                                        <div class="bookmark-btn style-1 d-none d-sm-block">
                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                            <label class="form-check-label" for="flexCheckDefault1">
                                                <i class="flaticon-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-8">
                    <div class="product-description tabs-site-button">
                        <ul class="nav nav-tabs">
                            <li><a data-bs-toggle="tab" href="#graphic-design-1" class="active">détailles du produit</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="graphic-design-1" class="tab-pane show active">
                                <table class="table border book-overview">
                                    <tr>
                                        <th>Titre du livre</th>
                                        <td>{{$book->titre}}</td>
                                    </tr>
                                    <tr>
                                        <th>Auteur</th>
                                        <td>{{$book->auteur}}</td>
                                    </tr>
                                    <tr>
                                        <th>Pages</th>
                                        <td>{{$book->pages}}</td>
                                    </tr>
                                    <tr class="tags">
                                        <th>Tags</th>
                                        <td>
                                            @foreach ($tags as $tag)
                                            <a href="javascript:void(0);" class="badge">{{$tag}}</a> 
                                            @endforeach
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection
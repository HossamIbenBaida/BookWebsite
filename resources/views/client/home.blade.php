@extends('client_layout.client')
@section('content')
	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<!-- header search nav -->
				<div class="header-search-nav">
					<form  action="/" class="header-item-search">
						<div class="input-group search-input">
							<select class="default-select" name="category">
								<option  value="">Category</option>
                                @foreach ($categories as $categorie)
                                <option value="{{$categorie->categorie}}">{{$categorie->categorie}} </option> 
                                @endforeach
							</select>
							<input type="text" name="search" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="submit"><i class="flaticon-loupe"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>

					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li ><a href="/"><span>Home</span></a></li>
                            <li ><a href="#"><span>Categories</span></a></li>
							<li><a href="about-us.html"><span>About Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="#"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="#"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="#"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->
	
	<div class="page-content bg-grey">
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
                            <li><a href="{{url('/?category='.$book->categorie)}}">{{$book->categorie}}</a></li>
                        </ul>
                        <ul class="tags">
                                <li>
                                    <?php $tags= explode (",", $book->tags) ?>
                                    @foreach ($tags as $tag)
                                    <a href="{{url('/?tags='.$tag)}}" class="badge">{{$tag}}</a> 
                                    @endforeach
                                </li>
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
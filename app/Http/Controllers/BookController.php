<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
   public function home(){
    $books = Book::latest()->filter(request(['category','search']))->get();
    return view('client.home')->with('books',$books);
   }

   public function allbooks(){
    $books = Book::latest()->get();
    return view('admin.books')->with('books',$books);
   }
   public function editbook($id){
    $book=Book::find($id);
    $categories=Category::all()->pluck('categorie','categorie');
    return view('admin.editbook' , compact(['book' , 'categories']));
   }

   public function bookdetail($id){
    $book=Book::find($id);
    $tags = explode (",", $book->tags);

    return view('client.bookdetail', compact(['book' , 'tags']));
    
   }


   public function telecharger(Request $req){
   if(Storage::disk('public')->exists('Pdf_files/'.$req->file)){
    $path = Storage::disk('public')->path('Pdf_files/'.$req->file);
    $content = file_get_contents($path);
    return response($content)->withHeaders([
        'content-Type' => mime_content_type($path)

    ]);
   }
   return redirect('/404');
   }


   public function updatebook(Request $request){
    $book=Book::find($request->input('id'));
    $this->validate($request,['titre'=>'required' ,
                                   'auteur'=>'required' ,
                                   'description'=>'required' ,
                                    'book_file'=>'nullable',
                                    'direct_link'=>'nullable|url',
                                    'image'=>'image|nullable|max:1999']);
        if($request->hasFile('book_file')){
            //1 : get file name with exte
            $fileNameWithExt = $request->file('book_file')->getClientOriginalName();
            //2 : get just file name 
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            //3 get just file extension
            $extension = $request->file('book_file')->getClientOriginalExtension();
            //4 : file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension ;
            //upload image
            $path=$request->file('book_file')->storeAs('public/Pdf_files', $fileNameToStore);

        }else{
            $fileNameToStore = 'Null';

        }
  
        
        if($request->hasFile('image')){
            //1 : get file name with exte
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //2 : get just file name 
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            //3 get just file extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //4 : file name to store
            $imageNameToStore = $fileName.'_'.time().'.'.$extension ;
            //upload image
            $path=$request->file('image')->storeAs('public/book_images', $imageNameToStore);

        }else{
            $imageNameToStore = 'noimage.jpg';

        }


        if($book->book_file != 'Null'){
            Storage::delete('public/pdf_files/'.$book->book_file);
        }

        if($book->image != 'noimage.jpg'){
            Storage::delete('public/book_images/'.$book->image);
        }

        if(empty($request->input('direct_link'))){
            $book->direct_link='Null';
        }else{
            $book->direct_link = $request->input('direct_link');
        }

        $book->titre = $request->input('titre'); 
        $book->auteur = $request->input('auteur');
        $book->tags = $request->input('tags');
        $book->pages = $request->input('pages');
        $book->annee = $request->input('annee');
        $book->categorie = $request->input('categorie');
        $book->description = $request->input('description');
        $book->book_file = $fileNameToStore;  
        $book->image = $imageNameToStore;  
        $book->update();
        return redirect('/books')->with('status','the book has been successfully updated !!');


   }


   public function addbook(){
   $categories = Category::all()->pluck('categorie','categorie');
    return view('admin.addbook')->with('categories',$categories);
   }



   public function savebook(Request $request){
      $this->validate($request,['titre'=>'required' ,
                                   'auteur'=>'required' ,
                                   'description'=>'required' ,
                                    'book_file'=>'nullable',
                                    'direct_link'=>'nullable|url',
                                    'image'=>'image|nullable|max:1999']);
        if($request->hasFile('book_file')){
            //1 : get file name with exte
            $fileNameWithExt = $request->file('book_file')->getClientOriginalName();
            //2 : get just file name 
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            //3 get just file extension
            $extension = $request->file('book_file')->getClientOriginalExtension();
            //4 : file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension ;
            //upload image
            $path=$request->file('book_file')->storeAs('public/Pdf_files', $fileNameToStore);

        }else{
            $fileNameToStore = 'Null';

        }
        
        if($request->hasFile('image')){
            //1 : get file name with exte
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //2 : get just file name 
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME);
            //3 get just file extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //4 : file name to store
            $imageNameToStore = $fileName.'_'.time().'.'.$extension ;
            //upload image
            $path=$request->file('image')->storeAs('public/book_images', $imageNameToStore);

        }else{
            $imageNameToStore = 'noimage.jpg';

        }
        $book = new Book();
        if(empty($request->input('direct_link'))){
            $book->direct_link='Null';
        }else{
            $book->direct_link = $request->input('direct_link');
        }
        $book->titre = $request->input('titre'); 
        $book->auteur = $request->input('auteur');
        $book->tags = $request->input('tags'); 
        $book->pages = $request->input('pages');
        $book->annee = $request->input('annee');
        $book->categorie = $request->input('categorie');
        $book->description = $request->input('description');
        $book->book_file = $fileNameToStore;  
        $book->image = $imageNameToStore;  
        $book->save();
        return back()->with('status','the book has been successfully saved !!');

    }


    public function direct_link($id){
        $book = Book::find($id);
        return redirect()->away($book->direct_link);
    }
}

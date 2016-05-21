<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\image;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
           protected $layout = 'layouts.main';

           
         public function viewgallerylist(){
           $galleries = Gallery::all();

           
            return view('gallery')->with('galleries',$galleries);
           
           }
           
           public function savegallery(Request $request){
                      
            // validate the request through the validation rule
            $validator =Validator::make($request->all(),[
                                        'gallery_name'=>'required|min:3']);
            
            
            //take action s when validation has failed
            if($validator->fails()){
                return redirect('gallery/list')
                    ->withErrors($validator)
                    ->withInput();
            }
            $gallery = new Gallery;
            // save new gallery name
            $gallery->name=$request->input('gallery_name');
            $gallery->created_by=1;
            $gallery->published =1;
            $gallery->created_at=time();
            $gallery->updated_at=1;
            $gallery->save();
            
            return redirect()->back();
            
            
                      
           }
           
           
           public function viewgallerypics($id){
                      
                $gallery=Gallery::findorFail($id);
                return view('gallery-view')->with('gallery',$gallery);
                      
           }
           
           
           
           public function imageupload(Request $request){
               // get the file from the post request
               $file=$request->file('file');
               
           
               
               // set my file name
               $filename=uniqid().$file->getClientOriginalName();
               // move the file to correct location
                $file->move('gallery/images',$filename);
                
                // save the image details into the database
              //  $gallery= Gallery::find($request->input('gallery_id'));
                
            $image = new image;
            // save new gallery name
            $image->gallery_id=$request->input('gallery_id');
            
                      $image->file_name =$filename;
                  $image->file_size= $file->getClientSize();
                   $image->file_mime=$file->getClientMimeType();
                   $image->file_path='gallery/images/'.$filename;
                   $image->created_by =1;
                  $image->created_at =time();
                   $image->updated_at =time();
            $image->save();
                $image=$gallery->images->create([
                   'gallery_id' =>$request->input('gallery_id'),
                   'file_name' =>$filename,
                   'file_size' =>$file->getClientSize(),
                   'file_mime' =>$file->getClientMimeType(),
                   'file_path'=> 'gallery/images/'.$filename,
                   'created_by' => 1,
                   'created_at' =>time(),
                   'updated_at' =>time(),
                
                ]);
                
                
           }
           
           
           public function deletegallery($id){
             $currentGallery= Gallery::findorFail($id);
             
             //if(!$currentGallery->created_by==Auth::user()->id){
             //         
             //abort('403','You are not allowd to delete this gallery');
             //}
               //  $images=$currentGallery->images();
                 foreach($currentGallery->images as $image){
                      unlink(public_path($image->file_path));
                 }
                 
                 $currentGallery->images()->delete();
                 $currentGallery->delete();
                 return redirect()->back();
           }
           
        /**
         * Constructor, duh!
         *
         * @access      public
         * @return      void
         *
         */
        public function __construct()
        {
                $this->middleware('guest');
        }

        /**
         * Show the application index.
         *
         * @access      public
         * @return      Response
         *
         */
        public function index()
        {
                return view('gallery');
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

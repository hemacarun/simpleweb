<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GalleryController extends Controller
{
           protected $layout = 'layouts.main';

           
         public function viewgallerylist(){
            return view('gallery');
           
           }
           
           public function savegallery(Request $request){
                      
                      
                      
           }
           
           
           public function viewgallerypics(){
                      
                      
                      
           }
           
           
           
           public function imageupload(Request $request){
                      
                      
                      
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

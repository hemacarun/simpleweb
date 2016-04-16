<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller {

        protected $layout = 'layouts.main';

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
                return view('index');
        }

} // end of class
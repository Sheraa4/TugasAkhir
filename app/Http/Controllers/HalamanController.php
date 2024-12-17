<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function tops() {
        return view('tops');
    }
    // Tops
    public function detail_tops1() {
        return view('tops.detail_tops1');
    }
    public function detail_tops2() {
        return view('tops.detail_tops2');
    }
    public function detail_tops3() {
        return view('tops.detail_tops3');
    }
    public function detail_tops4() {
        return view('tops.detail_tops4');
    }
    // Bottoms
    public function detail_bottom1() {
        return view('bottoms.detail_bottoms1');
    }
    public function detail_bottom2() {
        return view('bottoms.detail_bottoms2');
    }
    public function detail_bottom3() {
        return view('bottoms.detail_bottoms3');
    }
    public function detail_bottom4() {
        return view('bottoms.detail_bottoms4');
    }
    // Outwear
    public function detail_outwear1() {
        return view('outwear.detail_outwear1');
    }
    public function detail_outwear2() {
        return view('outwear.detail_outwear2');
    }
    public function detail_outwear3() {
        return view('outwear.detail_outwear3');
    }
    public function detail_outwear4() {
        return view('outwear.detail_outwear4');
    }
    // Dresses
    public function detail_dresses1() {
        return view('dresses.detail_dresses1');
    }
    public function detail_dresses2() {
        return view('dresses.detail_dresses2');
    }
    public function detail_dresses3() {
        return view('dresses.detail_dresses3');
    }
    public function detail_dresses4() {
        return view('dresses.detail_dresses4');
    }
    // Shoes
    public function detail_shoes1() {
        return view('shoes.detail_shoes1');
    }
    public function detail_shoes2() {
        return view('shoes.detail_shoes2');
    }
    public function detail_shoes3() {
        return view('shoes.detail_shoes3');
    }
    public function detail_shoes4() {
        return view('shoes.detail_shoes4');
    }
   //wedding
   public function detail_dresswd1() {
        return view('wedding.detail_dresswd1');
   }
   public function detail_dresswd2() {
        return view('wedding.detail_dresswd2');
   }
   public function detail_dresswd3() {
        return view('wedding.detail_dresswd3');
   }
   public function detail_dresswd4() {
        return view('wedding.detail_dresswd4');
   }
   
   public function user() {
        return view('user');
   }
}


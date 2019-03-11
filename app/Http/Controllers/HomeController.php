<?php

namespace App\Http\Controllers;

use App\Card;
use App\Product;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.home');
    }
    public function showStore(){
        $products = Product::orderByRaw("RAND()")->get();
        $sections = Section::all();
        $data = [
          'products'=> $products,
          'sections'=> $sections
        ];
        return view('front.store')->with($data);
    }
    public function showSection($id){

        $section = Section::find($id);
        $products = $section->products ;
        $sections = Section::all();
        $data = [
            'section'=> $section,
             'products'=>$products,
            'sections'=>$sections
        ];
        return view('front.sections')->with($data);
    }



    public function getAllProducts(){

        $products = Product::orderBy("created_at", "desc")->with("section:name")->get();
        $response =[
            'success'=> 'true',
            'products'=>$products
        ];
        return Response::json($response);

    }
    public function addToCart(Request $request, $id){
        $product =Product::find($id);
        $oldcard = Session::has('card') ? Session::get('card'):null ;
        $card = new Card($oldcard);
        $card->add($product ,$product->id);
        $request->session()->put('card',$card );
        $request->session()->save();
        return redirect()->back();

    }
    public function showCart(){
        if(!Session::has('card')){
            return view('front.cart',['products'=>null]);
        }
        $oldcard = Session::get('card');
        $card = new Card($oldcard);
        return view('front.cart'  , ['products'=>$card->items, 'totalprice'=>$card->totalprice , 'totalQty'=>$card->totalQty]);

    }
public function checkout(){
   Session::forget('card');
   return view('front.cart');
}

}
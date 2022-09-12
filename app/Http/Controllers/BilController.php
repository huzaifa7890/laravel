<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Sale;
use Illuminate\Http\Request;

class BilController extends Controller
{
    //
    
public function show(){
    $data=Member::all();
    return view('biling',['users'=>$data]);
    }

    public function addToCart(Request $req) // by this function we add product of choose in card
    {
        
        $cart=session()->get('cart');
        
        $cart[] = [
            "id" =>$req->id,
            "name" =>$req->pname,
            "price" =>$req->sprice,
            "quan" =>$req->quan,

        ];

        session()->put('cart',$cart);
        return redirect()->back();
}
public function destroy(){
    session()->forget('cart');
    return redirect()->back();
}
public function pdel(Request $re, $id)

{
    $re->session()->forget('id');

   return redirect()->back();
}
public function checkout(Request $req)
{
    if(session('cart')){
    foreach(session('cart') as $id => $details){
    $obj=new Sale;
    $obj->cname=$req->cname;
    $obj->cno=$req->cnumber;
    $obj->saleman=$req->sname;
    $obj->pname=$details['name'];
    $obj->quan=$details['quan'];
    $obj->amt=$details['price'];
    $obj->total=$details['price'] * $details['quan'];
    $obj->save();


    


}}
return redirect()->back();
}
public function sale1(){
    $data=Sale::all();
    return view('sale',['users'=>$data]);
    }



}

<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.pages.show_cart');
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
        $data = $request->all();
        $cart = Session::get('cart');
        $rowId = substr(md5(time()), rand(0, 10), 10);
        $new_cart = array(
            'rowId' => $rowId, 
            'product_id' => $data['product_id'],
            'product_name' => $data['product_name'],
            'product_price' => $data['product_price'],
            'product_desc' => $data['product_desc'],
            'product_img' => $data['product_img'],
            'product_qty' => $data['product_qty'],
        );

        if($cart){
            $is_available = 0;
            
            foreach($cart as $key => $value){
                if($value['product_id'] == $data['product_id']){
                    $is_available++;
                    $cart[$key]['product_qty'] += 1;
                }
            }

            if($is_available == 0){
                $cart[] = $new_cart;
            }
            Session::put('cart', $cart);

        }else{
            $cart[] = $new_cart;
            Session::put('cart', $cart);
        }  
        Session::save();

        return response()->json(['success' => true], 200);
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

    public function updateAllCart(Request $request){
        $data = $request->all();
        $cart = Session::get('cart');

        if($cart){
            foreach($data['cart_qty'] as $rowId => $qty){
                foreach($cart as $key => $value){
                    if($value['rowId'] == $rowId){
                        $cart[$key]['product_qty'] = $qty;
                    }
                }
            }
            Session::put('cart', $cart);
            Session::flash('success', trans('master.message.success'));

            return redirect()->route('cart.index');
        }else{
            Session::flash('error', trans('master.message.error'));

            return redirect()->route('cart.index');
        }
    }

    public function delete($rowId)
    {
        $cart = Session::get('cart');

        if($cart){
            foreach($cart as $key => $value){
                if($value['rowId'] == $rowId){
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            Session::flash('success', trans('master.message.success'));

            return redirect()->route('cart.index');
        }else{
            Session::flash('error', trans('master.message.error'));

            return redirect()->route('cart.index');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OrdersController extends Controller
{
    public function index(){
        $orders = Order::with('user')->get()->where('orderstatus', 'Pending')->sortBy('id')->groupBy('user_id');

        return view('admin.adminorders', compact('orders'));
    }

    public function create(){
        return view ('pages.placeorder');
    }

    public function show($id){
        $orders = Order::with('user')->where('user_id', $id)->get()->groupBy('user_id');
        $total = Order::where('user_id', $id)->selectRaw('sum(quantity * price) as total')->pluck('total');
        return view ('admin.adminshow', compact('orders', 'total'));
    }

    public function update(Request $request, $id){
        $status = $request->input('ordertype');
        Order::where('user_id', $id)->update(array('orderstatus' => $status));

        return redirect('/adminorders');
    }

    //search
    public function search(Request $request){
        //$filterType = "Search Key: ";
        $searchKey = $request->input('searchKey');

        $searchKeys = explode(' ', $searchKey);
        //Case sensitive
        //working
        //$orders = Order::with('user')->get()->where('user.firstname', $searchKey)->groupBy('user_id');
        //

        /* working one column search
        $orders = Order::whereHas('user', function($search) use($searchKey){
            //$searchKey = $request->input('searchKey');
            $search->where('firstname', 'like', "%{$searchKey}%")
                    ->orWhere('lastname', 'like', "%{$searchKey}%");
        })->get()->groupBy('user_id');
        */

        //working two columns
        $orders = Order::whereHas('user', function($search) use ($searchKeys){
            foreach ($searchKeys as $value){
                $search->where('firstname', 'like', "%{$value}%")->orWhere('lastname', 'like', "%{$value}%");
            }
        })->get()->groupBy('user_id');

        return view('admin.adminorders')->with('searchKey', $searchKey)->with('orders', $orders);
    }

    //filter status
    public function filter(Request $request){ 
        //$filterType = "Filter: ";
        $filter = $request->input('status');
        $orders = Order::with('user')->get()->where('orderstatus', $filter)->groupBy('user_id');
        return view('admin.adminorders')->with('orders', $orders)->with('filter', $filter);
    }

    //filter ordertype
    public function filterordertype(Request $request){
        //$filterType = "Filter: ";
        $filterOrderType = $request->input('ordertype');
        $orders = Order::with('user')->get()->where('ordertype', $filterOrderType)->groupBy('user_id');
        return view('admin.adminorders')->with('orders', $orders)->with('filterOrderType', $filterOrderType);
    }

    public function store(Request $request)
    {
        // ordertype 
        $orderType = $request->get('ordertype');
        
        if($request->get('ordertype') == 'Pick-up'){
            $customerAddress = "Not Available";
        }
        elseif($request->get('ordertype') == 'Delivery'){
            if(is_null($request->get('address'))){
                return redirect('placeorder')->with('error', 'Please enter a valid address.');
            }
            else{
                $customerAddress = $request->get('address');
            }
        }

        $checkedCount = 0;
        $foodName=array();
        $foodQty=array();
        $foodPrice=array();
        $foodTotal=array();

        /*if(in_array('Sinigang', $request->get('foodName'))){
            array_push($foodName, 'Sinigang');

            if(is_null($request->get('foodQty1'))){
                return redirect('/pages.placeorder')->with('error', 'Please enter a valid quantity for Sinigang.');
            }else{
                array_push($foodQty, $request->get('foodQty1'));
            }
            
            array_push($foodPrice, 299.00);
            array_push($foodTotal, 299 * $request->get('foodQty1'));
            $checkedCount += 1;
        }*/

        if(empty($request->get('foodName'))){
            return redirect('placeorder')->with('error', 'Please choose a food to order.');
        }

        if(in_array('Sinigang', $request->get('foodName'))){
            array_push($foodName, 'Sinigang');

            if(is_null($request->get('foodQty1'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Sinigang.');
            }else{
                array_push($foodQty, $request->get('foodQty1'));
            }

            array_push($foodPrice, 299.00);
            array_push($foodTotal, 299 * $request->get('foodQty1'));
            $checkedCount += 1;
        }
        if(in_array('Sisig', $request->get('foodName'))){
            array_push($foodName, 'Sisig');

            if(is_null($request->get('foodQty2'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Sisig.');
            }else{
                array_push($foodQty, $request->get('foodQty2'));
            }
            
            array_push($foodPrice, 200.00);
            array_push($foodTotal, 200 * $request->get('foodQty2'));
            $checkedCount += 1;
        }
        if(in_array('Adobo', $request->get('foodName'))){
            array_push($foodName, 'Adobo');

            if(is_null($request->get('foodQty3'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Adobo.');
            }else{
                array_push($foodQty, $request->get('foodQty3'));
            }

            array_push($foodPrice, 200.00);
            array_push($foodTotal, 200 * $request->get('foodQty3'));
            $checkedCount += 1;
        }
        if(in_array('Lechon Kawali', $request->get('foodName'))){
            array_push($foodName, 'Lechon Kawali');

            if(is_null($request->get('foodQty4'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Lechon Kawali.');
            }else{
                array_push($foodQty, $request->get('foodQty4'));
            }

            array_push($foodPrice, 250.00);
            array_push($foodTotal, 250 * $request->get('foodQty4'));
            $checkedCount += 1;
        }
        if(in_array('Bulalo', $request->get('foodName'))){
            array_push($foodName, 'Bulalo');

            if(is_null($request->get('foodQty5'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Bulalo.');
            }else{
                array_push($foodQty, $request->get('foodQty5'));
            }

            array_push($foodPrice, 150.00);
            array_push($foodTotal, 150 * $request->get('foodQty5'));
            $checkedCount += 1;
        }
        if(in_array('Buko Juice', $request->get('foodName'))){
            array_push($foodName, 'Buko Juice');

            if(is_null($request->get('foodQty6'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Buko Juice.');
            }else{
                array_push($foodQty, $request->get('foodQty6'));
            }

            array_push($foodPrice, 120.00);
            array_push($foodTotal, 120 * $request->get('foodQty6'));
            $checkedCount += 1;
        }
        if(in_array('Calamansi Juice', $request->get('foodName'))){
            array_push($foodName, 'Calamansi Juice');

            if(is_null($request->get('foodQty7'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Calamansi Juice.');
            }else{
                array_push($foodQty, $request->get('foodQty7'));
            }

            array_push($foodPrice, 90.00);
            array_push($foodTotal, 90 * $request->get('foodQty7'));
            $checkedCount += 1;
        }
        if(in_array('Coke', $request->get('foodName'))){
            array_push($foodName, 'Coke');

            if(is_null($request->get('foodQty8'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Coke.');
            }else{
                array_push($foodQty, $request->get('foodQty8'));
            }

            array_push($foodPrice, 50.00);
            array_push($foodTotal, 50 * $request->get('foodQty8'));
            $checkedCount += 1;
        }
        if(in_array('Halo-halo', $request->get('foodName'))){
            array_push($foodName, 'Halo-halo');

            if(is_null($request->get('foodQty9'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Halo-halo.');
            }else{
                array_push($foodQty, $request->get('foodQty9'));
            }

            array_push($foodPrice, 120.00);
            array_push($foodTotal, 120 * $request->get('foodQty9'));
            $checkedCount += 1;
        }
        if(in_array('Buko Pandan', $request->get('foodName'))){
            array_push($foodName, 'Buko Pandan');

            if(is_null($request->get('foodQty10'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Buko Pandan.');
            }else{
                array_push($foodQty, $request->get('foodQty10'));
            }

            array_push($foodPrice, 100.00);
            array_push($foodTotal, 100 * $request->get('foodQty10'));
            $checkedCount += 1;
        }
        if(in_array('Mais Con Yelo', $request->get('foodName'))){
            array_push($foodName, 'Mais Con Yelo');

            if(is_null($request->get('foodQty11'))){
                return redirect('placeorder')->with('error', 'Please enter a valid quantity for Mais Con Yelo.');
            }else{
                array_push($foodQty, $request->get('foodQty11'));
            }

            array_push($foodPrice, 120.00);
            array_push($foodTotal, 120 * $request->get('foodQty11'));
            $checkedCount += 1;
        }    
        
        $userId = auth()->user()->id;
        $orderStatus = 'Pending';
        
        for($i = 0; $i < $checkedCount; $i++)
        {
            $order = new Order;
            $order->user_id = $userId;
            $order->food = $foodName[$i];
            $order->quantity = $foodQty[$i];
            $order->price = $foodPrice[$i];
            $order->total = $foodTotal[$i];
            $order->orderType = $orderType;
            $order->address = $customerAddress;
            $order->orderstatus = $orderStatus;
            $order->save();
        }
        return redirect('/home')->with('success','Order placed successfully!');
    }
}

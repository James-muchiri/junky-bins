<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Orders;
use App\Blog;
use App\Blog_Categories;
use App\Blog_comments;
use App\Blog_comments_reply;
use App\FAQS;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\SmsController;
class UserController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $faqs = FAQS::all();
        $categories = Categories::where('is_hidden','=','no')->get();
        $product = products::all()->where('is_hidden','=','no')->groupBy('category');
        $products = products:: where('is_hidden','=','no')->get();
        $newproducts = products:: where('is_hidden','=','no')->orderBy('created_at', 'DESC')->get();
        return view('user.index', compact(['blogs', 'categories', 'products', 'product', 'newproducts', 'faqs' ]));



    }
    public function garbage_collection()
    {

        return view('user.garbage_collection');
    }
    public function recycling()
    {

        return view('user.recycling');
    }

    public function coming_soon()
    {

        return view('user.coming-soon');
    }
    public function postcomment(Request $request)
    {
        $blog_comment = new Blog_comments;
        $blog_comment->name = $request->name;
        $blog_comment->email = $request->email;
        $blog_comment->website = $request->website;
        $blog_comment->message = $request->message;
        $blog_comment->blog_id = $request->blog_id;
        $blog_comment->save();
        return response()->json(['success' => 'comment add successfully']);


    }

    public function blogbyid($dataId){

         $blog = Blog::where('id', $dataId)->first();
         $blog_comments = Blog_comments::where('blog_id', $dataId)->get();     
         
      return view('user.blogById', compact(['blog', 'blog_comments']));
    }

    public function FAQS()
    {
        return view('user/faqs');

    }
    public function faqs_group($data){
        $faqs = FAQS::where('faqs_group', $data)->get();

   return view('user.faqsbygroup', compact(['faqs']));

    }

    public function success()
    {
        $categories = Categories::where('is_hidden','=','no')->get();
        $product = products::all()->where('is_hidden','=','no')->groupBy('category');
        $products = products:: where('is_hidden','=','no')->get();
        $newproducts = products:: where('is_hidden','=','no')->orderBy('created_at', 'DESC')->get();
        return view('success', compact(['categories', 'products', 'product', 'newproducts' ]));


    }

    public function aboutus()
    {
        $categories = Categories::where('is_hidden','=','no')->get();
        $product = products::all()->where('is_hidden','=','no')->groupBy('category');
        $products = products:: where('is_hidden','=','no')->get();
        $newproducts = products:: where('is_hidden','=','no')->orderBy('created_at', 'DESC')->get();
        return view('aboutus', compact(['categories', 'products', 'product','newproducts' ]));


    }
    public function contactus()
    {
        $categories = Categories::where('is_hidden','=','no')->get();
        $product = products::all()->where('is_hidden','=','no')->groupBy('category');
        $products = products:: where('is_hidden','=','no')->get();
        $newproducts = products:: where('is_hidden','=','no')->orderBy('created_at', 'DESC')->get();
        return view('contactus', compact(['categories', 'products', 'product','newproducts' ]));


    }
    public function addToCart(Request $request,$dataId)
    {
        session()->get('cart');
        // dd($dataId);
              $product = Products::find($dataId);

        // dd($product);
        $cart = session()->get('cart');
        // dd($cart);

        if(!$cart) {

            $cart = [
                $dataId => [
                    "id"=>$product->id,
                    "product" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->photo,
                ]
            ];
            // dd($cart);
            session()->put('cart', $cart);
            // dd(session()->get('cart'));
            return response()->json($cart);
        }


        if(isset($cart[$dataId])) {

            // dd(session()->get('cart'));
            session()->put('cart', $cart);
            // dd(session()->get('cart'));
                // dd($cart[$dataId]['quantity']);
                return response()->json($cart);

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$dataId] = [
            "id"=>$product->id,
            "product" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->photo,

        ];

        session()->put('cart', $cart);

        return response()->json($cart);


    }




public function getCart(Request $request){

    $data=session()->get('cart');

    // dd($data);
    // dd(response()->json($data));
       return response()->json($data);
}

public function addByOne($dataId){
    // dd($dataId);
    $products =  Products::find($dataId);
    // dd($products);
    $cart = session()->get('cart');
    // dd($cart);
    if(isset($cart[$dataId])) {
        // dd($cart[$dataId]);
        $cart[$dataId]['quantity']++;
        // dd(session()->get('cart'));
        session()->put('cart', $cart);
        //  dd(session()->get('cart'));
        $cart = session()->get('cart');
        // dd($cart);
        return response()->json($cart);

    }
}

public function reduceByOne($dataId){
    // dd($dataId);
    $products = Products::find($dataId);
    // dd($products);
    $cart = session()->get('cart');
    // dd($cart);
    if (isset($cart[$dataId])) {
        // dd($cart[$dataId]);
        if ($cart[$dataId]['quantity'] > 1) {
            $cart[$dataId]['quantity']--;
            // dd(session()->get('cart'));
            session()->put('cart', $cart);
            // dd(session()->get('cart'));
            $cart = session()->get('cart');
            // dd($cart);
            return response()->json($cart);
        }
    }
}

public function getRemoveItem($dataId){

 $cart = session()->get('cart');
    // dd($cart[$dataId]);
    if(isset($cart[$dataId])) {

        unset($cart[$dataId]);

        session()->put('cart', $cart);
        // dd(session()->get('cart'));
        return response()->json($cart);
    }
}




public function destroyCart()
{
    session()->forget('cart');
    // $db=Order::join('tecshop_users', 'tecshop_users.id','=','orders.tecshop_users_id' )
    //             ->get(['tecshop_users.first_name', 'orders.region']);
    // // dd($db);
    // $db2=ItemsOrdered::join('tecshop_products', 'tecshop_products.id','=','items_ordered.tecshop_products_id' )
    //                 ->join('orders', 'orders.id','=','items_ordered.order_id')
    //                 ->get(['tecshop_products.product', 'items_ordered.order_id', 'orders.first_name']);
    // // dd($db2);
    // $arr = DB::table('orders')->pluck('cart')->find(24);
    return redirect('/tecshop');
}



public function checkout()
{
    $cart = session()->get('cart');
    // dd($cart);
    if(!$cart){
        return redirect()->back();
    }else{


        $categories = Categories::where('is_hidden','=','no')->get();
        $products = Products::where('is_hidden','=','no')->get();
        $product = products::all()->where('is_hidden','=','no')->groupBy('category');
        return view('checkout', compact(['products', 'cart', 'categories', 'product']));



    }
}










public function search(Request $request)
{





    $categories = $request->input('categories');
    $query = "%".$request->name."%";
    if($categories='all'){

        $products = Products::where('name','LIKE',$query)->orwhere('category','LIKE',$query)->where('is_hidden','=','no')->get();
    }
    else {
        $products = products:: where('name','LIKE',$query)
        ->where('category','=',$categories)->where('is_hidden','=','no')->get();
    }

    $cart=session()->get('cart');
    $categories = Categories::all();
    return view('search', compact(['products', 'cart', 'categories']));
}


public function searchbycat($dataId)
{


        $cat = Categories::where('name',$dataId)->first();
        $post = $cat['id'];

        $products = products:: where('category_id','=',$post)->where('is_hidden','=','no')->get();


    $cart=session()->get('cart');
    $categories = Categories::where('is_hidden','=','no')->get();
    return view('search', compact(['products', 'cart', 'categories']));
}




public function checkout_products(Request $request)
{
    $request->validate([

        'names' =>'required',
        'phone_number' =>'required',
    ]);

    $cart=session()->get('cart');
    // Store the record, using the new file hashname which will be it's new filename identity.
    $total=0;
    $item_count=0;
    foreach($cart as $carts)
    {
        $price = $carts['price'] * $carts['quantity'] ;
        $total= $total + $price;
        $item_count = $item_count + $carts['quantity'];


    }

    //return response()->json($total);
/*
    $product = new Orders([


       "order_number"=>uniqid(),
        "names" => $request->get('names'),
        "phone_number" => $request->get('phone_number'),
        "mode_of_delivery" => $request->get('mode'),
        "location" => $request->get('location'),
        "cart" => serialize($cart),
        "total" => $total,
        "item_count" => $item_count
            ]);
            $product->save(); */ // Finally, save the record.
     $order= new Orders();
    $order->names = $request->get('names');
    $order->phone_number = $request->get('phone_number');
    $order->mode_of_delivery = $request->get('mode');
    if( $order->mode_of_delivery == 'delivery')
    {
    $order->location = $request->get('location');
    }
      $order->total = $total;
    $order->item_count = $item_count;
    $order->order_number =uniqid();
    $order->cart = serialize($cart);
    $order->save(); // Finally, save the record.
    if (Session::has('order-number')){
        $request->session()->forget('order-number');
        Session::put('order-number', $order->order_number);
    }else{
        Session::put('order-number', $order->order_number);
    }

    $request->session()->forget('cart');
$recipe = $request->get('phone_number');
$name = $request->get('names');
$number = $order->order_number;
    $sms_controller = new SmsController;
    $sms_controller->send_user_sms($name, $recipe, $number, $total);
    //$sms_controller->send_office_sms($request->get('names'), $request->get('phone_number'), $order->order_number);


    return redirect('/success');








}

public function indexx(Request $request){
    $query = "%".$request->key."%";
    $categories = Products::where('name','LIKE',$query)->where('is_hidden','=','no')->get();

    foreach($categories as $category){
        echo "<div id='item'>";
        echo "<a href='search/$category->name'>$category->name</a>";
        echo "</div>";
        echo "<br>";
    }
}

public function search1($data)
{

    $categories = "all";
    $item = $data;
    if($categories='all'){

        $products = products:: where('name','LIKE',$item)->where('is_hidden','=','no')->get();
    }
    else {
        $products = products:: where('name','=',$item)->where('categories','=',$categories)
        ->where('is_hidden','=','no')->get();
    }

    $cart=session()->get('cart');
    $categories = Categories::where('is_hidden','=','no')->orderBy('created_at', 'DESC')->get();
    return view('search', compact(['products', 'cart', 'categories']));
}


}

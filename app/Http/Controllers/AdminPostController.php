<?php

namespace App\Http\Controllers;
use Hash;
use File;
use App\Adimn;
use App\Blog;
use App\Blog_pic;
use App\Blog_Categories;
use Illuminate\Http\Request;
use App\Categories;
use App\Products;
use App\Orders;
use Redirect;
use Session;
use Symfony\Component\Console\Helper\Table;
use Validator;
class AdminPostController extends Controller
{
    

    public function newadmin()
    {
        $blog_cats = Blog_Categories::all();
        $blogs = Blog::all();
 
        
        return view('admin/newadmin', compact(['blogs', 'blog_cats']));
      
    }




    // post blogs
    public function post_blog(Request $request)
    {
        $post_blog_id = uniqid();
        session()->put('blogid', $post_blog_id );
        $blog = $request;

        $file = $request->file('header_image');  
        $imageName = $file->getClientOriginalName();
        $file->move(public_path('blogtest'), $imageName);  

        $post_blog = new Blog;
        $post_blog->post_blog_id =$post_blog_id;
       $post_blog->email = $request->email;
       $post_blog->authorname = $request->authorname;
       $post_blog->blog = $request->blog;
       $post_blog->bloginfo = $request->bloginfo;
       $post_blog->blog_description = $request->blog_description;
       $post_blog->header_image =  $imageName;
        $post_blog->save(); 

 

     
      return view('admin.previewBlog', compact(['blog']));
    }



        // post blogs
        public function post_blog1()
        {
           
            $blogid=session()->get('blogid');
         
    $blog =  Blog::where('post_blog_id', $blogid)->first();

  //  return response($blog);
    $blog->is_hidden = 'no';
    $blog->save();
    
          return redirect("/newAdmin");
        }
  

        

      // discard blogs
      public function discard_blog()
      {
         
          $blogid=session()->get('blogid');
       
  $blog =  Blog::where('post_blog_id', $blogid)->first();
  $blog->delete();
  $blog_pics = Blog_pic::where('post_blog_id', $blogid)->get();

  foreach($blog_pics as $blog_pic){
    File::delete(public_path("blogtest/{$blog_pic->pic_name}"));
  
      $blog_pic->delete();
  }


  
        return redirect("/newAdmin");
      }
   

      public function allblogs()
      {
         $blogs = Blog::all();
  
      return view('admin.allblogs', compact(['blogs'])); 
  
  
      }
      public function blogcats()
      {
         $blog_cats = Blog_Categories::all();
      
  
      return view('admin.managecategories', compact(['blog_cats'])); 
  
  
      }
    

      public function newblog()
      {
         $blog_cats = Blog_Categories::all();
      
         return view('admin/newblog', compact(['blog_cats'])); 
  
  
      }
      public function admin_search_blog(Request $request)
      {

        $query = "%".$request->key."%";
       
            $blogs = Blog::where('bloginfo','LIKE',$query )->get();

            foreach($blogs as $blog)
            {           
            echo "<li><a href='http://talkerscode.com/webtricks/".$blog['bloginfo']."'><span class='title'>".$blog['bloginfo']."</span><br><span class='desc'>".$blog['info']."</span></a></li>";
        }
       
    
      }

      public function upload(Request $request)
    {
//
         $imageName = $request->file('file')->getClientOriginalName();
         $request->file('file')->move(public_path('uploads'), $imageName);  
    //    $imgpath = $request->file('file')->store('uploads', 'public');
        return json_encode(['location' => "/uploads/$imageName"]);
    }


    public function edit_category(Request $request)
    {
        $category = Categories::where('id', $request->id)->first();

        $category->name=$request->name;

        $category->save();

             return redirect('/categories');


    }

    public function edit_product(Request $request)
    {
        $category = Products::where('id', $request->id)->first();

        $category->name=$request->name;
        $category->description=$request->description;
        $category->price=$request->price;
        $category->original_price=$request->original_price;

        $category->save();

             return redirect('/products');


    }


    public function new_category(Request $request)
    {
        $contact = new Blog_Categories;
        $contact->name =  $request->get('name');
          $contact->cat_description =$request->get('cat_description');
                  
        $contact->save();

        return redirect('/products');


    }



    public function store_product(Request $request)
    {
        $request->validate([

            'file' =>'required',
        ]);
       // ensure the request has a file before we attempt anything else.
       if ($request->hasFile('file')) {

        $request->validate([
            'image' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
        ]);

        // Save the file locally in the storage/public/ folder under a new folder named /product
       // $request->file->store('product', 'public');
        $imageName = $request->file->hashName();
        $request->file->move(public_path('product'), $imageName);

        // Store the record, using the new file hashname which will be it's new filename identity.
        $product = new Products([

            "name" => $request->get('name'),
            "description" => $request->get('description'),
            "photo" => $imageName,
            "category" => $request->get('category'),
            "price" => $request->get('price'),
            "original_price" => $request->get('original_price')



        ]);
        $product->save(); // Finally, save the record.
        return redirect('/products')->with('success', 'Product saved!');
    }
    else{

        return view('pages.tec_pages.tecshopAdimin');
    }



    }


    public function search_products(Request $request)
    {


        $cart=  Categories::where('name', $request->cart)->first();
        $cart_id = $cart['id'];
       $products=  Products::where('category_id', $cart_id)->get();

       $output="";


       foreach ($products as  $product) {
           if ( $product->is_hidden == "yes")
        {
        $output.='<tr>'.
        '<td>'.$product->id.'</td>'.
        '<td>'.$product->name.'</td>'.
        '<td>'.$product->description.'</td>'.
        '<td>'.$product->price.'</td>'.
        '<td>'.$product->original_price.'</td>'.
        '<td>'.$product->is_hidden.'</td>'.

        '</tr>';
        }
        else{
            $output.='<tr>'.
            '<td>'.$product->id.'</td>'.
            '<td>'.$product->name.'</td>'.
            '<td>'.$product->description.'</td>'.
            '<td>'.$product->price.'</td>'.
            '<td>'.$product->original_price.'</td>'.
            '<td>'.$product->is_hidden.'</td>'.

            '</tr>';

        }
        }
        return Response($output);




       // return response()->json($products);

       // return response()->json(['success'=>'Ajax request submitted successfull]);
    }


    public function search_order(Request $request)
    {


        $products=  Orders::where('phone_number', $request->phone)->orderBy('created_at', 'DESC')->get();



       $output="";


       foreach ($products as  $product) {

        $output.='<tr>'.
        '<td>'.$product->id.'</td>'.
        '<td>'.$product->names.'</td>'.
        '<td>'.$product->phone_number.'</td>'.
        '<td>'.$product->order_number.'</td>'.
        '<td>'.$product->item_count.'</td>'.
        '<td>'.$product->total.'</td>'.
               '<td>'.

        '<a style="margin: 19px;" onclick="fetchproduct('.$product->id.')"  type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-whatever="@getbootstrap">'.'View Order'.'</a>'.






        '</td>'.
        '</tr>';

        }
        return Response($output);




       // return response()->json($products);

       // return response()->json(['success'=>'Ajax request submitted successfull]);
    }



    public function fetchcat(Request $request)
    {


        $cart=  Categories::where('id', $request->catid)->first();
              $output="";
              $out=$cart['name'];


        $output.='<input type="text" class="form-control" id="recipient-name" value="'.$cart['id'].'" name="id" required hidden>'.
        '<input type="text" class="form-control" id="recipient-name" value="'.$out.'" name="name" required>';

        return Response($output);




       // return response()->json($products);

       // return response()->json(['success'=>'Ajax request submitted successfull]);
    }

    public function view_orderhistory($dataId)
    {

        $posts=  Orders::whereIn('id',[$dataId])->first();

        $cartss=unserialize($posts->cart);
        return view('vieworder', compact(['posts','cartss']));

    }
    public function fetchproduct(Request $request)
    {


        $cart=  Products::where('id', $request->catid)->first();
              $output="";
              $out=$cart['name'];


        $output.= '<div class="form-group">'.
        '<label for="recipient-name" class="col-form-label">Product Name:</label>'.
        '<input type="text" class="form-control" id="recipient-name" value="'.$cart['name'].'" name="name" required>'.
        '<input type="text" class="form-control" id="recipient-name" value="'.$cart['id'].'" name="id" required hidden>'.
      '</div>'.
      '<div class="form-group">'.
      '<label for="recipient-name" class="col-form-label">Product Description:</label>'.
      '<input type="textarea" class="form-control" id="recipient-name" value="'.$cart['description'].'" name="description" required>'.
    '</div>'.
    '<div class="form-group">'.
    '<label for="recipient-name" class="col-form-label">Product Price:</label>'.
    '<input type="text" class="form-control" id="recipient-name" value="'.$cart['price'].'" name="price" required>'.
  '</div>'.
  '<div class="form-group">'.
  '<label for="recipient-name" class="col-form-label">Product Original Price:</label>'.
  '<input type="text" class="form-control" id="recipient-name" value="'.$cart['original_price'].'" name="original_price" required>'.
'</div>';



        return Response($output);




       // return response()->json($products);

       // return response()->json(['success'=>'Ajax request submitted successfull]);
    }



    public function change_password(Request $request)
    {
       $this->validate($request, [
            'newpassword' => 'required| min:4| max:7 |confirmed',
            'oldpassword' => 'required'

        ]);




       $id = auth()->guard('adminauth')->user()->id;
       $user=  Adimn::where('id', $id)->first();

        $user->password= Hash::make($request->newpassword);

        $user->save();

        return response()->json(['success'=>'Password changed successfullly']);

    }




}

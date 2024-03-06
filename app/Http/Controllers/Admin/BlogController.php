<?php

namespace App\Http\Controllers\Admin;

use App\Models\blog;
use App\Models\allpro;
use App\Models\equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Subcate;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function blog()
    {
        return view('admin.blog.index');
    }

    public function listblog()
    {
        $blogs = blog::select('blog.*', 'all equipment.id as aid', 'all equipment.name as aname')
            ->join('all equipment', 'blog.blog_category', '=', 'all equipment.id')
            ->get();

        return view('admin.blog.list', compact('blogs'));
    }

    public function addblog()
    {

        $category =  equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name','ASC')->get();
        return view('admin.blog.addblog', compact('category'));
    }

    public function saveblog(Request $request)
    {
        $datas = $request->input();
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|google_captcha'
        ]);
      
      	if ($request->hasfile('image1')) {
                $newImg = $request->image1->getClientOriginalName();
                $request->image1->move('css/asset/blogimg', $newImg);
            }
      
        
       
        $req = new blog();
        $req->blog_title = $datas['blog_title'];
        $req->blog_category = $datas['blog_category'];
        $req->description = $datas['summary-ckeditor'];
        $req->description1 = $datas['headdescription'];
        $req->blog_url = $datas['url'];
        $req->tags = $datas['tags'];
        $req->image1 = $newImg;
        $req->save();
        return redirect()->back()->with('success', 'Blog Upload');
    }

    public function editblog($id, Request $request)
    {
        $category = equipment::whereNotIn('id', [14, 15, 16, 17])->orderby('name','ASC')->get();
        $blogs = blog::where('id', $id)->first();
        return view('admin.blog.edit', compact('category', 'blogs'));
    }

    public function updateblog($id, Request $request)
    {
        $datas = $request->input();
        $req = blog::find($request->id);

        $image1 = $request->file('image1');

        if ($request->hasFile('image1')) {
            
           $newImg = $request->image1->getClientOriginalName();

         	 $request->image1->move('css/asset/blogimg', $newImg);
            $req->image1 = $newImg;
        } 
      if(!$request->blog_category == null){
            $req->blog_category = $datas['blog_category'];
      }
        $req->blog_title = $datas['blog_title'];
        
        $req->description = $datas['summary-ckeditor'];
        $req->blog_url = $datas['url'];
        $req->tags = $datas['tags'];
        $req->description1 = $datas['headdescription'];

        $req->save();

        return redirect('dashboard/listblog')->with('success', 'Blog updated');

    }

      public function bdelete($id)
    {
        
       blog::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted successfully form Blog');
    }
  

 public function blogfront()
    {
        $blogs = blog::with('category')
            ->orderBy('id', 'desc')
            ->limit(2)
            ->paginate(20);
        
        $head = Subcate::all();
        return view('newfrontened.blog.blog', compact('blogs', 'head'));
    }

       public function blogsingle($url, Request $request)
    {

        $blogs = blog::with('category')
            ->where('blog_url', $url)
            ->first();

        $allblog = blog::select('blog_title', 'image1', 'blog_url')->get();
        $similiarproduct = allpro::select('id', 'sub_id', 'title', 'user_id', 'description', 'img1', 'cate_id', 'apporv', 'model', 'capacity', 'price', 'old')
            ->with(['category', 'vendor', 'subcategory', 'userData'])
            ->where('apporv', '!=', '2')
            ->where('cate_id', $blogs->blog_category)
            ->orderby('id', 'desc')
            ->limit(8)
            ->get();
        
        $similiarblog = blog::select('blog_title', 'image1', 'blog_url', 'blog_category', 'description')
            ->where('blog_category', '=', $blogs->blog_category)
            ->where('id','!=', $blogs->id)
            ->limit(4)
            ->get();
            
        $head = Subcate::all();
        return view('newfrontened.blog.singleblog', compact('head', 'blogs', 'allblog', 'similiarproduct', 'similiarblog'));
    }
  
  
  
    public function metadata()
    {
        $blogs = allpro::select('id', 'sub_id', 'title','user_id',  'cate_id', 'apporv', 'model', 'capacity', 'price','old')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->orderbyDesc('id')
            ->paginate(20);
    
        return view('admin.metadata.listproduct', compact('blogs'));
    }

    public function editmetadata($id, Request $request)
    {
        $product = allpro::select('allpro.id', 'allpro.title', 'allpro.cate_id', 'allpro.sub_id', 'allpro.user_id', 'allpro.apporv', 'allpro.meta_desc', 'all equipment.id as aid', 'all equipment.name as aname', 'sub_cate.id as sid', 'sub_cate.title as stitle')
            ->join('all equipment', 'allpro.cate_id', '=', 'all equipment.id')
            ->join('sub_cate', 'allpro.sub_id', '=', 'sub_cate.id')
            ->where('allpro.id', '=', $id)
            ->first();

        return view('admin.metadata.editmeta', compact('product'));
    }

    public function savemetadata(Request $request)
    {
        $datas = $request->input();
        $req = allpro::find($request->id);
        $req->title = $datas['min_length'];
        $req->meta_desc = $datas['metadesc'];
        $req->save();

        return redirect()->back()->with('success', 'Meta updated');
    }
    public function metanotdata(){
        $blogs = allpro::select('id', 'sub_id', 'title','user_id',  'cate_id', 'apporv', 'model', 'capacity', 'price','old','meta_desc')
            ->with(['category', 'vendor', 'subcategory','userData'])
            ->where('apporv', '!=', '2')
            ->whereNull('meta_desc')
            ->paginate(20);
        return view('admin.metadata.listproduct', compact('blogs'));
    }
  
      public function footerlist(){
        $maincate= equipment::all();
        return view('admin.footercontent.index',compact('maincate'));
    }

    public function footerliste($id)
    {
    $maincate= equipment::find($id);
    return view('admin.footercontent.editm', compact('maincate'));
    }
    public function footerlistum($id, Request $request)
    {
        $datas = $request->input();
        $req = equipment::find($request->id);
        $req->meta_title =$datas['metatitle'];
        $req->mta_des = $datas['metadescription'];
        $req->footer_content = $datas['summary-ckeditor'];
        $req->save();
        return redirect()->back()->with('success',$request->name . 'Category Content Updated');
    }
    

    public function footerlists()
    {       
        $subcate = Subcate::with('category')->get();
     
        return view('admin.footercontent.subcategory', compact('subcate'));
    }

    public function footerlistes($id)
    {
        $maincate = Subcate::find($id);
        return view('admin.footercontent.edits', compact('maincate'));
    }
    
    public function footerlistus($id, Request $request)
    {
        $datas = $request->input();
        
        $req = Subcate::find($request->id);
        $req->meta_title = $datas['metatitle'];
        $req->mta_des = $datas['metadescription'];
        $req->footer_content = $datas['summary-ckeditor'];
        $req->save();
        return redirect()->back()->with('success', 'Category Content Updated');
    }


}

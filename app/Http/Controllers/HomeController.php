<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Idea;
use App\CategoryVideo;
use App\Article;
use App\Product;
use App\Video;
use App\CategoryArticle;
use App\CategoryProduct;
use Session;
use App\AdminSetting;

use App\Tool;
use App\Rule;

use App\BranchDepartment;
use App\BranchRule;
use App\CategoryTool;

use App\IdeaApplicant;
use App\IdeaConversation;




class HomeController extends Controller
{
    public function __construct()
    {                
        $this->middleware('guest');
    }
    
    public function index() {
        
        $ideas = Idea::where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->paginate(10);
        return view('user.index', compact('ideas'));
    }
    
    public function thanks() {
        return view('user.thanks');
    }
    
    public function marketing() {
        $admin_script = AdminSetting::all();
        $categories = CategoryVideo::getList(); 
        $latest_articles = Article::latetsArticles(); 
        $latest_product = Product::latetsProducts(); 
        $latest_videos = Video::latetsVideos();
        $featured_video = Video::marked(); 
        $featured_product = Product::featueredProduct();
        if(!empty($featured_video))
        {
            $featured_video = $featured_video;
        }
        else
        {
            $featured_video = Video::lastVideo();
        }
        $popular_video = Video::popularVideo();

        return view('user.marketing',compact('categories','latest_articles','latest_product','latest_videos','featured_video','featured_product','popular_video','admin_script'));
    }

    public function videoDetail($id) {
    	$admin_script = AdminSetting::all();
    	$latest_articles = Article::latetsArticles(); 
        $featured_product = Product::featueredProduct();
         $categories = CategoryVideo::getList();
        $videoKey = 'video_' . $id;
        if (!Session::has($videoKey)) {
            Video::where('id', $id)->increment('total_views');
            Session::put($videoKey, 1);
        }
        $video_detail = Video::videoDetail($id);
        $related_video = Video::relatedVideo($id);

        return view('user.video-detail',compact('video_detail','related_video','admin_script','latest_articles','featured_product','categories'));
    }

    public function articleDetail($id) {
    	$related_video = Product::featueredProduct();
        $latest_articles = Article::latetsArticles();      
        $latest_videos = Video::latetsVideos();
        $featured_product = Product::featueredProduct();
        $articleKey = 'article_' . $id;
        $admin_script = AdminSetting::all();

        if (!Session::has($articleKey)) {
            Article::where('id', $id)->increment('total_views');
            Session::put($articleKey, 1);
        }
       $video_detail = Article::videoDetail($id);
       $related_video = Article::relatedArticle($id);
       $cats = CategoryArticle::all();
       return view('user.article_detail',compact('video_detail','related_video','cats','admin_script','featured_product','latest_videos','latest_articles'));
    }
    
    public function articleList() {
    	 $related_video = Product::featueredProduct();
        $latest_articles = Article::latetsArticles();      
        $latest_videos = Video::latetsVideos();
        $featured_product = Product::featueredProduct();

    	$admin_script = AdminSetting::all();
        $cat_article = Article::articleList();
        $cats = CategoryArticle::all();
        return view('user.article_list',compact('cat_article','cats','admin_script','featured_product','latest_videos','latest_articles'));
    }
    
     public function catvideolist($id) {
     	$latest_articles = Article::latetsArticles(); 
        $featured_product = Product::featueredProduct();
     	$admin_script = AdminSetting::all();
        $cat_video = Video::catVideo($id);
        $cats = CategoryVideo::all();
        $cat_name = CategoryVideo::where('id',$id)->first();
        return view('user.cat_video',compact('cat_video','cats','cat_name','admin_script','latest_articles','featured_product'));
    }

    public function catarticlelist($id) {
    	$related_video = Product::featueredProduct();
        $latest_articles = Article::latetsArticles();      
        $latest_videos = Video::latetsVideos();
        $featured_product = Product::featueredProduct();
    	$admin_script = AdminSetting::all();
        $cat_article = Article::catArticle($id);
        $cats = CategoryArticle::all();
        $cat_name = CategoryArticle::where('id',$id)->first();
        
        return view('user.cat_article',compact('cat_article','cats','cat_name','admin_script','featured_product','latest_videos','latest_articles'));
    }

    public function catproductlist($id) {
    	$admin_script = AdminSetting::all();
        $cat_article = Product::catProduct($id);
        $cats = CategoryProduct::all();
        $cat_name = CategoryProduct::where('id',$id)->first();
         $related_video = Product::featueredProduct();
        $latest_articles = Article::latetsArticles();      
        $latest_videos = Video::latetsVideos();
        return view('user.cat_product',compact('cat_article','cats','cat_name','related_video','latest_articles','latest_videos','admin_script'));
    }
    
    public function productlist() {
    	$admin_script = AdminSetting::all();
        $cat_article = Product::paginate(20);
        $cats = CategoryProduct::all();
        $related_video = Product::featueredProduct();
        $latest_articles = Article::latetsArticles();      
        $latest_videos = Video::latetsVideos();
        return view('user.product_list',compact('cat_article','cats','related_video','latest_articles','latest_videos','admin_script'));
    }

    public function productDetail($id) {
    	$admin_script = AdminSetting::all();
        $articleKey = 'product_' . $id;

        if (!Session::has($articleKey)) {
            Product::where('id', $id)->increment('total_views');
            Session::put($articleKey, 1);
        }
       $video_detail = Product::productDetail($id);
       $cats = CategoryProduct::all();
       $related_video = Product::featueredProduct();
       $lates_product = Product::latetsProducts();
       $latest_videos = Video::latetsVideos();
       return view('user.product_detail',compact('video_detail','related_video','cats','lates_product','latest_videos','admin_script'));
    }

    public function rules() {
    	$admin_script = AdminSetting::all();
        $rules = Rule::where('private',0)->paginate(20);
        $dept = BranchDepartment::all();
        $branch = BranchRule::all();
        return view('user.rules',compact('rules','dept','branch','admin_script'));
    }

    public function tools() {
    	$cats = CategoryTool::all();
    	$admin_script = AdminSetting::all();
        $tools = Tool::where('private',0)->paginate(20);
        return view('user.tools',compact('tools','admin_script','cats'));
    }

    public function cattoollist($id){
    	$cats = CategoryTool::all();
    	 $cat_name = CategoryTool::where('id',$id)->first();
    	$admin_script = AdminSetting::all();
        $tools = Tool::where('private',0)->paginate(20);
    	return view('user.cat_tools',compact('tools','admin_script','cats','cat_name'));
    }

     public function homeSearch(Request $request)
    {
        if($request->has('q')){           
            $search = Video::where( 'title', 'LIKE', '%' . $request->q . '%' )->orWhere( 'description', 'LIKE', '%' . $request->q . '%' )->paginate(20);
        }else
        {
            $search ="";
        }
         $serach_name = $request->q;

         return view('user.search',compact('search','serach_name'));
    }


    public function x(Request $request)
    {

        if($request->has('category_name')){           
                    $category_name =  $request->category_name;
                    $users = BranchDepartment::where('branch_id', $category_name)->get();  
         if(!empty($users)){?>
            <option value="">Select Department</option>
        <?php foreach($users as $user){?>
            <option value="<?php echo $user->id;?>"><?php echo $user->name;?></option>

        <?php }
        }
    }   

       
        die();             
    }

    public function ruleSearch(Request $request)
    {
        if($request->has('q') && $request->has('branch_name') && $request->has('department_name')){           
            $rules = Rule::where( 'article_number', 'LIKE', '%' . $request->q . '%' )->orWhere( 'description', 'LIKE', '%' . $request->q . '%' )->where('branch_name',$request->branch_name)->where('department_name',$request->department_name)->where('private',0)->paginate(20);

             
             

        }else
        {
            $rules = "";
        }

        $branch_name =  $request->branch_name;
             $department_name =  $request->department_name;
             $department_name = BranchDepartment::where('id', $department_name)->first();
             $department_id = $department_name->id; 
             $department_name =  $department_name->name;
             $branch_name = BranchRule::where('id', $branch_name)->first(); 
             $branch_id = $branch_name->id;
             $branch_name =  $branch_name->name;
             $term = $request->q ;

        $admin_script = AdminSetting::all();
        
        $dept = BranchDepartment::all();
        $branch = BranchRule::all();
        return view('user.cat_rules',compact('rules','admin_script','dept','search','branch','department_name','branch_name','branch_id','department_id','term'));
    }

    public function competitonIdea(){

        $admin_script = AdminSetting::all();      
        $ideas = Idea::where('type',1)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        $pchallanges = Idea::where('type',2)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        //$top10 = IdeaApplicant::where('total','>',0)->orderBy('total','desc')->paginate(10);
        $top10 = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('i.type',1)
        ->where('iv.total','>',0)
        ->orderBy('iv.total','desc')->paginate(10);
        
        $top10ch = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('iv.total','>',0)
        ->where('i.type',2)
        ->orderBy('iv.total','desc')->paginate(10);
        
        return view('user.idea_competition', compact('ideas','top10','pchallanges','top10ch','admin_script'));
        // return view('user.idea_competition');
    }

    public function publicChallenge(){

         $admin_script = AdminSetting::all();      
        $ideas = Idea::where('type',1)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        $pchallanges = Idea::where('type',2)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        //$top10 = IdeaApplicant::where('total','>',0)->orderBy('total','desc')->paginate(10);
        $top10 = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('i.type',1)
        ->where('iv.total','>',0)
        ->orderBy('iv.total','desc')->paginate(10);
        
        $top10ch = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('iv.total','>',0)
        ->where('i.type',2)
        ->orderBy('iv.total','desc')->paginate(10);
        return view('user.public_challenge', compact('ideas','top10','pchallanges','top10ch','admin_script'));
    }

    public function send_public_challenge(){
        $admin_script = AdminSetting::all();      
        $ideas = Idea::where('type',1)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        $pchallanges = Idea::where('type',2)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        //$top10 = IdeaApplicant::where('total','>',0)->orderBy('total','desc')->paginate(10);
        $top10 = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('i.type',1)
        ->where('iv.total','>',0)
        ->orderBy('iv.total','desc')->paginate(10);
        
        $top10ch = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('iv.total','>',0)
        ->where('i.type',2)
        ->orderBy('iv.total','desc')->paginate(10);
        return view('user.send_public_challenge', compact('ideas','top10','pchallanges','top10ch','admin_script'));
    }

    public function sponser(){
         $admin_script = AdminSetting::all();      
        $ideas = Idea::where('type',1)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        $pchallanges = Idea::where('type',2)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        //$top10 = IdeaApplicant::where('total','>',0)->orderBy('total','desc')->paginate(10);
        $top10 = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('i.type',1)
        ->where('iv.total','>',0)
        ->orderBy('iv.total','desc')->paginate(10);
        
        $top10ch = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('iv.total','>',0)
        ->where('i.type',2)
        ->orderBy('iv.total','desc')->paginate(10);
        $page = "sponser";
        return view('user.sponser', compact('ideas','top10','pchallanges','top10ch','admin_script','page'));
        //return view('user.sponser');
    }

    public function winner(){
        $admin_script = AdminSetting::all();      
        $ideas = Idea::where('type',1)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        $pchallanges = Idea::where('type',2)->where('publish',1)->where('approve',1)->where('active',1)->where('sent_sponsor_investor',0)->where('start_date','<=',date("Y-m-d"))->where('end_date','>=',date("Y-m-d"))->orderBy('id','desc')->paginate(25);
        //$top10 = IdeaApplicant::where('total','>',0)->orderBy('total','desc')->paginate(10);
        $top10 = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('i.type',1)
        ->where('iv.total','>',0)
        ->orderBy('iv.total','desc')->paginate(10);
        
        $top10ch = DB::table('idea_applicants as iv')
        ->join('ideas as i','i.id','=','iv.idea_id')
        ->join('users as u','u.id','=','iv.user_id')
        ->select('u.id', 'u.first_name', 'u.last_name')
        ->where('iv.total','>',0)
        ->where('i.type',2)
        ->orderBy('iv.total','desc')->paginate(10);
        return view('user.winner', compact('ideas','top10','pchallanges','top10ch','admin_script'));
    }

    public function metec_employee(){
         $admin_script = AdminSetting::all();
         $page = "metec";
         return view('user.sponser', compact('admin_script','page'));

    }

}

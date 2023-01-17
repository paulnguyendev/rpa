<?php
namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
use App\Models\ComboModel;
use App\Models\ProductMetaModel;
#Request
#Model
use App\Models\CourseModel as MainModel;
use App\Models\SupplierModel;
use App\Models\TaxonomyModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
#Mail
use Illuminate\Support\Facades\Mail;
// use App\Mail\NewUserMail;
#Helper
class CourseController extends Controller
{
    private $pathViewController     = "frontend.pages.course";
    private $controllerName         = "fe_course";
    private $model;
    private $taxonomyModel;
    private $productMetaModel;
    private $supplierModel;
    private $comboModel;
    private $params                 = [];
    function __construct()
    {
        $this->model = new MainModel();
        $this->taxonomyModel = new TaxonomyModel();
        $this->productMetaModel = new ProductMetaModel();
        $this->supplierModel = new SupplierModel();
        $this->comboModel = new ComboModel();
        View::share('controllerName', $this->controllerName);
    }
    public function detail(Request $request)
    {
        $slug = $request->slug;
        $item = $this->model->getItem(['slug' => $slug],['task' => 'slug']);
        $teacher = [];
        $level = [];
        $relatedCourses = [];
        $totalLesson = 0;
        if($item) {
            $id = $item['id'];
            $teacher = $item->teacher()->first();
            $level = $item->level()->first();
            $lessons = $item->lesson()->whereNull('parent_id')->withDepth()->get();
            $combo = $item->combo()->with('comboInfo')->with('courseInfo')->get()->toArray();
            $taxonomy = $item->taxonomy()->first();
            $lessonCount = $item->totalLesson();
            $relatedCourses = $taxonomy->course_ids()->where('course_id','!=',$id)->get();
            return view(
                "{$this->pathViewController}/detail",
                [
                    'item' => $item,
                    'teacher' => $teacher,
                    'level' => $level,
                    'lessons' => $lessons,
                    'combo' => $combo,
                    'relatedCourses' => $relatedCourses,
                    'lessonCount' => $lessonCount,
                ]
            );
        }
        else {
            return redirect(route('home/index'));
        }
        // $item = $this->model::find($id);
        // if ($item) {
        //     $item_meta = $this->productMetaModel->getItem(['product_id' => $id], ['task' => 'product_id']);
        //     $item_supplier = $item->supplier()->first();
        // }
        // else {
        //     return redirect(route('home/index'));
        // }
    }
    public function data(Request $request)
    {
    }
    public function category(Request $request)
    {
        $slug = $request->slug;
        $item = $this->taxonomyModel->getItem(['slug' => $slug],['task' => 'slug']);
        $childs = [];
        $coursesList = [];
        $courses = null;
        $coursesTotal = 0;
        if($item) {
            $id = $item['id'];
            $childs = $item::defaultOrder()->descendantsOf($id);
            $courses = $item->course_ids();
            
            $coursesList = $courses->get();
            $coursesTotal = $courses->count();
           
            return view(
                "{$this->pathViewController}/category",
                [
                    'item' => $item,
                    'childs' => $childs,
                    'coursesList' => $coursesList,
                    'coursesTotal' => $coursesTotal,
                ]
            );
        }
        else {
            return redirect(route('home/index'));
        }
        $id = 0;
        $item = $this->taxonomyModel::find($id);
        $items = $item->product_ids()->get();
        $total = $item->product_ids()->count();
        return view(
            "{$this->pathViewController}/category",
            [
                'items' => $items,
                'item' => $item,
                'total' => $total,
            ]
        );
    }
    public function supplier(Request $request)
    {
        $id = $request->id;
        $item = $this->supplierModel::find($id);
        $items = $item->products()->get();
        $total = $item->products()->count();
        return view(
            "{$this->pathViewController}/category",
            [
                'items' => $items,
                'item' => $item,
                'total' => $total,
            ]
        );
    }
    public function listCourse(Request $request)
    {
        $items = [];
        $type = $request->type;
        $items = ($type == 'combo') ? $this->comboModel->listItems([],['task' => 'list']) : $this->model->listItems([],['task' => 'list']);
        $data = ( $type  == 'combo') ? view('frontend.pages.ajax.comboCourse')->with('items', $items)->render()  : view('frontend.pages.ajax.wowCourse')->with('items', $items)->render();
        return response()->json([
            'status' => [
                'code' => 200,
                'message' => "Success"
            ],
            'data' => $data,
        ]);
    }
}

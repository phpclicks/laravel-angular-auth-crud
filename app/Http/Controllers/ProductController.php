<?php namespace App\Http\Controllers;
use App\Products;
use Input;
use Validator;
use Redirect;
use Session;
use Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
	
	public function addProduct(ProductRequest $request)
	{
		$Products = Products::create(Request::all());
		return $Products;
    }
	
	public function editProduct(ProductRequest $request)
	{
		$Products              = Products::find(Request::input('id'));
		$Products->name        = Request::input('name');
		$Products->price       = Request::input('price');
		$Products->quantity    = Request::input('quantity');
		$Products->description = Request::input('description');
		$Products->status      = Request::input('status');
		$Products->save();
    }
	
	public function destroyProduct($id)
	{
		Products::destroy($id);	
	}
	
	public function getStudentList()
	{
	    $products = Products::all();	
		return $products;
	}
	
	public function getSingleStudent($id)
	{
		return Products::find($id);	
	}
		
	}

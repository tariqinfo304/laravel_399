<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new Product();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

        $total_page_size = 10;
        
        $listing = $this->model->paginate($total_page_size);

        //offset
        //  0 =  ( 1 * 6 ) - 6 
        //  6 =  ( 2 * 6 ) - 6 

      //  $listing = $this->model->skip(0)->take($total_page_size)->get();

       //  $listing->withPath(URL('/website'));
       // dd($listing);
        return view("website.product_listing")->with("listing",$listing);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("website.add_product");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            
            "name" => "required",
            "price" => "required",
            "quantity" => "required"

        ]);

       // dd($request->all());
        $this->model->name = $request->input("name");
        $this->model->price = $request->input("price");
        $this->model->quantity = $request->input("quantity");

        $is_save = $this->model->save();
        if($is_save)
        {
            //return  redirect("product");
            echo "Record successfully added";
        }
        else
        {
            echo "Error on saving data";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("website.product")->with("obj",$this->model->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("website.add_product")->with("obj",$this->model->find($id));
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
        $obj = $this->model->find($id);

        $obj->name  = $request->input("name");
        $obj->price  = $request->input("price");
        $obj->quantity  = $request->input("quantity");

        $is_updated = $obj->save();
        if($is_updated)
        {
           return  redirect("product");
            echo "Your record updated successfully";
        }
        else
        {
            echo "error";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = $this->model->find($id);

        if(!empty($obj))
        {
            $is_deleted = $obj->delete();
            if($is_deleted)
            {
                return  redirect("product");
                echo "Deleted successfully";
            }
            else
            {
                echo "Error";
            }
        }
        else
        {
            echo "error";
        }
    }

    public function delete_preview($id)
    {
        return view("website.add_product")
                ->with("is_deleted",1)
                ->with("obj",$this->model->find($id));
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditBookRequest;
use App\Http\Requests\CreateBookRequest;
use App\Services\BookService;
use App\Services\BookServiceContract;
use App\Repositories\BookRepositoryContract;
class BookController extends Controller
{
    protected $service;

    public function __construct(BookServiceContract $service){
        $this->service=$service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = $this->service->paginate();
       
        return view('books.index',compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest $request)
    {
        $this->service->store($request->all());
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = $this->service->find($id);
        return view('books.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->service->find($id);
        return view('books.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBookRequest $request, $id)
    {
        // echo "<pre>";
        // var_dump($request->all());
        // echo "</pre>";
        $this->service->update($request->all(),$id);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dsestroy($id)
    {
        $this->service->destroy($id);
        return redirect()->route('books.index');
    }
}
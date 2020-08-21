<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeExpenseRequest;
use App\Models\TypeExpense;


class TypeExpenseController extends Controller
{

    /**
     * @var typeExpense
     */
    private $typeExpense;

    public function __construct(TypeExpense $typeExpense)
    {
        $this->typeExpense = $typeExpense;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeExpenses = $this->typeExpense->all();
        return view('admin.typeExpense.index', compact('typeExpenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeExpense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeExpenseRequest $request)
    {
        $data = $request->all();
        TypeExpense::create($data);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.typeExpense.detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeExpense = $this->typeExpense->findOrfail($id);
        return view('admin.typeExpense.detail', compact('$id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeExpenseRequest $request, $id)
    {
        $data = $request->all();
        $typeExpense = $this->typeExpense->find($id);
        $typeExpense->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeExpense = $this->typeExpense->find($id);
        $typeExpense->delete();
        return $this->index();
    }
}

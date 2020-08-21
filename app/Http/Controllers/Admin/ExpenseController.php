<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ExpenseRequest;
use App\Models\Expense;


class ExpenseController extends Controller
{
    /**
     * @var Expense
     */
    private $expense;

    public function __construct(Expense $expense)
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expense = $this->expense->all();
        return view('admin.expense.index', compact('expense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ExpenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpenseRequest $request)
    {
        $data = $request->all();
        $expense = $this->expense->create($data);
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
        return view('admin.espense.detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = $this->expense->findOrFail($id);
        return view('admin.expense.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ExpenseRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpenseRequest $request, $id)
    {
        $data = $request->all();
        $expense = $this->expense->find($id);
        $expense->update($data);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = $this->expense->find($id);
        $expense->delete();
        return $this->index();
    }
}

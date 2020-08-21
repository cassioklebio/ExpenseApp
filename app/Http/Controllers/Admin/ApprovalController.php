<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApprovalRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Approval;
use App\Models\Expense;



class ApprovalController extends Controller
{
    /**
     * @var Approval
     * @var Expense;
     */
    private $approval;
    private $expense;

    public function __construct(Approval $approval, Expense $expense)
    {
        $this->approval = $approval;
        $this->expense  = $expense;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvals = $this->approval->all();
        if (!$approvals) {
            $message = 'Não tem dados reembolso cadastrado';
            return view('admin.approval.index', compact('message'));
        } else {
            foreach ($approvals as $key => $value) {
                $value->id_expense = Expense::find($value->id_expense)->nome;
            }
            return view('admin.approval.index', compact('approvals'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expenses = DB::table('expenses')->get();
        return view('admin.approval.create', compact('expenses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ApprovalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApprovalRequest $request)
    {
        $data = $request->all();
        Approval::create($data);
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
        return view('admin.approval.detail', compact('$ida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $approval = $this->approval->findOrFail($id);
        $expenses = DB::table('expenses')->get();
        return view('admin.approval.edit', compact('$approval', '$expenses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ApprovalRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApprovalRequest $request, $id)
    {
        $data = $request->all();
        $approval = $this->approval->find($id);
        $approval->update($data);

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
        $approval = $this->approval->find($id);
        $approval->delete();
        return $this->index();
    }
}

<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\Datatables;
=======
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

   
    
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = "<a href='/users/{$row->id}/edit' class='edit btn btn-success btn-sm'>Edit</a> 
                                  <a href='' class='delete btn btn-danger btn-sm'>Delete</a>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users.index');
=======
    public function index()
    {
        $users = User::all();
    
        if (request()->wantsJson()) {
            return $users;
        }
    
        return view('users.index', compact('users'));
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birth_date' => 'required|date',
            'password' => 'required|string|min:6',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 422);
        }
    
        return response()->json([
            'message' => 'ERRo'
        ]);
=======
        //
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(User $user)
    {
        return view('users.create', compact('user'));
=======
    public function edit(string $id)
    {
        //
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
<<<<<<< HEAD
        return view('users.index');
    }
}
=======
        //
    }
}
>>>>>>> 2ffffecf59e4b599398bdb648105f5d5c53ef700

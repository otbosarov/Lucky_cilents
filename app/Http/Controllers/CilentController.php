<?php

namespace App\Http\Controllers;

use App\Http\Requests\CilentCreateRequest;
use App\Http\Requests\CilentCRUDRequest;
use App\Http\Requests\CilentUpdateRequest;
use App\Http\Resources\CilentResource;
use App\Models\Cilent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CilentController extends Controller
{
    public function index()
    {
        $cilent = Cilent::orderByDesc('id')
            ->paginate();
        return CilentResource::collection($cilent);
    }
    public function store(CilentCreateRequest $request)
    {
        Cilent::create([
            'client_name' => $request->client_name,
            'workplace' => $request->workplace,
            'client_salary' => $request->client_salary,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);
        return response()->json(['message' => 'Mijoz yaratildi '], 201);
    }


    public function update(CilentUpdateRequest $request, $id)
    {
        Cilent::find($id)
            ->update([
                'workplace' => $request->workplace,
                'client_salary' => $request->client_salary,
                'age' => $request->age,
            ]);
        return response()->json(['message' => "Mijoz ma'lumoti yangilandi "]);
    }
    public function cilent_action()
    {
    $male = Cilent::where('active','=',true)
    ->where('gender','=','male')
    ->inRandomOrder()
    ->limit(2)
    ->get();
    $female = Cilent::where('active','=',true)
    ->where('gender','=','female')
    ->inRandomOrder()
    ->limit(2)
    ->get();
     $action = collect($male->merge($female))->shuffle();
     $ids = $action->pluck('id');
     Cilent::whereIn('id',$ids)->update(['active' => false]);

       return $action;
    }
}

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
        DB::beginTransaction();
        try{
        Cilent::create([
            'client_name' => $request->client_name,
            'workplace' => $request->workplace,
            'client_salary' => $request->client_salary,
            'age' => $request->age,
            'gender' => $request->gender,
        ]);
        DB::commit();
        return response()->json(['message' => 'Mijoz yaratildi '], 201);
    }catch(\Exception $exception){
       DB::rollBack();
       return response()->json([
        "message" => 'Dasturda kutilmagan xatolik',
        'error' => $exception -> getMessage(),
        'line' => $exception -> getLine(),
        'file' => $exception -> getFile(),
    ]);

    }
}

    public function update(CilentUpdateRequest $request, $id)
    {
        Cilent::where('id', $id)->first()
            ->update([
                'workplace' => $request->workplace,
                'client_salary' => $request->client_salary,
                'age' => $request->age,
            ]);
        return response()->json(['message' => "Mijoz ma'lumoti yangilandi "]);
    }
    public function cilent_action()
    {

        $female = Cilent::where('active', true)
        ->inRandomOrder()->limit(2)
        ->where('gender', 'female')
        ->get();
        $male = Cilent::where('active', true)
        ->inRandomOrder()->limit(2)
        ->where('gender', 'male')
        ->get();

        $action = collect($male->merge($female));
        $ids = $action->pluck('id');
        Cilent::whereIn('id', $ids)->update(['active' =>  false]);
        return $action->first();

    }
}

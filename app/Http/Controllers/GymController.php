<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gym;
use Illuminate\Http\Request;

class GymController extends Controller
{
    public function index(Gym $gym)
    {
        return view('gyms/index')->with(['gyms' =>$gym->getPaginateByLimit()]); 
    }
    
    public function search(Request $request)
    {
        $gyms ->getPaginateByLimit;
        $search = $request->input('search');
        $query = Gym::query();
        if ($search) 
        {
            $spaceConversion = mb_convert_kana($search, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value)
            {
                $query->where('name', 'like', '%'.$value.'%')->orWhere('contents','like','%'.$value.'%')->orWhere('address','like','%'.$value.'%');
            }
            $gyms = $query->getPaginateByLimit;

        }
        return view('gyms.search')
            ->with([
                'gyms' => $gyms,
                'search' => $search,
            ]);
    }
}
?>
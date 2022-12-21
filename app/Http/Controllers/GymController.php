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
    
    public function search(Request $request, Gym $gym)
    {
        $gyms =$gym->getPaginateByLimit();
        $search = $request->input('search');
        if($request->has('searchButton'))
        {
            if ($search) 
            {
                $spaceConversion = mb_convert_kana($search, 's');
                $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
                foreach($wordArraySearched as $value)
                {
                   // $query->where('name', 'like', '%'.$value.'%')->orWhere('contents','like','%'.$value.'%')->orWhere('address','like','%'.$value.'%');
                
                    $gyms=Gym::where('name', 'like', '%'.$value.'%')->orWhere('contents','like','%'.$value.'%')->orWhere('address','like','%'.$value.'%');
                
                    
                }
               // $gyms = $query->getPaginateByLimit();
                $gyms=$gyms->orderBy('updated_at','DESC')->paginate(20);
            }
        }elseif ($request->has('sortButton'))
        {
          if ($search) 
            {
            $spaceConversion = mb_convert_kana($search, 's');
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
            foreach($wordArraySearched as $value)
            {
               // $query->where('name', 'like', '%'.$value.'%')->orWhere('contents','like','%'.$value.'%')->orWhere('address','like','%'.$value.'%');
            
                $gyms=Gym::where('name', 'like', '%'.$value.'%')->orWhere('contents','like','%'.$value.'%')->orWhere('address','like','%'.$value.'%');
            
                
            }
           // $gyms = $query->getPaginateByLimit();
            $gyms=$gyms->orderBy('price','asc')->paginate(20);
            }  
        }
            return view('gyms.search')
            ->with([
                'gyms' => $gyms,
                'search' => $search,
            ]);
    }
    
    public function clear(Gym $gym)
    {
        return view('gyms.search')->with(['gyms' =>$gym->getPaginateByLimit()]);  
    }
        
    public function show(Gym $gym)
    {
        return view('gyms/show')->with(['gym' => $gym]);
    }
}
?>
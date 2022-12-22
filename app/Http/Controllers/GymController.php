<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gym;
use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Requests\GymRequest;
use App\Models\Prefecture;
use App\Http\Requests\PrefectureRequest;
use App\Http\Requests\CityRequest;

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
    
    public function prefecture(Prefecture $prefecture)
    {
        return view('gyms/prefecture')->with(['prefectures'=>$prefecture->get()]);
    }
    
    public function city(PrefectureRequest $request, Prefecture $prefecture)
    {
        $input = $request['prefecture'];
        $prefecture->fill($input)->save();
        return view('gyms/city')->with(['prefectures' => $prefecture->get()]);
    }
    
     public function create(CityRequest $request, City $city)
    {
        $input = $request['city'];
        $city->fill($input)->save();
        return view('gyms/create')->with(['cities' => $city->get()]);
    }
    
    public function store(GymRequest $request, Gym $gym)
    {
        $input = $request['gym'];
        $gym->fill($input)->save();
        return redirect('/gyms/' . $gym->id);
    }
}
?>
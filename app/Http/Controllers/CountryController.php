<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Country;
use App\Models\Region;
use App\Models\Block;
use App\Models\City;
class CountryController extends Controller
{
    public function indexcountry(){
        $Patient = Patient::all();
        $regions =Region::all();
        return view('countries.index', ['Patient' => $Patient, 'regions' => $regions]);
    }

    public function getcountries($id) {
        $html = '';
        $countries = Country::where('region_id', $id)->get();
    
        foreach ($countries as $country) {
            $html .= '<option value="' . $country->id . '">' . $country->countryName . '</option>';
        }
    
        return response()->json($html);

    
}

public function getcity($id)
{
    $html = '';
    $cities = City::where('country_id', $id)->get();

    foreach ($cities as $city) {
        $html .= '<option value="' . $city->id . '">' . $city->cityName . '</option>';
    }

    return response()->json($html);


}


}
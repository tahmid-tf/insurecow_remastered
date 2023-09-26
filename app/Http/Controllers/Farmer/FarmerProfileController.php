<?php

namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use App\Models\FarmerProfile;
use Illuminate\Http\Request;

class FarmerProfileController extends Controller
{

//    public $validDistricts = [
//        'Bagerhat', 'Bandarban', 'Barguna', 'Barisal', 'Bhola', 'Bogura (formerly Bogra)', 'Brahmanbaria', 'Chandpur',
//        'Chapai Nawabganj', 'Chattogram (Chittagong)', 'Chuadanga', 'Comilla (Cumilla)', 'Cox\'s Bazar', 'Dhaka',
//        'Dinajpur', 'Faridpur', 'Feni', 'Gaibandha', 'Gazipur', 'Gopalganj', 'Habiganj', 'Jamalpur', 'Jashore (Jessore)',
//        'Jhalokati', 'Jhenaidah', 'Joypurhat', 'Khagrachari', 'Khulna', 'Kishoreganj', 'Kushtia', 'Lakshmipur',
//        'Lalmonirhat', 'Madaripur', 'Magura', 'Manikganj', 'Meherpur', 'Moulvibazar', 'Munshiganj', 'Mymensingh',
//        'Naogaon', 'Narail', 'Narayanganj', 'Narsingdi', 'Natore', 'Netrokona', 'Nilphamari', 'Noakhali', 'Pabna',
//        'Panchagarh', 'Patuakhali', 'Pirojpur', 'Rajbari', 'Rajshahi', 'Rangamati', 'Rangpur', 'Satkhira', 'Shariatpur',
//        'Sherpur', 'Sirajganj', 'Sunamganj', 'Sylhet', 'Tangail', 'Thakurgaon', 'Jamalpur'
//    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function get_farmer_info()
    {
        $profile = auth()->user()->farmerProfile()->orderBy('id', 'desc')->first();
        return view('farmer.admin-content.profile.view', compact('profile'));
    }

    public function index()
    {


        if (auth()->user()->farmerProfile()->orderBy('id', 'desc')->count() == 0) {
            return view('farmer.admin-content.profile.index');
        } else {
            $profile = auth()->user()->farmerProfile()->orderBy('id', 'desc')->first();
            return view('farmer.admin-content.profile.update', compact('profile'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $district = $request->input('district');
//
//
//        if (!in_array($district, $this->validDistricts)) {
//            return "Invalid request";
//        }

        $inputs = \request()->validate([
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'present_address' => 'required',
            'dob' => 'required',
            'nid' => 'required',
            'source_of_income' => 'required',
            'bank_account_no' => 'required',
            'farmer_address' => 'required',
            'thana' => 'required',
            'upazilla' => 'required',
            'union' => 'required',
            'division' => 'required',
            'district' => 'required',
            'zip_code' => 'nullable',
            'village' => 'required',
            'loan_amount' => 'nullable',
            'num_of_livestock' => 'required',
            'type_of_livestock' => 'required',
//            'sum_insured' => 'required',
            'nationality' => 'required',

            'bank_name_insured' => 'required',
            'nid_front' => 'required|mimes:jpeg,jpg,png',
            'nid_back' => 'required|mimes:jpeg,jpg,png',
            'loan_investment' => 'nullable|mimes:jpeg,jpg,png,pdf,txt',
            'chairman_certificate' => 'required|mimes:jpeg,jpg,png,pdf,txt',


            'image' => 'required|mimes:jpeg,jpg,png',

        ]);

        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        }

        if (request('loan_investment')) {
            $inputs['loan_investment'] = \request('loan_investment')->store('images');
        }

        if (request('nid_front')) {
            $inputs['nid_front'] = \request('nid_front')->store('images');
        }

        if (request('nid_back')) {
            $inputs['nid_back'] = \request('nid_back')->store('images');
        }

        if (request('chairman_certificate')) {
            $inputs['chairman_certificate'] = \request('chairman_certificate')->store('images');
        }


        auth()->user()->farmerProfile()->create($inputs);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function show(FarmerProfile $farmerProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(FarmerProfile $farmerProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FarmerProfile $farmerProfile)
    {

//        $district = $request->input('district');
//
//
//        if (!in_array($district, $this->validDistricts)) {
//            return "Invalid request, please choose district from the provided list";
//        }

        $inputs = \request()->validate([
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'present_address' => 'required',
            'dob' => 'required',
            'nid' => 'required',
            'source_of_income' => 'required',
            'bank_account_no' => 'required',
            'farmer_address' => 'required',
            'thana' => 'required',
            'upazilla' => 'required',
            'union' => 'required',
            'division' => 'required',
            'district' => 'required',
            'zip_code' => 'nullable',
            'village' => 'required',
            'loan_amount' => 'nullable',
            'num_of_livestock' => 'required',
            'type_of_livestock' => 'required',
//            'sum_insured' => 'required',
            'nationality' => 'required',


            'image' => 'mimes:jpeg,jpg,png',
            'bank_name_insured' => 'required',
            'nid_front' => 'mimes:jpeg,jpg,png',
            'nid_back' => 'mimes:jpeg,jpg,png',
            'loan_investment' => 'mimes:jpeg,jpg,png,pdf,txt',
            'chairman_certificate' => 'mimes:jpeg,jpg,png,pdf,txt',
        ]);


        if (request('image')) {
            $inputs['image'] = \request('image')->store('images');
        } else {
            $inputs['image'] = $farmerProfile->image;
        }


        if (request('loan_investment')) {
            $inputs['loan_investment'] = \request('loan_investment')->store('images');
        } else {
            $inputs['loan_investment'] = $farmerProfile->loan_investment;
        }

        if (request('nid_front')) {
            $inputs['nid_front'] = \request('nid_front')->store('images');
        } else {
            $inputs['nid_front'] = $farmerProfile->nid_front;
        }

        if (request('nid_back')) {
            $inputs['nid_back'] = \request('nid_back')->store('images');
        } else {
            $inputs['nid_back'] = $farmerProfile->nid_back;
        }

        if (request('chairman_certificate')) {
            $inputs['chairman_certificate'] = \request('chairman_certificate')->store('images');
        } else {
            $inputs['chairman_certificate'] = $farmerProfile->chairman_certificate;
        }

        auth()->user()->farmerProfile()->where('id', $farmerProfile->id)->update($inputs);
        session()->flash('update', 'Farmer Profile Updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\FarmerProfile $farmerProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(FarmerProfile $farmerProfile)
    {
        //
    }
}

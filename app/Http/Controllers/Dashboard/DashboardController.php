<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CattleRegistration;
use App\Models\CattleRegReport;
use App\Models\Firm;
use App\Models\InsuranceRequest;
use App\Models\Insured;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function super_admin()
    {
        $firm_count = Firm::count();
        $animal_count = CattleRegistration::count();
        $company_count = User::where('role', 'c')->count();
        $total_user_count = User::count();
        $total_farmers_count = User::where('role', 'f')->count();
        return view("dashboard.super_admin", compact('company_count', 'total_user_count', 'total_farmers_count', 'firm_count', 'animal_count'));
    }

    public function company()
    {
        $field_agent_count = User::where('role', 'fa')->where('company_id', auth()->user()->id)->count();
        $farmer_count = User::where('role', 'f')->where('company_id', auth()->user()->id)->count();


//  ---------------------------------- [ without premium based ] ---------------------------------------


        $without_premium_based_company_insured_animal_count = Insured::where('insurance_requested_company_id', auth()->user()->id)->count();

        $without_premium_based_company_insurance_amount = Order::where('insurance_requested_company_id', auth()->user()->id)->sum('amount');

        $due_amount_company_without_premium_insurance = InsuranceRequest::where('insurance_requested_company_id',auth()->user()->id)->where('insurance_status','received')->where('insurance_request_status',null)->sum('insurance_cost');

        $due_request_company_without_premium_insurance_count = InsuranceRequest::where('insurance_requested_company_id',auth()->user()->id)->where('insurance_status','received')->where('insurance_request_status',null)->count();

//  ----------------------------------  [ without premium based ] ---------------------------------------

//  ---------------------------------- Insured claim count [ without premium based ] ---------------------------------------

//        $without_premium_based_company_claim_count = CattleRegReport::where('operation','claim')->where('verification_report','success')->get();
//        $without_premium_based_company_claim_count = CattleRegReport::where('operation','claim')->where('verification_report','success')->get();


//        $without_premium_based_company_claim_count = CattleRegReport::where('operation', 'claim')
//            ->where('verification_report', 'success')
//            ->whereHas('user', function ($query) {
//                $query->where('company_id', auth()->user()->id);
//            })
//            ->count();
//
//        return $without_premium_based_company_claim_count;

//  ---------------------------------- Insured claim count [ without premium based ] ---------------------------------------

        return view("dashboard.company", compact('field_agent_count', 'farmer_count', 'without_premium_based_company_insured_animal_count', 'without_premium_based_company_insurance_amount','due_amount_company_without_premium_insurance','due_request_company_without_premium_insurance_count'));
    }

    public function farmer()
    {
        $no_of_cattle = auth()->user()->cattleRegister()->count();
        $cattle_reg_verification_count = auth()->user()->cattle_registration_verification_report()->count();
        $cattle_reg_verification = auth()->user()->cattle_registration_verification_report()->orderBy('id', 'desc')->take(9)->get();
        $firms_count = auth()->user()->farm()->count();

        return view("dashboard.farmer", compact('cattle_reg_verification_count', 'no_of_cattle', 'cattle_reg_verification', 'firms_count'));
    }


    public function farm_management()
    {

        $firms_count = auth()->user()->farm()->count();
        $animal_health_count = auth()->user()->animal_health()->count();
        $feeding_and_nutrition_count = auth()->user()->feeding_and_nutrition()->count();
        $breeding_information_count = auth()->user()->reproduction_and_breeding()->count();

//  ---------------------------------------------- Profit or loss - Business State ----------------------------------------------

        $total_income = auth()->user()->income_and_sells()->sum('amount') ?? 0;
        $total_expense = auth()->user()->expense()->sum('amount') ?? 0;
        $total_daily_expenses = auth()->user()->daily_expense()->sum('amount') ?? 0;

        $total_profit_or_loss = $total_income - ($total_expense + $total_daily_expenses);

//  ---------------------------------------------- Profit or loss - Business State ----------------------------------------------


        return view("dashboard.farm_management", compact('firms_count', 'animal_health_count', 'feeding_and_nutrition_count', 'breeding_information_count', 'total_income', 'total_expense', 'total_daily_expenses', 'total_profit_or_loss'));
    }

    public function field_agent()
    {
        return view("dashboard.view");
    }
}

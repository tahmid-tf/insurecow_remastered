<?php

namespace App\Http\Controllers\Farm_management\Financial;

use App\Http\Controllers\Controller;
use App\Models\Farm_management\financial\Expense;
use App\Models\Farm_management\financial\IncomeAndSell;
use Illuminate\Http\Request;

class ProfitAndLossController extends Controller
{
    public function generateReport(Request $request)
    {

        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        // Convert the end date to the end of the day
        $endDate = date('Y-m-d 23:59:59', strtotime($endDate));

        $income = auth()->user()->income_and_sells()->whereBetween('created_at', [$startDate, $endDate])->sum('amount');
        $expenses = auth()->user()->expense()->whereBetween('created_at', [$startDate, $endDate])->sum('amount');
        $daily_expenses = auth()->user()->daily_expense()->whereBetween('created_at', [$startDate, $endDate])->sum('amount');

        $profitOrLoss = $income - ($expenses + $daily_expenses);

        return view('farm-management.admin-content.profit-and-loss-report.index', compact('startDate', 'endDate', 'income', 'expenses', 'profitOrLoss'));
    }

    public function generateReportViaApi(Request $request)
    {

        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        // Convert the end date to the end of the day
        $endDate = date('Y-m-d 23:59:59', strtotime($endDate));

        $income = auth()->user()->income_and_sells()->whereBetween('created_at', [$startDate, $endDate])->sum('amount');
        $expenses = auth()->user()->expense()->whereBetween('created_at', [$startDate, $endDate])->sum('amount');

        $profitOrLoss = $income - $expenses;

//        return view('farm-management.admin-content.profit-and-loss-report.index', compact('startDate', 'endDate', 'income', 'expenses', 'profitOrLoss'));

        return response()->json([
            'start_date' => $startDate,
            'end_date' => $endDate,
            'income' => $income,
            'expenses' => $expenses,
            'profit_or_loss' => $profitOrLoss
        ],200);
    }
}

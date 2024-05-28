<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function calculate_loan(Request $request) {
        $current_salary = $request['current_salary'];
        $rent_amount = $request['rent_amount'];
        $grocery_expense = $request['grocery_expense'];
        $utility_expenses = $request['utility_expenses'];
        $transportation_expenses = $request['transportation_expenses'];
        $current_emis = $request['current_emis'];
        $avg_mall_spending = $request['avg_mall_spending'];
        $repayment_period = $request['preferred_repayment_period'];
        $desired_loan = $request['desired_loan'];
        $monthly_saving = $request['savings'];
        $total_dependents = $request['dependents'];
        $eligible = false;
        // Calculate disposable income
        $disposable_income = $current_salary - (
                 $rent_amount + $grocery_expense + $utility_expenses +
                 $transportation_expenses + $current_emis + $avg_mall_spending
             ) / $total_dependents;

        // Evaluates the percentage of income used to pay existing debts.
        $debt_to_income_ratio = $current_emis /$current_salary;

        // Assesses the amount saved as a percentage of income.
        $savings_rate = $monthly_saving / $current_salary;

        // Calculate risk scrore based on  home ownership, debt-to-income ratio, savings rate, and spending habits.
        $risk_score = 0;
    
        if ($request['owns_house']) {
            $risk_score += 10;
        }
        if ($debt_to_income_ratio < 0.3) {
            $risk_score += 20;
        }
        if ($savings_rate > 0.1) {
            $risk_score += 10;
        }
        if ($avg_mall_spending < 2000) {
            $risk_score += 10;
        }
    
        // eligibility and calculates the loan amount
        $eligibility = $risk_score >= 30;
        $granted_loan_amount = $eligibility ? min($disposable_income * $repayment_period, $request['current_salary'] * 3) : 0;
        $emi = $granted_loan_amount ? $granted_loan_amount / $repayment_period : 0;

        if($eligibility && $granted_loan_amount >= $desired_loan){
            $eligible = true;
        }
        return view('result')
        ->with([
            'eligibility'           =>  $eligibility,
            'granted_loan_amount'   =>  $granted_loan_amount,
            'repayment_period'      =>  $repayment_period,
            'emi'                   =>  $emi,
            'risk_score'            =>  $risk_score,
            'full_name'             =>  $request['name']
        ]);


}
}

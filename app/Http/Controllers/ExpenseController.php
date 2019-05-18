<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseRequest;
use App\Models\Expense;
use App\Utils\CurrencyConverter;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{


    /**
     * @var CurrencyConverter
     */
    protected $currencyConverter;

    /**
     * ExpenseController constructor.
     * @param CurrencyConverter $currencyConverter
     */
    public function __construct(CurrencyConverter $currencyConverter)
    {
        $this->currencyConverter = $currencyConverter;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $expenses = Expense::all();

        return $this->success($expenses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpenseRequest $request)
    {


        /*
         * I wrapped round between try catch because currency converter might
         * throw an http exception
         */

       try{
           $expense = new Expense();

           $expense->expense_date = $request->date;
           $expense->value = $this->getExpenseValue($request->value);
           $expense->reason = $request->reason;

           if($expense->save())
               return $this->success($expense);
           return $this->error("Oops something went wrong on the server");

       }catch (\Exception $exception){
           return $this->error($exception->getMessage());
       }
    }

    private function getExpenseValue($value){

        $matches = [];

        //Find out if user enter EUR while entering the amount
        if(preg_match('/(^\d+(\.\d+)?)EUR$/',$value,$matches)){
             return $this->currencyConverter->convert((float)$matches[1],'EUR','GBP');
        }
        return (float)$value;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




}

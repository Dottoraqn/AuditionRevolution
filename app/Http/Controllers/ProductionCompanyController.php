<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductionCompanyRequest;
use App\ProductionCompany;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductionCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
    $production_companies = ProductionCompany::all();
    return view('production_company.index', compact('production_companies'));
  }

  public function show($id)
  {
    $production_company = ProductionCompany::findOrFail($id);

    return view('production_company.show', compact('production_company'));
  }

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function create()
  {
    return view('production_company.create');
  }

  /**
   * @param CreateProductionCompanyRequest $request
   * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
  public function store(CreateProductionCompanyRequest $request)
  {
      $production_company = $request->all();
      $production_company['owner_id'] = \Auth::id();

      ProductionCompany::create($production_company);

      return redirect('production_companies');
  }
}

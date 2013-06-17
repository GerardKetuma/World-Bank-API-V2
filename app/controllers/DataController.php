<?php

class DataController extends \BaseController {

	/**
	 * Display a listing of all countries.
	 *
	 * @return Response
	 */
	public function showCountries() {
    return DB::table('countries')->get();
	}

  public function showCountryRecords($country) {
    return DB::table('countries')
              ->join('records', 'countries.id', '=', 'records.country_id')
              ->select('records.*')
              ->where('countries.name', '=', $country)
              ->get();
  }

}

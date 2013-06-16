<?php

class DataController extends \BaseController {

	/**
	 * Display a listing of all countries.
	 *
	 * @return Response
	 */
	public function showCountries()
	{
    return DB::table('countries')->get();
	}

}

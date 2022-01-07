<?php

use App\Models\Dignostique;
use App\Models\DossierMedical;
use App\Models\Hopital;
use App\Models\HopitalLocal;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $hopitaux = Hopital::all();
    return view('pages.welcome', compact('hopitaux'));
});
Route::get('/hopital/{id}', function ($id) {
    // $hopital = Hopital::find($id);
    // // $hopitaux = HopitalLocal::all();
    // $hopitaux = HopitalLocal::Where('hopitals_id', $hopital->id)->simplePaginate(25);
    $hopital= DB::table('hopitals')
    ->join('hopital_locals', 'hopitals.id', '=', 'hopital_locals.hopitals_id')
    ->join('locals', 'hopital_locals.locals_id', '=', 'locals.id')
    ->join('consultations', 'hopital_locals.id', '=', 'consultations.hopital_locals_id')
    ->join('docteurs', 'consultations.docteurs_id', '=', 'docteurs.id')
    ->join('type_consultations', 'consultations.type_consultations_id', '=', 'type_consultations.id')
    ->join('patients', 'consultations.patients_id', '=', 'patients.register')
    ->join('dossier_medicals', 'patients.register', '=', 'dossier_medicals.patients_id')
    // ->join('dignostiques', 'dossier_medicals.dignostiques_id', '=', 'dignostiques.id')
    ->where('hopitals.id', $id )
    ->orderBy('consultations.date', 'asc')
    // ->orderBy('patients.name', 'desc')
    ->simplePaginate(25);
    // ->get();
    // dd($hopital[0]);
    return view('pages.hopital', compact('hopital'));
});
Route::get('/patients', function () {
    $patients= DB::table('patients')
    ->leftJoin('dossier_medicals', 'patients.register', '=', 'dossier_medicals.patients_id')
    ->orderBy('register')
    ->simplePaginate(25);
    // dd($patients);
    return view('pages.patient', compact('patients'));
});
Route::get('/diagnotique/{id}', function ($id) {
    $dossierMedicals= DossierMedical::find($id);
    // dd($dossierMedicals);
    return view('pages.diagnostiques', compact('dossierMedicals'));
});
Route::get('/dossierMedical/{register}', function ($register) {

    $dossierMedicals= Patient::where("register", $register)->first();
    // $dossierMedicals= DB::table('patients')
    // ->join('dossier_medicals', 'patients.register', '=', 'dossier_medicals.patients_id')
    // ->join('maladies', 'dossier_medicals.maladies_id', '=', 'maladies.id')
    // ->join('dignostiques', 'dossier_medicals.dignostiques_id', '=', 'dignostiques.id')
    // ->where('patients.register', $register)
    // ->get();
    // dd($dossierMedicals);
    return view('pages.dossierMedicale', compact('dossierMedicals'));
});


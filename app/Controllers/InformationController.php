<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InformationController extends BaseController
{
    public function index()
    {
        echo view('main/index');
    }
    public function Finance()
    {
        
        $data['fin'] = $this->fin->findAll();
        return view('main/finance', $data);
    }
    public function barangay()
    {
        $data['info'] = $this->information->findAll();
        return view('main/barangay', $data);
    }
    public function events()
    {
        echo view('main/event');
    }
    public function contact()
    {
        echo view('main/contact');
    }
    public function form()
    {
        echo view('dashboard/form');
    }
    public function dashboard()
    {
        $data['fin'] = $this->fin->findAll();
        return view('dashboard/index', $data);
    }
    private $information;
    public function __construct(){
    $this->information = new \App\Models\PopulationModel();
    $this->fin = new \App\Models\FinanceModel();
    }
    public function Information()
    {
        $data['info'] = $this->information->findAll();
        return view('Information', $data);
    }
       
    public function financert()
    {
        $data['fin'] = $this->fin->findAll();
        return view('main/financesert');
    }
       
    public function insertInformation()
        {
            $data = [
                'BarangayName' => $this->request->getVar('BarangayName'),
                'barangayPopulation' => $this->request->getVar('barangayPopulation'),
                'populationYear' => $this->request->getVar('populationYear'),
            ];
            $this->information->save($data);
            return redirect()->to('/information');
        }
        public function insertFinance()
        {
            $data = [
                'FiscalYear' => $this->request->getVar('FiscalYear'),
                'AnnualRegularIncome' => $this->request->getVar('AnnualRegularIncome'),
                'Change' => $this->request->getVar('Change'),
            ];
            $this->fin->save($data);
            return redirect()->to('/dashboard');
        }

}

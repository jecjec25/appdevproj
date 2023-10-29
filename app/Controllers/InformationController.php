<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class InformationController extends BaseController
{
    private $information;
    public function __construct(){
    $this->information = new \App\Models\ResidentInformationModel();
    }
    public function Information()
    {
        $data['info'] = $this->information->findAll();
        return view('information', $data);
    }
    
        public function insertInformation()
        {
            $data = [
                'ResidentName' => $this->request->getVar('ResidentName'),
                'ContactNo' => $this->request->getVar('ContactNo'),
                'Status' => $this->request->getVar('Status'),
                'Gender' => $this->request->getVar('Gender'),
                'Birthdate' => $this->request->getVar('Birthdate'),
                'Age' => $this->request->getVar('Age'),
                'Address' => $this->request->getVar('Address'),

            ];
            $this->information->save($data);
            return redirect()->to('/information');
        }
}

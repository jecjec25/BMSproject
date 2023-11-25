<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DemographicModel;
class DemographicController extends BaseController
{
    private $demographicdata;
    public function __contruct()
    {
        $this->demographicdata = new App\Models\DemographicModel();
    }
    public function demographics()
    {
        $demographicdata = new DemographicModel();
        $data['demographicdata'] = $demographicdata->findAll();
        return view('dashboard/demographics', $data);
    }

    public function create()
    {
        return view('dashboard/include/create');
    }
    public function barangay_store()
    {
        $demographicdata = new DemographicModel();
        $data = [
            'number' => $this->request->getVar('number'),
            'barangay' => $this->request->getVar('barangay'),
            'landarea' => $this->request->getVar('landarea'),
            'popu2015' => $this->request->getVar('popu2015'),
            'popuden2020' => $this->request->getVar('popuden2020'),
            'popu2020' => $this->request->getVar('popu2020'),
            'projpopu2023' => $this->request->getVar('projpopu2023'),
            'household2020' => $this->request->getVar('household2020'),
            'household2023' => $this->request->getVar('household2023'),
            'growthrate' => $this->request->getVar('growthrate'), 
        ];
        $demographicdata->save($data);
        return redirect()->to('/demographics');
    }
}

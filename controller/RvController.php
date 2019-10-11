<?php
require ROOT . DS . 'Utils' . DS . 'Calendar.php';
require ROOT . DS . 'model' . DS . 'StaffModel.php';
require ROOT . DS . 'model' . DS . 'SpecialityModel.php';


class RvController extends Controller
{

    public function new()
    {
        $specialityManager = new SpecialityModel();
        $specialities = $specialityManager->findSpecialityService();

        $calendar = new Calendar();
        $this->render('rv/new', ['calendar' => $calendar->show(), 'specialities' => $specialities]);
    }

    public function list()
    {
        $this->render('rv/list');
    }

    public function specialities()
    {

        $this->render('rv/specialities');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: mchivuku
 * Date: 1/22/15
 * Time: 10:40 AM
 */

class SchedulerViewModel{
    public $providers;
    public $appointments;
    public $visitType;
    public $facility;

    public $scheduler_slots;
}


class AppointmentSlotViewModel{
    public $time;
    public $time_text;
    public $flag;
}


<?php
/**
 * Created by PhpStorm.
 * User: mchivuku
 * Date: 1/22/15
 * Time: 10:40 AM
 */
require_once 'NewAppointmentBaseViewModel.php';

class SchedulerTabViewModel extends NewAppointmentBaseViewModel
{
    public $providers;
    public $appointments;
    public $visitType;
    public $facility;
    public $visitDuration;

    public $scheduler_slots;

    public $selected_startTime;
    public $tabs;
    public $firstAvailableProvider;
    public $available_dates;
    public $selectedProvider;
    public $selectedDate;


    public $errorMsg;

    //This is to allow scheduling the appointment slots up until this date.
    public $validDateRange;


}



class AppointmentSlotViewModel
{
    public $time;
    public $time_text;
    public $flag;
    public $past_time_flag;
}


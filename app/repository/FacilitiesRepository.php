<?php
/**
 * Created by PhpStorm.
 * User: mchivuku
 * Date: 1/20/15
 * Time: 1:54 PM
 */
namespace Scheduler\Repository;

//TODO - let Tamir know that this is a custom table
class FacilitiesRepository{
    protected $table = 'iu_scheduler_facility_charttitle';

    public function getAllFacilities(){

        $facilities_list = \DB::table($this->table)
            ->select( array('FacilityId as Id','Description as Name','ChartTitle'
            ))->orderBy('Description', 'ASC')
            ->get();

        return $facilities_list;

    }

    public function getFacilityChartTitle($facilityId){

        $facility = \DB::table($this->table)
            ->where('FacilityId',"=",$facilityId)
            ->orderBy('FacilityId', 'ASC')
            ->first();

        return $facility;

    }


}
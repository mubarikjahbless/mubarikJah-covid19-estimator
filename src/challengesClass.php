<?php


class impact
{
    public $currentlyInfected = 0;
    public $reportedCase = 0;
    public $infectionsByRequestTime=0;
    public $severeCasesByRequestedTime;
    public $hospitalBedsByRequestedTime;
    public $casesForICUByRequestedTime;
    public $casesForVentilatorsByRequestedTime;
    public $dollarsInFlight;

     //Challenge One
    function impact_currentlyInfected($reportedCas,$days,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation)
    {
        $currentlyInfected= $reportedCas*10;
        $this->infectionsByRequestTime($days,$currentlyInfected,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation);
        return $currentlyInfected;
    }
    function infectionsByRequestTime($days,$currentlyInfected,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation)
    {
        global $infectionsByRequestTime;
        $factor = $days / 3;
       $this->$infectionsByRequestTime = $currentlyInfected * round(pow(2, $factor), 0);
      $this->severeCasesByRequestedTime($infectionsByRequestTime,$totalHospitalBeds);
      $this-> casesForICUByRequestedTime($infectionsByRequestTime);
      $this->casesForVentilatorsByRequestedTime($infectionsByRequestTime);
      $this->dollarsInFlight($infectionsByRequestTime,$avgDailyIncomeInUSD,$days,$avgDailyIncomePopulation);


        return $infectionsByRequestTime;
    }
     
    //Challenge Two
    
    function severeCasesByRequestedTime($infectionsByRequestTime,$totalHospitalBeds){
        global $severeCasesByRequestedTime;
   $severeCasesByRequestedTime = $infectionsByRequestTime * 15/100;
   $this-> hospitalBedsByRequestedTime($totalHospitalBeds,$severeCasesByRequestedTime);
   return $severeCasesByRequestedTime;
    }

    function hospitalBedsByRequestedTime($totalHospitalBeds,$severeCasesByRequestedTime){
        global $hospitalBedsByRequestedTime;

        $this->$hospitalBedsByRequestedTime=$totalHospitalBeds-$severeCasesByRequestedTime;
        return $hospitalBedsByRequestedTime;

    }


    //Challenge Three

   function casesForICUByRequestedTime($infectionsByRequestTime){
    global $casesForICUByRequestedTime;
    $this->$casesForICUByRequestedTime = $infectionsByRequestTime * 5/100;
     return $casesForICUByRequestedTime;
   }

    function casesForVentilatorsByRequestedTime($infectionsByRequestTime){
        global $casesForVentilatorsByRequestedTime;
        $this-> $casesForVentilatorsByRequestedTime= $infectionsByRequestTime * 2/100;
        return $casesForVentilatorsByRequestedTime;
    }
    function dollarsInFlight($infectionsByRequestTime,$avgDailyIncomeInUSD,$days,$avgDailyIncomePopulation){
        global $dollarsInFlight;
        $this->$dollarsInFlight= ($infectionsByRequestTime * $avgDailyIncomePopulation * $avgDailyIncomeInUSD)/$days;
       return $dollarsInFlight;  
    }

}

class severeImpact
{
    public $currentlyInfected = 0;
    public $reportedCase = 0;
    public $infectionsByRequestTime;
    public $severeCasesByRequestedTime;
    public $hospitalBedsByRequestedTime;
    public $casesForICUByRequestedTime;
    public $casesForVentilatorsByRequestedTime;
    public $dollarsInFlight;
    

       //Challenge One
    function severe_currentlyInfected($reportedCase,$days,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation)
    {
        global  $currentlyInfected;
        
        $this->$currentlyInfected = $reportedCase * 50;
        $this->infectionsByRequestTime($days,$currentlyInfected,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation);

        return $currentlyInfected;
    }

    function infectionsByRequestTime($days, $currentlyInfected,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation)
    {
        global $infectionsByRequestTime;
        $factor = $days / 3;
        $infectionsByRequestTime = $currentlyInfected * round(pow(2, $factor), 0);
      $this->severeCasesByRequestedTime($infectionsByRequestTime,$totalHospitalBeds);
      $this-> casesForICUByRequestedTime($infectionsByRequestTime);
      $this->casesForVentilatorsByRequestedTime($infectionsByRequestTime);
      $this->dollarsInFlight($infectionsByRequestTime,$avgDailyIncomeInUSD,$days,$avgDailyIncomePopulation);
        return $infectionsByRequestTime;
    }

    //Challenge Two

    function severeCasesByRequestedTime($infectionsByRequestTime,$totalHospitalBeds){
        global $severeCasesByRequestedTime;
   $severeCasesByRequestedTime = $infectionsByRequestTime * 15/100;
   $this-> hospitalBedsByRequestedTime($totalHospitalBeds,$severeCasesByRequestedTime);
   return $severeCasesByRequestedTime;
    }

    function hospitalBedsByRequestedTime($totalHospitalBeds,$severeCasesByRequestedTime){
        global $hospitalBedsByRequestedTime;

        $this->$hospitalBedsByRequestedTime=$totalHospitalBeds-$severeCasesByRequestedTime;
        return $hospitalBedsByRequestedTime;

    }

    //Challenge Three

   function casesForICUByRequestedTime($infectionsByRequestTime){
       global $casesForICUByRequestedTime;
         $this->$casesForICUByRequestedTime = $infectionsByRequestTime * 5/100;
          return $casesForICUByRequestedTime;
   }

   function casesForVentilatorsByRequestedTime($infectionsByRequestTime){
       global $casesForVentilatorsByRequestedTime;
       $this-> $casesForVentilatorsByRequestedTime= $infectionsByRequestTime * 2/100;
       return $casesForVentilatorsByRequestedTime;
   }

   function dollarsInFlight($infectionsByRequestTime,$avgDailyIncomeInUSD,$days,$avgDailyIncomePopulation){
       global $dollarsInFlight;
       $this->$dollarsInFlight= ($infectionsByRequestTime * $avgDailyIncomePopulation * $avgDailyIncomeInUSD)/$days;
      return $dollarsInFlight;
   }
}


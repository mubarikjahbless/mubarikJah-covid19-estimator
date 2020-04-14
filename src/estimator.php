

<?php

require ('challengeOne.php');


function covid19ImpactEstimator($data)
{
  //
  $challengeOne_impact= new  impact();
  $challengeOne_SevereImpact= new severeImpact();
 $reportedCase= $data->reportedCase;
 $requestedTime=$data->timeToElapse;
 $totalHospitalBeds= $data->totalHospitalBeds;
 $avgDailyIncomeInUSD= $data->avgDailyIncomeInUSD;
 $avgDailyIncomePopulation= $data->avgDailyIncomePopulation;
 $challengeOne_impact->impact_currentlyInfected($reportedCase,$requestedTime,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation);
 $challengeOne_SevereImpact->severe_currentlyInfected($reportedCase,$requestedTime,$totalHospitalBeds,$avgDailyIncomeInUSD,$avgDailyIncomePopulation);
 
  
  return $data;
}



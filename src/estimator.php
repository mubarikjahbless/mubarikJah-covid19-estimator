

<?php

require('challengesClass.php');



$challengeOne_impact = new  impact();
$challengeOne_SevereImpact = new severeImpact();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $reportedCase = covid19ImpactEstimator($_POST["reportedCase"]);
  $requestedTime = covid19ImpactEstimator($_POST["timeToElapse"]);
  $totalHospitalBeds = covid19ImpactEstimator($_POST["totalHospitalBeds"]);
  $avgDailyIncomeInUSD = covid19ImpactEstimator($_POST["avgDailyIncomeInUSD"]);
  $avgDailyIncomePopulation = covid19ImpactEstimator($_POST["avgDailyIncomePopulation"]);

  $challengeOne_impact->impact_currentlyInfected($reportedCase, $requestedTime, $totalHospitalBeds, $avgDailyIncomeInUSD, $avgDailyIncomePopulation);
  $challengeOne_SevereImpact->severe_currentlyInfected($reportedCase, $requestedTime, $totalHospitalBeds, $avgDailyIncomeInUSD, $avgDailyIncomePopulation);
}






function covid19ImpactEstimator($data)
{
  // $data = trim($data);
  // $data = stripslashes($data);
  // $data = htmlspecialchars($data);


  return $data;
}

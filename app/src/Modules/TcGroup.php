<?php
//
namespace App\Modules;
//
use App\Primitives\BigQueryConnection as Connection;
//
class TcGroup extends Connection{
    
  public function index(){

    $query="SELECT  TC_GROUP AS tcGroup, SUM(CAST(NET_AMOUNT AS FLOAT64)) AS subtotal, COUNT(DISTINCT(TC_SUBGROUP)) AS count 
    FROM `pit-analytics-2019.HOTEL.PAC_2018_OPERA` 
    GROUP BY  TC_GROUP
    ORDER BY TC_GROUP";

    return $this->bigquery->query($query);

  }

}
?>
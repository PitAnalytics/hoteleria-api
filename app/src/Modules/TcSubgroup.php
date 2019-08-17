<?php
//
namespace App\Modules;
//
use App\Primitives\BigQueryConnection as Connection;
//
class TcSubgroup extends Connection{
    
  public function get($tcGroup){

    $query="SELECT  TC_SUBGROUP AS tcSubgroup, SUM(CAST(NET_AMOUNT AS FLOAT64)) AS subtotal, COUNT(DISTINCT(TRX_CODE)) AS count FROM `pit-analytics-2019.HOTEL.PAC_2018_OPERA` 
    WHERE TC_GROUP = '$tcGroup'
    GROUP BY  TC_SUBGROUP
    ORDER BY TC_SUBGROUP";

    return $this->bigquery->query($query);

  }

}

?>
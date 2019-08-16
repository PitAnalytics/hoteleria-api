<?php
//
namespace App\Modules;
//
use App\Primitives\BigQueryConnection as Connection;
//
class TcSubgroup extends Connection{
    
  public function get($tcGroup){

    $query="SELECT  TC_SUBGROUP, SUM(CAST(NET_AMOUNT AS FLOAT64)) AS SUBTOTAL FROM
    (SELECT TC_GROUP,TC_SUBGROUP, TRX_CODE NET_AMOUNT, BILL_NO, BUSINESS_DATE FROM `pit-analytics-2019.HOTEL.PAC_2018_OPERA`)
    WHERE TC_GROUP = '$tcGroup' 
    GROUP BY  TC_SUBGROUP
    ORDER BY TC_SUBGROUP";

    return $this->bigquery->query($query);

  }

}
?>
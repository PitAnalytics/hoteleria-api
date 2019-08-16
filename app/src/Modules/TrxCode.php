<?php
//
namespace App\Modules;
//
use App\Primitives\BigQueryConnection as Connection;
//
class TrxCode extends Connection{
    
  public function get($trxCode){

    $query="SELECT  TRX_CODE AS trxCode, SUM(CAST(NET_AMOUNT AS FLOAT64)) AS subtotal FROM `pit-analytics-2019.HOTEL.PAC_2018_OPERA`
    WHERE TC_SUBGROUP ='$trxCode'
    GROUP BY  TRX_CODE
    ORDER BY TRX_CODE";

    return $this->bigquery->query($query);

  }

}
?>
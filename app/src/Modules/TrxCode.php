<?php
//
namespace App\Modules;
//
use App\Primitives\BigQueryConnection as Connection;
//
class TrxCode extends Connection{
    
  public function index($trxCode){

    $query="";

    return $this->bigquery->query($query);

  }

}
?>
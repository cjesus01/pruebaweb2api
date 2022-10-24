<?php
class APIView{

    public function response($data, $status){
        header("Content-Type: application/json");
        header("HTTP 1.1".$status."".$this->requestStatus($status));
        echo json_encode($data);
    }
    private function _requestStatus($code){
        $status = [
            200 => "OK",
            404 => "NOT FOUND",
            500 => "INTERNAL SERVER ERROR"
        ];
        if (isset($status[$code])){
            return $status[$code];
        }
        else{
            return $status[500];
        } 
    }
}
?>
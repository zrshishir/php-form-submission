<?php
require_once('app/controller/DatabaseConnection.php');
class Buyer {
    private $dbHandle;

    public function __construct(){
        $this->dbHandle = new DatabaseConnection();
    }

    public function index(){
        $sql = "SELECT * FROM buyers ORDER BY id";
        $result = $this->dbHandle->allDataQuery($sql);
        return $result;
    }

    public function search($data){
        if (isset($data['entry_by']) && isset($data['from_date']) && isset($data['from_date'])) {
            $query = "SELECT * FROM buyers WHERE entry_by = ? OR entry_at >= ? AND entry_at <= ?";
            $paramType = "iss";
            $paramValue = array(
                $data['entry_by'],
                $data['from_date'],
                $data['to_date']
            );

            $result = $this->dbHandle->searchQuery($query, $paramType, $paramValue);
            return $result;
        } elseif (isset($data['entry_by'])) {
            $query = "SELECT * FROM buyers WHERE entry_by = ? ";
            $paramType = "i";
            $paramValue = array(
                $data['entry_by']
            );

            $result = $this->dbHandle->searchQuery($query, $paramType, $paramValue);
            return $result;
        } else {
            $query = "SELECT * FROM buyers WHERE entry_at >= ? OR entry_at <= ?";
            $paramType = "ss";
            $paramValue = array(
                $data['from_date'],
                $data['to_date']
            );

            $result = $this->dbHandle->searchQuery($query, $paramType, $paramValue);
            return $result;
        }

    }

    public function create($data){
        $query = "INSERT INTO buyers (amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, hash_key, entry_at, entry_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $paramType = "isssssssissi";
        $salt = '$' . $data['buyer_email'] . '=$' . $data['amount'] . '$' . $data['city'];
        $paramValue = array(
            $data['amount'],
            $data['buyer'],
            $data['receipt_id'],
            $data['items'],
            $data['buyer_email'],
            $_SERVER['REMOTE_ADDR'],
            $data['note'],
            $data['city'],
            $data['phone'],
            crypt($data['recept_id'], $salt),
            date('Y-m-d'),
            $data['entry_by'],
        );
        
        $insertId = $this->dbHandle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
}
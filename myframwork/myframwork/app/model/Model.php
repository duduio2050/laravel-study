<?php

namespace app\model;
use mysqli;
class Model extends mysqli {

    function __construct(){
        parent::__construct(getenv('DB_HOST'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'), getenv('DB_DATABASE'));
        if ($this->connect_error) {
            exit;
        }
//        $this->host = getenv('DB_HOST');
//        $this->dbname = getenv('DB_DATABASE');
//        $this->user = getenv('DB_USERNAME');
//        $this->pw = getenv('DB_PASSWORD');
//
//        $this->dbconnet = new mysqli( $this->host , $this->user , $this->pw , $this->dbname );
//        if(mysqli_connect_errno()){
//            echo 'mysql error';
//        }
    }

    function queryString($query){
        return parent::query($query);
    }

    function fetch($res){
        if(is_string($res)) $res = $this->queryString($res);
        if($res) return $res->fetch_array();
    }

    function fetchRow($res){
        if(is_string($res)) $res = $this->queryString($res);
        if($res) return $res->fetch_row();
    }

    function rows($res){
        if(is_string($res)) $res = $this->query($res);
        return @$res->num_rows;
    }

    function last(){
        return @$this->insert_id;
    }


    function escape($data){
        $data = $this->stripslashes_deep($data);
        $data = $this->mysql_real_escape_string_deep($data);

        return $data;
    }

    function stripslashes_deep($var){
        $var = is_array($var)?array_map(array($this,'stripslashes_deep'), $var) :stripslashes($var);
        return $var;
    }

    function mysql_real_escape_string_deep($var){
        $var = is_array($var)?array_map(array($this,'mysql_real_escape_string_deep'), $var):$this->real_escape_string($var);
        return $var;
    }
}
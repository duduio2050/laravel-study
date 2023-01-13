<?php
namespace app\model;
class AlbumModel{

    protected $model;

    function __construct(Model $model){
//        $this->model->__construct();
        $this->model = $model;
    }

    public function AlbumList()
    {
        $result = [];
        $sql = 'SELECT CAST(created_at AS DATE) AS created_at, Album_Name, Artist_Name, seqNo FROM Album order by seqNo desc';
        $res = $this->model->queryString($sql);
        while ($row = $this->model->fetch($res)){
            $result[] = $row;
        }
        return $result;

    }

    public function read($seqno){
        $result = [];
        $sql = 'SELECT CAST(created_at AS DATE) AS created_at, Album_Name, Artist_Name, seqNo FROM Album WHERE seqNo = ' . $seqno;
        $res = $this->model->queryString($sql);
        $row = $this->model->fetchRow($res);
        return $row;
    }

    public function insert($request){
        $sql = "INSERT INTO Album(Album_Name, Artist_Name, created_at) VALUES('".$request['Album_Name']."', '".$request['Artist_Name']."', '".date('Y-m-d H:i:s')."')";
        $res = $this->model->queryString($sql);
        return $res;
    }

    public function update($seqno, $request){
        $sql = "UPDATE Album SET Album_Name = '". $request['Album_Name'] ."', Artist_Name = '". $request['Artist_Name'] ."' WHERE seqNo = " . $seqno;
        $res = $this->model->queryString($sql);
        return $res;
    }

    public function delete($seqno){
        $sql = "DELETE FROM Album WHERE seqNo = '$seqno'";
        $res = $this->model->queryString($sql);
        return $res;
    }
}
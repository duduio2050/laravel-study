<?php

namespace app\controllers;
use app\common\Library;
use app\model\AlbumModel;
use app\model\Model;

class HomeController{

    public function __construct()
    {
//        global $Library;
//        $this->library = $Library;
        $this->request = $_REQUEST;
    }

    public function list()
    {
        $album_model = new AlbumModel(new Model());
        $result = $album_model->AlbumList();
        require_once __DIR__ . '../../../view/list.php';
    }

    public function read($seqno)
    {
        $model = new AlbumModel(new Model());
        $Album = $model->read($seqno);
        require_once __DIR__ . '../../../view/read.php';
    }

    public function create()
    {
        $model = new AlbumModel(new Model());
        $sql = 'SELECT * FROM Album';
        require_once __DIR__ . '../../../view/create.php';
    }

    public function store()
    {
        $model = new AlbumModel(new Model());
        $request = Library::validate($_REQUEST);

        if($request['Album_Name'] == '' || empty($request['Album_Name'])){
            $_SESSION['flash_message'] = '앨범명이 존재하지 않습니다.';
            Library::Redirect($_SERVER['HTTP_REFERER'], false);
        }

        if($request['Artist_Name'] == '' || empty($request['Artist_Name'])){
            $_SESSION['flash_message'] = '아스트명이 존재하지 않습니다.';
            Library::Redirect($_SERVER['HTTP_REFERER'], false);
        }

        $model->insert($request);
        Library::Redirect('/Album/list', false);
    }

    public function edit($seqno)
    {
        $model = new AlbumModel(new Model());
        // 순서: 앨범 생성일, 앨범명, 아티스트명, seqno
        $Album = $model->read($seqno);
        require_once __DIR__ . '../../../view/edit.php';
    }

    public function update($seqno)
    {
        $model = new AlbumModel(new Model());
        $request = Library::validate($_REQUEST);

        if($request['Album_Name'] == '' || empty($request['Album_Name'])){
            $_SESSION['flash_message'] = '앨범명이 존재하지 않습니다.';
            Library::Redirect($_SERVER['HTTP_REFERER'], false);
        }

        if($request['Artist_Name'] == '' || empty($request['Artist_Name'])){
            $_SESSION['flash_message'] = '아스트명이 존재하지 않습니다.';
            Library::Redirect($_SERVER['HTTP_REFERER'], false);
        }

        $model->update($seqno, $request);
        Library::Redirect('/Album/read/' . $seqno, false);
    }

    public function delete($seqno)
    {
        $model = new AlbumModel(new Model());
        $model->delete($seqno);

        Library::Redirect('/Album/list', false);
    }
}
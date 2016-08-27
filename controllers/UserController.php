<?php
    require_once ROOT.'/models/UserModel.php';
class UserController
{
    public function actionIndex()
    {
        echo 'Функционал';
    }

    public function actionLoad()
    {
        echo 'Загрузка файла';
    }

    public function actionUserlist()
    {
        echo 'Список пользователей'."<br/>";

        $list = new UserModel();
        $list->getUsers();
    }

    public function actionFilelist()
    {
        echo 'Список файлов';
    }
}
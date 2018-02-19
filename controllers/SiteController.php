<?php

class SiteController
{
    
    /**
     * Метод формироавния главной страницы сайта
     * 
     * @return boolean
     */
    public function actionIndex()
    {
        //Формируем массивы-данных таблиц для передачи в выпадающие списки представления:
        $callcentersList = Callcenters::getList();
        $desksList = Desks::getList();
        $teamsList = Teams::getList();
        $usersList = Users::getList();
        
//                echo 'Debug calllist: <br /><pre>';
//    print_r($callcentersList);
//    echo '<pre>';
        
        require_once(ROOT . '/views/site/index.php');

        return true;
    }
    
    /**
     * Метод получения данных для связанного списка Desk
     * 
     * @param integer $id_callcenter идентификатор выбранного имени выпадающего
     * списка  Call center
     * 
     * @return array $resData - массив с результатами выборки данных из таблицы
     */
    public function actionCallcenter($id_callcenter){
        
        //Получаем массив данных с результатами выборки данных из таблицы
        $resData = Desks::getNameAndIdByCallcenterId($id_callcenter);

        echo json_encode($resData);
        return true;
        
    }
    
    
    /**
     * Метод получения данных для связанного списка Sales
     * 
     * @param integer $id_team идентификатор выбранного имени выпадающего
     * списка  Team
     * 
     * @return array $resData - массив с результатами выборки данных из таблицы
     */
    public function actionTeam($id_team){
        
        //Получаем массив данных с результатами выборки данных из таблицы
        $resData = Users::getNameAndIdByCallcenterId($id_team);

        echo json_encode($resData);
        return true;
    }

}

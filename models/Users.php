<?php

/* 
 * Модель для работы с таблицей cc_users
 * 
 */

class Users
{
    /**
     * Метод получения массива записей из таблицы cc_users
     * 
     * @return array
     */
    public static function getList () {
        
        //Соедиение с БД:
        $db = Db::getConnection();
        
        //Формируем запрос в БД
        $sql = "SELECT * FROM `cc_users`";
        
        $rs = $db->query($sql);
        //Создаем ассоциативный массив из выбранных данных:
        while($row = $rs->fetch(PDO::FETCH_ASSOC)){
            $id = $row['user_id'];
            $list[$id] = $row['stage_name']; 
        };

        return $list;
    }
   
    /**
     * Метод выборки данных из таблицы cc_users по заданному 
     * идентификатору team_id
     * 
     * @param integer $id_team идентификатор выбранного имени выпадающего
     * списка  Team
     * 
     * @return array $resData - массив с результатами выборки данных из таблицы
     */
    public static function getNameAndIdByCallcenterId($id_team){
        
        //Соединение с БД:
        $db = Db::getConnection();
        
        //Формируем подготовленный запрос:
        $sql = "SELECT stage_name, user_id "
                . "FROM `cc_users` "
                . "WHERE team_id = :id_team LIMIT 1";        

        $rs = $db->prepare($sql);
        //Связываем переменные
        $rs->bindParam(':id_team', $id_team, PDO::PARAM_INT);
        $rs->execute();
        
        while($result = $rs->fetch()){
            
            $resData['user_id'] = $result['user_id'];
            $resData['stage_name'] = $result['stage_name'];
        }
        
        return $resData;
    }
}
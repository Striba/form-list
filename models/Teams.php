<?php

/* 
 * Модель для работы с таблицей cc_teams
 * 
 */

class Teams
{
    /**
     * Метод получения массива записей из таблицы cc_teams
     * 
     * @return array
     */
    public static function getList () {
        
        //Соедиение с БД:
        $db = Db::getConnection();
        
        //Формируем запрос в БД
        $sql = "SELECT * FROM `cc_teams`";
        
        $rs = $db->query($sql);

        while($row = $rs->fetch(PDO::FETCH_ASSOC)){
        $id = $row['id_desk'];
        $list[$id] = $row['team_name']; 
        };

        return $list;
    }
   
}
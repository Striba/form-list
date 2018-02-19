<?php

/* 
 * Модель для работы с таблицей cc_callcenters
 * 
 */

class Callcenters
{

    /**
     * Метод получения массива записей из таблицы cc_callcenters
     * 
     * @return array
     */
    public static function getList () {
        
        //Соедиение с БД:
        $db = Db::getConnection();
        
        //Формируем запрос в БД
        $sql = "SELECT * FROM `cc_callcenters`";
        
        $rs = $db->query($sql);
        //Создаем массив из выбранных данных:
        while($row = $rs->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id'];
            $list[$id] = $row['name']; 
        };
        
        return $list;
   
    }
   
}
<?php

/* 
 * Модель для работы с таблицей cc_desks
 * 
 */

class Desks
{

    /**
     * Метод получения массива записей из таблицы cc_desks
     * 
     * @return array
     */
    public static function getList () {
        
        //Соедиение с БД:
        $db = Db::getConnection();
        
        //Формируем запрос в БД
        $sql = "SELECT * FROM `cc_desks`";
        
        $rs = $db->query($sql);
        //Создаем ассоциативный массив из выбранных данных:
        while($row = $rs->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id'];
            $list[$id] = $row['desk_name']; 
        };

        return $list;
    
    }
    
    /**
     * Метод выборки данных из таблицы cc_desks по заданному 
     * идентификатору id_callcenter
     * 
     * @param integer $id_callcenter идентификатор выбранного имени выпадающего
     * списка  Call center
     * 
     * @return array $resData - массив с результатами выборки данных из таблицы
     */
    public static function getNameAndIdByCallcenterId($id_callcenter){
        
        //Соединение с БД:
        $db = Db::getConnection();
        
        //Формируем подготовленный запрос:
        $sql = "SELECT desk_name, id "
                . "FROM `cc_desks` "
                . "WHERE id_callcenter = :id_callcenter LIMIT 1";        
        
        $rs = $db->prepare($sql);
        //Связываем переменные
        $rs->bindParam(':id_callcenter', $id_callcenter, PDO::PARAM_INT);
        $rs->execute();
        
        while($result = $rs->fetch()){
            
            $resData['id'] = $result['id'];
            $resData['desk_name'] = $result['desk_name'];
        }
        
        return $resData;
    }
   
}
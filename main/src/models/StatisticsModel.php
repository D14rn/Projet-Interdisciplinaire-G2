<?php
require_once __DIR__ . "/../core/model.php";

class StatisticsModel extends Model {
    public static function getTotalReservations() {
        $sql = 'SELECT COUNT(*) as reservation_total
                FROM reservation';
        $response = self::executeRequest($sql);
        if ($response->rowCount() !== 1) {
            return false;
        }
        return $response->fetch()["reservation_total"];
    }

    public static function getMostReservedBike() {
        $sql = 'SELECT bike_id, COUNT(*)
                FROM reservation
                GROUP BY bike_id
                ORDER BY COUNT(*) DESC
                LIMIT 1';
        $response = self::executeRequest($sql);
        if ($response->rowCount() !== 1) {
            return false;
        }
        return $response->fetch()["bike_id"];
    }

    /*public static function getMostReservedBikeType() {
        $sql = 'SELECT type_nom
                FROM type
                INNER JOIN
                reservation
                ON (SELECT bike_type
                    FROM bike
                    INNER JOIN)';
    }*/
}

<?php 

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehiculeFactory {
    public static function create ($type, $costPerKm, $fuelType) {
        switch ($type) {
            case 'bicycle':
                return new Bicycle($costPerKm, $fuelType);
            case 'truck':
                return new Truck($costPerKm, $fuelType);
            case 'car':
                return new Car($costPerKm, $fuelType);
            default:
                throw new \Exception('Invalid vehicule type');
        }
    }

    public static function choose ($distance, $poids) {
        if($poids > 200) {
            return new Truck(2, 'diesel');
        }
        if ($distance < 20 && $poids < 20) {
            return new Bicycle(0.1, 'jambes');
        }
        return new Car(1, 'essence');
    }
}
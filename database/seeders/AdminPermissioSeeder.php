<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class AdminPermissioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermission = [
           ['create_hotel' => 1],
           ['hotel_list' => 2],
           ['hotel_delete' => 3],
           ['edit_hotel' => 4],
           ['create_hotel_room' => 5],
           ['room_list' => 6],
           ['edit_room' => 7],
           ['delete_room' => 8],
           ['hotel_rating_list' => 9],
           ['create_hotel_rating' => 10],
           ['edit_hotel_rating' => 11],
           ['all_hotel_booking_list' => 12],
           ['create_hotel_booking' => 13],
           ['edit_hotel_booking' => 14],
           ['delete_hotel_booking' => 15],
           ['booking_status' => 16],
           ['see_all_restaurant' => 17],
           ['create_restaurant' => 18],
           ['edit_restaurant' => 19],
           ['delete_restaurant' => 20],
           ['all_restaurant_menus' => 21],
           ['create_restaurant_menu' => 22],
           ['edit_restaurant_menu' => 23],
           ['delete_restaurant_menu' => 24],
           ['all_restaurant_star' => 25],
           ['create_restaurant_star' => 26],
           ['edit_restaurant_star' => 27],

        ];

        
        foreach ($allPermission as $permission) {
            $permissionName = key($permission);
            $permissionValue = current($permission);
            Permission::create([
                'permission_name' => $permissionName,
                'value' => $permissionValue,
                'user_id' => 1,
            ]);
        }
    }
}

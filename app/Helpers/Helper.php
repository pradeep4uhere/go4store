<?php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
use App\Menu;

class Helper {
	
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function getNotificationMessage() {
        return "Delivery timelines may get affected as per Government guidelines fro your Zone, OR you can check with your seller for more in details.";
    }




    /**
     * @return array
     */
    public static function getAllSideBarMenu() {
    	$menuList = Menu::with('childMenu')->where('parent_id','=',0)->get()->toArray(); 
        return $menuList;
    }
}
<?php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
use App\Menu;
use Auth;

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

     /**
     * 
     * @return string
     */
    public static function getStar(){
        $starCount = 4;
        $str="<div class='star_content clearfix'>";
        for($i=1;$i<$starCount;$i++){
            $str.="<i class='fa fa-star' style='color:gold'></i>";
        }
        $str.="<i class='fa fa-star'></i>";
        $str.="<i class='fa fa-star'></i>";
        
        $str.="</div>";
        return $str;
    }




     /**
     * @return array
     */
    public static function getCartItem($type='count') {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $cartCollection = \Cart::session(Auth::user()->id);
            $cartCollections = \Cart::getContent();
            $cartItem = $cartCollections->toArray();
            $item = $cartCollections->count();
            $total =\Cart::session($userId)->getTotal();
        if($type=='count'){ $itemResult = $item;}
        if($type=='total'){ $itemResult = number_format($total,2);}
        
        }else{
            $itemResult = 0;    
        }
        return $itemResult;
    }


    
    public static function getSingleSellerCheckoutNotificationMessage() {
        if(!Self::isSingleSellerCheckout()){
            return "<div class='notificationError'><strong>Multiple Seller Item Error !</strong>, You have item in cart with Different Seller, Please checkout with only single seller at a time.</div>";
        }
    }


    public static function isSingleSellerCheckout(){
        $seller = [];
        $isSingle = false;
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $cartCollection = \Cart::session(Auth::user()->id);
            $cartCollections = \Cart::getContent();
            $cartItem = $cartCollections->toArray();
            $item = $cartCollections->count();
            if($item>0){
                foreach($cartItem as $itemData){
                    $seller[$itemData['attributes']['seller_id']] = $itemData['attributes']['seller_id'];
                }
                if(count($seller)==1){
                    $isSingle = true;
                }
            }

        }
        return $isSingle;
    }



    public static function getDateFormate($from_date){
        return \Carbon\Carbon::parse($from_date)->format('d M Y');
    }
}
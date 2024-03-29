<?php

namespace App\Http\Controllers;
date_default_timezone_set('Asia/Kolkata');

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use App\UserProduct;
use App\Seller;
use App\Location;
use App\Pin;
use App\Cart;
use App\Testimonial;
use App\StoreType;
use App\Payment;
use Cookie;
use Config;


class HomeController extends Master
{

    public $pincode = '';

	function notification(Request $request){
		

	}

    public function sellersearch(Request $request){
        $location = explode(',', $request->get('s'));
        if($location[0]=='Seller'){
            $pincode = end($location);
        }else{
            $pincode = $location[2];
        }
        $sellername = $request->get('sellername');
        //return \Redirect::route('seller', ['pincode'=>trim($pincode),'longlif'=>$sellername]);
        return redirect('/seller/'.trim($pincode).'/'.$sellername);

    }

    public function getAddressListByTypeOnSearch(Request $request){
        $result = [];
        $searchTerm = $request->get('keyword');


        $sellerList = Seller::query()
               ->where('status',   '=', "1") 
               ->where('business_name',   'LIKE', "%{$searchTerm}%") 
               ->orWhere('businessusername', 'LIKE', "%{$searchTerm}%") 
               ->orWhere('address_1',  'LIKE', "%{$searchTerm}%") 
               ->orWhere('pincode',    'LIKE', "%{$searchTerm}%") 
               ->get();


        $stateList = Location::query()
               ->where('status',   '=', "1") 
               ->where('location',   'LIKE', "%{$searchTerm}%") 
               ->orWhere('district', 'LIKE', "%{$searchTerm}%") 
               ->orWhere('pincode',  'LIKE', "%{$searchTerm}%") 
               ->orWhere('state',    'LIKE', "%{$searchTerm}%") 
               ->get();
        //$stateList = Location::where('status','=',1)->get();
        $str = '<ul id="check-list-box" class="list-group checked-list-box">';
        

        foreach($sellerList as $itemSeller){
            $str.= '<li class="list-group-item sellerList listItemChoose" onclick="getValue(this)" style="pointer:cursor">Seller,'.$itemSeller['businessusername'].', '.$itemSeller['address_1'].', '.$itemSeller['pincode'].'</li>';
        }
        foreach($stateList as $item){
            $str.= '<li class="list-group-item listItemChoose" onclick="getValue(this)">'.$item['location'].', '.$item['district'].', '.$item['pincode'].'</li>';
        }

        if(empty($sellerList) && empty($stateList) ){
            $str.= '<li class="list-group-item">Please Enter Seller Information OR Your Address</li>';
        }
        $str.= "</ul>";
        return $str;
    }


    /*Payment Invoice for Bhart Trader*/
    public function bharattrader(Request $request){
        return view(Master::loadFrontTheme('firezyshop.PaymentLink.index'),array(''));
    }

    public function createPaymentOrder($requestData){
            $amount   = $requestData['amount'];
            $email    = $requestData['email'];
            $mobile   = $requestData['mobile'];
            $fullname = $requestData['fullname'];
            $OrderId  = $requestData['OrderId'];
            $Mode     = $requestData['mode'];
            $fullname = $requestData['fullname'];
            $AgentId = $requestData['AgentId'];
            $net_amount_debit = '0.00';

            $payment = new Payment();
            $payment->order_id = $OrderId;
            $payment->merchent_id = $AgentId;
            $payment->mode = $Mode;
            $payment->status = 'Pending';
            $payment->unmappedstatus = '';
            $payment->txnid = '';
            $payment->amount = $amount;
            $payment->payment_date = $this->getCreatedDate();
            $payment->firstname = $fullname;
            $payment->email =$email;
            $payment->phone = $mobile;
            $payment->bank_ref_num = '';
            $payment->bankcode = "BANKIT";
            $payment->error = "";
            $payment->error_Message = "";
            $payment->payuMoneyId = "";
            $payment->payment_details = json_encode($requestData);
            $payment->net_amount_debit = ($net_amount_debit!='')?$net_amount_debit:'0.00';
            $payment->created_at = $this->getCreatedDate();
            
            if($payment->save()){
                return true;
            }else{
                return false;
            }
            //ordergenerate
    }

    public function updatePaymentStatus($requestData){
            $net_amount_debit = $requestData['loadAmount'];
            $AgentId          = $requestData['AgentId'];
            $Status           = $requestData['Status'];
            $Message          = $requestData['Message'];
            $OrderId          = $requestData['OrderId'];
            $Amount           = $requestData['Amount'];
            $Mode             = $requestData['Mode'];
            $BankitTxnId      = $requestData['BankitTxnId'];
            $Mode             = $requestData['Mode'];

            $payment = Payment::where('order_id','=',$OrderId)->first();
            $payment->id =  $payment->id;
            $payment->merchent_id = $AgentId;
            $payment->mode = $Mode;
            $payment->status = $Status;
            $payment->unmappedstatus = $Status;
            $payment->txnid = $BankitTxnId;
            $payment->amount = $Amount;
            $payment->payment_date = $this->getCreatedDate();
            $payment->bank_ref_num = $BankitTxnId;
            $payment->error = "";
            $payment->error_Message =$Message;
            $payment->payuMoneyId = "";
            $payment->payment_details = json_encode($requestData);
            $payment->net_amount_debit = ($net_amount_debit!='')?$net_amount_debit:'0.00';
            $payment->created_at = $this->getCreatedDate();
            if($payment->save()){
                return true;
            }else{
                return false;
            }
            //dd($payment);
    }

   /*Payment Invoice for Bhart Trader*/
    public function orderconfirm(Request $request){
        //dd($request->all());
        if($request->get('Status')=='Success'){
            $Status = $request->get('Status');
            $Message = $request->get('Message');
            $OrderId = $request->get('OrderId');
            $Amount = $request->get('Amount');
            $Mode = $request->get('Mode');
            $BankitTxnId = $request->get('BankitTxnId');
            $SecureHash = $request->get('SecureHash');
            $loadAmount = $request->get('loadAmount');
            $requestData = $request->all();
            $requestData['loadAmount'] = $loadAmount;
            $requestData['BankitTxnId'] = $BankitTxnId;
            $requestData['Amount'] = $Amount;
            $this->updatePaymentStatus($requestData);
        }
        if($request->get('Status')=='Failure'){
            $Status = $request->get('Status');
            $Message = $request->get('Message');
            $OrderId = $request->get('OrderId');
            $Amount = $request->get('Amount');
            $Mode = $request->get('Mode');
            $BankitTxnId = $request->get('BankitTxnId');
            $SecureHash = $request->get('SecureHash');
            $loadAmount = $request->get('loadAmount');
            $requestData = $request->all();
            $requestData['loadAmount'] = $loadAmount;
            $requestData['BankitTxnId'] = $BankitTxnId;
            $requestData['Amount'] = $Amount;
            $this->updatePaymentStatus($requestData);
        }
        return view(Master::loadFrontTheme('firezyshop.PaymentLink.confirm'),array(
                'Status'=>$Status,
                'OrderId'=>$OrderId,
                'Amount'=>$Amount,
                'TxnId'=>$BankitTxnId
        ));
    }

    public function invoicepayment(Request $request){
        //CC/DC/NB/PPI/UPI
         $BANKIT_URL=env('BANKIT_URL'); 
        //$BANKIT_URL='https://portal.bankit.in:9090/BankitPG/pay';
        $SECURE_KEY=env('SECURE_KEY');
        $AGENT_ID=env('AGENT_ID');

        $amount = $request->get('amount');
        
        if($amount>25000){
            $BANKIT_URL=env('BANKIT_URL');
        }else{
            $BANKIT_URL=env('BANKIT_URL');  
        }
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $fullname = $request->get('fullname');
        $mdoe   = $request->get('mode');
        $requestData = $request->all();

        $AgentId    = $AGENT_ID;
        $UserInfo   = $fullname;
        $Amount     = $amount;
        $Mode       = $mdoe;
        $EmailId    = $email;
        $mobile     = $mobile;
        $callback   = 'https://www.go4shop.online/orderconfirm';
        $OrderId    = 'ORD'.date('Ymd').time();
        $hasStr = $AgentId.'|'.$Amount.'|'.$Mode.'|'.$EmailId.'|'.$mobile.'|'.$OrderId.'|'.$callback;
        $SecureHash = $hasStr;
        $secureKey = $SECURE_KEY;
        $hashKey  = hash_hmac("sha1", $hasStr, $secureKey);
        $BASE_URL = $BANKIT_URL;
        $requestData['OrderId']=$OrderId;
        $requestData['mode']=$Mode;
        $requestData['AgentId']=$AgentId;
        

        $this->createPaymentOrder($requestData);
        
        return view(Master::loadFrontTheme('firezyshop.PaymentLink.ordergenerate'),array(
            'AgentId'   =>  $AgentId,
            'UserInfo'  =>  $UserInfo,
            'Amount'    =>  $Amount,
            'Mode'      =>  $Mode,
            'EmailId'   =>  $EmailId,
            'mobile'    =>  $mobile,
            'callback'  =>  $callback,
            'OrderId'   => $OrderId,
            'hashKey'   =>  $hashKey,
            'BASE_URL'  => $BASE_URL
        ));
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $pincode = Cookie::get('Pincode');

        $this->getCartItemList();
    }
	

    
    function allSellerTypeInPincodeArea(Request $request,$pincode,$name,$id){
        $metaTags = array();
        //Set Meta Section Data
        $nameStr = ucwords(str_replace("-"," ",$name));
        $storeTypeArr = $this->getStoreTypeIdByName($nameStr);
        $storeTypeId = $storeTypeArr->id;
        $pincode = $this->getPinCode();
    
        $metaTitle = "Go4Shop- Your Own Online Shop";
        $metaDesc = 'Go4shop offer you to sell your own products online. The best online local near you store in India. Best way buy or sell your products here.';
        $metaKeywords = 'online grocery,vegetable store, Furniture shops, online local seller in Noida, Greater Noida, delhi, buy groceries, vegitables and many more from local shop';
        $pageImage    = self::getLogo();
        $pageUrl      = self::getURL();
        $section      = 'Buy and Sell';
        $category     = 'Online Supermarket';
        $tag          = 'Online, Supermarket,Seller, Buyer';
        $article      = 'Near Online Supermarket';

        $metaTags['title']        =$metaTitle;
        $metaTags['description']  =$metaDesc;
        $metaTags['keywords']     =$metaKeywords;
        $metaTags['pageimage']    =$pageImage;
        $metaTags['pageurl']      =$pageUrl;
        $metaTags['section']      =$section;
        $metaTags['category']     =$category;
        $metaTags['tag']          =$tag;
        $metaTags['article']      =$article;
        $metaTags['publishedTime']='';
        $metaTags['modifiedTime'] ='';
        $metaTags['twittersite']  ='';
        $metaTags['urlimage']     =$pageImage;
        $metaTags['url']          =$pageUrl.'/user/register';
        $metaTags['sitename']     =self::getAppName();
        
        //Get All Store Type Into Zipcode Location
        $storeTypeArr = StoreType::where('status','=','1')->get()->toArray();
// dd($storeTypeArr);
        //Get All Seller List

        if($storeTypeId>0){
            $seller = Seller::where('status','=',1)
            ->where('store_type_id','=',$id)
            ->with('StoreType')
            ->with('SellerImage')
            ->paginate(Master::getPageItemCount());
        }else{
            $seller = Seller::where('status','=',1)
            ->where('pincode','=',$pincode6)
            ->with('StoreType')
            ->with('SellerImage')
            ->paginate(Master::getPageItemCount());
        }

        //Feature Sellers
        $featureSeller = Seller::where('status','=',1)->with('StoreType')->with('SellerImage')->paginate(Master::getPageItemCount());

        return view(Master::loadFrontTheme('firezyshop.LocalSeller.index'),array(
            'metaTags'=>$metaTags,
            'seller'=>$seller,
            'featureSeller'=>$featureSeller,
            'storeTypeArr'=>$storeTypeArr,
            'perPageItem'=>Master::getPageItemCount(),
            'pincode'=>$pincode,
            'storeType'=>$name
        ));
  }


    function savepincode(Request $request){
        $pincode = $request->get('pincode');
        if($pincode!=''){
             \Session::put('pincode', $pincode);
             $minutes = 60*24*30;
             Cookie::make('Pincode', $pincode, $minutes);
             Config::set('global.PINCODE', $pincode);
        }
       
       return redirect()->back();
    }
	
	
	private function getCartItemList(){
		$cartItem=array();
        //Get All the Cart List
        $sessionId=session()->get('session_id');
//		dd($sessionId);
		$cartId="";
		if($cartId!=''){
			$cartObj=Cart::find($cartId)->with('CartItem')->first();
		}else{
			$cartObj=Cart::where('session_id','=',$sessionId)->with('CartItem')->first();
		}
		
		
        if(!empty($cartObj)){
            foreach($cartObj->CartItem as $item){
                $cartItem[]= CartItem::with(['UserProduct','Seller'])->find($item['id']);
            }
			session(['cart_id' => $cartObj->id]);
        }
		session(['countItem' => count($cartItem)]);
		return $cartItem;
	}



	function allSeller(Request $request,$pincode){
		 $metaTags = array();
		 //Set Meta Section Data
         $pincode = $this->getPinCode();
		
        $metaTitle = "Go4Shop- Your Own Online Shop";
        $metaDesc = 'Go4shop offer you to sell your own products online. The best online local near you store in India. Best way buy or sell your products here.';
        $metaKeywords = 'online grocery,vegetable store, Furniture shops, online local seller in Noida, Greater Noida, delhi, buy groceries, vegitables and many more from local shop';
        $pageImage = self::getLogo();
        $pageUrl = self::getURL();
        $section      = 'Buy and Sell';
        $category     = 'Online Supermarket';
        $tag          = 'Online, Supermarket,Seller, Buyer';
        $article      = 'Near Online Supermarket';

        $metaTags['title']        =$metaTitle;
        $metaTags['description']  =$metaDesc;
        $metaTags['keywords']     =$metaKeywords;
        $metaTags['pageimage']    =$pageImage;
        $metaTags['pageurl']      =$pageUrl;
        $metaTags['section']      =$section;
        $metaTags['category']     =$category;
        $metaTags['tag']          =$tag;
        $metaTags['article']      =$article;
        $metaTags['publishedTime']='';
        $metaTags['modifiedTime'] ='';
        $metaTags['twittersite']  ='';
        $metaTags['urlimage']     =$pageImage;
        $metaTags['url']          =$pageUrl.'/user/register';
        $metaTags['sitename']     =self::getAppName();
        
        //Get All Store Type Into Zipcode Location
        $storeTypeArr = StoreType::where('status','=','1')->get()->toArray();

        //Get All Seller List

        $seller = Seller::where('status','=',1)->with('StoreType')->with('SellerImage')->paginate(Master::getPageItemCount());
		return view(Master::loadFrontTheme('firezyshop.LocalSeller.index'),array(
            'metaTags'=>$metaTags,
            'seller'=>$seller,
            'featureSeller'=>$seller,
            'storeTypeArr'=>$storeTypeArr,
            'perPageItem'=>Master::getPageItemCount(),
            'pincode'=>$pincode
        ));
	}


	function cartList(Request $request){
		$metaTags = array();
		 //Set Meta Section Data
        $metaTitle = "Go4Shop- Your Own Online Shop";
        $metaDesc = 'Go4shop offer you to sell your own products online. The best online local near you store in India. Best way buy or sell your products here.';
        $metaKeywords = 'online grocery,vegetable store, Furniture shops, online local seller in Noida, Greater Noida, delhi, buy groceries, vegitables and many more from local shop';
        $pageImage = self::getLogo();
        $pageUrl = self::getURL();
        $section      = 'Buy and Sell';
        $category     = 'Online Supermarket';
        $tag          = 'Online, Supermarket,Seller, Buyer';
        $article      = 'Near Online Supermarket';

        $metaTags['title']        =$metaTitle;
        $metaTags['description']  =$metaDesc;
        $metaTags['keywords']     =$metaKeywords;
        $metaTags['pageimage']    =$pageImage;
        $metaTags['pageurl']      =$pageUrl;
        $metaTags['section']      =$section;
        $metaTags['category']     =$category;
        $metaTags['tag']          =$tag;
        $metaTags['article']      =$article;
        $metaTags['publishedTime']='';
        $metaTags['modifiedTime']='';
        $metaTags['twittersite']  ='';
        $metaTags['urlimage']     =$pageImage;
        $metaTags['url']          =$pageUrl.'/user/register';
        $metaTags['sitename']     =self::getAppName();
		return view(Master::loadFrontTheme('firezyshop.Cart.index'),array('metaTags'=>$metaTags));
	}

	

	
	function CheckOutInitPage(Request $request){
		 $metaTags = array();
		 //Set Meta Section Data
		
        $metaTitle = "Go4Shop- Your Own Online Shop";
        $metaDesc = 'Go4shop offer you to sell your own products online. The best online local near you store in India. Best way buy or sell your products here.';
        $metaKeywords = 'online grocery,vegetable store, Furniture shops, online local seller in Noida, Greater Noida, delhi, buy groceries, vegitables and many more from local shop';
        $pageImage 	  = self::getLogo();
        $pageUrl 	  = self::getURL();
        $section      = 'Buy and Sell';
        $category     = 'Online Supermarket';
        $tag          = 'Online, Supermarket,Seller, Buyer';
        $article      = 'Near Online Supermarket';

        $metaTags['title']        =$metaTitle;
        $metaTags['description']  =$metaDesc;
        $metaTags['keywords']     =$metaKeywords;
        $metaTags['pageimage']    =$pageImage;
        $metaTags['pageurl']      =$pageUrl;
        $metaTags['section']      =$section;
        $metaTags['category']     =$category;
        $metaTags['tag']          =$tag;
        $metaTags['article']      =$article;
        $metaTags['publishedTime']='';
        $metaTags['modifiedTime']='';
        $metaTags['twittersite']  ='';
        $metaTags['urlimage']     =$pageImage;
        $metaTags['url']          =$pageUrl.'/user/register';
        $metaTags['sitename']     =self::getAppName();
		  return view(Master::loadFrontTheme('firezyshop.CheckOut.index'),array('metaTags'=>$metaTags));
	}

	



	function sellerView(Request $request,$pincode,$sellerName){
		 $metaTags = array();
		 //Set Meta Section Data
		
        $metaTitle = "Go4Shop- Your Own Online Shop";
        $metaDesc = 'Go4shop offer you to sell your own products online. The best online local near you store in India. Best way buy or sell your products here.';
        $metaKeywords = 'online grocery,vegetable store, Furniture shops, online local seller in Noida, Greater Noida, delhi, buy groceries, vegitables and many more from local shop';
        $pageImage = self::getLogo();
        $pageUrl = self::getURL();
        $section      = 'Buy and Sell';
        $category     = 'Online Supermarket';
        $tag          = 'Online, Supermarket,Seller, Buyer';
        $article      = 'Near Online Supermarket';

        $metaTags['title']        =$metaTitle;
        $metaTags['description']  =$metaDesc;
        $metaTags['keywords']     =$metaKeywords;
        $metaTags['pageimage']    =$pageImage;
        $metaTags['pageurl']      =$pageUrl;
        $metaTags['section']      =$section;
        $metaTags['category']     =$category;
        $metaTags['tag']          =$tag;
        $metaTags['article']      =$article;
        $metaTags['publishedTime']='';
        $metaTags['modifiedTime']='';
        $metaTags['twittersite']  ='';
        $metaTags['urlimage']     =$pageImage;
        $metaTags['url']          =$pageUrl.'/user/register';
        $metaTags['sitename']     =self::getAppName();
	    return view(Master::loadFrontTheme('firezyshop.LocalSeller.ProductList'),array('metaTags'=>$metaTags));
	}



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //dd(Config::get('global.PINCODE'));
        $pincode = $this->getPinCode();
        $addressListJson = $this->getAddressList();
      	//$this->sendWhatsappMessage('paymentConfirmation',6);
    	//$this->sendWhatsappMessage('orderConfirmation',6);
    	//$this->sendWhatsappMessage('orderRecivedSeller',6);
    	//die;
    	$metaTags = self::getMetaTags();

    	//Store Type List
    	$storeType = new \App\StoreType();
		$storeTypeArrList=$storeType->getAllActiveStoreType();



		$this->saveZipcode();
//         if(Auth::check()){
//            return $this->redirect('profile');
//         }else{
//             return view(Master::loadFrontTheme('home.index'));
//         }
		//Get All Category and Sub Category List
		
		$catObj = new \App\Category();
		$catArr=$catObj->getAllCategory();
		//dd($catArr);
		foreach($catArr as $obj){
			//$catJson[]=$obj;
		}
		//Get All Cities
		$city = new \App\City();
		$cityArrObj=$city->getAllCity();
		foreach($cityArrObj as $obj){
			$cityArr[]=$obj;
		}
		
		//Get All Cities
		$locArrObj=new Location();
		$locArr =$locArrObj->getAllLocation();
		foreach($locArr as $obj){
			$catJson[]=$obj;
		}
		//Get All Seller List
		$seller = Seller::where('status','=',1)->with('StoreType')->with('SellerImage')->get();
		

		//Get All the Testimonials
		$testimonials = array();
		$testimonials = Testimonial::with('User')->where('status','=',1)->get()->toArray();


		//Set Meta Section Data
		
        $metaTitle = "Go4Shop- Your Own Online Shop";
        $metaDesc = 'Go4shop offer you to sell your own products online. The best online local near you store in India. Best way buy or sell your products here.';
        $metaKeywords = 'online grocery,vegetable store, Furniture shops, online local seller in Noida, Greater Noida, delhi, buy groceries, vegitables and many more from local shop';
        $pageImage = self::getLogo();
        $pageUrl = self::getURL();
        $section      = 'Buy and Sell';
        $category     = 'Online Supermarket';
        $tag          = 'Online, Supermarket,Seller, Buyer';
        $article      = 'Near Online Supermarket';

        $metaTags['title']        =$metaTitle;
        $metaTags['description']  =$metaDesc;
        $metaTags['keywords']     =$metaKeywords;
        $metaTags['pageimage']    =$pageImage;
        $metaTags['pageurl']      =$pageUrl;
        $metaTags['section']      =$section;
        $metaTags['category']     =$category;
        $metaTags['tag']          =$tag;
        $metaTags['article']      =$article;
        $metaTags['twittersite']  ='';
        $metaTags['publishedTime']  ='';
        $metaTags['urlimage']     =$pageImage;
        $metaTags['url']          =$pageUrl.'/user/register';
        $metaTags['sitename']     =self::getAppName();

        //Get All Features Products From Different Vendor
        // $storeTypeArr = Master::getStoreType();
        $storeTypeArr = StoreType::where('status','=','1')->get(['id'])->toArray();
        $sellerId = Seller::whereIn('store_type_id',$storeTypeArr)->get(['id'])->toArray();
        $productsList = UserProduct::with('Seller')
                        ->whereIn('seller_id',$sellerId)
                        ->where('user_products.status','=',1)
                        ->orderBy('id','DESC')
                        ->paginate(self::getPageItem());
		// dd($sellerId);
        // dd($productsList );
        //New Products List
        $productsNewList = UserProduct::with('Product','Seller')
                        ->whereIn('seller_id',$sellerId)
                        ->where('user_products.status','=',1)
                        ->orderBy('id','DESC')
                        ->paginate(20)
                        ->toArray();
        //return view(Master::loadFrontTheme('frontend.index'),array(
        return view(Master::loadFrontTheme('firezyshop.HomePage.index'),array(
        		'storeTypeArr'=>$storeTypeArrList,
				'catJson'=>json_encode($catJson),
				'cityArr'=>json_encode($cityArr),
				'sellerArr'=>$seller,
				'Testimonials'=>$testimonials,
				'metaTags'=>$metaTags,
				'productList'=>$productsList,
                'productsNewList'=>$productsNewList,
                'pincode'=>$pincode,
                'addressListJson'=>$addressListJson
		));
    }
    
    
    
    
    public function listing(Request $request) {
    	//dd($request->all());
    	/*
    	array:3 [▼
		  "_token" => "WaSq1cowbym96kDnHE80qmNdmWGjCOybAnMMbmrf"
		  "place" => "Bisrakh Gautam Buddha Nagar 201301 Uttar Pradesh"
		  "locationId" => "18"
		]
		*/

		$locationId = $request->get('locationId');
		$cat = $request->get('place');
		$locationObj = Location::find($locationId)->toArray();
		if(!empty($locationObj)){
			$locationStr = $locationObj['location'];
			$pincode = $locationObj['pincode'];
			$state = $locationObj['state'];
			$district = $locationObj['district'];
		}

		//Get all the Seller in Nearrest Pincode
		$allSeller = Seller::where('pincode', 'LIKE', "%$pincode%")
		->where('location', 'LIKE', "%$locationStr%")
		->where('district', 'LIKE', "%$district%")
		->where('state', 'LIKE', "%$state%")
		->orderBy('business_name')
		->groupBy('id')
		->get();

		$catObj = new \App\Category();
		$catArr=$catObj->getAllCategory();
		foreach($catArr as $obj){
			$catJson[]=$obj;
		}

		//Get All Store Type
		$storeList = StoreType::where('status','=',1)->orderBy('name')->get();
		
        //dd($lsitArr);	
		//URL of the get the location of the user
		return view(Master::loadFrontTheme('seller.sellerListing'),array(
			'sellerArr'=>$allSeller,
			'Category'=>$storeList,
			'searchCat'=>$cat
			)
		);
    }
    
    /*Not In Used Right Now*/
    public function listingProductsFromAllSeller(Request $request) {
		$cat=$request->get('place');
		//Get Location
		if($cat!=""){
			try{
				$locationArr = explode(" ", $cat);
				if(!empty(end($locationArr))){
					$pincode=str_replace('(', '',end($locationArr));
					$pincode=str_replace(')', '',$pincode);
				}else{
					$pincode="";
				}
			}catch (Exception $e) {
            	$pincode='';
        	}
		}else{
			$pincode='';
		}
		//Get All the Seller List From this Pincode
		$allSeller = Seller::where('pincode','=',$pincode)->get();
		dd($allSeller);
        //Get All Product List
        $userProduct = new UserProduct();
		$param=array();
		if($category_id>0){
			$param['category_id']=$category_id;
		}
		//dd($param);
        $lsit=$userProduct->getAllList($param);
		//dd($lsit);
		//Get All Category and Sub Category List
		$catObj = new \App\Category();
		$catArr=$catObj->getAllCategory();
		foreach($catArr as $obj){
			$catJson[]=$obj;
		}
		
		$lsitArr=array();
		if(!empty($lsit)){
			foreach($lsit as $key=>$obj){
			$lsitArr[]=array(
				'UserProduct'=>$obj,
				'Product'=>$obj->product,
				'Seller'=>$this->getSellerInfo($obj['user_id'])
				);    
			}
		}
        //dd($lsitArr);	
		//URL of the get the location of the user
		return view(Master::loadFrontTheme('frontend.listing'),array(
		'productList'=>$lsitArr,
		'Category'=>$catJson,
		'searchCat'=>$cat)
		);
    }

    public function login() {

         return Master::Render('login.login');
    }
    
    public function getSellerInfo($user_id){
        return Seller::where('user_id','=',$user_id)->first();
    }
	
	public function getLocationByLatLng($lat,$lng){
		if(($lat!='') && ($lng!='')){
			$url="http://maps.googleapis.com/maps/api/geocode/json?latlng=".$lat.",".$lng."&sensor=false";
			$result = file_get_contents($url);
			// Will dump a beauty json :3
			$address=json_decode($result, true);
			dd($address);
			$formateAdd=array();
			$pincodeObj = array();
			$i=0;
			if(array_key_exists('results',$address)){
				foreach($address['results'] as $addressArr){
				if($i==0){
					foreach($addressArr['address_components'] as $v){
					$type=$v['types'][0];
					switch($type){
						case 'locality':
							$pincodeObj['locality']=$v['long_name'];
							break;
						case 'political':
							$pincodeObj['political']=$v['long_name'];
							break;
						case 'administrative_area_level_2':
							$pincodeObj['administrative_area_level_2']=$v['long_name'];
							break;
						case 'administrative_area_level_1':
							$pincodeObj['administrative_area_level_1']=$v['long_name'];
							break;
						case 'country':
							$pincodeObj['country']=$v['long_name'];
							break;
						case 'postal_code':
							$pincodeObj['postal_code']=$v['long_name'];
							break;
					}
				}
					$pincodeObj['formatted_address']=$address['results'][0]['formatted_address'];
					}
					$i++;
				}
			}
			return $pincodeObj;
		}
	}
	
	
	public function savePincodeData($arr,$lat,$lng){
		$pincodeObj = new \App\Pincode();
		if(array_key_exists('locality',$arr)){
			$pincodeObj->locality=$arr['locality'];
		}
		if(array_key_exists('political',$arr)){
			$pincodeObj->political=$arr['political'];
			$pincodeObj->place_name=$arr['political'];
		}
		$pincodeObj->administrative_area_level_2=$arr['administrative_area_level_2'];
		$pincodeObj->administrative_area_level_1=$arr['administrative_area_level_1'];
		$pincodeObj->admin_code1='100';
		$pincodeObj->country=$arr['country'];
		$pincodeObj->state=$arr['administrative_area_level_1'];
		$pincodeObj->county_province=$arr['administrative_area_level_2'];
		$pincodeObj->postal_code=$arr['postal_code'];
		$pincodeObj->created_at=date('Y-m-d H:i:s');
		$pincodeObj->status=1;
		$pincodeObj->country_code='IN';
		$pincodeObj->latitude=$lat;
		$pincodeObj->longitude=$lng;
		$pincodeObj->formatted_address=$arr['formatted_address'];
		$pincodeObj->save();
	}
	
	
	public function getlocation(Request $request){
		if ($request->isMethod('post')) {
			$lat=$request->get('lat');
			$lng=$request->get('lng');
			//find this lat and lng from database, if found return else
			// Call the APi for location and update the database
			$pincodeArr = Pincode::where(\DB::raw('substr(latitude, 0, 6)'), '=' ,substr($lat,0,6))
			->orwhere(\DB::raw('substr(longitude, 0, 6)'), '=' ,substr($lng,0,6))->first();
			if(!empty($pincodeArr)){
				if(empty($pincodeArr)){
					$this->savePincodeData($res,$lat,$lng);
					$res['place_name']=$pincodeArr['place_name'];
					$res['county_province']=$pincodeArr['county_province'];
					$res['state']=$pincodeArr['state'];
					$res['country']=$pincodeArr['country'];
					$res['postal_code']=$pincodeArr['postal_code'];
				}
			}else{
				$addressArr=$this->getLocationByLatLng($lat,$lng);
				$result['error']='success';
				$res=$addressArr;
				//dd($res);
				$pincodeArr = Pincode::where('postal_code', '=' ,$addressArr['postal_code'])->first();
				if(!empty($pincodeArr)){
					$res['place_name']=$pincodeArr['place_name'];
					$res['county_province']=$pincodeArr['county_province'];
					$res['state']=$pincodeArr['state'];
					$res['country']=$pincodeArr['country'];
					$res['postal_code']=$pincodeArr['postal_code'];
					$res['formatted_address']=$res['place_name'].', '.$res['county_province'].', '.$res['state'].', '.$res['postal_code'].', '.$res['country'];
				}else{
					$this->savePincodeData($res,$lat,$lng);

				}
				
				//return
			}
			$result['data']=$res;
			//dd($res);
			return json_encode($result);
		}
		
	}
	
	public function saveZipcode(){
		
	}
}

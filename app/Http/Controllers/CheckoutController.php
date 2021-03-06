<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller {
    const BOOK_IDS_SKUS = [
      'prod_E5D7IzDkiNGTRD' => 'sku_E7q4qCdwGYcXaA'
    ];
  
    public function checkout(Request $request) {
        $book = $request->book;
        $book_id = $request->book_id;
        $quantity = $request->quantity;
        
        $success = true;
        if (in_array($book_id, array_keys(self::BOOK_IDS_SKUS))) {
          $success = $this->order($book_id, $quantity);
        }
                
        if ($success) {
          return redirect('/')->with(['status' => 'success', 'page' => 'books']);
        } else {
          return redirect('/')->with(['status' => 'fail', 'page' => 'books']);
        }
        
    }
    
    private function order($id, $quantity) {
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey(env('STRIPE_SK'));
        
        $product = \Stripe\Product::retrieve($id);
        
        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        
        $order = \Stripe\Order::create(array(
          "items" => array(
            array(
              "type" => "sku",
              "parent" => self::BOOK_IDS_SKUS[$id],
              "quantity" => $quantity
            )
          ),
          "currency" => "usd",
          "shipping" => array(
            "name" => $_POST['stripeBillingName'],
            "address" => array(
              "line1" => $_POST['stripeShippingAddressLine1'],
              "city" => $_POST['stripeShippingAddressCity'],
              "country" => $_POST['stripeBillingAddressCountry'],
              "postal_code" => $_POST['stripeBillingAddressZip']
            )
          ),
          "email" => $_POST['stripeEmail']
        ));
        
        $order->pay(['source' => $token]);
        
        return true;
    }
}

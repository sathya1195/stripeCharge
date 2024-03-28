<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Stripe\PaymentIntent;

class ProductController extends Controller
{

    public function product(){

        $products= product::get();     
        return view('product',compact('products'));
    }

    public function show(product $product){
        
        return view('product_det',compact('product'));

    }

    public function purchase(product $product){

        $intent = auth()->user()->createSetupIntent();

       return view('purchase',compact('product', 'intent'));
    }


    public function purchase_payment(Request $request, Product $product)
{

    
    $user          = $request->user();
    $paymentMethod = $request->input('payment_method');

    try {
        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);
        $user->charge($product->price * 100, $paymentMethod);
         
    } catch (\Exception $exception) {
       // return $exception->getMessage();     
       
        return redirect()->route('product.list')->withErrors('Something Went Wrong please try again');
    }  
    return redirect()->route('product.list')->withSuccess('Product purchased successfully!');
    
}


// public function handleRequiresAction(Request $request, $paymentIntentId)
// {
//     try {
//         // Retrieve the PaymentIntent from Stripe
//         $paymentIntent = PaymentIntent::retrieve($paymentIntentId);

//         // Render a view to handle the additional action (e.g., 3D Secure authentication)
//         return view('payment.requires_action', [
//             'paymentIntent' => $paymentIntent,
//         ]);
//     } catch (\Exception $e) {
//         // Handle any errors
//         return response()->json(['error' => $e->getMessage()], 500);
//     }
// }


}

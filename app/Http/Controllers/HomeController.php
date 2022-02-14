<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\Setting;
use App\Models\Table;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function index()
    {

        $setting = Setting::translatedIn(app()->getLocale())
            ->first();

        return view('frontend.index', ['setting' => $setting]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }


    public function menu()
    {
        $categories = Category::with('children')
        ->orderBy('rank')
        ->whereNull('parent_id')
        ->get();
        return view('frontend.menu')->with(['categories'  => $categories]);
    }

    public function category($id)
    {
        $category = Category::where('id', '=', $id)->first();
        $products = Product::where('category_id', '=', $id)->get()->all();
        return view('frontend.category', compact(['products', 'category']));
    }



    public function reservation()
    {
        $reservations = Reservation::all();
        $tables = Table::all();

        return view('frontend.reservation', compact('reservations', 'tables'));
    }

    public function orders(Request $request)
    {
        $locale = $request->query('language');
        $orders = DB::table('orders')
        // ->where('user_id', '=', $request->session()->get('wdUserId'))
        ->where('product_translations.locale', '=', $locale)
            ->join('products', 'products.id', '=', 'orders.product_id')
            ->join('product_translations', 'product_translations.product_id', '=', 'products.id')
            ->select('orders.*', 'product_translations.name', 'products.price', 'products.image')
            ->get();
        return view('frontend.orders', compact('orders'));
    }

    public function create(Request  $request)
    {
        $product_id = $request->input('product_id');
        $table_id = $request->session()->get('tableId');
        $quantity = $request->input('quantity');
        $user_id = 5;
        // $request->session()->get('wdUserId');
        // $generatedId =  Str::random();
        // $user_id = $request->session()->get('wdUserId');
        // if (!$user_id) {
        //     $request->session()->put('wdUserId', $generatedId);
        //     $user_id = $generatedId;
        // }
        Order::insert([
            'product_id' => $product_id,
            'table_id' => $table_id,
            'user_id' => $user_id,
            // 'user_id' => $user_id,
            // 'place_id' => $place_id,
            'quantity' => $quantity,
        ]);

        return back()->withErrors(['Order Added', 'The Message']);
    }

    public function updateQuantity(Request $request)
    {
        $id = $request->input('id');
        $quantity = $request->input('quantity');
        Order::find($id)->update([
            'quantity' => $quantity,
        ]);

        return $quantity;
    }


    public function destroy($id)
    {
        Order::find($id)->delete();
        return back()->withSuccessMessage(__('alerts.Record has been deleted'));
    }

    public function clearCart(Request $request)
    {
        Order::where('user_id', $request->session()->get('wdUserId'))->delete();
        return redirect()->back()->with('success', 'კალათა წარმატებით გასუფთავდა!');
    }

}

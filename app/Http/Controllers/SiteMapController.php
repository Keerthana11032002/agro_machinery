<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SiteMapController extends Controller
{
    public function sitemap() {
        return response()->view('sitemap.sitemap')->header('Content-Type', 'text/xml');
    }

    public function static_sitemap() {
        return response()->view('sitemap.static_sitemap')->header('Content-Type', 'text/xml');
    }

    public function product_sitemap() {
        $products = Product::where('deleted_at',0)->where('is_active',0)->get();
        return response()->view('sitemap.product_sitemap', compact('products'))->header('Content-Type', 'text/xml');
    }
}

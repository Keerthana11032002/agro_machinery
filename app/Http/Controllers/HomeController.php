<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSpecification;
use App\Models\ProductSpecificationType;
use App\Models\Spare;
use App\Models\Image;
use App\Models\Video;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index() {
        $products = Product::where('is_active', 0)->where('deleted_at', 0)->latest()->take(4)->get();

        return view('agro.home', compact('products'));
    }
    public function products() {
        $products = Product::where('is_active', 0)->where('deleted_at', 0)->latest()->get();
        return view('products.product', compact('products'));
    }
    public function productsDetail(Request $request, $id) {
        $title = str_replace('-', ' ', $id);
        $product_detail = Product::where('title', $title)
            ->where('is_active', 0)
            ->where('deleted_at', 0)
            ->firstOrFail();

        $specifications = ProductSpecification::with('specificationType')
            ->where('product_id', $product_detail->id)
            ->where('is_active', 0)
            ->where('deleted_at', 0)
            ->get();

        // Group by specification type (row)
        $rows = [];
        $columns = [];

        foreach ($specifications as $spec) {
            $rowName = $spec->specificationType->type ?? 'Unknown';
            $colName = $spec->type; // MD20, MD30, etc.

            $rows[$rowName][$colName] = $spec->value;
            $columns[$colName] = true;
        }

        $columns = array_keys($columns); // unique column headers

        return view('products.product_detail', compact('product_detail', 'rows', 'columns'));
    }

    public function spares() {
        $spares = Spare::where('is_active', 0)->where('deleted_at', 0)->latest()->get();
        return view('agro.spares', compact('spares'));
    }
    public function gallery() {
        $galleries = Image::where('is_active', 0)->where('deleted_at', 0)->latest()->get();
        return view('agro.gallery', compact('galleries'));
    }
    public function video() {
        $videos = Video::where('is_active', 0)->where('deleted_at', 0)->latest()->get();
        return view('agro.video', compact('videos'));
    }
    public function ContactSave(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'message' => ['required'],
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->mail = $request->email;
        $contact->phone = $request->number;
        $contact->description = $request->message;
        $contact->save();
        if (Mail::to('keerthana@skyraan.com')->send(new ContactMail($contact))) {
            $checKmail = 'email sent to keerthana@skyraan.com';
            $response = [
                'result' => '1',
                'error' => $checKmail,
            ];
        } else {
            $checKmail = 'Failed to send mail to keerthana@skyraan.com';
            $response = [
                'result' => '1',
                'error' => $checKmail
            ];
        }
        return response()->json(['message' => 'Yours message sent successfully']);
    }
}

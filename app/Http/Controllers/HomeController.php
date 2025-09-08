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
use Mail;
use App\Mail\ContactMail;
use Carbon\Carbon;
use DateTime;

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
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
            'message' => ['required'],
        ]);
    
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->mail = $request->email;
        $contact->phone = $request->phone;
        $contact->description = $request->message;
        $contact->save();
    
        $date_time = Carbon::parse($contact->created_at)->diffForHumans();
    
        // Admin email
        $adminEmail = "support@skyraantech.com";
        $userEmail  = $contact->mail;
        $userName   = $contact->name;
        // Send mail to admin
        $html = view('mails.adminmail', compact('contact', 'date_time'))->render();
        $subject = "New Message Received from " . $userName;
    
        Mail::html($html, function($message) use($userName, $userEmail, $adminEmail, $subject) {
            $message->from("support@skyraantech.com", "Jai Agro Machinery"); // Always from your domain
            $message->to($adminEmail, 'Jai Agro Machinery');
            $message->replyTo($userEmail, $userName); // User email as reply-to
            $message->subject($subject);
        });
    
        // Send auto-reply to user
        $data = view('mails.returnmail', compact('contact', 'date_time'))->render();
        $subject = "Message Received at Jai Agro Machinery";
    
        Mail::html($data, function($message) use($userName, $userEmail, $adminEmail, $subject) {
            $message->from($adminEmail, 'Jai Agro Machinery');
            $message->to($userEmail, $userName);
            $message->subject($subject);
        });
    
        return response()->json(['message' => 'Your message has been sent successfully']);
    }
}

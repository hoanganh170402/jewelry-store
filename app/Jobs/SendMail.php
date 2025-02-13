<?php

namespace App\Jobs;

use App\Mail\OrderShipped;
use App\Models\Cart;
use App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendMail
{
    use Queueable, SerializesModels;

    protected $customerId;

    public function __construct($customerId)
    {
        $this->customerId = $customerId; // Lưu ID của khách hàng
        Log::info("SendMail job created for customer ID: {$this->customerId}");
    }

    public function handle()
    {
        // Lấy thông tin khách hàng
        $customer = Customer::find($this->customerId);

        if (!$customer) {
            Log::error("Customer not found for ID: {$this->customerId}");
            return;
        }

        // Lấy thông tin đơn hàng từ bảng Cart dựa trên customer_id
        $cart = Cart::where('customer_id', $this->customerId)->get();
        Log::info("Cart retrieved: ", [$cart]);

        // Gửi email với thông tin đơn hàng
        try {
            Mail::to($customer->email)->send(new OrderShipped($cart));
            Log::info("Email sent to: {$customer->email}");
        } catch (\Exception $e) {
            Log::error("Error sending email: " . $e->getMessage());
        }
    }
}

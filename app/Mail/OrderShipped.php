<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $cart;
    public $totalPrice;

    public function __construct($cart, $totalPrice)
    {
        $this->cart = $cart; // Lưu thông tin giỏ hàng
        $this->totalPrice = $totalPrice; // Lưu tổng giá
        Log::info("OrderShipped created with cart: ", [$this->cart]);
    }

    public function build()
    {
        return $this->view('mail.success')
            ->with(['cart' => $this->cart, 'totalPrice' => $this->totalPrice]);
    }
}

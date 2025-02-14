<!DOCTYPE html>
<html>
<head>
    <title>Xác nhận đơn hàng</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #f4f4f4; font-family: Arial, sans-serif; }
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
        @media screen and (max-width: 480px) {
            .mobile-hide { display: none !important; }
            .mobile-center { text-align: center !important; }
        }
        div[style*="margin: 16px 0;"] { margin: 0 !important; }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #27ae60;
            padding: 35px;
            text-align: center;
            color: #ffffff;
            font-size: 36px;
            font-weight: bold;
        }
        .email-body {
            padding: 35px;
            text-align: center;
        }
        .email-body img {
            width: 125px;
            height: 120px;
        }
        .email-body h2 {
            color: #333333;
            font-size: 24px;
        }
        .email-body p {
            color: #777777;
            font-size: 16px;
        }
        .email-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .email-table th, .email-table td {
            padding: 10px;
            border: 1px solid #eeeeee;
            text-align: left;
        }
        .email-table th {
            background-color: #eeeeee;
            font-weight: bold;
        }
        .email-footer {
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #777;
            background-color: #eeeeee;
        }
        .email-footer a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#f4f4f4">
            <div class="email-container">
                <div class="email-header">
                    TDAN SHOP
                </div>
                <div class="email-body">
                    <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" alt="Success Icon" /><br>
                    <h2>ĐẶT HÀNG THÀNH CÔNG!</h2>
                    <p>Cảm ơn bạn đã đặt hàng tại TDAN SHOP.</p>
                    <table class="email-table">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thành tiền</th>
                        </tr>
                        @foreach($cart as $item)
                            <tr>
                                <td>{{ $item['product']->name }}</td>
                                <td>{{ $item['pty'] }}</td>
                                <td>{{ number_format($item['price'], 0, ',', '.') }} VNĐ</td>
                                <td>{{ number_format($item['price'] * $item['pty'], 0, ',', '.') }} VNĐ</td>
                            </tr>
                        @endforeach
                    </table>
                    <p style="font-size: 20px; font-weight: bold; margin-top: 20px;">
                        Tổng giá: {{ number_format($totalPrice, 0, ',', '.') }} VNĐ
                    </p>
                    <p>Bạn có thắc mắc? Liên hệ chúng tôi <a href="https://www.instagram.com/x.x.h.a_/">tại đây</a>.</p>
                </div>
                <div class="email-footer">
                    <p>Chính sách bảo mật | Điều khoản TDAN Shop</p>
                    <p>Đây là email tự động. Vui lòng không trả lời email này.</p>
                    <p>Tầng 17 Saigon Centre 2, 67 Đường Lê Lợi, Bến Nghé, Quận 1, Hồ Chí Minh 700000, Vietnam</p>
                </div>
            </div>
        </td>
    </tr>
</table>
</body>
</html>

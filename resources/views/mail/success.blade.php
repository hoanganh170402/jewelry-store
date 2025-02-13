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
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #eeeeee; }
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
    </style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center" bgcolor="#eeeeee">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                <tr>
                    <td align="center" bgcolor="#27ae60" style="padding: 35px; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold; color: #ffffff;">
                        TDAN SHOP
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 35px;">
                        <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" /><br>
                        <h2 style="color: #333333;">ĐẶT HÀNG THÀNH CÔNG!</h2>
                        <p style="color: #777777;">Cảm ơn bạn đã đặt hàng tại TDAN SHOP.</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 20px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                            <tr>
                                <td align="left" bgcolor="#eeeeee" style="padding: 10px; font-weight: bold;">Sản phẩm</td>
                                <td align="left" bgcolor="#eeeeee" style="padding: 10px; font-weight: bold;">Số lượng</td>
                                <td align="left" bgcolor="#eeeeee" style="padding: 10px; font-weight: bold;">Giá</td>
                                <td align="left" bgcolor="#eeeeee" style="padding: 10px; font-weight: bold;">Thành tiền</td>
                            </tr>
                            @foreach($cart as $item)
                                <tr>
                                    <td align="left" style="padding: 10px;">{{ $item['product']->name }}</td>
                                    <td align="left" style="padding: 10px;">{{ $item['pty'] }}</td>
                                    <td align="left" style="padding: 10px;">{{ number_format($item['price'], 0, ',', '.') }} VNĐ</td>
                                    <td align="left" style="padding: 10px;">{{ number_format($item['price'] * $item['pty'], 0, ',', '.') }} VNĐ</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 20px; font-size: 20px; font-weight: bold;">
                        Tổng giá: {{ number_format($totalPrice, 0, ',', '.') }} VNĐ
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 20px;">
                        <p>Bạn có thắc mắc? Liên hệ chúng tôi <a href="https://www.instagram.com/x.x.h.a_/" style="color: #3498db;">tại đây</a>.</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" bgcolor="#eeeeee" style="padding: 20px; font-size: 12px; color: #777;">
                        <p>Chính sách bảo mật | Điều khoản TDAN Shop</p>
                        <p>Đây là email tự động. Vui lòng không trả lời email này.</p>
                        <p>Tầng 17 Saigon Centre 2, 67 Đường Lê Lợi, Bến Nghé, Quận 1, Hồ Chí Minh 700000, Vietnam</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>

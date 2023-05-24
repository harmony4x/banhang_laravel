
## Tải và cài đặt xampp
- Cài đặt và copy folder banhang_laravel vào thư mục xampp/htdocs/
- Sử dụng xampp -> phpMyadmin tạo cơ sở dữ liệu banhang_laravel
- Import vào csdl banhang_laravel bằng file banhang_laravel.sql nằm trong thư mục database/banhang_laravel.sql.

## Trang admin
- Để truy cập vào tài khoản: username:author@gmail.com
                             password: 123456
- Đường dẫn: localhost/banhang_laravel/public/admin/


## Trang khách hàng
- Đường dẫn: localhost/banhang_laravel/public/

## Hướng dẫn cách tích hợp chatbot vào website
- Link chatbot: https://github.com/harmony4x/banhang_chatbot
- Link custom rasa: https://github.com/harmony4x/custom_rasa
- Để chạy chatbot và kết nối với chatbot thông qua socket, tại thư mục root của toàn bộ dự án, gõ lệnh:
    `rasa run -m models --enable-api --cors "*" --debug`
- Để chatbot kết nối được với cơ sở dữ liệu, gõ lệnh: 
     `rasa run actions`

# cara pake nya:
clone dulu file ini:
> git clone https://github.com/gunadermawan/web-arsipsurat.git

pastiin udah terinstal composer yaw, abis tu ketikan ini diterminal cscode:
> composer update

bikin database baru di xampp, misalnya db_arsip

buka file .env.example, copy file itu dengan nama .env, terus cari DB_DATABASE= (di isi pake nama database yang mau dibikin, dalam hal ini namanya db_arsip)
> php artisan migrate

terakhir, jalanin command ini di terminal vscode
> php artisan serve

and taraa welcome to web yang masih jelek ini :D, ntr dibagusin lagi yaw, kalo nggk jga gpapa yng penting jalan dan wisuda dlu :D


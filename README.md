# lib-shorturl

Adalah module yang menyediakan interface url shortener. Module ini tidak bisa
berdiri sendiri, dibutuhkan library shortener yang akan menggenerasi short url.

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install lib-shorturl
```

## Penggunaan

Module ini menambah satu library dengan nama `LibShorturl\Library\Shortener` yang
bisa digunakan untuk memendekkan suatu URL.

```php
use LibShorturl\Library\Shortener;

$long_url = 'https://www.example.com/';
$short_url= Shortener::shorten($long_url);
if(!$short_url)
    deb( Shortener::lastError() );
```

## Shortener

Module ini harus memiliki library shortener yang bertugas memendekan URL panjang.
Library tersebut harus mengimplementasikan interface `LibShorturl\Iface\Shortener`
sehingga library tersebut memiliki method sebagai berikut:

### static lastError(): ?string

Mengembalikan pesan error yang terjadi hasil eksekusi terakhir.

### static shorten(string $url): ?string

Memendekkan URL panjang dan mengembalikan URL pendek.
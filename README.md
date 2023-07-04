# Beautiful Web Site
 Laravel'e giriş yapmak için gerekli bazı özellikleri öğrenmek için hafif ve küçük bir proje yapabiliriz. 
 Aşağıda, Laravel'deki temel özellikleri öğrenmek için yapabileceğiniz bir projenin genel bir taslağını sunuyorum:

Proje Oluşturma:

Composer'ı kullanarak yeni bir Laravel projesi oluşturun: composer create-project --prefer-dist laravel/laravel proje-adi
Proje klasörüne girin: cd proje-adi
Veritabanı Bağlantısı:

.env dosyasını düzenleyerek veritabanı bağlantı bilgilerini ayarlayın.
Migration'lar oluşturmak için php artisan make:migration komutunu kullanın.
Model ve Migration Oluşturma:

php artisan make:model ModelAdi -m komutunu kullanarak yeni bir model ve migration oluşturun.
Oluşturulan migration dosyasını düzenleyerek tablo sütunlarını tanımlayın.
Migration'ları veritabanına uygulamak için php artisan migrate komutunu kullanın.
Controller Oluşturma:

php artisan make:controller ControllerAdi komutunu kullanarak yeni bir controller oluşturun.
Controller'da ilgili fonksiyonları tanımlayın (index, create, store, edit, update, delete gibi).
Route Tanımlama:

routes/web.php dosyasında route'ları tanımlayın.
Örneğin, /veri URL'sine ControllerAdi controller'ının index fonksiyonunu bağlayabilirsiniz.
View Oluşturma:

resources/views klasöründe ilgili view dosyalarını oluşturun.
Controller'dan verileri alarak view dosyalarını düzenleyin ve kullanıcıya gösterin.

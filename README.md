## Docker ile PHP Geliştirme Ortamı
- Nginx'in son, PHP'nin 7.2 (fpm) ve MySQL'in 5.7 versiyonu kullanılmaktadır.
- Docker Hub'ın sunduğu PHP image'ı içerisinde MySQL driver'ları olmadığı için custom-php isimli image oluşturulmaktadır.
- PHP dosyaları `code` klasörü içerisinde olmalıdır.
- Sadece proje dizininde `docker-compose up` komutu çalıştırılması yeterlidir.

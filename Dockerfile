 # Используем официальный образ PHP с Apache
FROM php:8.2-apache

# Копируем файлы проекта в контейнер
COPY . /var/www/html/

# Открываем порт 80
EXPOSE 80

# Запускаем Apache
CMD ["apache2-foreground"]


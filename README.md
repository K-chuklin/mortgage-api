# 📌 Laravel Mortgage Application

## 🚀 Описание проекта
Проект — это веб-приложение на Laravel, которое позволяет управлять ипотечными программами. Включает:
- **Публичный интерфейс** для просмотра списка активных ипотек.
- **Админ-панель** для управления ипотеками (CRUD, включение/выключение).
- **MySQL** в качестве базы данных.
- **Blade-шаблоны** для работы с веб-интерфейсом.

---

## ⚙️ Установка и развертывание

### 1️⃣ **Склонируйте репозиторий**

```bash
git clone https://github.com/K-chuklin/mortgage-api.git
cd mortgage-app
```

### 2️⃣ **Установите зависимости**

```bash
composer install
```

### 3️⃣ **Создайте .env файл**

```bash
cp .env.example .env
```

Настройте в `.env` параметры базы данных MySQL:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mortgages_db
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4️⃣.1 **Создайте базу данных в MySQL**

Перед запуском миграций необходимо создать базу данных в MySQL через терминал:

1. Открываем MySQL в терминале:

```bash
mysql -u root -p
```

2. Создаем базу данных:

```sql
CREATE DATABASE mortgages_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

### 5️⃣ **Сгенерируйте ключ приложения**
```bash
php artisan key:generate
```

### 6️⃣ **Запустите миграции** (создание таблиц в БД)

```bash
php artisan migrate
```

### 7️⃣ **Заполните базу данных 📊 тестовыми данными**

```bash
php artisan db:seed
```

---

## ▶️ Запуск проекта

### 📡 **Локальный сервер**

```bash
php artisan serve
```

## 🗂️ Структура маршрутов

### 🔹 **Публичные маршруты**

| HTTP | URL                     | Описание                   |
| ---- | ----------------------- | -------------------------- |
| GET  | `/public/mortgages`     | Список активных ипотек     |
| GET  | `/public/mortgages/{id}`| Детальная страница ипотеки |

### 🔹 **Админ-панель**

| HTTP   | URL                          | Описание                           |
| ------ | ---------------------------- | ---------------------------------- |
| GET    | `/admin/mortgages`           | Список ипотек (включая неактивные) |
| GET    | `/admin/mortgages/create`    | Форма добавления ипотеки           |
| POST   | `/admin/mortgages`           | Создание ипотеки                   |
| GET    | `/admin/mortgages/{id}/edit` | Форма редактирования               |
| PUT    | `/admin/mortgages/{id}`      | Обновление ипотеки                 |
| DELETE | `/admin/mortgages/{id}`      | Удаление ипотеки                   |

---

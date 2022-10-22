# HTTP аутентификация
***
### Задание
##### Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
***
***
#### 1. Пользовательский интерфейс
---
![](https://raw.githubusercontent.com/Argoleed/HTTP_auth/main/user_interface.png)
***
***
#### 2. Структура базы данных
***
| Название | Тип данных | Длина | Описание                                          |
|----------|------------|-------|---------------------------------------------------|
| id       | int        |       | Ключевое поле                                     |
| login    | varchar    | 64    | Логин пользователя                                |
| mail     | varchar    | 64    | Почта пользователя                                |
| hash     | longtext   |       | Хэш соли и пароля пользователя                    |
| salt     | varbinary  | 16    | Соль пользователя                                 |
***
***
#### 3. Алгоритмы
***
- Регистрация (create_user.php)
***
![](https://github.com/Argoleed/HTTP_auth/blob/main/registration.png?raw=true)
***
- Авторизация (authorization.php)
***
![](https://github.com/Argoleed/HTTP_auth/blob/main/authorization.png?raw=true)
***
- Восстановление пароля через почту (send_mail.php)
***
![](https://github.com/Argoleed/HTTP_auth/blob/main/send_mail.png?raw=true)
***
- Изменение пароля из профиля (password_change.php)
***
![](https://github.com/Argoleed/HTTP_auth/blob/main/password_change.png?raw=true)
***
***
#### 4. Примеры запросов-ответов
***
![](https://github.com/Argoleed/HTTP_auth/blob/main/API_1.png?raw=true)
![](https://github.com/Argoleed/HTTP_auth/blob/main/API_2.png?raw=true)
***
***

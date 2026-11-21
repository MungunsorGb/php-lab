# php-lab

PHP 8 болон MySQL (PDO) ашиглан хийсэн лабораторийн ажил.

## XAMPP-аар ажиллуулах заавар

1. `php-lab` хавтсыг XAMPP-ийн `htdocs` хавтсанд хуулна (`C:\xampp\htdocs\php-lab`).
2. **XAMPP Control Panel**-оос **Apache** болон **MySQL** модулиудыг `Start` дарж асаана.
3. `includes/dbh.inc.php` файл дахь өгөгдлийн сангийн холболтын тохиргоог шалгана.
4. Browser дээр `http://localhost/php-lab/` хаягаар орж ажиллуулна.

## Өгөгдлийн сан тохируулах (phpMyAdmin Import)

1. Browser дээр `http://localhost/phpmyadmin` хаягийг нээнэ.
2. Зүүн талын цэснээс **New** дарж `phplab` нэртэй шинэ өгөгдлийн сан үүсгэнэ.
3. Дээд цэсний **Import** таб руу орно.
4. **Choose File** товч дарж төслийн `database/phplab.sql` файлыг сонгоно.
5. Хуудасны доод хэсэгт байрлах **Import** (эсвэл **Go**) товчийг дарж өгөгдлийн санг оруулна.

## Хуудсуудын жагсаалт

| Хуудас | Тайлбар |
|---|---|
| `index.php` | Нүүр хуудас |
| `basics.php` | PHP үндсэн ойлголтууд (хувьсагч, нөхцөл, давталт) |
| `students.php` | Массив болон функц |
| `contact.php` | HTML форм боловсруулах (GET/POST) |
| `grade.php` | Үнэлгээ тооцоолох |
| `calculator.php` | Энгийн тооны машин |
| `users.php` | Хэрэглэгчдийн жагсаалт болон CRUD үйлдэл |
| `search.php` | Өгөгдөл хайх |
| `session_test.php` | Session турших |
| `hash_test.php` | Password hashing турших |
| `account.php` | Хэрэглэгч бүртгүүлэх, нэвтрэх, гарах |
| `members.php` | Зөвхөн нэвтэрсэн хэрэглэгч харах хуудас |

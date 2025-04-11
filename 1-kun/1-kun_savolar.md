# 1-savol 
* O‘zingiz haqingizda qisqacha so‘zlab bering va PHP web developer sifatida tajribangizni ta'riflab bering.
# 2-savol HTML/CSS
  Flexbox va Grid o‘rtasidagi asosiy farqlarni tushuntirib bera olasizmi? Qaysi holatlarda birini yoki  ikkinchisini ishlatishni afzal ko‘rasiz?

********** Javob ************
 | Flexbox bir o‘lchovli (1D) joylashtirish uchun yaxshi — ya’ni, elementlarni faqat gorizontal yoki vertikal tarzda tartibga solish uchun qulay. Masalan, navigatsiya menyusi yoki kartalar qatorini joylashtirishda ishlatiladi.
 | Grid esa ikki o‘lchovli (2D) — ya’ni, satr va ustunlarni birgalikda boshqarish uchun. Bu katta sahifa tuzilmalari, masalan, galereya yoki murakkab layoutlar uchun juda mos.  
# 3-savol 
PHPda "GET" va "POST" metodlari o‘rtasidagi farqni tushuntirib bering. Qaysi holatlarda ulardan foydalanasiz va sizning loyihangizda qanday ishlatgansiz?


********** Javob ***********
"PHPda 'GET' va 'POST' metodlari foydalanuvchidan ma’lumot qabul qilish uchun ishlatiladi. 'GET' ma’lumotlarni URL orqali jo‘natadi, shuning uchun u oddiy va ko‘rinadigan so‘rovlar uchun mos, masalan, sahifa navigatsiyasi yoki qidiruv parametrlari (?id=1 yoki ?search=php). Lekin uning belgi chegarasi bor, taxminan 2000-4000 belgi. 'POST' esa ma’lumotlarni so‘rov tanasida jo‘natadi, shuning uchun u maxfiy ma’lumotlar (login, parol) yoki katta hajmdagi fayllarni jo‘natish uchun ishlatiladi va hajm bo‘yicha cheklov yo‘q. Mening phpdevelopers.uz loyihamda qidiruv funksiyasi uchun 'GET'dan, foydalanuvchi ro‘yxatdan o‘tish formasida esa 'POST'dan foydalanganman."



# 4-savol
 PHPda "OOP" (Object-Oriented Programming) haqida tushunchangizni aytib bering. Class va Object o‘rtasidagi farq nima va bir misol keltira olasizmi?

 php oop bu objektga yo'naltirlgan dasturlash degani bu oop bizga kodni takrorlamaslikni taminlaydi va class bu object uchun shablon degani clasda objectni propertiysi va methodlari bo'ladi misolar

 // class yaratish

 class Fruit{

    // class property

    public $name;

    // class method qo'shish uchun

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return $this->name;
    }
 }


// classdan object olish
 $fruit = new Fruit();
 $fruit->set_name("Olma");
 $fruit->show();


# 4-savol

 PHPda ma’lumotlarni xavfsiz saqlash uchun qanday usullardan foydalanasiz? Masalan, foydalanuvchi kiritgan ma’lumotlardan kelib chiqadigan SQL injection hujumlarini qanday oldini olasiz?

*********** Javob ************

"PHPda ma’lumotlarni xavfsiz saqlash uchun bir nechta usullardan foydalanaman. Masalan, XSS hujumlaridan himoya qilish uchun foydalanuvchi kiritgan ma’lumotlarni htmlspecialchars() bilan tozalayman, bu maxsus belgilarni HTML entity’lariga aylantiradi. Keraksiz bo‘shliqlarni olib tashlash uchun trim() ishlataman. SQL injection hujumlaridan himoya qilish uchun esa PDO bilan tayyorlangan so‘rovlar (prepared statements) qo‘llayman. Masalan, foydalanuvchi login qilganda:

$stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username');
$stmt->execute(['username' => $username]);


# 5-savol

PHPda sessiya (session) va kukilar (cookies) o‘rtasidagi farq nima? Ularni loyihangizda qanday maqsadda ishlatgansiz?


************* Javob ************

"PHPda cookie’lar foydalanuvchi brauzerida saqlanadigan kichik ma’lumotlar bo‘lib, setcookie('username', 'Ozodbek', time() + 3600); bilan yaratiladi. Ular oddiy sozlamalarni (masalan, sayt tilini yoki reklama ID’ni) eslab qolish uchun ishlatiladi, lekin xavfsiz emas, chunki foydalanuvchi tomonidan o‘zgartirilishi mumkin. Session esa serverda saqlanadi, session_start() bilan boshlanadi va $_SESSION['username'] = 'Ozodbek'; bilan ma’lumot qo‘yiladi. Maxfiy ma’lumotlarni (masalan, foydalanuvchi ID’sini) saqlash uchun ishlatiladi va session_destroy() bilan o‘chiriladi. Mening phpdevelopers.uz loyihamda hozircha ishlatmadim, lekin kelajakda foydalanuvchi autentifikatsiyasi uchun session’dan foydalanishni rejalashtiryapman."




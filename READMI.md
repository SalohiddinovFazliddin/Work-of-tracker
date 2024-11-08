# WorkDay Tracking Project

Bu loyiha, xodimlarning kelgan va ketgan vaqtlari bo'yicha ish kunini kuzatib borish uchun yaratilgan PHP dasturidir. Har bir xodim kelgan vaqti va ketgan vaqtini kiritishi mumkin, va ish kunining yakunida bu ma'lumotlar saqlanadi.

## Talablar

Dastur ishlashi uchun quyidagi texnologiyalar talab qilinadi:

- **PHP 8.0 yoki undan yuqori versiyasi**: PHP dasturiy tili va sintaksisini qo'llab-quvvatlaydigan versiya.
- **MySQL yoki boshqa SQL bilan mos keluvchi ma'lumotlar bazasi**: Xodimlarning ish vaqti ma'lumotlarini saqlash uchun ma'lumotlar bazasi zarur.
- **Apache yoki boshqa PHP-ni qo'llab-quvvatlaydigan server**: Dastur lokal yoki serverda ishlashi uchun.

## O'rnatish bo'yicha yo'riqnomalar

1. **Ma'lumotlar bazasini sozlash**:
   - MySQL ma'lumotlar bazasini yarating.
   - Yaratilgan ma'lumotlar bazasida kerakli jadval(lar)ni yarating. Masalan, `workdays` jadvali xodimlarning kelish vaqti va ketish vaqtini saqlash uchun.

2. **Dasturiy fayllarni yuklash**:
   - Loyiha papkasida `WorkDay.php`, `index.php` va `view.php` fayllarini joylashtiring.
   - `WorkDay.php` faylida MySQL bilan bog'lanish uchun kerakli sozlamalarni kiriting (ma'lumotlar bazasi nomi, foydalanuvchi, parol).

3. **Server sozlamalari**:
   - Apache yoki boshqa serverda loyiha papkasini yuklang va `index.php` fayliga kirish uchun URL manzilni sozlang.

4. **Ishga tushirish**:
   - Serveringizda yoki lokal kompyuteringizda `index.php` faylini ishga tushiring va brauzeringizda URL manzilni oching.

## Foydalanish

- Dastur ishga tushirilgandan so'ng, xodimlar o'z nomlari va kelgan vaqtlarini kiritishi mumkin.
- Xodim ketayotganida "Leaved at" maydoniga ketish vaqtini kiriting.
- Kirilgan ma'lumotlar ma'lumotlar bazasida saqlanadi va ish kunining yakunida kuzatib boriladi.
- Agar ish kuni tugatilgan bo'lsa, `done` holatini o'rnatish uchun GET so'rovini yuboring (URL'da `?done=x` deb belgilang, bu yerda `x` — tugatilgan ish kuni uchun ID).

## Loyihaning asosiy fayllari

- **index.php**: Asosiy sahifa, foydalanuvchi interfeysi orqali ma'lumotlarni kiritadi va ko'rib chiqadi.
- **WorkDay.php**: Ish kuni ma'lumotlarini saqlash, o'qish va yangilash uchun asosiy PHP sinfi.
- **view.php**: Foydalanuvchi interfeysi uchun HTML va PHP bilan yozilgan fayl. `WorkDay.php` sinfidagi ma'lumotlarni ko'rsatish uchun ishlatiladi.

## Dastur kodining qisqacha izohi

1. **`store` metodi**: Xodimning kelgan va ketgan vaqti bo'yicha ma'lumotni saqlaydi.
2. **`getWorkDayList` metodi**: Saqlangan barcha ish kunlari ro'yxatini olish uchun ishlatiladi.
3. **`markAsDone` metodi**: Belgilangan ish kunini yakunlangan deb belgilaydi.

## Foydalanish shartlari

Bu loyiha sinov va o'quv maqsadlarida yaratilgan. Haqiqiy loyihalarda foydalanishdan oldin xavfsizlik va optimizatsiya jihatlari bo'yicha qo'shimcha tekshiruvlardan o'tkazishingiz tavsiya etiladi.

## Mualliflik va litsenziya

Loyiha **MIT litsenziyasi** ostida tarqatiladi. Har qanday o'zgarishlar va qayta tarqatishda mualliflik huquqlariga rioya qiling.

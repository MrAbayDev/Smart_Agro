# SmartAgro

SmartAgro - bu zamonaviy qishloq xo'jaligi korxonalari uchun kompleks boshqaruv va monitoring tizimi. Laravel frameworkida qurilgan ushbu tizim fermerlar va agrobiznes vakillariga o'z faoliyatlarini samarali boshqarish, hosildorlikni oshirish va resurslardan oqilona foydalanish imkonini beradi.

## Tizim talablari

- PHP >= 8.1
- MySQL >= 8.0
- Composer
- Node.js va NPM

## O'rnatish

1. Loyiha repozitoriyasini klonlash:
   ```
   git clone https://github.com/your-username/smart-agro.git
   cd smart-agro
   ```

2. Composer orqali kerakli paketlarni o'rnatish:
   ```
   composer install
   ```

3. NPM paketlarini o'rnatish va frontend resurslarni kompilyatsiya qilish:
   ```
   npm install
   npm run dev
   ```

4. `.env.example` faylidan nusxa olib, `.env` faylini yaratish va sozlash:
   ```
   cp .env.example .env
   ```
   `.env` faylida ma'lumotlar bazasi bog'lanishi va boshqa sozlamalarni o'zgartiring.

5. Ilova uchun yangi kalit generatsiya qilish:
   ```
   php artisan key:generate
   ```

6. Ma'lumotlar bazasi migratsiyalarini amalga oshirish:
   ```
   php artisan migrate
   ```

7. (Ixtiyoriy) Test ma'lumotlarini yuklash:
   ```
   php artisan db:seed
   ```

## Ishga tushirish

Lokal development serverni ishga tushirish:
```
php artisan serve
```

Tizimga brauzeringiz orqali `http://localhost:8000` manzilida kirishingiz mumkin.

## Asosiy funksionallik

1. **Foydalanuvchilar boshqaruvi**: Tizimga kirish, ro'yxatdan o'tish va foydalanuvchi rollarini boshqarish.

2. **Fermalar va maydonlar**: Ferma xo'jaliklari va ekin maydonlarini ro'yxatga olish va boshqarish.

3. **Ekinlar monitoringi**: Ekin turlarini kiritish, ekin sikllarini kuzatish va hosildorlikni bashorat qilish.

4. **Resurslar boshqaruvi**: Urug', o'g'it va boshqa resurslarni hisobga olish va ulardan foydalanishni kuzatish.

5. **Ob-havo ma'lumotlari**: Tashqi API'lar orqali ob-havo ma'lumotlarini olish va tahlil qilish.

6. **IoT integratsiyasi**: Dala sensori ma'lumotlarini qabul qilish va qayta ishlash.

7. **Moliyaviy boshqaruv**: Daromad va xarajatlarni kuzatish, moliyaviy hisobotlarni shakllantirish.

8. **Vazifalar rejalashtirish**: Qishloq xo'jaligi ishlarini rejalashtirish va nazorat qilish.

9. **Tahliliy hisobotlar**: Turli ko'rsatkichlar bo'yicha vizual hisobotlar yaratish.

## API hujjatlari

API hujjatlarini ko'rish uchun `http://localhost:8000/api/documentation` manziliga o'ting.

## Testlarni ishga tushirish

Loyiha testlarini ishga tushirish uchun quyidagi buyruqni bajaring:
```
php artisan test
```

## Muammolar yuzaga kelganda

Agar tizimni o'rnatish yoki ishlatish jarayonida muammolarga duch kelsangiz, iltimos, [Issues](https://github.com/your-username/smart-agro/issues) bo'limida yangi muammo yarating.

## Hissa qo'shish

Loyihaga hissa qo'shish uchun [CONTRIBUTING.md](CONTRIBUTING.md) faylini o'qing.

## Litsenziya

Bu loyiha MIT litsenziyasi ostida tarqatiladi. Batafsil ma'lumot uchun [LICENSE](LICENSE) faylini ko'ring.

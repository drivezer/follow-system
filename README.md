หลังจาก clone เสร็จ
1. รัน composer install ในไฟล์ที่ clone มา
2. แก้ไขฐานข้อมูลในไฟล์ .env
3. รัน php artisan key:generate
4. รัน php artisan migrate
5. รัน npm install ถ้ารันไม่ได้แสดงว่าไม่มี NodeJS ให้ไปติดตั้ง NodeJS ก่อน
6. รัน npm run dev
7. รัน php artisan serve เพื่อเปิดงาน

https://github.com/overtrue/laravel-follow

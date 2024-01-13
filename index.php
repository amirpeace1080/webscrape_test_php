<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webscrape</title>
</head>
<body>
    
</body>
</html>

<?php
// تعیین آدرس وب‌سایت مورد نظر
$url = 'https://jobinja.ir/jobs?&filters%5Bjob_categories%5D%5B0%5D=%D9%88%D8%A8%D8%8C%E2%80%8C%20%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D9%87%E2%80%8C%D9%86%D9%88%DB%8C%D8%B3%DB%8C%20%D9%88%20%D9%86%D8%B1%D9%85%E2%80%8C%D8%A7%D9%81%D8%B2%D8%A7%D8%B1&filters%5Bkeywords%5D%5B0%5D=&filters%5Bkeywords%5D%5B0%5D=&filters%5Bremote%5D=1&preferred_before=1705166377&sort_by=relevance_desc';
// $url = 'https://quera.org/magnet/jobs/category/remote';

// ایجاد یک منبع cURL
$ch = curl_init($url);

// تنظیم گزینه‌های cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// اجرای درخواست cURL و دریافت محتوا
$response = curl_exec($ch);

// بررسی خطاها
if (curl_errno($ch)) {
    echo 'خطا: ' . curl_error($ch);
}

// بستن منبع cURL
curl_close($ch);

// پردازش و نمایش محتوا
echo $response;
?>
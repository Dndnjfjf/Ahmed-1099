<?php
// --- تعريف البيانات كمتغيرات PHP ---
$pageTitle = "Proxy Control Panel"; // يمكنك استخدامه في وسم <title>
$panelHeader = "Info About ahmed ";
$telegramLabel = "vipQvip@";
$telegramValue = "Telegram";
$instagramLabel = "5f54_@";
$instagramValue = "Instagram";
$channelLabel = "XXvipahmedXX@";
$channelValue = "My Channel";
$status = "Online";
// يمكنك استخدام تاريخ ثابت أو تاريخ ووقت الخادم الحالي
// $updateTimestamp = "4/19/2025, 12:01:21 PM"; // تاريخ ثابت
$updateTimestamp = date("n/j/Y, g:i:s A"); // تاريخ ووقت الخادم الحالي (ديناميكي)

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap'); /* يمكنك تغيير الخط إذا أردت */

        body {
            margin: 0;
            padding: 0;
            font-family: 'Tajawal', sans-serif; /* استخدام خط يدعم العربية */
            background: linear-gradient(135deg, #1e1a3e, #3b326d); /* خلفية متدرجة مشابهة */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* لجعل اللوحة تتوسط الشاشة عمودياً */
            color: #e0e0e0; /* لون النص الافتراضي الفاتح */
        }

        .control-panel {
            background: rgba(40, 40, 80, 0.4); /* لون خلفية اللوحة شبه شفاف بنفسجي غامق */
            border-radius: 20px; /* حواف دائرية */
            padding: 35px 40px;
            width: 450px; /* عرض اللوحة */
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37); /* ظل خفيف */
            backdrop-filter: blur(10px); /* تأثير الزجاج الضبابي */
            -webkit-backdrop-filter: blur(10px); /* لدعم متصفح سفاري */
            border: 1px solid rgba(255, 255, 255, 0.1); /* حدود بيضاء شفافة خفيفة جداً */
            text-align: center; /* محاذاة النص في الوسط مبدئياً */
        }

        .panel-header {
            font-size: 1.6em; /* حجم خط العنوان */
            font-weight: 700; /* خط عريض */
            color: #5ff2f2; /* لون سماوي مشرق */
            margin-bottom: 30px; /* مسافة أسفل العنوان */
            direction: ltr; /* جعل محاذاة هذا النص من اليسار لليمين لاسم المستخدم */
            text-align: center;
            /* --- إضافة تأثير التوهج --- */
            text-shadow: 0 0 8px rgba(95, 242, 242, 0.8); /* ظل بنفس لون النص مع تمويه وشفافية */
        }

        .data-row {
            background: rgba(0, 0, 0, 0.2); /* خلفية أغمق قليلاً للصفوف */
            border-radius: 10px; /* حواف دائرية للصفوف */
            padding: 12px 20px;
            margin-bottom: 18px; /* مسافة بين الصفوف */
            display: flex; /* لتوزيع العناصر داخل الصف */
            justify-content: space-between; /* توزيع المسافة بين العنصرين */
            align-items: center; /* محاذاة العناصر عمودياً في المنتصف */
        }

        .data-row .label {
            font-size: 1em;
            color: #cccccc; /* لون رمادي فاتح للعنوان */
        }

        .data-row .value {
            font-size: 1.1em;
            font-weight: 700; /* خط عريض للقيمة */
            color: #5ff2f2; /* اللون السماوي الافتراضي للقيمة */
             /* --- إضافة تأثير التوهج --- */
             text-shadow: 0 0 8px rgba(95, 242, 242, 0.8); /* ظل بنفس لون النص مع تمويه وشفافية */
        }

        .data-row .value.red {
            color: #ff6b6b; /* لون أحمر للقيمة صفر */
            /* --- إزالة أو تغيير التوهج للقيمة الحمراء (اختياري) --- */
            text-shadow: 0 0 8px rgba(255, 107, 107, 0.6); /* يمكن إضافة توهج أحمر خفيف إذا أردت */
            /* أو يمكنك إزالة التوهج تماماً بإضافة: text-shadow: none; */
        }

        .panel-footer {
            margin-top: 30px; /* مسافة فوق الفوتر */
            font-size: 0.85em; /* حجم خط أصغر للفوتر */
            color: #a0a0a0; /* لون رمادي أبهت للفوتر */
            text-align: center;
            direction: ltr; /* جعل محاذاة هذا النص من اليسار لليمين للتاريخ */
        }

    </style>
</head>
<body>

    <div class="control-panel">
        <div class="panel-header">
             <?php echo htmlspecialchars($panelHeader); ?>
        </div>

        <div class="data-row">
            <span class="label"><?php echo htmlspecialchars($telegramLabel); ?></span>
            <span class="value"><?php echo htmlspecialchars($telegramValue); ?></span>
        </div>

        <div class="data-row">
            <span class="label"><?php echo htmlspecialchars($instagramLabel); ?></span>
            <span class="value"><?php echo htmlspecialchars($instagramValue); ?></span>
        </div>

        <div class="data-row">
            <span class="label"><?php echo htmlspecialchars($channelLabel); ?></span>
            <span class="value red"><?php echo htmlspecialchars($channelValue); ?></span>
        </div>

        <div class="panel-footer">
            Status: <?php echo htmlspecialchars($status); ?> | Updated: <?php echo htmlspecialchars($updateTimestamp); ?>
        </div>
    </div>

</body>
</html>

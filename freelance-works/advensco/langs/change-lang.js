var arrLang = {
    'en': {
        /****** navtop ******/
        'home': 'Home',
        'about': 'About Us',
        'services': 'Our Services',
        'whyus': 'Why Us?',
        'ourtechnology': 'Our Technology',
        'pointofsale': 'Point Of Sale',
        'ourclients': 'Our Clients',
        'contactus': 'Contact Us',
        /********** advensco **********/
        'advensco': 'ADVENSCO provide you with the best solution to manage your investment in a way that is not just more accurate and easier but in a way, that insure expanding your business too. so, we will provide you with some of our technological solutions as beﬁts with successful managers and business owners.',
        /********** pos li **********/
        'posli1': 'Supermarkets and Shops management',
        'posli2': 'Restaurants and Cafes management',
        /********** lower h3 **********/
        'lowerh3': 'To adjust and control the financial income of your investment in the field of restaurants cafes and in the most of direct sales areas using our POS where we provide you:',
        /******** lower li ********/
        'lowerli1': 'VAT Management with an ease of mind.',
        'lowerli2': 'Easy direct sales interface that designed to suit working on touch screens display.',
        'lowerli3': 'Full Detailed Reports.',
        'lowerli4': 'Full surveillance for every branch and the ability to see reports remotely on real time.',
        'lowerli5': 'Customers Payable and receivable account tracking.',
        'lowerli6': 'Thermal printer and barcode reader support.',
        'lowerli7': 'Support more than POS for every branch.',
        'lowerli8': 'Manage different work periods.',
        'lowerli9': 'Full control over the inventory.',
        'lowerli10': 'Full control of program users and the ability to specialize user’s permission to insure the privacy of accounts and reports.',
        /********** navleft **********/
        'payments': 'Payments',
        'payingoff': 'paying Off',
        'inventorymanagement': 'Inventory Management',
        'customerloyalty': 'Customer Loyalty',
        'restaurantmanagement': 'Restaurant Management',
        'products': 'Products',
        'webapplication': 'Web Application',
        /****** payments section li *****/
        'paymentsli1': 'payment methods',
        'paymentsli2': 'Credit / debit cards',
        'paymentsli3': 'Split the tenders',
        'paymentsli4': 'Round the coin',
        'paymentsli5': 'Offline payments',
        'paymentsli6': 'Billing',
        'paymentsli7': 'Accounting',
        'paymentsli8': 'Customer advice',
        /****** payments section p *****/
        'paymentsp1': 'Payment methods are available via cash, checks, and credit cards. New types of payment methods can also be added.',
        'paymentsp2': 'All electronic payments are processed by external payment terminals.',
        'paymentsp3': 'A single order can be paid as a split payment between multiple parties, as well as separate payment methods.',
        'paymentsp4': 'Prices and payments can be rounded to the smallest denomination of currency.',
        'paymentsp5': 'Offline requests are synced when reconnected.',
        'paymentsp6': 'Prepare and print invoices for your business customers.',
        'paymentsp7': 'Payments are directly integrated into the Odoo Accounting system to make the registration process simple and reliable.',
        'paymentsp8': 'Supports customer gratuities, whether for an additional amount or by means of converting change into tip.',
        /******* paying off section li ********/
        'payingoffli1': 'Prices and discounts',
        'payingoffli2': 'Parallel commands',
        'payingoffli3': 'Custom receipts',
        'payingoffli4': 'Weight at the counter',
        'payingoffli5': 'Search speed',
        'payingoffli6': 'Multi-step checkout',
        'payingoffli7': 'Selling on the go',
        'payingoffli8': 'Dynamic barcode codes',
        /******* paying off section p ********/
        'payingoffp1': 'Set customer prices or view relative discounts on a single or full order product.',
        'payingoffp2': 'Put orders aside and execute multiple orders at the same time.',
        'payingoffp3': 'Advertise your current offers, opening hours, and upcoming events on your printed receipts.',
        'payingoffp4': 'Calculate product weight during checkout with electronic range integration.',
        'payingoffp5': 'Find customers and products quickly with integrated search features.',
        'payingoffp6': 'Sell at one point of sale and pay at another point of sale through multi-step payment.',
        'payingoffp7': 'With iPad and Android tablet support, you can sell anywhere in your store or restaurant.',
        'payingoffp8': 'Include price, weight, and discount information directly in your barcode.',
        /******  management li ******/
        'managementli1': 'Record requests',
        'managementli2': 'daily sales',
        'managementli3': 'Cashier accounts',
        'managementli4': 'Cash flow',
        'managementli5': 'Inventory and merchandise',
        'managementli6': 'Privileges',
        /******  management p ******/
        'managementp1': 'View all previous requests and also search by customer, product, cashier, or date.',
        'managementp2': 'Track daily sales and totals for each payment type.',
        'managementp3': 'Manage and secure multiple ATM accounts with pin badges or symbols.',
        'managementp4': 'Preview cash register adjustments and easily check cash contents at the end of the day.',
        'managementp5': 'Monitor your inventory in real time, manage your inventory in all locations, and review shipments with the integrated Odoo Stock system',
        'managementp6': 'Pre-configure franchise stores, review your sales, manage inventory and centralize accounting.',
        /****** customer li *****/
        'customerli1': 'Customer record',
        'customerli2': 'Select the customer',
        'customerli3': 'Building block system',
        'customerli4': 'Loyalty cards',
        /****** customer p ******/
        'customerp1': 'Easily identify your customers by registering their email and contact address, allowing you to view discounts and keep track of individual sales.',
        'customerp2': 'You can look to your customers with the built-in search feature or learn about them using the barcode printed on their loyalty card.',
        'customerp3': 'Record your customer’s VAT number and include it in invoices.',
        'customerp4': 'Reward customers with loyalty points and exchange them for gifts or discounts. Points can be earned depending on the product, demand or sale value.',
        /****** restaurant li ******/
        'restaurantli1': 'Floor plans',
        'restaurantli2': 'Seat management',
        'restaurantli3': 'Kitchen print',
        'restaurantli4': 'Late requests',
        'restaurantli5': 'Kitchen order notes',
        'restaurantli6': 'Divide the bills',
        /****** restaurant p ******/
        'restaurantp1': 'Assign orders to tables and receive an overview of your restaurant’s floors as well as make changes on the go with the graphical editor.',
        'restaurantp2': 'Track your guests with a summary of your restaurant capacity and table availability.',
        'restaurantp3': 'Send order instructions to bar and kitchen printers. Instructions can be sent to different printers automatically depending on the product category.',
        'restaurantp4': 'Receive orders for different meal dishes at once with the ability to send them to the kitchen printer at separate times.',
        'restaurantp5': 'Add notes to customer preferences, allergies, or special requests and send them to the kitchen or bar printers.',
        'restaurantp6': 'Allow customers to pay separately or at different times by splitting orders.',
        /****** Product li ******/
        'productsli1': 'Product categories',
        'productsli2': 'Search for a product',
        'productsli3': 'Measurement units',
        'productsli4': 'Multiple barcode',
        'productsli5': 'Product variants',
        'productsli6': 'The number of products is large',
        /****** Product p ******/
        'productsp1': 'Organize your products by hierarchical product categories, sort them by popularity, and display different categories at different points of sale.',
        'productsp2': 'Find products quickly by name, barcode, or description thanks to the integrated search feature.',
        'productsp3': 'Sell your products with custom or pre-defined units of measurement and update your inventory accordingly.',
        'productsp4': 'Configure multiple barcodes for the same product through barcode ratings.',
        'productsp5': 'Sell different sizes, colors, or configurations for the same product through product variants.',
        'productsp6': 'Odoo’s POS system is able to perform on more than 100,000 products.',
        /****** web li ******/
        'webli1': 'Browser support',
        'webli2': 'iPad first',
        'webli3': 'Fixed computer compatibility',
        'webli4': 'Work without an internet connection',
        'webli5': 'HTML5 styles',
        /****** web p ******/
        'webp1': 'Odoo Point of Sale System is a web based application that can be downloaded to any device and operating systems that run Chrome, Firefox or Safari.',
        'webp2': 'Microsoft Windows, Apple OSX, Linux, Android and iOS are all supported operating systems.',
        'webp3': 'The Odoo Point of Sale System is used on modern iPad or Android devices of similar size and performance.',
        'webp4': 'Odoo’s POS system can also be used on stationary computers, tablets, and industrial touch screens.',
        'webp5': 'The Odoo Point of Sale system remains in operation even during network disconnection. The web browser can be disconnected from the network without losing data.',
        'webp6': 'Odoo’s POS system is open source and can be customized with HTML5 / JS expansion modules.',
        /****** footer *****/
        'footer': '© 2017 Advensco All Rights Reserved',
        
        /******* contact_h1 *******/
        'contact_h1': 'Send us a message and we will contact you',
        'mobile': 'mobile:'
    },
    'ar': {
        /******** navtop ********/
        'home': 'الرئيسية',
        'about': 'نبذة عنا',
        'services': 'خدماتنا',
        'whyus': 'لماذا نحن؟',
        'ourtechnology': 'تقنياتنا',
        'pointofsale': 'نقطة البيع',
        'ourclients': 'عملائنا',
        'contactus': 'تواصل معنا',
        /******** advensco ********/
        'advensco':'نوفر لك أفضل الحلول لإدارة استثمارك، بشكل لا يتيح لك فقط إدارة أسهل وأدق، بل وتوسيع أفق استثماراتك أيضا، لذلك سنقدم لكم بعضا من حلولنا التكنولوجية لإدارة استثماراتكم بما يليق بأصحاب عمل ومديرين ناجحين',
        /******** pos li ********/
        'posli1': 'إدارة السوبر ماركت والمحلات التجارية',
        'posli2': 'إدارة المطاعــم والكافيهـــات',
        /******** lower h3 ********/
        'lowerh3': 'لضبط ومراقبة الدخل المالي لاستثمارك في مجال المطاعم والمقاهي ومعظم مجالات البيع المباشر باستخدام برامج نقاط البيع حيث نوفر لك:',
        /******** lower li ******/
        'lowerli1': 'واجهة للبيع المباشر سهلة الاستخدام ومصممة لتناسب العنل على شاشات اللمس.',
        'lowerli2': 'إدارة كاملة لمستخدمي البرامج وتخصيص صلاحيات الاستخدام لضمان خصوصية التقارير والحسابات.',
        'lowerli3': 'عرض تقارير يومية مفصلة لكل فترة عمل بالإضافة إلى التقارير الشهرية.',
        'lowerli4': 'إدارة وتسجيل حسابات العملاء المختلفة في عمليات البيع الآجل والفوري.',
        'lowerli5': 'دعم المراقبة اللحظية للفروع المختلفة والتقارير المفصلة لكل فرع.',
        'lowerli6': 'دعم أجهزة قارئ الباركود وطابعة الفواتير الحرارية.',
        'lowerli7': 'دعم أكثر من نقطة بيع لكل فرع.',
        'lowerli8': 'إدارة فترات العمل المختلفة.',
        'lowerli9': 'إدارة شاملة للمخازن.',
        'lowerli10': 'تقرير وحسابات ضريبة القيمة المضافة بسهولة.',
        /******** navleft ********/
        'payments': 'المدفوعات',
        'payingoff': 'الدفع',
        'inventorymanagement': 'إدارة المخزون',
        'customerloyalty': 'ولاء العميل',
        'restaurantmanagement': 'إدارة المطعم',
        'products': 'المنتجات',
        'webapplication': 'تطبيق الويب',
        /****** payments section li *****/
        'paymentsli1': 'طرق الدفع',
        'paymentsli2': 'بطاقات الائتمان/ الخصم',
        'paymentsli3': 'قسّم المناقصات',
        'paymentsli4': 'تقريب العملة',
        'paymentsli5': 'المدفوعات دون اتصال بالشبكة',
        'paymentsli6': 'فوترة',
        'paymentsli7': 'محاسبة',
        'paymentsli8': 'نصائح العملاء',
        /****** payments section p *****/
        'paymentsp1': 'تتوفر طرق السداد عن طريق النقد والشيكات وبطاقات الائتمان. يمكن أيضًا إضافة أنواع جديدة من طرق السداد.',
        'paymentsp2': 'تتم معالجة جميع المدفوعات الإلكترونية عن طريق محطات الدفع الخارجية.',
        'paymentsp3': 'يمكن سداد طلب واحد كدفعة مقسمة بين أطراف متعددة بالإضافة إلى طرق دفع منفصلة.',
        'paymentsp4': 'يمكن تقريب الأسعار والمدفوعات إلى أصغر فئة من العملة.',
        'paymentsp5': 'يتم مزامنة الطلبات التي تتم أثناء عدم الاتصال بالشبكة عند إعادة الاتصال.',
        'paymentsp6': 'قم بإعداد الفواتير وطباعتها لعملائك التجاريين.',
        'paymentsp7': 'يتم دمج المدفوعات مباشرةً في نظام Odoo للمحاسبة لجعل عملية التسجيل بسيطة وموثوقة.',
        'paymentsp8': 'تدعم إكراميات العملاء سواء كانت مبلغًا إضافيًا أو عن طرق تحويل الفكة إلى إكرامية.',
        /********   ********/
        'payingoffli1': 'الأسعار والخصومات',
        'payingoffli2': 'الأوامر المتوازية',
        'payingoffli3': 'إيصالات استلام مخصصة',
        'payingoffli4': 'الوزن عند العداد',
        'payingoffli5': 'سرعة البحث',
        'payingoffli6': 'الدفع متعدد الخطوات',
        'payingoffli7': 'البيع أثناء التنقل',
        'payingoffli8': 'رموز الباركود الديناميكية',
        /******* paying off section p ********/
        'payingoffp1': 'حدد أسعار العميل أو اعرض الخصومات النسبية على منتج واحد أو كامل الطلب.',
        'payingoffp2': 'ضع الأوامر جانبًا ونفذ العديد من الأوامر في نفس الوقت.',
        'payingoffp3': 'الإعلان عن العروض الحالية الخاصة بك، ساعات العمل ، والأحداث القادمة على الإيصالات المطبوعة الخاصة بك.',
        'payingoffp4': 'حساب وزن المنتج أثناء الخروج مع تكامل النطاق الإلكتروني.',
        'payingoffp5': 'اعثر على العملاء والمنتجات بسرعة بفضل خصائص البحث المدمجة.',
        'payingoffp6': 'قم بالبيع في إحدى نقاط البيع وسدد في نقطة بيع أخرى من خلال الدفع متعدد الخطوات.',
        'payingoffp7': 'مع دعم iPad و Android اللوحي ، يمكنك البيع في أي مكان داخل متجرك أو مطعمك.',
        'payingoffp8': 'قم بتضمين معلومات السعر والوزن والخصم مباشرةً في الباركود الخاص بك.',
        /******  management li ******/
        'managementli1': 'سجل الطلبات',
        'managementli2': 'المبيعات اليومية',
        'managementli3': 'حسابات أمين الصندوق',
        'managementli4': 'التدفق النقدي',
        'managementli5': 'المخزون والبضائع',
        'managementli6': 'امتيازات',
        /******  management p ******/
        'managementp1': 'عرض جميع الطلبات السابقة وكذلك البحث عن طريق العميل أو المنتج أو أمين الصندوق أو التاريخ.',
        'managementp2': 'تتبع المبيعات اليومية والإجماليات لكل نوع دفعة.',
        'managementp3': 'إدارة حسابات الصراف المتعددة وتأمينها مع شارات أو رموز دبوس.',
        'managementp4': 'قم بمعاينة تسويات السجل النقدي والتحقق بسهولة من المحتويات النقدية في نهاية اليوم.',
        'managementp5': 'مراقبة مخزونك في الوقت الحقيقي، وإدارة مخزونك في جميع المواقع، ومراجعة الشحنات مع نظام Odoo Stock المدمج',
        'managementp6': 'قم بتهيئة متاجر الامتياز مسبقًا واستعراض مبيعاتك وإدارة المخزون والمحاسبة بصورة مركزية.',
        /****** customer li *****/
        'customerli1': 'سجل العملاء',
        'customerli2': 'حدد العملاء',
        'customerli3': 'نظام كتل الإنشاء',
        'customerli4': 'بطاقات الولاء',
        /****** customer p ******/
        'customerp1': 'حدد عملائك بسهولة من خلال تسجيل البريد الإلكتروني وعنوان التواصل، مما يتيح لك عرض الخصومات واستمرار تتبع المبيعات الفردية.',
        'customerp2': 'يمكنك التطلع إلى عملائك باستخدام ميزة البحث المضمنة أو التعرف عليها باستخدام الباركود المطبوع على بطاقة الولاء الخاصة بهم.',
        'customerp3': 'سجل رقم ضريبة القيمة المضافة الخاص بعميلك وأدرجه في الفواتير.',
        'customerp4': 'كافئ العملاء بنقاط الولاء وأبدلها بهدايا أو خصومات. يمكن اكتساب النقاط حسب المنتج أو الطلب أو قيمة البيع.',
        /****** restaurant li ******/
        'restaurantli1': 'مخططات الطوابق',
        'restaurantli2': 'ادارة المقاعد',
        'restaurantli3': 'طباعة المطبخ',
        'restaurantli4': 'الطلبات المتأخرة',
        'restaurantli5': 'ملاحظات طلب المطبخ',
        'restaurantli6': 'قسّم الفواتير',
        /****** restaurant p ******/
        'restaurantp1': 'يمكنك تعيين الطلبات للجداول والحصول على نظرة عامة على طوابق مطعمك وكذلك إجراء تغييرات أثناء التنقل باستخدام محرر الرسوم البيانية.',
        'restaurantp2': 'تتبع ضيوفك من خلال ملخص عن سعة المطعم الخاص بك وتوافر الطاولات.',
        'restaurantp3': 'أرسل تعليمات الأمر إلى طابعات البار والمطبخ. ويمكن إرسال التعليمات إلى طابعات مختلفة تلقائيًا بناءً على فئة المنتج.',
        'restaurantp4': 'استلم طلبات أطباق الوجبات المختلفة مرة واحدة مع إمكانية إرسالها إلى طابعة المطبخ في أوقات منفصلة.',
        'restaurantp5': 'إضافة ملاحظات لتفضيلات العملاء ، والحساسية ، أو طلبات خاصة وإرسالها إلى طابعات المطبخ أو البار.',
        'restaurantp6': 'دع العملاء يدفعون بشكل منفصل أو في أوقات مختلفة عن طريق تقسيم الطلبات.',
        /****** Product li ******/
        'productsli1': 'فئات المنتج',
        'productsli2': 'بحث عن منتج',
        'productsli3': 'وحدات القياس',
        'productsli4': 'باركود متعدد',
        'productsli5': 'متغيرات المنتج',
        'productsli6': 'عدد المنتجات الكبيرة',
        /****** Product p ******/
        'productsp1': 'نظم منتجاتك من خلال فئات المنتج ذات التسلسل الهرمي ورتبها حسب رواجها واعرض الفئات المختلفة في نقاط بيع مختلفة.',
        'productsp2': 'اعثر على المنتجات بسرعة حسب الاسم أو الباركود أو الوصف بفضل خاصية البحث المدمجة.',
        'productsp3': 'قم ببيع منتجاتك باستخدام وحدات القياس المخصصة أو المحددة مسبقًا وحدّث مخزونك وفقًا لذلك.',
        'productsp4': 'تهيئة الباركود المتعدد لنفس المنتج من خلال تصنيفات الباركود.',
        'productsp5': 'قم ببيع مختلف الأحجام أو الألوان أو تكوينات نفس المنتج من خلال متغيرات المنتج.',
        'productsp6': 'يتميز نظام نقطة البيع ب Odoo بقدرته على الأداء في أكثر من 100.000 منتج.',
        /****** web li ******/
        'webli1': 'دعم المتصفح',
        'webli2': 'iPad أولاً',
        'webli3': 'توافق الحاسوب الثابت',
        'webli4': 'العمل دون اتصال بشبكة الإنترنت',
        'webli5': 'أنماط HTML5',
        /****** web p ******/
        'webp1': 'نظام نقطة البيع ب Odoo هو عبارة عن تطبيق قائم على شبكة الويب ويمكن تنزيله على أي جهاز وأنظمة التشغيل التي تدير كروم أو فايرفوكس أو سفاري.',
        'webp2': 'مايكروسوفت وندوز و أبل OSX و Linux و اندرويد و iOS كلها أنظمة تشغيل مدعومة.',
        'webp3': 'يُستخدم نظام نقطة البيع ب Odoo على أجهزة الأيباد أو الأندرويد الحديثة ذات الحجم والأداء المماثل.',
        'webp4': 'يمكن أيضًا استخدام نظام نقطة البيع ب Odoo على أجهزة الحاسوب الثابتة والأجهزة اللوحية وشاشات اللمس الصناعية.',
        'webp5': 'يظل نظام نقطة البيع ب Odoo قيد العمل حتى أثناء انقطاع الاتصال بالشبكة. ويمكن فصل متصفح الويب عن الشبكة دون فقدان البيانات.',
        'webp6': 'يعتبر نظام نقطة البيع ب Odoo من الأنظمة مفتوحة المصدر ويمكن تخصيصه من خلال وحدات التوسعة HTML5/JS .',
        /****** footer *****/
        'footer': '© 2017 Advensco جميع الحقوق محفوظة',
        
        /******* contact_h1 *******/
        'contact_h1': 'اترك رسالتك ونحن سنتواصل معك',
        'mobile': 'موبايل:'
    }
};

// Process translation
$(function () {
    $('.translate').click(function () {
        var lang = $(this).attr('id');

        $('.lang').each(function (index, item) {
            $(this).text(arrLang[lang][$(this).attr('key')]);
        });
    });

    /* arabic */
    $('#ar').click(function () {
        $('body.point-page, .point-page #main-wrapper, .point-page .main-content .intro, .point-page .software-ar, .point-page .software-en, .point-page .main-content .intro .upper-part .pos li, .point-page .main-content .intro .lower-part ul li, .point-page .main-content .intro .upper-part .pos li, .point-page .main-content .contact h1, .point-page .main-content .contact h2, .point-page .left-sidebar').addClass('rtl');
    });

    /* english */
    $('#en').click(function () {
        $('body.point-page, .point-page #main-wrapper, .point-page .main-content .intro, .point-page .software-ar, .point-page .software-en, .point-page .main-content .intro .upper-part .pos li, .point-page .main-content .intro .lower-part ul li, .point-page .main-content .intro .upper-part .pos li, .point-page .main-content .contact h1, .point-page .main-content .contact h2').removeClass('rtl');
    });
});

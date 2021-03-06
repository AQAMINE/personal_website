<?php
  //english file


function langfunc($keyword)
{
  //keyword array
  STATIC  $ang = array(
        'dir' => 'rtl',
        'siteTitle' => 'Akil Alarbi',
        'file' => 'arabe.php',
        'lang' => 'arab',
        'home' => 'HOME',
        'years' => 'Years',
        'contqct' => 'CONTACT US',
        'about' => 'Aboute Me',
        'discri' => 'Lecturer at Sultan Qaboos University',
        //about card
        'ctitle' => 'Hi!, Iam Akil Alarbi',
        'cp' => 'Lecturer at Sultan Qaboos University,Faculty of Law since 1997 Member of the Board of Directors of the Omani Bar Association',
        'c1' => 'Name :',
        'c2' => 'Age :',
        'c3' => 'Experience :',
        'c4' => 'Email :',
        'c5' => 'Instagram :',
        'c6' => 'Twitter :',
        'c7' => 'Adresse :',
        'aq'  => 'المؤهلات العلمية',
        'aq1' => 'بكلوريس: علوم شرعية من معهد العلوم الشرعية – سلطنة عمان – 1996م بتقدير جيد جدا .',
        'aq2' => 'ماجستير فقه وأصوله : جامعة آل البيت – المملكة الأردنية الهاشمية – 2002م بتقدير جيد جدا .',
        'aq3' => 'دكتوراه  فلسفة في الاقتصاد والمصارف الإسلامية – جامعة اليرموك _ المملكة الأردنية  الهاشمية – 2009م بتقدير جيد جدا .',
        'aq4' => 'دكتوراه في العلوم الإسلامية تخصص الفقه المقارن – المعهد العالي لأصول الدين – جامعة الزيتونة – الجمهورية التونسية – 2009م .) قبلت وهي قيد المناقشة ) ',
        'aq5' => 'أستاذ محامي مقيد بوزارة العدل بدرجة استئناف .',
        'pe' => 'الخبرات العملية',
        'pe1' => 'مدرس بكلية الحقوق ( كلية الشريعة والقانون سابقا ) سلطنة عمان – جامعة السلطان قابوس- من 1997م إلى الان .',
        'pe2' => 'استاذ الاقتصاد الكلي والجزئي بكلية الحقوق جامعة السلطان قابوس .',
        'pe3' => 'استاذ المالية العامة بكلية الحقوق جامعة السلطان قابوس.',
        'pe4' => 'استاذ زائر بكلية العلوم الشرعية بمسقط 2012- 2014م',
        'pe5' => 'مراجعة عقود وبرامج الاستثمار في شركة جبرين بسلطنة عمان منذ عام 2004م',
        'pe6' => 'الرقابة الشرعية على عقود استثمار محلية أهلية تابعة لشركات عمانية بواسطة مكتب المحاماة المسجل بدرجة استئناف بمسقط .', 
        'pe7' => 'عضو اللجنة التأسيسية لشركة الحمراء الأهلية للاستثما.',
        'pe8' => 'رئيس مجلس إدارة مكتب الدكتور عبد الله العبري للمحاماة والاستشارات القانونية.',
        'pe9' => 'عضو هيئة الرقابة الشرعية لنافذة ميسرة للصيرفة ال',  
        'pe10' => 'عضو هيئة الرقابة الشرعية لنافذة ميسرة للصيرفة السلامية من بنك ظفار .', 
        'pe11' => 'عضو مجلس إدارة قناة الاستقامة الفضائية .',
        'cc' => 'الدورات والمؤتمرات',
        'cc1' => 'دورة الصيرفة الاسلامية للاستاذ الدكتور على محي الدين القره داغي 2011م .',
        'cc2' => 'دورة التصكيك في الصيرفة الإسلامي أ.د حسين حامد حسان – مكتب الإفتاء – سلطنة عمان 2011م .',
        'cc3' => 'دورة البطاقات البنكية لمعالي الاستاذ الدكتور عبد الوهاب سليمان عضو هيئة كبار العلماء بالمملكة العربية السعودية.',
        'cc4' => 'دورة الاقتصاد الإسلامي للدكتور سمير الشاعر ( لبنان).',
        'cc5' => 'الدورة المتقدمة البرمجة اللغوية العصبية معتمدة من المركز الكندي للبرمجة ( 2005م).',
        'cc6' => 'دورة الرخصة الدولية لقيادة الحاسوب ( ICDL) ، جامعة اليرموك 2007م.',
        'cc7' => 'دورات اللغة الإنجليزية (تحدث وقراءة ).',
        'cc8' => 'مؤتمر الصيرفة الإسلامية ،قصر البستان ,مسقط 2010م .',
        'cc9' => 'مؤتمر مستجدات العمل المصرفي التقليدي والإسلامي ، المملكة الأردنية ، جامعة آل البيت 2011م .',
        'cc10' => 'دورات متعددة في اللغة الإنجليزية .',
        'sk' => 'المهارات',
        'sk1' => 'كتابة العقود التجارية والاستثمارية بجميع أنواعها بما يتوافق مع أحكام الشريعة الاسلامية',
        'sk2' => 'الترافع في القضايا التجارية في المحاكم العمانية بجميع أنواعها حتى درجة استئناف .',
        'sk3' => 'الرقابة على مؤسسات شركات الاستثمار الاسلامية .',
        'sk4' => 'عقد دورات تسويق الصيرفة الإسلامية وأخلاقيات العمل المصرفي الإسلامي .',
        'sk5' => 'إعداد وتقديم البرامج التلفزيونية والإذاعية من 1996م وحتى 2011م ( إذاعة وتلفزيون سلطنة عمان ).',
        'sk6' => 'تنظيم الندوات والمحاضرات العلمية والشرعية والأدبية .',
        'sk7' => 'إدارة المنتديات الالكنرونية .',
        'sk8' => 'كتابة الشعر العربي الفصيح .',
        'sk9' => 'تنظيم وإدارة الرحلات العلمية والسياحية والمخيمات.',
        'sk10' => 'برامج متنوعة للسعادة الزوجية ',
        'sk11' => 'إدارة الحوارات الهادفة.',
        'sk12' => 'نبذ العنف والمذهبية والطائفية والمشاركة في كل جهود الوحدة والتقريب بين المسلمين.',
        'pub' => 'المؤلفات',
        'pub1' => 'كتاب "قواعد الضمان وتطبيقاته المصرفية والاقتصادية" مطبوعات دار الغندور – مصر 2013م .',
        'pub2' => 'كتاب الإمام الخليلي وفقهه من خلال كتاب الجوابات .( تحت الطبع)',
        'pub3' => 'الشبكة المعلوماتية وأحكامها مطبوعات مكتبة الجيل الواعد',
        'pub4' => 'بحوث في الرقابة الشرعية على المصارف الإسلامية ( سلسلة تحت الطبع ) ',
        'pub5' => 'بحوث فقهية مقارنة متعددة طبعة دار كدم 2002م',
      
      

      
      
     
        

   );

   return $ang[$keyword];
}

 ?>

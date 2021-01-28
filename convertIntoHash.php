<!DOCTYPE html>
<html lang="ar">
    <head>
        <!--Powered | CoderX ©2020 | Andrei Abd
        █▀▀ █▀█ █▀▄ █▀▀ █▀█ ▀▄▀
        █▄▄ █▄█ █▄▀ ██▄ █▀▄ █░█
        CODER X |تم تصميم الموقع و برمجته من قبل اندريه عبد
        mail      :  usr.g0a1@gmial.com
        CoderX    :  https://coderx-project.blogspot.com/
        Whatsapp  :  +963934820511
        Pinterest :  https://www.pinterest.com/andreiabd93
        Instagram :  https://www.instagram.com/andrei_abd/
        Linkeden  :  https://www.linkedin.com/in/andreiabd
        Facebook  :  https://www.facebook.com/andreiaabd/
        -->
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <link 
        href="https://fonts.googleapis.com/css2?family=Kufam:wght@700&display=swap" 
        rel="stylesheet"
        />

        <!-- Add icon library -->
        <link 
            rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css"
            rel="stylesheet"
        />

        <!--Arabic Language-->
        <meta 
        charset="UTF-8"
        >

        <!--Devices All Screen-->
        <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0"
        >

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!--Web Site icon-->
        <link  
        rel="icon" 
        href="png/00-logo.png"
        />
        
        <!--CSS-->
        <link 
        rel="stylesheet" 
        href="css/style.css"
        >

        <!--Google Search Console-->
        <meta 
        name="google-site-verification" 
        content="" />
    
        <!--Web Site SEO & Description & Tittle-->
        <meta name="description" content="Crypto - Hash and Encrypted,Decrypted Data">
        <meta name="keywords" content="hash,crypto,decrypted,data,encrypted,openssl,MD5,SHA1,guess,hashes,revesable,key,vi,option,تشفير,كسر تشفير,تخمين التشفيرات,موقع تشفير البيانات,أنواع التشفير،تشفير غير قابل للعكس,بيانات,تشفير نصوص,عكس التشفير,مفاتيح التشفير,أنواع تشفير البيانات">
        <title>🅲🆁🆈🅿🆃🅾</title>
    </head>
    <body>
        <div class="container">
        <form id="form" name="FORM" method="Post">
                <header>
                    <h1 >🅷🅰🆂🅷 🅲🅾🅽🆅🅴🆁🆃🅴🆁</h1>
                    <h1>🅼🅳5</h1>
                    <h1>🆂🅷🅰1</h1>
                </header>
                <div>
                    <button 
                        class="btn btn-outline-dark mt-4 mb-4" 
                        name="MAIN" 
                        type="submit"
                    >
                    الصفحة الرئيسية
                    </button>
                    <br>
                    <p 
                    id="main-article"
                    >
                    <i class="fas fa-keyboard"></i> : أدخل النص المراد تحويله لصيغة مشفرة
                    </p>
                    <br>
                    <input 
                        class="form-control" 
                        type="text" 
                        name="words" 
                        style="
                            border: 1px solid black;
                        "
                        placeholder="ادخل النص المراد تحويلة"
                    />
                    <br>
                    <button 
                        class="btn btn-outline-dark btn-block mt-3" 
                        name="result" 
                        type="submit"
                    >
                    تحويل
                    </button>
                    <p 
                     id="main-article"
                    >
                        <br>
                        <i class="fas fa-sign-out-alt"></i> : النتيجة
                    </p>
                    <br>
                </div>
            </form>            
            <?php
            
                // Powered | CoderX ©2020 | Andrei Abd
                // █▀▀ █▀█ █▀▄ █▀▀ █▀█ ▀▄▀
                // █▄▄ █▄█ █▄▀ ██▄ █▀▄ █░█
                // CODER X |تم تصميم الموقع و برمجته من قبل اندريه عبد
                // mail      :  usr.g0a1@gmial.com
                // CoderX    :  https://coderx-project.blogspot.com/
                // Whatsapp  :  +963934820511
                // Pinterest :  https://www.pinterest.com/andreiabd93
                // Instagram :  https://www.instagram.com/andrei_abd/
                // Linkeden  :  https://www.linkedin.com/in/andreiabd
                // Facebook  :  https://www.facebook.com/andreiaabd/

                if(isset($_POST['FORM'])){
                    $getback=$_POST['MAIN'];
                }
                if(isset($_POST['MAIN'])){
                    echo "<script> location.replace('index.php')</script>";
                }
                if(isset($_POST['words'])){
                    $getText=$_POST['words'];
                    $getMD5=$getText;
                    $getSHA1=$getText;
                }else{
                echo'';
                }
                if (isset($_POST['result'])) {
                    $getMD5=$getText;
                    $getSHA1=$getText;
                    echo'<div style="direction:ltr;text-align:left;"><br><strong>* MD5 HASH :&nbsp;</strong>'.md5($getText).'</div>';
                    echo'<div style="direction:ltr;text-align:left;"><strong>* SHA1 HASH :&nbsp;</strong>'.sha1($getText).'</div><br>';
                }else{
                    echo'';
                }
              
            ?>
            <footer>
                <p>
                    🅰🅽🅳🆁🅴🅸 🅰🅱🅳 | 🅲🅾🅳🅴🆁🆇 ©➋⓿➋⓿
                </p>
            </footer>
        </div>
        
        
    </body>
</html>

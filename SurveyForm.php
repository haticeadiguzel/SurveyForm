<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Mikrodalga Fırın Kullanım Anketi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {

            $(".show1").click(function (e) {
                e.preventDefault();
                $(".row").not(".row1").slideUp();
                $(".row1").slideToggle("slow", function () {
                });
            });

            $(".show2").click(function (e) {
                e.preventDefault();
                $(".row").not(".row2").slideUp();
                $(".row2").slideToggle("slow", function () {
                });
            });

            $(".show3").click(function (e) {
                e.preventDefault();
                $(".row").not(".row3").slideUp();
                $(".row3").slideToggle("slow", function () {
                });
            });

            $(".show4").click(function (e) {
                e.preventDefault();
                $(".row").not(".row4").slideUp();
                $(".row4").slideToggle("slow", function () {
                });
            });

        });
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .row {
            display: none;
        }

        body {
            background-image: url(/Survey_Form/Images/2.jpeg);
            background-size: cover;
            background-attachment: fixed;
            color: #ffff;
            /*background-color: rgba(57, 179, 250, 0.7);*/
            background-blend-mode: multiply;
            font-size: 1.1em;
            font-family: 'Poppins', sans-serif;
        }

        .heading {
            text-align: center;
            width: 100%;
            margin: auto;
            margin-top: 50px;
            color: black;
        }

        #head {
            font-size: 1.8em;
        }

        form {
            background-color: rgba(0, 0, 0, 0.7);
            padding-top: 34px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 54%;
            border-radius: 5px;
            margin: auto;
            margin-top: 10px;
            padding-bottom: 60px;
        }

        form .box {
            width: 50%;
            height: 24px;
            position: relative;
            border: 0;
            border-radius: 5px;
            font-style: italic;
            background-color: #fff;
        }

        input[type=submit] {
            width: 100%;
            height: 3em;
            position: relative;
            top: 11px;
            background-color: rgb(18, 219, 78);
            border: none;
            color: rgb(255, 255, 255);
            margin-bottom: 10px;
            cursor: pointer;
        }

        input::placeholder {
            font-size: 1em;
            position: relative;
            left: 5px;
            width: 50%;
            font-weight: 400;
        }

        @media screen and (max-width: 600px) {
            form {
                width: 100%;
                margin: auto;
            }
        }
    </style>
</head>


<body>
    <div class="heading">
        <img src="/Survey_Form/Images/gaunlogo.jpg" class="" alt="" width="8%">
        <h1 id="head" class="d-sm-inline">Mikrodalga Fırın Kullanım Anketi</h1>
        <img src="/Survey_Form/Images/gaunlogo.jpg" class="" alt="" width="8%">
    </div>
    <form action="connect.php" method="post" autocomplete="OFF">
        <div>
            <div>
                <label for="" class="">Yaşınız: </label>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="ageOptions" id="age4" value="45+" />
                    <label class="form-check-label" for="age4">45+</label>
                </div>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="ageOptions" id="age3" value="34-44" />
                    <label class="form-check-label" for="age3">35-44</label>
                </div>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input " type="radio" name="ageOptions" id="age2" value="25-34" />
                    <label class="form-check-label" for="age2">25-34</label>
                </div>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="ageOptions" id="age1" value="18-24" required />
                    <label class="form-check-label" for="age1">18-24</label>
                </div>
            </div>
            <br>
            <div>
                <label for="">Cinsiyetiniz: </label>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="genderOptions" id="gender1" value="Erkek"
                        required />
                    <label class="form-check-label" for="gender1">Erkek</label>
                </div>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="genderOptions" id="gender2" value="Kadın" />
                    <label class="form-check-label" for="gender2">Kadın</label>
                </div>
            </div>
            <br>
            <div>
                <label for="">Eğitiminiz: </label>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="educationOptions" id="education3"
                        value="Önlisans/Lisans" required />
                    <label class="form-check-label" for="education3">Önlisans/Lisans</label>
                </div>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="educationOptions" id="education2" value="Lise" />
                    <label class="form-check-label" for="education2">Lise</label>
                </div>
                <div class="form-check form-check-inline float-end">
                    <input class="form-check-input" type="radio" name="educationOptions" id="education1"
                        value="İlköğretim" />
                    <label class="form-check-label" for="education1">İlköğretim</label>
                </div>
            </div>
            <br>
            <div>
                <label for="">1) Mikrodalga fırın kullanarak hazırlanmış/pişirilmiş ürünleri tüketirmisiniz?</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="question1" id="question1_1" value="A" required />
                    <label class="form-check-label" for="question1_1">Evet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="question1" id="question1_2" value="B" />
                    <label class="form-check-label" for="question1_2">Hayır</label>
                </div>
            </div>
            <br>
            <div>
                <label for="">2) Mikrodalga fırın kullanıyor musunuz?</label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input show1 show checked" type="radio" name="question2" id="question2_1"
                        value="A" />
                    <label class="form-check-label" for="question2_1">Evet</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input show2 show" type="radio" name="question2" id="question2_2"
                        value="B" />
                    <label class="form-check-label" for="question2_2">Hayır</label>
                </div>
            </div>
            <br>
            <div class="row1 row">
                <div>
                    <label for="">3) Mikrodalga fırın tercih etme sebebiniz nedir?</label>
                    <label for="" class="text-secondary">(Birden çok seçenek kullanılabilir.)</label>
                    <div class="form-check">
                        <input class="form-check-input" name="question3A[]" type="checkbox" value="A"
                            id="question3A_1" />
                        <label class="form-check-label" for="question3A_1">Hızlı olması.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question3A[]" type="checkbox" value="B"
                            id="question3A_2" />
                        <label class="form-check-label" for="question3A_2">Güvenli olması.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question3A[]" type="checkbox" value="C"
                            id="question3A_3" />
                        <label class="form-check-label" for="question3A_3">Kullanışlı olması.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question3A[]" type="checkbox" value="D"
                            id="question3A_4" />
                        <label class="form-check-label" for="question3A_4">Enerji tasarrufu sağlaması.</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">4) Mikrodalga fırını ne sıklıkla kullanıyorsunuz?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4_1" value="A" />
                        <label class="form-check-label" for="question4_1">Hergün.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4_2" value="B" />
                        <label class="form-check-label" for="question4_2">Birkaç günde bir.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4_3" value="C" />
                        <label class="form-check-label" for="question4_3">Haftada bir.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question4" id="question4_4" value="D" />
                        <label class="form-check-label" for="question4_4">Çok nadir.</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">5) Mikrodalga fırını daha çok hangi amaçla kullanıyorsunuz?</label>
                    <label for="" class="text-secondary">(Birden çok seçenek kullanılabilir.)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="question5[]" id="question5_1" value="A" />
                        <label class="form-check-label" for="question5_1">Pişirme işlemi.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="question5[]" id="question5_2" value="B" />
                        <label class="form-check-label" for="question5_2">Isıtma işlemi.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="question5[]" id="question5_3" value="C" />
                        <label class="form-check-label" for="question5_3">Çözdürme işlemi.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="question5[]" id="question5_4" value="D" />
                        <label class="form-check-label" for="question5_4">Diğer</label>
                        <input type="text" name="text2" class="box" placeholder=" Cevabınızı giriniz...">
                    </div>
                </div>
                <br>
                <div>
                    <label for="">6) Mikrodalga fırın hakkında yeterli bilgiye sahip olduğunuzu düşünüyor
                        musunuz?</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="question6" id="question6_1" value="A" />
                        <label class="form-check-label" for="question6_1">Evet</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="question6" id="question6_2" value="B" />
                        <label class="form-check-label" for="question6_2">Hayır</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">7) Sizce mikrodalga fırını herkes (hamile, çocuk, hasta) kullanabilir mi?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" id="question7_1" value="A" />
                        <label class="form-check-label" for="question7_1">Evet.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" id="question7_2" value="B" />
                        <label class="form-check-label" for="question7_2">Olabildiğince az kullanması lazım.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question7" id="question7_3" value="C" />
                        <label class="form-check-label" for="question7_3">Hayır.</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">8) Mikrodalga fırın kullanımının önümüzdeki yıllarda hangi yönde ilerleyeceğini
                        düşünüyorsunuz?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" id="question8_1" value="A" />
                        <label class="form-check-label" for="question8_1">Kullanım artar.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" id="question8_2" value="B" />
                        <label class="form-check-label" for="question8_2">Kullanım azalır.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question8" id="question8_3" value="C" />
                        <label class="form-check-label" for="question8_3">Kullanımda ciddi bir değişiklik olmaz.</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">9) Mikrodalga fırın alırken nelere dikkat edersiniz?</label>
                    <label for="" class="text-secondary">(Birden çok seçenek kullanılabilir.)</label>
                    <div class="form-check">
                        <input class="form-check-input" name="question9[]" type="checkbox" value="A" id="question9_1" />
                        <label class="form-check-label" for="question9_1">Ürünün fiyatı.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question9[]" type="checkbox" value="B" id="question9_2" />
                        <label class="form-check-label" for="question9_2">Ürünün markası.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question9[]" type="checkbox" value="C" id="question9_3" />
                        <label class="form-check-label" for="question9_3">Kullanıcı yorumları.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question9[]" type="checkbox" value="D" id="question9_4" />
                        <label class="form-check-label" for="question9_4">Ürünün dış görünüşü.</label>
                    </div>
                </div>
                <br>
                <div>
                    <label for="">10) Mikrodalga fırın kullanımını çevrenize tavsiye eder misiniz?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question10" id="question10_1" value="A" />
                        <label class="form-check-label" for="question10_1">Tavsiye ederim.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question10" id="question10_2" value="B" />
                        <label class="form-check-label" for="question10_2">Tavsiye etmem.</label>
                    </div>
                </div>
            </div>
            <div class="row2 row">
                <div>
                    <label for="">3) Mikrodalga fırın kullanmama sebebiniz nedir?</label>
                    <label for="" class="text-secondary">(Birden çok seçenek kullanılabilir.)</label>
                    <div class="form-check">
                        <input class="form-check-input" name="question3B[]" type="checkbox" value="A"
                            id="question3B_1" />
                        <label class="form-check-label" for="question3B_1">Radyasyon yaydığını düşünüyorum.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question3B[]" type="checkbox" value="B"
                            id="question3B_2" />
                        <label class="form-check-label" for="question3B_2">Gıdaların besin değerini kaybettiğini
                            düşünüyorum.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question3B[]" type="checkbox" value="C"
                            id="question3B_3" />
                        <label class="form-check-label" for="question3B_3">Toplumun genel önyargısı olduğu için sıcak
                            bakmıyorum.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="question3B[]" type="checkbox" value="D"
                            id="question3B_4" />
                        <label class="form-check-label" for="question3B_4">Diğer</label>
                        <input type="text" name="text1" class="box" placeholder="Cevabınızı giriniz...">
                    </div>
                </div>
            </div>
            <input type="submit" name="submit" value="Gönder">
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
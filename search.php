<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.css" />
    <?php
include "meta.php";
?>

</head>

<body>
    <?php
include "nav.php";
?>

    <header class="mini-header">
        <div class="container">
            <ul class="inlines">
                <li><a href="index.php">მთავარი</a> </li>
                <li><i class="bi bi-chevron-right"></i></li>
                <li><a href="user.php">მომსახურება</a></li>
                <li><i class="bi bi-chevron-right"></i></li>
                <li class="active"> 450 განცადება </li>
            </ul>
        </div>

    </header>


    <div class="container">
        <div class="row">


            <div class="col-lg-3 my-2 my-lg-5">
                <!-- form -->

                <button class="openfill">ფილტრები <i class="ps-3 bi bi-funnel"></i></button>
                <button class="closeform"><i class="bi bi-x-lg"></i></button>
                <button class="mobsrch">ძებნა</button>
                <form action="" class="searchform">

                    <h1>ფილტრაცია</h1>

                    <div class="f-c q">
                        <input type="text" class="form-control" name="q" placeholder="საძიებო სიტყვა">
                    </div>

                    <div class="prices f-c">
                        <h3>ფასი</h3>
                        <div id="steps" class="mb-5"> </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="min">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="max">
                            </div>
                        </div>
                    </div>
                    <div class="category f-c">
                        <h3>კატეგორია</h3>

                        <ul>
                            <li>კატეგორია 1</li>
                            <li>კატეგორია 1</li>
                            <li>კატეგორია 1</li>
                            <li>კატეგორია 1</li>
                            <li>კატეგორია 1</li>
                            <li>კატეგორია 1</li>
                            <li>კატეგორია 1</li>

                        </ul>
                    </div>
                    <div class="who f-c">
                        <h3>ვისთვის უკვეთავთ</h3>

                        <select name="" id="" class="form-control">
                            <option value="">ჩემთვის</option>
                            <option value="">ძმისთვუს</option>
                            <option value="">დედასთვის</option>
                        </select>
                    </div>
                </form>

                <!-- endform -->
            </div>
            <div class="col-lg-9 my-2 my-lg-5">
                <!-- content -->
                <div class="sorts">
                    <select name="" id="" class="form-control">
                        <option value="">ფასი ზრდადობით</option>
                        <option value="">ფასი კლაებადობით</option>
                        <option value="">ახალი დამატებული</option>
                    </select>
                </div>

                <div class="row products serc">
                    <div class="col-lg-4 col-sm-6">
                        <div class="prodcard">
                            <div class="hoverable">
                                <span class="wish"><i class="bi bi-heart-fill"></i></span>
                                <img src="img/product.jpg" class="img-fluid" alt="">
                                <img src="img/effect.png" class="imghov" alt="">
                            </div>

                            <div class="cardbody">
                                <h2>ალავერდი • ALAVERDI</h2>
                                <p>ქართული სუფრა 12 სტუმარზე! სასიამოვნო გარემო
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                </p>

                                <div class="options">
                                    <div class="parcs item">
                                        <p class="price">250 ₾</p>
                                        <p class="changs pers">1 პერსონა</p>
                                        <p class="changs coun">1 პერსონა</p>
                                        <p class="changs time">2 საათი</p>
                                    </div>
                                    <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                                    <div class="moreops">
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>2 პერსონა</p>
                                            <p>3 პერსონა</p>
                                            <p>4 საათი</p>
                                        </div>
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>5 პერსონა</p>
                                            <p>6 პერსონა</p>
                                            <p>72 საათი</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="bywith">
                                    <button class="forme">ვიყიდი ჩემთვის</button>
                                    <button class="foryou">ვიყიდი საჩუქრად</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="prodcard">
                            <div class="hoverable">
                                <span class="wish"><i class="bi bi-heart-fill"></i></span>
                                <img src="img/product.jpg" class="img-fluid" alt="">
                                <img src="img/effect.png" class="imghov" alt="">
                            </div>

                            <div class="cardbody">
                                <h2>ალავერდი • ALAVERDI</h2>
                                <p>ქართული სუფრა 12 სტუმარზე! სასიამოვნო გარემო
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                </p>

                                <div class="options">
                                    <div class="parcs item">
                                        <p class="price">250 ₾</p>
                                        <p class="changs pers">1 პერსონა</p>
                                        <p class="changs coun">1 პერსონა</p>
                                        <p class="changs time">2 საათი</p>
                                    </div>
                                    <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                                    <div class="moreops">
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>2 პერსონა</p>
                                            <p>3 პერსონა</p>
                                            <p>4 საათი</p>
                                        </div>
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>5 პერსონა</p>
                                            <p>6 პერსონა</p>
                                            <p>72 საათი</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="bywith">
                                    <button class="forme">ვიყიდი ჩემთვის</button>
                                    <button class="foryou">ვიყიდი საჩუქრად</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="prodcard">
                            <div class="hoverable">
                                <span class="wish"><i class="bi bi-heart-fill"></i></span>
                                <img src="img/product.jpg" class="img-fluid" alt="">
                                <img src="img/effect.png" class="imghov" alt="">
                            </div>

                            <div class="cardbody">
                                <h2>ალავერდი • ALAVERDI</h2>
                                <p>ქართული სუფრა 12 სტუმარზე! სასიამოვნო გარემო
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                </p>

                                <div class="options">
                                    <div class="parcs item">
                                        <p class="price">250 ₾</p>
                                        <p class="changs pers">1 პერსონა</p>
                                        <p class="changs coun">1 პერსონა</p>
                                        <p class="changs time">2 საათი</p>
                                    </div>
                                    <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                                    <div class="moreops">
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>2 პერსონა</p>
                                            <p>3 პერსონა</p>
                                            <p>4 საათი</p>
                                        </div>
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>5 პერსონა</p>
                                            <p>6 პერსონა</p>
                                            <p>72 საათი</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="bywith">
                                    <button class="forme">ვიყიდი ჩემთვის</button>
                                    <button class="foryou">ვიყიდი საჩუქრად</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="prodcard">
                            <div class="hoverable">
                                <span class="wish"><i class="bi bi-heart-fill"></i></span>
                                <img src="img/product.jpg" class="img-fluid" alt="">
                                <img src="img/effect.png" class="imghov" alt="">
                            </div>

                            <div class="cardbody">
                                <h2>ალავერდი • ALAVERDI</h2>
                                <p>ქართული სუფრა 12 სტუმარზე! სასიამოვნო გარემო
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                </p>

                                <div class="options">
                                    <div class="parcs item">
                                        <p class="price">250 ₾</p>
                                        <p class="changs pers">1 პერსონა</p>
                                        <p class="changs coun">1 პერსონა</p>
                                        <p class="changs time">2 საათი</p>
                                    </div>
                                    <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                                    <div class="moreops">
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>2 პერსონა</p>
                                            <p>3 პერსონა</p>
                                            <p>4 საათი</p>
                                        </div>
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>5 პერსონა</p>
                                            <p>6 პერსონა</p>
                                            <p>72 საათი</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="bywith">
                                    <button class="forme">ვიყიდი ჩემთვის</button>
                                    <button class="foryou">ვიყიდი საჩუქრად</button>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="prodcard">
                            <div class="hoverable">
                                <span class="wish"><i class="bi bi-heart-fill"></i></span>
                                <img src="img/product.jpg" class="img-fluid" alt="">
                                <img src="img/effect.png" class="imghov" alt="">
                            </div>

                            <div class="cardbody">
                                <h2>ალავერდი • ALAVERDI</h2>
                                <p>ქართული სუფრა 12 სტუმარზე! სასიამოვნო გარემო
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                    უგემრიელესი კერძები და ცოცხალი მუსიკა
                                </p>

                                <div class="options">
                                    <div class="parcs item">
                                        <p class="price">250 ₾</p>
                                        <p class="changs pers">1 პერსონა</p>
                                        <p class="changs coun">1 პერსონა</p>
                                        <p class="changs time">2 საათი</p>
                                    </div>
                                    <p class="changs mb-0"> <i class="changs bi bi-chevron-down"></i> </p>

                                    <div class="moreops">
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>2 პერსონა</p>
                                            <p>3 პერსონა</p>
                                            <p>4 საათი</p>
                                        </div>
                                        <div class="item dropeds">
                                            <p class="price">250 ₾</p>
                                            <p>5 პერსონა</p>
                                            <p>6 პერსონა</p>
                                            <p>72 საათი</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="bywith">
                                    <button class="forme">ვიყიდი ჩემთვის</button>
                                    <button class="foryou">ვიყიდი საჩუქრად</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <!-- end cont -->
            </div>
        </div>
    </div>


    <?php
include "footer.php";
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.0/nouislider.min.js"></script>

    <script>

        var stepsSlider = document.getElementById('steps');
        var input0 = document.getElementById('min');
        var input1 = document.getElementById('max');
        var inputs = [input0, input1];

        noUiSlider.create(stepsSlider, {
            start: [20, 8000],
            connect: true,

            range: {
                'min': [0],
                'max': 8000
            }
        });

        stepsSlider.noUiSlider.on('update', function (values, handle) {
            inputs[handle].value = values[handle];
        });

    </script>

</body>

</html>
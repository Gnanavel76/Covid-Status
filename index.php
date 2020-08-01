<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID - 19</title>
    <!--Font Awesome Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <!--Custom Stylesheet-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Favicon-->
    <link rel="shortcut icon" href="assets/images/covid.svg" type="image/svg">
</head>
<body>
    <!--Preloader-->
    <div id='preloader' class='d-flex justify-content-center align-items-center'>
        <img src="assets/images/preloader.gif" alt="Preloader">
    </div>
    <!--Header Section-->
    <header>
        <nav class='d-flex justify-space-between'>
            <div class="logo"><h1>COVID - 19</h1></div>
            <div class="menu text-center">
                <ul>
                    <li><a href="#" class='active'>Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#status">Status</a></li>
                    <li><a href="#symptoms">Symptoms</a></li>
                    <li><a href="#precautions">Precautions</a></li>
                </ul>
                <div class="marker"></div>
            </div>
            <div class="toggle">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <!--Home Section-->
    <section id='home' class='d-flex justify-content-center align-items-center section-global'>
        <video src="assets/images/bg1.mp4" autoplay muted loop></video>
        <div class="content text-center">
            <h1>COVID - 19</h1>
            <p class='lead'>Lets fight together</p>
            <a href='#about' type='button'>Go<i class="fas fa-arrow-right"></i></a>
        </div>
    </section>
    <!--About Section-->
    <section id="about" class='text-center'>
        <h2>ABOUT COVID - 19</h2>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="imgBx d-flex align-items-center justify-content-center"><img src="assets/images/covid.svg" alt="Covid"></div>
            <div class="content">
                <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
                <p class="lead">The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
            </div>
        </div>
    </section>
    <!--Charts Section-->
    <section id="status" class='text-center'>
        <h2>LIVE STATUS</h2>
        <p class="lead">Scroll horizontally and vertically to see more.</p>
        <div class="container">
            <table>
                <tr>
                    <th>Country</th>
                    <th>New Confirmed</th>
                    <th>Total Confirmed</th>
                    <th>New Deaths</th>
                    <th>Total Deaths</th>
                    <th>New Recovered</th>
                    <th>Total Recovered</th>
                    <th>Date</th>
                </tr>
                <?php
                    $api = file_get_contents('https://api.covid19api.com/summary');
                    if(http_response_code() == 200){
                        $data = json_decode($api, true);
                        for($i=0; $i < count($data['Countries']); $i++){
                            echo '<tr>';
                            foreach($data['Countries'][$i] as $k=>$d){
                                if($k==='CountryCode' || $k==='Slug' || $k==='Premium'){
                                    continue;
                                }
                                if($k==='Date'){
                                    echo'<td>'.date('Y-m-d H:i:sa',strtotime($d)).'</td>';
                                }
                                else{
                                    echo'<td>'.$d.'</td>';
                                }
                            }
                            echo '</tr>';
                        }
                    }
                    else{
                        echo '<p>Something went wrong.Refresh the page or try again later.</p>';
                    }
                ?>
            </table>
        </div>
    </section>
    <!--Symptoms-->
    <section id="symptoms">
        <h2 class='text-center'>SYMPTOMS</h2>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="box text-center">
                <img src="assets/images/icon_2.svg" alt="">
                <p class='lead'>Cough</p>
            </div>
            <div class="box text-center">
                <img src="assets/images/icon_5.svg" alt="">
                <p class='lead'>Cold</p>
            </div>
            <div class="box text-center">
                <img src="assets/images/icon_1.svg" alt="">
                <p class='lead'>Running nose</p>
            </div>
            <div class="box text-center">
                <img src="assets/images/icon_6.svg" alt="">
                <p class='lead'>Fever</p>
            </div>
            <div class="box text-center">
                <img src="assets/images/icon_3.svg" alt="">
                <p class='lead'>Tiredness</p>
            </div>
            <div class="box text-center">
                <img src="assets/images/icon_4.svg" alt="">
                <p class='lead'>Breating Problem</p>
            </div>
        </div>
    </section>
    <!--Precautions-->
    <!--Precautions-->
    <section id="precautions">
        <h2 class='text-center'>Precautions</h2>
        <div class="container d-flex justify-content-center text-center">
            <div class="box">
                <img src="assets/images/p1.svg" alt="Wash Your Hands">
                <p class="lead">Wash your hands regularly for 20 seconds,with soap and water or alcohol based hand rub.</p>
            </div>
            <div class="box">
                <img src="assets/images/p2.svg" alt="Mask">
                <p class="lead">Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
            </div>
            <div class="box">
                <img src="assets/images/p3.svg" alt="Avoid Contact">
                <p class="lead">Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
            </div>
        </div>
    </section>
    <footer><p class='text-center'>Copyrights &copy; All rights reserved.</p></footer>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Custom Javascript-->
    <script src='assets/js/main.js'></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/vid.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    font-family: 'Maven Pro', sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 20px 7%;
    padding-bottom: 70px;
    font-family: 'Maven Pro', sans-serif;
}

.wrapper {
    width: 1100px;
    margin: auto;
    position: relative;
}


.logo {
    font-family: 'Maven Pro', sans-serif;
    font-size: 25px;
    font-weight: bold;
    float: left;
}

.logo a {
    color: #39A2DB;
}

nav  {
    width: 100%;
    margin: auto;
    margin-bottom: 10px;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky;
    top: 0;
    background-color: #ffffff;
    z-index: 1;
    border-bottom: 1px solid #39A2DB1a;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: left;
}

nav ul li a {
    color: black;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    color: #39A2DB;
    font-weight: bolder;
}

.nav-menu {
    float: right;
}

a.btn-keluar {
    padding: 7px 20px 7px 20px;
    color: #39A2DB;
    font-weight: bold;
    cursor: pointer;
}

a.btn-keluar {
    margin: 20px 5px 20px 70px;
}


a.btn-keluar:hover {
    color: #39A2DB;
    font-weight: bolder;
    text-decoration: none;
}

.container-vid {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    border-radius: 20px;
    border: 2px solid rgba(51, 51, 51, 0.17);
    box-shadow: 0 10px 15px #39A2DB5a;
    background: #fff;
}

.container-vid .video-links-container {
    flex: content;
    border: 1px solid #ccc;
    background-color: #ffffffec;
    height: 500px;
    overflow-y: scroll;
    border-radius: 20px;
}

.container-vid .video-container {
    margin: 0 auto;
    flex: content;
    height: 200px;
}

.tabcontent {
    margin:30px auto;
    background-color: #ffffffec;
    padding: 0px 12px;
    width: 720px;
    height: 360px;
}

.tabcontent h1 {
    border-bottom: 1px solid black;
    padding: 10px;
}

.container-vid .video-container iframe {
    border-bottom: 1px solid black;
    margin: 20px auto;
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.container-vid .video-links-container .video-links {
    font-size: 14px;
    color: #333;
    display: block;
    padding: 15px 15px;
    cursor: pointer;
}

.container-vid .video-links-container .video-links:nth-child(odd) {
    background: #eee;
}

.active,
.container-vid .video-links-container .video-links:hover {
    background: #39A2DB;
    color: #fff;
}







@media screen and (max-width: 991.98px) {
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(#eee 50%, #ccc 50.1%);
        padding: 0px;
        padding-bottom: 0px;
    }

    .wrapper {
        width: 90%;
    }

    .logo {
        font-size: 18px;
    }

    a.btn-keluar {
       font-size: 12px;
    }
    nav {
        border-radius: 20px;
    }

    nav .nav-menu ul li .menu {
        display: none;
    }

    .container-vid {
        display: flex;
        flex-wrap: wrap-reverse;
    }

    .container-vid .video-container {
        width: 100%;
    }

    .tabcontent {
        margin: 0px;
        width: 100%;
        height: 200px;
    }

    .tabcontent h1 {
        font-size: 16px;
        margin-bottom: 0px;
        margin-top: 15px;
    }

    .container-vid .video-links-container {
        margin-top: 80px;
        flex: 1 1 400px;
        height: 400px;
        overflow-y: scroll;
    }
}
</style>
</head>

<body>

    <div class="wrapper">
        <nav>
            <div class="wrapper">
                <div class="logo">
                    <a href="Dashboard.php">8Group Academy</a>
                </div>
                <div class="nav-menu">
                    <ul>
                        <li><a href="emptyPage2.php" class="menu">Courses</a></li>
                        <li><a href="emptyPage2.php" class="menu">Daily Tips</a></li>
                        <li><a href="emptyPage2.php" class="menu">Resources</a></li>
                        <li><a href="Dashboard.php" class="btn-keluar">Kembali</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-vid">
            <div class="video-links-container" id="myDIV">
                <div class="tab">
                    <a class="video-links" onclick="openCity(event, 'Conten1')" id="defaultOpen">Eps 1 - Introduction</a>
                    <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 2 - Dart Basic</a>
                    <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 3 - Stateless & Statefull</a>
                    <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 4 - Widget Dasar</a>
                    <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 5 - Text Widget</a>
                    <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 6 - Visible & Invisible Widget</a>
                    <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 7 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 8 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 9 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 10 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 11 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 12 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 13 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten2')">Eps 14 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten3')">Eps 15 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten4')">Eps 16 - </a>
                    <a class="video-links" onclick="openCity(event, 'Conten5')">Eps 17 - </a>
                </div>

            </div>

            <div class="video-container">
                <div id="Conten1" class="tabcontent">
                    <h1>Episode 1</h1>

                    <iframe width="916" height="515" src="https://www.youtube.com/embed/epRWFH47xCI?list=PL7jdfftn7HKsfTtv8FOaTbLIf7feiQTRu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="Conten2" class="tabcontent">
                    <h1>Episode 2</h1>

                    <iframe width="916" height="515" src="https://www.youtube.com/embed/DUo01ekCn8Y?list=PL7jdfftn7HKsfTtv8FOaTbLIf7feiQTRu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="Conten3" class="tabcontent">
                    <h1>Episode 3</h1>

                    <iframe width="916" height="515" src="https://www.youtube.com/embed/8VQraXro3qc?list=PL7jdfftn7HKsfTtv8FOaTbLIf7feiQTRu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="Conten4" class="tabcontent">
                    <h1>Episode 4</h1>

                    <iframe width="704" height="396" src="https://www.youtube.com/embed/qxx1KX43R-4?list=PL7jdfftn7HKsfTtv8FOaTbLIf7feiQTRu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="Conten5" class="tabcontent">
                    <h1>Episode 5</h1>

                    <iframe width="704" height="396" src="https://www.youtube.com/embed/-RrnIax4Br8?list=PL7jdfftn7HKsfTtv8FOaTbLIf7feiQTRu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="Conten6" class="tabcontent">
                    <h1>Episode 6</h1>

                    <iframe width="704" height="396" src="https://www.youtube.com/embed/g-cxn7L4bPc?list=PL7jdfftn7HKsfTtv8FOaTbLIf7feiQTRu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div id="Conten7" class="tabcontent">
                    <h1>Episode 7</h1>


                </div>

                <div id="Conten8" class="tabcontent">
                    <h1>Episode 8</h1>


                </div>

                <div id="Conten9" class="tabcontent">
                    <h1>Episode 9</h1>


                </div>

                <div id="Conten10" class="tabcontent">
                    <h1>Episode 10</h1>


                </div>

                <div id="Conten11" class="tabcontent">
                    <h1>Episode 11</h1>


                </div>

                <div id="Conten12" class="tabcontent">
                    <h1>Episode 12</h1>


                </div>

                <div id="Conten13" class="tabcontent">
                    <h1>Episode 13</h1>


                </div>

                <div id="Conten14" class="tabcontent">
                    <h1>Episode 14</h1>


                </div>

                <div id="Conten15" class="tabcontent">
                    <h1>Episode 15</h1>


                </div>

                <div id="Conten16" class="tabcontent">
                    <h1>Episode 16</h1>


                </div>

                <div id="Conten17" class="tabcontent">
                    <h1>Episode 17</h1>


                </div>




            </div>

        </div>
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("video-links");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>
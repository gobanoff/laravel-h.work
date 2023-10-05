<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css" />


</head>

<body>
    <a href="/students" class="btn btn-primary"> Students</a>
    <div class="cont">
        <h1 class="text-center ">Explore The Schedule</h1>
        <p class="text-center" id="lor1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Repellendus aliquam iusto repudiandae porro <br>sint. Iusto voluptates explicabo fugiat!</p>



        @for($i = 0; $i < 3; $i++) <div class="box">
            <img src="https://www.pngitem.com/pimgs/m/497-4973144_grey-circle-smaller-adidas-logo-png-circle-transparent.png" alt="adi">
            <div class="col-6 d-flex flex-column justify-content-center" id="start">
                <h4>Start a New Conversation</h4>
                <p class="lor">Lorem ipsum dolor sit amet, consectetur<br>adispiscing elit, sed do elusmod tempor .</p>
            </div>
            <div class="col-4 d-flex flex-column justify-content-center" id="finish">
                <h4>Between 12:00 - 13:15</h4>
                <p class="lor2">Mark Smith, Developer at Themeforest</p>
            </div>
    </div>
    @endfor

    </div>
    <style>
        .btn {
            color: white;
        }

        #finish {
            padding-right: 50px;
        }

        #start {
            padding-left: 50px;
        }

        .box {
            display: flex;
            justify-content: center;
            background: white;
            width: 1200px;
            margin-left: 20px;
            height: 300px;
            margin-bottom: 50px;
            border: 2px solid rgb(230, 230, 230);
        }

        .cont {
            background: rgb(242, 242, 242);
            margin-bottom: 300px;
            margin-left: 300px;
            margin-right: 300px;
            height: 1250px;
            width: 1250px;
        }

        img {
            width: 180px;
            height: 180px;
            margin-top: 60px;
            margin-left: 120px;
        }

        h4 {
            font-weight: 700;
        }

        .lor {
            color: rgb(170, 170, 170);
        }

        h1 {
            font-weight: 700;
            padding-top: 10px;
        }

        .btn-primary {box-shadow: 5px 5px 10px 1px #a79f95 ;
            margin-left: 20px;
            margin-top: 20px;
        }

        #lor1 {
            padding-bottom: 50px;
            padding-top: 10px;
            color: rgb(170, 170, 170);
            font-size: 20px;
        }

        .lor2 {
            color: #f38d17;
            font-weight: 500;
        }
    </style>

</body>

</html>
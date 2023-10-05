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
    <h1 class="text-center mt-4 mb-3">List of students.</h1>
    <a href="/homepage" class="btn btn-primary"> Homepage</a>

    <div class="cont1">


        @foreach ($data as $st)

        <div class="row mx-0 background my-4">
            <div class="col-1 d-flex">
                <img class="rounded-circle" src="{{ $st['picture'] }}" alt="Foto">
            </div>
            <div class="col-4 d-flex flex-column" id="a">
                <h4>Student :</h4>
                <p><strong>Name</strong>: {{ $st['name'] }} {{ $st['surname'] }}</p>
                <p><strong>Age</strong>: {{ $st['age'] }}</p>
            </div>

            <div class="col-7 d-flex flex-column " id="b">
                <h4>Contacts :</h4>
                <p><strong>Phone</strong>: + {{ $st['phone'] }}</p>
                <p><strong>Email</strong>: {{ $st['email'] }}</p>
            </div>


        </div>
        @endforeach
    </div>


    <style>
        #a {
            padding-left: 120px;
        }

        h1 {
            color: blue;
            font-weight: 700;
        }

        img {
            width: 100px;
            height: 100px;
        }

        .btn {
            box-shadow: 5px 5px 10px 1px #a79f95;
            margin-left: 20px;
        }

        .cont1 {
            margin-left: 600px;
        }

        h4 {
            color: #d10707;
        }

        p {
            font-size: 20px;
        }
    </style>


</body>

</html>
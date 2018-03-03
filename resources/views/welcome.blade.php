<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: Arial, sans-serif;

                margin: 0;
            }





            .people-box{
    margin:20px 0;
            }
            .more-info-box{display:none}
        </style>

    </head>
    <body>
        <div class="container">
            @foreach ($peoples as $index=>$people)
                <div class="people-box">This is people: {{ $people['name'] }}
                    <a class="link-info" href="#">More Info!</a>
                    <div class="more-info-box">
                        <ul>
                            <li> height: {{ $people['height'] }}</li>
                            <li>mass: {{ $people['mass'] }}</li>
                            <li> hair_color:{{ $people['hair_color'] }}</li>
                            <li>skin_color: {{ $people['skin_color'] }}</li>
                            <li> eye_color: {{ $people['eye_color'] }}</li>
                            <li> birth_year: {{ $people['birth_year'] }}</li>
                            <li> gender: {{ $people['gender'] }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
<script>
    $( document ).ready(function() {
        $( ".link-info" ).click(function(event) {
            event.preventDefault();
            $(this).siblings('.more-info-box').toggle( "slow" );
        });
    });
</script>
</html>

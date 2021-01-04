<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FTester</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
    <div class="content" style="margin-top: 15px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-header">Microphone</h5>
                        <img src="{{ asset('/images/microphone-icon.jpg') }}" class="card-img-top" alt="Microphone Icon">
                        <div class="card-body">
                            <p class="card-text">Press the Record button to test the microphone devices.</p>
                            <select class="form-control mb-3">
                                <option>-- Select Input Device --</option>
                            </select>
                            <a href="#" class="btn btn-primary btn-block">Test</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-header">Camera</h5>
                        <img src="{{ asset('images/play-icon.jpg') }}" class="card-img-top" alt="Play Icon">
                        <div class="card-body">
                            <p class="card-text">Press the Record button to test the camera devices.</p>
                            <select class="form-control mb-3">
                                <option>-- Select Input Device --</option>
                            </select>
                            <a href="#" class="btn btn-primary btn-block">Test</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h5 class="card-header">Sound</h5>
                        <img src="{{ asset('images/audio-icon.jpg') }}" class="card-img-top" alt="Audio Icon">
                        <div class="card-body">
                            <p class="card-text">Press the buttons below to test the speaker devices.</p>
                            <select class="form-control mb-3">
                                <option>-- Select Input Device --</option>
                            </select>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-primary btn-block">Left</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-primary btn-block">Right</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

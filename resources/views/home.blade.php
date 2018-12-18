@extends('layouts.app')

@section('content')
    <!-- main body text -->
    <div class="container font-change">
        <div class="row">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 centerText"><h1>Welcome To South Midlands Powerlifting</h1><br>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 centerText ">South Midlands Powerlifting is affiliated to the
                        English Powerlifting Association (EPA) and represents the South Midlands Division of British
                        Powerlifting (BP) which is the nationally recognised governing body of drug free Powerlifting in
                        the UK.<br><br>
                        The South Midlands division covers the areas of Buckinghamshire, Oxfordshire, Berkshire,
                        Hampshire & the Isle of Wight.
                        <div class="row">
                            <div class="col-md-4 centerText"><br><br>
                                <h3>Where and when are the events?</h3><br>
                                Click below to see the events Calendar
                                <br><br>
                                <a class="btn btn-default" href="events.html" role="button">Events</a></div>
                            <div class="col-md-4 centerText"><br><br>
                                <h3>Where can I see the results from my competition?</h3><br>
                                Click below to see the reults.
                                <br><br>
                                <a class="btn btn-default" href="results.html" role="button">Results</a></div>
                            <div class="col-md-4 centerText"><br><br>
                                <h3>What are the divisional records?</h3><br>
                                click below to see the records from this division.
                                <br><br>
                                <a class="btn btn-default" href="records.html" role="button">Records</a></div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3 centerText"><h3>Divisional Executives:</h3>
                        <div class="row">
                            <div class="col-md-4 centerText"><br><br>Chairman<br>
                                Dean Bowring
                                <br><br>
                            </div>
                            <div class="col-md-4 centerText"><br><br>General Secretary<br>
                                David Murray
                                <br><br>
                            </div>
                            <div class="col-md-4 centerText"><br><br>Media Officer<br>
                                David Murray
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('app')

@section('content')
    <div class="wrapper style1 first">
        <article class="container" id="top">
            <div class="row">
                <div class="4u">
                    <span class="image fit"><img src="{{ asset('images/panda-logo-medium.png') }}" alt="" /></span>
                </div>
                <div class="8u">
                    <header>
                        <h1>Hi. We are <strong>Panda Love</strong>.</h1>
                    </header>
                    <p>A <strong>Destiny</strong> clan, who frequently run raids, obliterate the competition in PVP &amp; Trials Of Osiris along with dabbing in Prison of Elders and Flawless Raids.</p>
                    <a href="{{ URL::action('RosterController@getIndex') }}" class="button big scrolly">Meet our Group</a>
                </div>
            </div>
        </article>
    </div>
    <div class="wrapper style2">
        <article id="work">
            <header>
                <h2>Here's all we do</h2>
                <p>Ranging from raids, multiplayer and much more</p>
            </header>
            <div class="container">
                <div class="row">
                    <div class="4u">
                        <section class="box style1">
                            <span class="icon featured fa-comments-o"></span>
                            <h3>Raids / Prison of Elders</h3>
                            <p>Every Tuesday during reset, we take down the hardest challenge available</p>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="box style1">
                            <span class="icon featured fa-crosshairs"></span>
                            <h3>Multiplayer</h3>
                            <p>Whether its 3 or 6 of us online, an unstoppable force is met.</p>
                        </section>
                    </div>
                    <div class="4u">
                        <section class="box style1">
                            <span class="icon featured fa-thumbs-o-up"></span>
                            <h3>Flawless Raider</h3>
                            <p>Still chasing that hard to reach achievement? We have earned it numerous times</p>
                        </section>
                    </div>
                </div>
            </div>
            <footer>
                <p>Want to see more? Take a look at our game history from these top moments</p>
                <a href="{{ URL::action('GameController@getIndex') }}" class="button big scrolly">View our Games</a>
            </footer>
        </article>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="p-1 dark-bg shadow mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex pb-5 revealL">
                        <img src="https://i.imgur.com/9Xqy9bK.png" style="max-width: 100%" alt="Big TV Roster">
                    </div>
                    <div
                        class="col-md-6 primary-text p-5 d-flex align-items-center justify-content-center flex-column mb-5 revealR">
                        <h1 class="my-4">Your best TV shows on the best channels!</h1>
                        <h4>On ManiTV you will be able to enjoy the best TV shows of all the globe, even some of them
                            only findable on our channel roster.
                        </h4>
                        <a class="btn btn-primary btn-lg mt-5 w-100" href="/register">Subscribe now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-1 bg-info shadow mb-5">
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-6 dark-text p-5 d-flex align-items-center justify-content-center flex-column mb-5 revealL">
                        <h1 class="my-4">Multiple Services!</h1>
                        <h4>We offer you multiple services opportunities, we can serve you as internet, phone or TV
                            providers. We are on the top of all we offer.</h4>
                        <a class="btn btn-dark btn-lg mt-5 w-100" href="/register">See our services</a>
                    </div>
                    <div class="col-md-6 d-flex p-5 revealR">
                        <img src="https://i.imgur.com/SG8CEJh.png" style="max-width: 100%" alt="A lot of services">

                    </div>
                </div>
            </div>
        </div>

        <div class="p-1 default-bg shadow mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex pb-5 revealL">
                        <img src="https://i.imgur.com/Y0EWR1J.png" style="max-width: 100%" alt="Amazing prices">
                    </div>
                    <div
                        class="col-md-6 primary-text p-5 d-flex align-items-center justify-content-center flex-column mb-5 revealR">
                        <h1 class="my-4">Best prices!</h1>
                        <h4>Don't let the amazing things we can provide fool you thinking that all of this is expensive.
                            On ManiTV we are one of the cheapest providers on all the globe, with our wide packages catalog
                            you can choose one that fit your needs as a consumer.
                        </h4>
                        <a class="btn btn-primary btn-lg mt-5 w-100" href="/register">Start browsing</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-1 bg-info shadow mb-5">
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-6 dark-text p-5 d-flex align-items-center justify-content-center flex-column mb-5 revealL">
                        <h1 class="my-4">Best System!</h1>
                        <h4>We have a system ran by our administrators were you as a user can change your plans and see your
                            payments directly
                            through our platform, no need of long waiting queues or annoying calls for simple transactions,
                            get all when
                            you want, how you want. Online and fast.
                        </h4>
                        <a class="btn btn-dark btn-lg mt-5 w-100" href="/register">Join Us</a>
                    </div>
                    <div class="col-md-6 d-flex p-5 revealR">
                        <img src="https://i.imgur.com/ufBxeux.png" style="max-width: 100%" alt="Best system">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

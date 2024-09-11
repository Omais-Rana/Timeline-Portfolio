@extends('layouts.app')
<style>
    @media (min-width:992px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="4ffe5aa5-3693-44de-bf1b-063581e7340d"] {
            -webkit-transform: translate3d(0, 3rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -moz-transform: translate3d(0, 3rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            -ms-transform: translate3d(0, 3rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            transform: translate3d(0, 3rem, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
            opacity: 0;
        }
    }

    @media (max-width:991px) and (min-width:768px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="4ffe5aa5-3693-44de-bf1b-063581e7340d"] {
            height: 0px;
        }
    }

    @media (max-width:767px) and (min-width:480px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="4ffe5aa5-3693-44de-bf1b-063581e7340d"] {
            height: 0px;
        }
    }

    @media (max-width:479px) {
        html.w-mod-js:not(.w-mod-ix) [data-w-id="4ffe5aa5-3693-44de-bf1b-063581e7340d"] {
            height: 0px;
        }
    }
</style>
@section('content')
    <main class="main-wrapper">
        <!-- Hero -->
        <div class="section-timeline-heading">
            <div class="container">
                <div class="padding-vertical-xlarge">
                    <div class="timeline-main_heading-wrapper">
                        <div class="margin-bottom-medium">
                            <h2>This is the topmost heading of the page<span class="text-color-gold">.</span>
                            </h2>
                        </div>
                        <p class="paragraph-large">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fugit
                            perferendis nostrum, maxime a quo deserunt sequi nulla architecto obcaecati necessitatibus
                            vitaea.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Timeline -->
        <div class="section-timeline">
            <div class="container">
                <div class="timeline_component">
                    <div class="timeline_progress">
                        <div class="timeline_progress-bar"></div>
                    </div>
                    @foreach ($featured as $project)
                        <div data-w-id="" class="timeline_item">
                            <div id="w-node-_994b9910-2e82-4cf0-99d5-4caeffdead97-7198b501" class="timeline_left">
                                <div class="timeline_date-text">{{ $project->project_date }}</div>
                            </div>
                            <div id="w-node-_994b9910-2e82-4cf0-99d5-4caeffdead9a-7198b501" class="timeline_centre">
                                <div class="timeline_circle"></div>
                            </div>
                            <div id="w-node-_994b9910-2e82-4cf0-99d5-4caeffdead9c-7198b501" class="timeline_right"
                                style="margin-top: -30px;">
                                <div class="margin-bottom-xlarge">
                                    <div class="timeline_text">
                                        <h3>{{ $project->project_title }}</h3>
                                    </div>
                                    <div class="margin-top margin-medium" style="color: whitesmoke">
                                        {{ $project->project_description }}
                                    </div>
                                </div>
                                <div class="timeline_image-wrapper">
                                    <?php $images = json_decode($project->project_images); ?>

                                    <?php
                                    
                                    $firstImage = isset($images[0]) ? $images[0] : null;
                                    ?>

                                    @if ($firstImage)
                                        <img src="{{ Voyager::image($firstImage) }}" loading="lazy" width="480"
                                            sizes="(max-width: 479px) 48px, (max-width: 767px) 64px, 36vw"
                                            alt="Project Image" />
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="overlay-fade-top"></div>
                </div>
            </div>
        </div>
        <!-- Bottom -->
        <div data-w-id="38792346-b627-862c-f22e-70058b698837" class="section-timeline-cta">
            <div class="container">
                <div class="padding-vertical-xlarge">
                    <div style="opacity:0.25" class="timeline-main_heading-wrapper">
                        <div class="margin-bottom-medium">
                            <div class="timeline_date-text">Last Heading</div>
                        </div>
                        <div class="margin-bottom-small">
                            <div class="timeline_text">David Laroche continue à aider les ambitieux à défier le
                                statu quo. Et vivre la vie qui les inspire vraiment. <br />
                            </div>
                        </div>
                        <div class="margin-bottom-large">
                            <p class="paragraph-large">Vous avez entendu mon histoire, il est maintenant temps pour
                                le monde dentendre la vôtre.</p>
                        </div>
                        <div class="align-center-2">
                            <a href="{{ url('/portfolio') }}" class="button is-secondary w-button">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.home-layout')

@section('content')
    <section id="content" class="s-content">



        <div id="bricks" class="bricks">
            <!--  masonry -->
            <div class="masonry">

                <div class="bricks-wrapper" data-animate-block>

                    <div class="grid-sizer"></div>

                    @foreach($posts as $post)
                        <article class="brick entry" data-animate-el>

                            <div class="entry__thumb">
                                <a href="/post/{{$post->id}}" class="thumb-link">
                                    <img src="{{asset('images/thumbs/masonry/statue-600.jpg')}}"
                                         srcset="images/thumbs/masonry/statue-600.jpg 1x, images/thumbs/masonry/statue-1200.jpg 2x"
                                         alt="">
                                </a>
                            </div> <!-- end entry__thumb -->

                            <div class="entry__text">
                                <div class="entry__header">
                                    <div class="entry__meta">
                                        <span class="cat-links">
                                            <a href="/?category = {{$post->category}}">{{$post->category}}</a>
                                        </span>
                                        <span class="byline">
                                            By:
                                            <a href="#0">{{$post->author}}</a>
                                        </span>
                                    </div>
                                    <h1 class="entry__title"><a href="single-standard.html">{{$post->title}}</a>
                                    </h1>
                                </div>
                                <div class="entry__excerpt">
                                    <p>
                                        {{$post->description}}
                                    </p>
                                </div>
                                <a class="entry__more-link" href="#0">Read More</a>
                            </div> <!-- end entry__text -->

                        </article> <!-- end article -->
                    @endforeach



                </div> <!-- end bricks-wrapper -->

            </div> <!-- end masonry-->


            <!-- pagination -->
            <div class="row pagination">
                <div class="column lg-12">
                    <nav class="pgn">
                        <ul>
                            <li>
                                <a class="pgn__prev" href="#0">
                                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M19.25 12H5"></path>
                                    </svg>
                                </a>
                            </li>
                            <li><a class="pgn__num" href="#0">1</a></li>
                            <li><span class="pgn__num current">2</span></li>
                            <li><a class="pgn__num" href="#0">3</a></li>
                            <li><a class="pgn__num" href="#0">4</a></li>
                            <li><a class="pgn__num" href="#0">5</a></li>
                            <li><span class="pgn__num dots">…</span></li>
                            <li><a class="pgn__num" href="#0">8</a></li>
                            <li>
                                <a class="pgn__next" href="#0">
                                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5" d="M19 12H4.75"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav> <!-- end pgn -->
                </div> <!-- end column -->
            </div> <!-- end pagination -->

            <!-- end bricks -->
        </div>


    </section>
@endsection


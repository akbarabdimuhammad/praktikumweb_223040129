<section class="slider-container">
    <h2>Our Best Podcasts</h2>
    <button class="slider-btn left" id="scroll-left-3">&#8249;</button>
    <div class="slider-wrapper" id="slider-wrapper">
        @foreach(range(1, 24) as $i)
            <div class="slide">
                <a href="#" onclick="handleClick('Podcast {{ $i }}')">
                    <img src="{{ asset('img/Screenshot 2024-11-28 at 22.04.25.png') }}" alt="Sleepy Stories">
                </a>
            </div>
        @endforeach
    </div>
    <button class="slider-btn right" id="scroll-right-3">&#8250;</button>
</section>
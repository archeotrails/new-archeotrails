<section class="m-auto max-w-7xl mt-8 mb-16 w-full relative">
    <div
        class="{{$type}}-carousel-btn prev-btn active:translate-y-1 active:shadow-sm transition-all duration-300 w-11 h-11 absolute top-1/2 left-0 bg-white text-2xl cursor-pointer rounded-full shadow-md z-10 flex justify-center items-center">
        < </div>
            <div class="{{$type}}-carousel-container w-full overflow-hidden m-auto">
                <div
                    class="{{$type}}-carousel transition-all duration-300 ml-4 grid grid-flow-col auto-cols-[calc(100%_/_4_-_32px)] gap-8 py-4 sm:auto-cols-[calc(100%_/_1_-_32px)] lg:auto-cols-[calc(100%_/_3_-_32px)] md:auto-cols-[calc(100%_/_2_-_32px)]">
                    @foreach ($places as $place)
                        <div class="bg-white p-6 rounded shadow {{$type}}-card">
                            <img src="{{ asset('storage/' . $place->photo) }}" alt="{{ $place->name }}"
                                class="rounded mb-2">
                            <h4 class="text-xl font-semibold">{{ $place->name }}</h4>
                            <p class="text-gray-600 truncate">{{ $place->description }}</p>
                            <a href="{{ route('places.show', $place->id) }}" class="text-blue-600 hover:underline" id="viewdetails">View
                                Details</a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div
                class="{{$type}}-carousel-btn next-btn active:translate-y-1 active:shadow-sm transition-all duration-300 w-11 h-11 absolute top-1/2 right-0 bg-white text-2xl cursor-pointer rounded-full shadow-md z-10 flex justify-center items-center">
                >
            </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        initCarousel(`.{{$type}}-carousel-container`, `.{{$type}}-carousel`, `.{{$type}}-card`, `.{{$type}}-carousel-btn`);
    });

    function initCarousel(wrapperClass, carouselClass, imageBoxesClass, carouselBtnClass) {
        const wrapper = document.querySelector(wrapperClass);
        const carousel = document.querySelector(carouselClass);
        const imageBoxes = document.querySelectorAll(imageBoxesClass);
        const carouselBtn = document.querySelectorAll(carouselBtnClass);

        let pointer = 0;
        let gap = 32; // Updated gap value
        let offset = imageBoxes[0].offsetWidth + gap;

        let transformX = 0;
        let cardsPerDiv = Math.round(wrapper.offsetWidth / offset);

        carouselBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                if (btn.classList.contains('next-btn') && pointer < imageBoxes.length - cardsPerDiv) {
                    pointer++;
                    transformX = -(pointer * offset);
                    carousel.style.transform = `translateX(${transformX}px)`;
                } else if (btn.classList.contains('prev-btn') && pointer > 0) {
                    pointer--;
                    transformX = -(pointer * offset);
                    carousel.style.transform = `translateX(${transformX}px)`;
                } else if (pointer === 0 || pointer >= imageBoxes.length - cardsPerDiv) {
                    carousel.style.transform = "translateX(0)";
                    pointer = 0;
                }
            });
        });
    }
</script>

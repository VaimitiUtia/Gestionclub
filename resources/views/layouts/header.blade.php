<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <img src="{{asset('img/slide1.jpg')}}" class="imgfluid" width="1116px" height="160px" >
                <div class="carousel-caption text-start">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <img src="{{asset('img/slide2.jpg')}}" class="imgfluid" width="1116px" height="160px"  >
                <div class="carousel-caption">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <img src="{{asset('img/slide3.jpg')}}" class="imgfluid" width="1116px" height="160px" >
                <div class="carousel-caption text-end">
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

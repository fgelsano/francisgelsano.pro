<div class="portfolio" id="portfolio">
    <h2>My Portfolio</h2>
    
    <!-- Images used to open the lightbox -->
    <div class="row m-top-30">
        <div class="column" data-aos="flip-left" data-aos-offset="50">
            <img src="{{ asset('storage/local_assets/portfolios/gallery00.jpg')}}" onclick="openModal();currentSlide(1)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="100">
            <img src="{{ asset('storage/local_assets/portfolios/gallery01.jpg')}}" onclick="openModal();currentSlide(2)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="150">
            <img src="{{ asset('storage/local_assets/portfolios/gallery02.jpg')}}" onclick="openModal();currentSlide(3)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="200">
            <img src="{{ asset('storage/local_assets/portfolios/gallery03.jpg')}}" onclick="openModal();currentSlide(4)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="250">
            <img src="{{ asset('storage/local_assets/portfolios/gallery00.jpg')}}" onclick="openModal();currentSlide(1)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="300">
            <img src="{{ asset('storage/local_assets/portfolios/gallery01.jpg')}}" onclick="openModal();currentSlide(2)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="350">
            <img src="{{ asset('storage/local_assets/portfolios/gallery02.jpg')}}" onclick="openModal();currentSlide(3)" class="hover-shadow" style="width: 100%">
        </div>
        <div class="column" data-aos="flip-left" data-aos-offset="400">
            <img src="{{ asset('storage/local_assets/portfolios/gallery03.jpg')}}" onclick="openModal();currentSlide(4)" class="hover-shadow" style="width: 100%">
        </div>
    </div>
    
    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
    
        <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="{{ asset('storage/local_assets/portfolios/gallery00.jpg')}}" style="width:100%" class="cursor">
    
            <!-- Caption text -->
            <div class="caption-container">
            <h3>Title Here</h3>
            <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
            </div>
        </div>
    
        <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="{{ asset('storage/local_assets/portfolios/gallery01.jpg')}}" style="width:100%" class="cursor">
    
            <!-- Caption text -->
            <div class="caption-container">
            <h3>Title Here</h3>
            <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
            </div>
        </div>
    
        <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="{{ asset('storage/local_assets/portfolios/gallery02.jpg')}}" style="width:100%" class="cursor">
    
            <!-- Caption text -->
            <div class="caption-container">
            <h3>Title Here</h3>
            <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
            </div>
        </div>
    
        <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="{{ asset('storage/local_assets/portfolios/gallery03.jpg')}}" style="width:100%" class="cursor">
    
            <!-- Caption text -->
            <div class="caption-container">
            <h3>Title Here</h3>
            <h4>URL: <a href="#" target="_blank">www.website.com</a></h4>
            </div>
        </div>
    
        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
        </div>
    </div>
</div>
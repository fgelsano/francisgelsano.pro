<div class="tab-pane fade show active" id="hero" role="tabpanel" aria-labelledby="home-tab">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h4>Edit Hero Text Here</h4>
            <textarea name="customTextArea" id="heroTextArea" cols="" rows="10" class="customTextArea">
                <h1>Hi! I'm Francis</h1>
                <h2>I'm a Web Developer</h2>
                <br>
            </textarea>
        </div>
    </div>
    <div class="row mt-3">
        <label for="imageSelector" id="imageSelectorId" class="col-12">
            <div class="row" id="imageSelectorRow">
                <div id="imageSelectorContainer">Click or Drop the Image Here</div>
            </div>
            <input type="file" id="imageSelector">
        </label>
        <p id="filename">Test</p>
    </div>
    <div id="preview" class="mt-3">
        <h4>Preview:</h4>
        <div class="row px-3">
            <div class="preview col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-image: url('{{ asset('storage/local_assets/backgrounds/dev-bg.jpeg')}}'); height: 500px; background-size: cover;">
                <div class="row">
                    <div class="hero-text-preview offset-1 col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
                        <h1>Hi! I'm Francis</h1>
                        <h2>I'm a Web Developer</h2>
                        <br>
                        <a href="#contact" class="btn btn-success hvr-ripple-out hire-me" role="button" onclick="openContactForm()">Hire Me!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
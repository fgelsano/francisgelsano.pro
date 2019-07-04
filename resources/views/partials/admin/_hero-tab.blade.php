<div class="tab-pane fade show active" id="hero" role="tabpanel" aria-labelledby="hero-tab">
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
    <div class="row mt-3 p-3">
        <div class="file-drop-area col-12 col-sm-12 col-md-6">
            <span class="fake-btn">Choose files</span>
            <span class="file-msg">or drag and drop files here</span>
            <input class="file-input" type="file" multiple>
        </div>
        <div class="form-group col-12 col-sm-12 col-md-6">
            <input type="text" name="" id="" placeholder="Facebook Profile URL" class="form-control mt-1">
            <input type="text" name="" id="" placeholder="Twitter Profile URL" class="form-control mt-1">
            <input type="text" name="" id="" placeholder="LinkedIn Profile URL" class="form-control mt-1">
            <input type="text" name="" id="" placeholder="YouTube Profile URL" class="form-control mt-1">
            <input type="text" name="" id="" placeholder="GitHub Profile URL" class="form-control mt-1">
        </div>
    </div>
    <div class="row p-3">
        <input type="submit" value="Save" class="btn btn-lg btn-block btn-success">
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
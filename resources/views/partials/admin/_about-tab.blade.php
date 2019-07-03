<div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="profile-tab">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-2">
            <h4>Edit Profile Picture</h4>
            <img src="{{ asset('storage/local_assets/profile/myprofile.jpg')}}" alt="My Portrait" class="img-responsive" width="100%">
        </div>
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <h4>Edit About Me Section</h4>
            <textarea name="customTextArea" id="heroTextArea" cols="" rows="50" class="customTextArea"></textarea>
            <div class="row p-3">
                <div class="file-drop-area col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <span class="fake-btn">Choose file</span>
                    <span class="file-msg">or drag &amp; drop <strong>Picture</strong></span>
                    <input class="file-input" type="file" multiple>
                </div>
                <div class="file-drop-area col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <span class="fake-btn">Choose file</span>
                    <span class="file-msg">or drag &amp; drop <strong>RESUME</strong></span>
                    <input class="file-input" type="file" multiple>
                </div>
            </div>
            <div class="row px-3">
                <button type="submit" class="btn btn-success btn-block btn-lg">Submit</button>
            </div>
        </div>
    </div>
</div>
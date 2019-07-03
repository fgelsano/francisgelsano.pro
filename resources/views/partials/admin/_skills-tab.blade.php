<div class="tab-pane fade" id="tech-stack" role="tabpanel" aria-labelledby="skills-tab">
    <div class="row px-3">
        <h4>Add New Skill</h4>
    </div>
    <div class="row px-3">
        <div class="skills-dropzone file-drop-area col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <span class="fake-btn">Choose file</span>
            <span class="file-msg">or drag &amp; drop <strong>icon</strong></span>
            <input class="file-input" type="file" multiple>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
            <div class="form-group">
                <label for="skillName">Skill Name</label>
                <input type="text" name="skillName" id="" class="form-control form-control-lg">
            </div>
            <div class="form-group">
                <label for="confidenceRate">Confidence Rate</label>
                <select name="confidenceRate" id="" class="form-control form-control-lg">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <div class="form-group">
                <input type="button" value="Add" class="btn btn-success form-control form-control-lg">
            </div>
        </div>
    </div>
    
    <div class="row mt-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <table class="table skills-table">
                <thead>
                    <tr>
                        <th scope="col">Skill</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Confidence Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HTML</td>
                        <td><img src="{{ asset('storage/local_assets/skills/html.png') }}" alt="HTML" width="10%" title="HTML"></td>
                        <td>Confidence Rate: 9/10</td>
                    </tr>
                    <tr>
                        <td>CSS</td>
                        <td><img src="{{ asset('storage/local_assets/skills/css.png') }}" alt="CSS" width="10%"  title="CSS"></td>
                        <td>Confidence Rate: 8/10</td>
                    </tr>
                    <tr>
                        <td valign="middle">Bootstrap</td>
                        <td><img src="{{ asset('storage/local_assets/skills/bootstrap.png') }}" alt="Bootstrap" width="10%" title="Bootstrap"></td>
                        <td>Confidence Rate: 8/10</td>
                    </tr>
                </tbody>
                </table>
        </div>
    </div>
</div>
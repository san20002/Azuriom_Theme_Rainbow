<div class="accordion" id="accordionParticle">
    <div class="card">
        <div class="card-header" id="headingNumber">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNumber"
                    aria-expanded="true" aria-controls="collapseNumber">Number
            </button>
        </div>

        <div id="collapseNumber" class="collapse show" aria-labelledby="headingNumber" data-parent="#accordionParticle">
            <div class="card-body">
                <div class="pb-1 row">
                    <label for="homeParticleConfigNumberValue" class="col-3">Value</label>
                    <input id="homeParticleConfigNumberValue" name="home[particle][config][number][value]" type="range"
                           class="custom-range col-7" min="1"
                           max="600"
                           step="1" oninput="this.nextElementSibling.value = this.value">
                    <output class="col-2">24</output>
                </div>
                <div class="pb-2">
                    <div class="custom-control custom-checkbox">
                        <label class="custom-control-label"
                               for="homeParticleConfigNumberDensityEnable">density.enable</label>
                        <input name="home[particle][config][number][densityEnable]" type="checkbox"
                               class="custom-control-input" id="homeParticleConfigNumberDensityEnable">
                    </div>
                </div>
                <div class="pb-2 row">
                    <label for="homeParticleConfigNumberDensityValue" class="col-3">density.value_area</label>
                    <input name="home[particle][config][number][densityValueArea]"
                           id="homeParticleConfigNumberDensityValue" type="range" class="custom-range col-7" min="1"
                           max="10000"
                           step="1" oninput="this.nextElementSibling.value = this.value">
                    <output class="col-2">24</output>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingColor">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseColor"
                    aria-expanded="false" aria-controls="collapseColor">Color
            </button>
        </div>
        <div id="collapseColor" class="collapse" aria-labelledby="headingColor" data-parent="#accordionParticle">
            <div class="card-body">
                <div class="pb-2 row">
                    <label for="homeParticleConfigColorValue" class="col-3">value (single string)</label>
                    <input name="home[particle][config][color][value]"
                           id="homeParticleConfigColorValue" type="color" class="form-control col-7">
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingShape">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseShape"
                    aria-expanded="false" aria-controls="collapseShape">Shape
            </button>
        </div>
        <div id="collapseShape" class="collapse" aria-labelledby="headingShape" data-parent="#accordionParticle">
            <div class="card-body">
                <div class="accordion" id="accordionParticleShape">
                    <div class="card">
                        <div class="card-header" id="headingStroke">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseStroke"
                                    aria-expanded="false" aria-controls="collapseStroke">Stroke
                            </button>
                        </div>
                        <div id="collapseStroke" class="collapse" aria-labelledby="headingStroke"
                             data-parent="#accordionParticleShape">
                            <div class="card-body">
                                <div class="pb-1 row">
                                    <label for="homeParticleConfigStrokeWidth" class="col-3">stroke.width</label>
                                    <input id="homeParticleConfigStrokeWidth"
                                           name="home[particle][config][shape][strokeWidth]" type="range"
                                           class="custom-range col-7" min="1" max="20"
                                           step="1" oninput="this.nextElementSibling.value = this.value">
                                    <output class="col-2">24</output>
                                </div>
                                <div class="pb-2 row">
                                    <label for="homeParticleConfigColorValue" class="col-3">value (single string)</label>
                                    <input name="home[particle][config][shape][strokeColor]"
                                           id="homeParticleConfigColorValue" type="color" class="form-control col-7">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingPolygon">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsePolygon"
                                    aria-expanded="false" aria-controls="collapsePolygon">Polygon
                            </button>
                        </div>
                        <div id="collapsePolygon" class="collapse" aria-labelledby="headingPolygon"
                             data-parent="#accordionParticleShape">
                            <div class="card-body">
                                <div class="pb-1 row">
                                    <label for="homeParticleConfigPolygonNbSides" class="col-3">Polygon.nb_sides</label>
                                    <input id="homeParticleConfigPolygonNbSides"
                                           name="home[particle][config][shape][polygonNbSides]" type="range"
                                           class="custom-range col-7" min="1" max="20"
                                           step="1" oninput="this.nextElementSibling.value = this.value">
                                    <output class="col-2">24</output>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingImage">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseImage"
                                    aria-expanded="false" aria-controls="collapseImage">Image
                            </button>
                        </div>
                        <div id="collapseImage" class="collapse" aria-labelledby="headingImage"
                             data-parent="#accordionParticleShape">
                            <div class="card-body">
                                <div class="pb-1 row">
                                    <label for="homeParticleConfigImageSrc" class="col-3">Image.src</label>
                                    <input id="homeParticleConfigImageSrc"
                                           name="home[particle][config][shape][imageSrc]" type="text"
                                           class="form-control col-7">
                                </div>
                                <div class="pb-1 row">
                                    <label for="homeParticleConfigImageWidth" class="col-3">Image.width</label>
                                    <input id="homeParticleConfigImageWidth"
                                           name="home[particle][config][shape][imageWidth]" type="number"
                                           class="form-control col-7">
                                </div>
                                <div class="pb-1 row">
                                    <label for="homeParticleConfigImageHeight" class="col-3">Image.height</label>
                                    <input id="homeParticleConfigImageHeight"
                                           name="home[particle][config][shape][imageHeight]" type="number"
                                           class="form-control col-7">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 row">
                    <label for="homeParticleConfigShapeType" class="col-3">value (single string)</label>
                    <select id="homeParticleConfigShapeType" class="col-9" name="home[particle][config][shape][type]">
                        <option value="circle">circle</option>
                        <option value="edge">edge</option>
                        <option value="triangle">triangle</option>
                        <option value="polygon">polygon</option>
                        <option value="star">star</option>
                        <option value="image">image</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<button class="btn-picto-color">
    <img src="https://cdn.discordapp.com/attachments/325270065307975681/880212784409903114/color-spectrum-1192509_1920.png" alt="">
</button>
<div id="change--color">
    <div class="app-sidebar app-sidebar-content js-app-sidebar--toggle">
        <div class="app-sidebar__inner">
            <div class="app-content">
                <ul class="app-content__group js-app-content__group" data-global="Colors">
                    <li>
                        <div class="app-content-item app-content-item--parent app-content-item--is-editable
                                     app-content-item--show-children js-app-content-item--is-editable js-app-content-item--group">
                            <span class="app-content-item__text">Main</span>
                        </div>
                        <ul class="js-app-content__main-colors">
                            <li class="app-content-item js-app-content-item" data-section="#color-primary">
                                <span class="app-content-item__text">--color-primary</span>
                            </li>
                            <li class="app-content-item js-app-content-item" data-section="#color-accent">
                                <span class="app-content-item__text">--color-accent</span>
                            </li>
                            <li class="app-content-item js-app-content-item" data-section="#color-download">
                                <span class="app-content-item__text">--color-download</span>
                            </li>
                        </ul>
                    </li>
                    {{--                                <li>--}}
                    {{--                                    <div--}}
                    {{--                                        class="app-content-item app-content-item--parent app-content-item--show-children js-app-content-item--group">--}}
                    {{--                                        <svg class="icon icon-arrow color-contrast-medium js-open-group"--}}
                    {{--                                             viewBox="0 0 16 16"><title>Open group</title>--}}
                    {{--                                            <path d="M8 11l4-5H4l4 5z"></path>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <svg aria-hidden="true" class="icon color-primary margin-right-xxxs"--}}
                    {{--                                             viewBox="0 0 16 16">--}}
                    {{--                                            <path d="M2 11a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5H2z"></path>--}}
                    {{--                                            <path d="M8 2H2v2h7L8 2z"></path>--}}
                    {{--                                        </svg>--}}
                    {{--                                        <span class="app-content-item__text">Black + White</span>--}}
                    {{--                                    </div>--}}
                    {{--                                    <ul>--}}
                    {{--                                        <li class="app-content-item js-app-content-item " data-section="#color-black">--}}
                    {{--                                            <span class="app-content-item__text">--color-black</span>--}}
                    {{--                                        </li>--}}
                    {{--                                        <li class="app-content-item js-app-content-item " data-section="#color-white">--}}
                    {{--                                            <span class="app-content-item__text">--color-white</span>--}}
                    {{--                                        </li>--}}
                    {{--                                    </ul>--}}
                    {{--                                </li>--}}
                    <li>
                        <div
                            class="app-content-item app-content-item--parent app-content-item--is-editable app-content-item--show-children js-app-content-item--is-editable js-app-content-item--group">
                            <span class="app-content-item__text">Feedback</span>
                        </div>
                        <ul class="js-app-content__feedback-colors">
                            <li class="app-content-item js-app-content-item" data-section="#color-success">
                                <span class="app-content-item__text">--color-success</span>
                            </li>
                            <li class="app-content-item js-app-content-item" data-section="#color-error">
                                <span class="app-content-item__text">--color-error</span>
                            </li>
                            <li class="app-content-item js-app-content-item" data-section="#color-warning">
                                <span class="app-content-item__text">--color-warning</span>
                            </li>
                            <li class="app-content-item js-app-content-item" data-section="#color-info">
                                <span class="app-content-item__text">--color-info</span>
                            </li>
                        </ul>
                    </li>
                    <li class="app-content-item js-app-content-item" data-section="#color-contrast">
                        <span class="app-content-item__text">Bg + Contrasts</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="app-color">

        <div
            class="app-sidebar app-sidebar-editor js-app-sidebar-editor--colors js-app-sidebar--globals js-app-sidebar--toggle">
            <div class="app-sidebar__inner">
                <div
                    class="app-editor-section js-app-editor-section__color-picker">
                    <div class="app-editor-section__title js-app-editor-section__title ">
                        <div class="flex items-center">
                            <span class="app-label">Color</span>
                        </div>
                    </div>
                    <div class="app-editor-section__body">
                        <div class="app-color-picker margin-bottom-xs js-color-picker">
                            <div class="app-color-picker__preview js-app-color-picker__color">
                                <input class="app-color-picker__native" type="color">
                            </div>
                            <div
                                class="app-color-picker__value js-app-color-picker__value js-app-color-picker__hex">
                                <div class="app-editor__input-group">
                                    <input class="app-form-control" type="text" name="colorHex">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--                        Background Color--}}
                <div class="app-editor-section js-app-editor-section__bg-color-picker d-none">
                    <div class="app-editor-section__title js-app-editor-section__title ">
                        <div class="flex items-center">
                            <span class="app-label">Background Color</span>
                        </div>
                    </div>
                    <div class="app-editor-section__body">
                        <div class="app-color-picker margin-bottom-md js-color-picker">
                            <div class="app-color-picker__preview js-app-color-picker__color">
                                <input class="app-color-picker__native" type="color">
                            </div>
                            <div
                                class="app-color-picker__value js-app-color-picker__value js-app-color-picker__hex">
                                <div class="app-editor__input-group">
                                    <input class="app-form-control" type="text" name="colorHex">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--                        Higher Contrast Color--}}
                <div class="app-editor-section js-app-editor-section__hc-color-picker d-none">
                    <div class="app-editor-section__title js-app-editor-section__title ">
                        <div class="flex items-center">
                            <span class="app-label">Higher Contrast Color</span>
                        </div>
                    </div>
                    <div class="app-editor-section__body">
                        <div class="app-color-picker margin-bottom-md js-color-picker">
                            <div class="app-color-picker__preview js-app-color-picker__color">
                                <input class="app-color-picker__native" type="color">
                            </div>
                            <div
                                class="app-color-picker__value js-app-color-picker__value js-app-color-picker__hex">
                                <div class="app-editor__input-group">
                                    <input class="app-form-control" type="text" name="colorHex">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-display="editColors"
             class="cd-demo-container cd-demo-max-width-md js-cd-demo-container js-cd-demo-container--colors d-none">
            <div class="cd-demo-color">
                <div class="cd-demo-color__list cd-demo-color__list--selected js-cd-demo-color__list"
                     data-section="#color-primary"></div>
                <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-accent"></div>
                <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-download"></div>
                {{--            <div class="cd-demo-color__list-auto js-cd-demo-color__list js-cd-demo-color__list--black"--}}
                {{--                 data-section="#color-black">--}}
                {{--                <div class="cd-demo-color__item">--}}
                {{--                    <div class="cd-demo-color__preview" style="background-color: var(--color-black)"></div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="cd-demo-color__list-auto js-cd-demo-color__list js-cd-demo-color__list--white"--}}
                {{--                 data-section="#color-white">--}}
                {{--                <div class="cd-demo-color__item">--}}
                {{--                    <div class="cd-demo-color__preview" style="background-color: var(--color-white)"></div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-success"></div>
                <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-error"></div>
                <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-warning"></div>
                <div class="cd-demo-color__list js-cd-demo-color__list" data-section="#color-info"></div>
                <div class="cd-demo-color__list cd-demo-color__list--contrast  js-cd-demo-color__list"
                     data-section="#color-contrast">
                </div>
            </div>
        </div>
    </div>

    <button class="btn--subtle btn btn-primary copy-globals-code" data-copy="scss">
        <em class="btn__content-a icon-text">
            <svg aria-hidden="true" class="icon" viewBox="0 0 16 16">
                <g>
                    <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                          d="M2 5h9v10H2z"></path>
                    <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                          d="M6 2V1h9v10h-1"></path>
                </g>
            </svg>
            <span class="js-modal__copy-text">Save theme</span>
        </em>
    </button>
</div>

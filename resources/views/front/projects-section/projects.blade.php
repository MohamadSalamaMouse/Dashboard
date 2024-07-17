<div id="section-projects" class="column_three">
    <div class="section-projects w-100 mt-0 p-1 overflow-hidden">
        <h2 class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">S<span
                    class="section-projects__title-span">ervices<br>CATEGORIES&nbsp;</span></span>
        </h2>
        <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">

            @foreach ($categories as $category)
                <li class="nav-item" role="presentation">
                    <button
                        class="position-relative nav-link {{ $loop->first ? 'active' : '' }} text-decoration-none section__tab-item"
                        id="pills-{{ $category->slug }}-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-{{ $category->slug }}" type="button" role="tab"
                        aria-controls="pills-{{ $category->slug }}"
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        <div class="circle position-absolute start-0 z-0"></div>
                        <div class="position-relative text z-1 text-white">
                            {{ $category->name }}
                        </div>
                    </button>
                </li>
            @endforeach
            {{-- <li class="nav-item" role="presentation">
                <button class="position-relative nav-link active text-decoration-none section__tab-item active"
                    id="pills-creative-design-tab" data-bs-toggle="pill" data-bs-target="#pills-creative-design"
                    type="button" role="tab" aria-controls="pills-creative-design" aria-selected="true">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Creative Designs
                    </div>
                </button>
            </li> --}}
            {{-- <li class="nav-item" role="presentation">
                <button class="position-relative position-relative nav-link text-decoration-none section__tab-item"
                    id="pills-motion-graphics-tab" data-bs-toggle="pill" data-bs-target="#pills-motion-graphics"
                    type="button" role="tab" aria-controls="pills-motion-graphics" aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Motion Graphics
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-video-shooting-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-video-shooting" type="button" role="tab"
                    aria-controls="pills-video-shooting" aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Video Shooting
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-event-management-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-event-management" type="button" role="tab"
                    aria-controls="pills-event-management" aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Event Management
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-interior-luxury-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-interior-luxury" type="button" role="tab"
                    aria-controls="pills-interior-luxury" aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        Interior – Luxury Living
                    </div>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="position-relative nav-link section__tab-item" id="pills-ui-ux-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-ui-ux" type="button" role="tab" aria-controls="pills-ui-ux"
                    aria-selected="false">
                    <div class="circle position-absolute start-0 z-0"></div>
                    <div class="position-relative text z-1 text-white">
                        ui/ux design
                    </div>
                </button>
            </li> --}}
        </ul>
        <div class="tab-content w-100" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-creative-design" role="tabpanel"
                aria-labelledby="pills-creative-design-tab" tabindex="0">
                <div class="container">
                    <div class="row gx-5 gy-5">
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; ">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_2.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_414x414.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_1.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_3.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_4.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_5.png') }}"
                                        style="min-height: 414px; min-width: 414px" class="w-100 h-100 object-fit-fill"
                                        alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_6.png') }}"
                                        style="min-height: 414px; min-width: 414px"
                                        class="w-100 h-100 object-fit-fill" alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0" style="min-height: 414px; min-width: 414px">
                                <div class="card-image w-100" style="min-height: 414px; min-width: 414px">
                                    <img src="{{ asset('assets/front_assets/images/img_placeholder_7.png') }}"
                                        style="min-height: 414px; min-width: 414px"
                                        class="w-100 h-100 object-fit-fill" alt="item" srcset="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-motion-graphics" role="tabpanel"
                    aria-labelledby="pills-motion-graphics-tab" tabindex="0">
                    ...
                </div>
                <div class="tab-pane fade" id="pills-video-shooting" role="tabpanel"
                    aria-labelledby="pills-video-shooting-tab" tabindex="0">
                    ...
                </div>
                <div class="tab-pane fade" id="pills-event-management" role="tabpanel"
                    aria-labelledby="pills-event-management-tab" tabindex="0">
                    ...
                </div>
                <div class="tab-pane fade" id="pills-interior-luxury" role="tabpanel"
                    aria-labelledby="pills-interior-luxury-tab" tabindex="0">
                    ...
                </div>
                <div class="tab-pane fade" id="pills-ui-ux" role="tabpanel" aria-labelledby="pills-ui-ux-tab"
                    tabindex="0">
                    ...
                </div>
            </div>
        </div>
        <div class="section-projects__actions w-100">
            <div class="section-projects__action-row">
                <div class="section__call-to-action-row">
                    <p class="section__call-to-action-text ui text-white text size-btn_text">
                        <!-- Wrap "vie" for individual styling -->
                        <span class="section__feature-bg">view</span> &nbsp; all
                        projects
                    </p>
                    <img src="{{ asset('assets/front_assets/images/img_arrow.svg') }}" alt="arrow image"
                        class="section__call-to-action-icon" />
                </div>
            </div>
        </div>
    </div>
</div>

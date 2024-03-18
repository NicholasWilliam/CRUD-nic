<div class="d-flex align-items-center ms-1 ms-lg-3">
    <div class="dropdown">
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" type="button" id="userProfileDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/media/avatars/150-26.jpg" alt="user" />
        </div>
        <ul class="dropdown-menu menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
            aria-labelledby="userProfileDropdown">
            <li><a class="menu-item px-3" href="#"><i class="fas fa-edit"></i> Edit Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i> Privacy and Help</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
        </ul>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#userProfileDropdown').on('click', function(e) {
            e.preventDefault();
            $('.dropdown-menu').toggleClass('show');
        });
    });
</script>

{{-- <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent"
        data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
        <img src="assets/media/avatars/150-26.jpg" alt="user" />
    </div>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px d-none"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo1/dist/pages/projects/list.html" class="menu-link px-5">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                </span>
            </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
            <a href="#" class="menu-link px-5">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/billing.html" class="menu-link px-5">Billing</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">Payments</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/statements.html"
                        class="menu-link d-flex flex-stack px-5">Statements
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                            title="View your statements"></i></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                checked="checked" name="notifications" />
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My Statements</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">Language
                    <span
                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                        <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg"
                            alt="" /></span></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                        </span>English</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                        </span>Spanish</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                        </span>German</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                        </span>Japanese</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                        </span>French</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5 my-1">
            <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <div class="menu-content px-5">
                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                    for="kt_user_menu_dark_mode_toggle">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
                        id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo1/dist/index.html" />
                    <span class="pulse-ring ms-n1"></span>
                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                </label>
            </div>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div> --}}
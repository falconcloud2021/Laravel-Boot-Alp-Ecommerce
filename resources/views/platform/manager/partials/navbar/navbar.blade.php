<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="#">
        <div class="d-flex align-items-center"><img class="me-2" src="#" alt="" width="40" /><span class="font-sans-serif">dashboard</span></div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
      <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">

        <!--  Navbar dashboards dropdown component  -->
        @include('platform.manager.partials.navbar.nav-dashboards-dropdown')

        <!--  Navbar web dropdown component  -->
        @include('platform.manager.partials.navbar.nav-web-dropdown')

        <!--  Navbar crm dropdown component  -->
        @include('platform.manager.partials.navbar.nav-crm-dropdown')

        <!--  Navbar services dropdown component  -->
        @include('platform.manager.partials.navbar.nav-services-dropdown')

        <!--  Navbar support dropdown component  -->
        @include('platform.manager.partials.navbar.nav-support-dropdown')

      </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item px-2">
          <div class="theme-control-toggle fa-icon-wait">
            <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
            <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
            <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
          </div>
        </li>
        <li class="nav-item d-none d-sm-block">
          <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="#"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span>
            <span class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll">
            <span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg" aria-labelledby="navbarDropdownNotification">
            <div class="card card-notification shadow-none">
              <div class="card-header">
                <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h6 class="card-header-title mb-0">Notifications</h6>
                </div>
                <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                </div>
              </div>
              <div class="scrollbar-overlay" style="max-height:19rem">
                <div class="list-group list-group-flush fw-normal fs--1">
                  <div class="list-group-title border-bottom">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                    <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                        <img class="rounded-circle" src="../assets/img/team/1-thumb.png" alt="" />
                        </div>
                    </div>
                    <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                    </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush notification-unread" href="#!">
                    <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                    </div>
                    <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                        <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                    </div>
                    </a>
                  </div>
                  <div class="list-group-title border-bottom">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                    <div class="notification-avatar">
                        <div class="avatar avatar-2xl me-3">
                        <img class="rounded-circle" src="#" alt="img" />
                        </div>
                    </div>
                    <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                    </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                    <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                        <img class="rounded-circle" src="#" alt="img" />
                        </div>
                    </div>
                    <div class="notification-body">
                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>
                    </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="border-bottom-0 notification notification-flush" href="#">
                    <div class="notification-avatar">
                        <div class="avatar avatar-xl me-3">
                        <img class="rounded-circle" src="#" alt="img" />
                        </div>
                    </div>
                    <div class="notification-body">
                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                        <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            <div class="card-footer text-center border-top"><a class="card-link d-block" href="#">View all</a></div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown px-1">
          <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button" data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
            <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
            <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
            <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
            <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
            <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
            <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
            <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
            <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
            <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg></a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg" aria-labelledby="navbarDropdownMenu">
            <div class="card shadow-none">
              <div class="scrollbar-overlay nine-dots-dropdown">
                <div class="card-body px-3">
                  <div class="row text-center gx-0 gy-0">
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#" target="_blank">
                        <div class="avatar avatar-2xl"> <img class="rounded-circle" src="#" alt="img" /></div>
                        <p class="mb-0 fw-medium text-800 text-truncate fs--2">Acc</p></a>
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#" target="_blank">
                      <img class="rounded" src="#" alt="img" width="40" height="40" />
                      <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Theme</p></a>
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#" target="_blank">
                      <img class="rounded" src="#" alt="img" width="40" height="40" />
                      <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Theme 2</p></a>
                    </div>
                    <div class="col-12">
                      <hr class="my-3 mx-n3 bg-200" />
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#" target="_blank">
                      <img class="rounded" src="#" alt="img" width="40" height="40" />
                      <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p></a>
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#" target="_blank">
                      <img class="rounded" src="#" alt="img" width="40" height="40" />
                      <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p></a>
                    </div>
                    <div class="col-4"><a class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none" href="#" target="_blank">
                      <div class="avatar avatar-2xl">
                        <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span class="fs-2">E</span></div>
                      </div>
                      <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p></a>
                    </div>
                    <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-xl">
              <img class="rounded-circle" src="#" alt="img" />
            </div>
          </a>
          <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
              <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Start</span></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#!">Set status</a>
              <a class="dropdown-item" href="#">Profile &amp; account</a>
              <a class="dropdown-item" href="#!">Feedback</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </div>
        </li>
    </ul>
</nav>

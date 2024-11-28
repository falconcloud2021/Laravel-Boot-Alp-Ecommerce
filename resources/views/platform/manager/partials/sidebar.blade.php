<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
        if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
        }
</script>
<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
      <div class="toggle-icon-wrapper">
        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
      </div><a class="navbar-brand" href="#">
      <div class="d-flex align-items-center py-3"><img class="me-2" src="#" alt="" width="40" /><span class="font-sans-serif">Dashboard</span></div>
      </a>
    </div>
    <!-- Left Sidebar(Vertical navbar) -->
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
          <li class="nav-item">  <!-- dashboards navbar vertical -->
            <!-- parent pages --><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
            </a>
            <ul class="nav collapse" id="dashboard">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                </a> <!-- more inner pages -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Analytics</span></div>
                </a> <!-- more inner pages -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">E commerce</span></div>
                </a> <!-- more inner pages -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CRM</span></div>
                </a> <!-- more inner pages -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">LTV</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                </a> <!-- more inner pages -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Management</span></div>
                </a> <!-- more inner pages -->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support desk</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
                </a> <!-- more inner pages -->
              </li>
            </ul>
          </li> <!-- end dashboards navbar vertical -->
          <li class="nav-item">  <!-- web navbar vertical -->
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">WEB</div>
                <div class="col ps-0">
                    <hr class="mb-0 navbar-vertical-divider" />
                </div>
            </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
            </a>
            <ul class="nav collapse" id="e-commerce">
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product & Atten</span></div>
                </a><!-- more inner pages-->
                <ul class="nav collapse" id="product">
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Category list</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Brands</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Import</span></div>
                    </a><!-- more inner pages-->
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping report</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Warehouse</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#accounting" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accounting</span></div>
                </a><!-- more inner pages-->
                <ul class="nav collapse" id="accounting">
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settlements</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span></div>
                    </a><!-- more inner pages-->
                  </li>
                </ul>
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Adds</span></div>
            </a>
            <ul class="nav collapse" id="events">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Banners</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sales</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Add list</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link" href="#" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope"></span></span><span class="nav-link-text ps-1">Email</span></div>
            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#blog" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="blog">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-window-restore"></span></span><span class="nav-link-text ps-1">Blog</span></div>
            </a>
            <ul class="nav collapse" id="blog">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Post list</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Categories</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reports</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
            </a>
            <ul class="nav collapse" id="faq">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq main</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#miscellaneous" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="miscellaneous">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-thumbtack"></span></span><span class="nav-link-text ps-1">Miscellaneous</span></div>
            </a>
            <ul class="nav collapse" id="miscellaneous">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invite people</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul>
          </li>  <!-- end web navbar vertical -->
          <li class="nav-item">  <!-- crm navbar vertical -->
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">CRM</div>
            <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
            </div>
            </div><!-- parent pages--><a class="nav-link" href="#" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
            </a><!-- parent pages--><a class="nav-link" href="#" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-phone"></span></span><span class="nav-link-text ps-1">Calls</span></div>
            </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#user" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="user">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">Leads</span></div>
            </a>
            <ul class="nav collapse" id="user">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leads list</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chank</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
            </a>
            <ul class="nav collapse" id="social">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#projects" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="projects">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Projects</span></div>
            </a>
            <ul class="nav collapse" id="projects">
            <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Active</span></div>
                </a><!-- more inner pages-->
            </li>
            <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                </a><!-- more inner pages-->
            </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">LTV</span></div>
            </a>
            <ul class="nav collapse" id="pricing">
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alt</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link" href="#" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
            </a><!-- parent pages--><a class="nav-link" href="#" role="button">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
            </a>
          </li>  <!-- end crm navbar vertical -->
          <li class="nav-item">  <!-- services navbar vertical -->
            <!-- label-->
            <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
              <div class="col-auto navbar-vertical-label">Services</div>
              <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider" />
              </div>
            </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-learning" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">E learning</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
            </a>
            <ul class="nav collapse" id="e-learning">
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course</span></div>
                </a><!-- more inner pages-->
                <ul class="nav collapse" id="course">
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Article list</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Course grid</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create article</span></div>
                    </a><!-- more inner pages-->
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">View</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Trainer</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#settings" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="settings">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">Settings</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
            </a>
            <ul class="nav collapse" id="settings">
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#menu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="menu">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Menu</span></div>
                </a><!-- more inner pages-->
                <ul class="nav collapse" id="menu">
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chat</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Custom</span></div>
                    </a><!-- more inner pages-->
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">View</span></div>
                </a><!-- more inner pages-->
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#support" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="support">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">Support Desk</span><span class="badge rounded-pill ms-2 badge-subtle-success">New</span></div>
            </a>
            <ul class="nav collapse" id="support">
              <li class="nav-item"><a class="nav-link dropdown-indicator" href="#reports" data-bs-toggle="collapse" aria-expanded="false" aria-controls="reports">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Reports</span></div>
                </a><!-- more inner pages-->
                <ul class="nav collapse" id="reports">
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tickets</span></div>
                    </a><!-- more inner pages-->
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">
                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                    </a><!-- more inner pages-->
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overview</span></div>
                </a><!-- more inner pages-->
              </li>
            </ul>
          </li>  <!-- end services navbar vertical -->
        </ul>
        <div class="settings mb-3">
          <div class="card shadow-none">
            <div class="card-body alert mb-0" role="alert">
              <div class="btn-close-falcon-container"><button class="btn btn-link btn-close-falcon p-0" aria-label="Close" data-bs-dismiss="alert"></button></div>
                <div class="text-center"><img src="#" alt="" width="80" />
                  <p class="fs--2 mt-2">Create <br />Your new <a href="#">Project</a></p>
                  <div class="d-grid"><a class="btn btn-sm btn-purchase" href="#" target="_blank">+ NEW Project</a></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end Left Sidebar(Vertical navbar) -->
</nav>

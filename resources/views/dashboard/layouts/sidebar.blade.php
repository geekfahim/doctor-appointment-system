<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="index.html">
                <div class="logo-img">
                    <img src="{{ asset('template/src/img/brand-white.svg') }}" class="header-brand-img" alt="lavalite">
                </div>
                <span class="text">ThemeKit</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded"
                    class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">Navigation</div>
                    <div class="nav-item active">
                        <a href="index.html"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span>
                            <span class="badge badge-success">New</span></a>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span>
                            <span class="badge badge-danger">150+</span></a>
                        <div class="submenu-content">
                            <a href="pages/widgets.html" class="menu-item">Basic</a>
                            <a href="pages/widget-statistic.html" class="menu-item">Statistic</a>
                            <a href="pages/widget-data.html" class="menu-item">Data</a>
                            <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a>
                        </div>
                    </div>
                    <div class="nav-lavel">UI Element</div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-box"></i><span>Basic</span></a>
                        <div class="submenu-content">
                            <a href="pages/ui/alerts.html" class="menu-item">Alerts</a>
                            <a href="pages/ui/badges.html" class="menu-item">Badges</a>
                            <a href="pages/ui/buttons.html" class="menu-item">Buttons</a>
                            <a href="pages/ui/navigation.html" class="menu-item">Navigation</a>
                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-gitlab"></i><span>Advance</span> <span
                                class="badge badge-success">New</span></a>
                        <div class="submenu-content">
                            <a href="pages/ui/modals.html" class="menu-item">Modals</a>
                            <a href="pages/ui/notifications.html" class="menu-item">Notifications</a>
                            <a href="pages/ui/carousel.html" class="menu-item">Slider</a>
                            <a href="pages/ui/range-slider.html" class="menu-item">Range Slider</a>
                            <a href="pages/ui/rating.html" class="menu-item">Rating</a>
                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-package"></i><span>Extra</span></a>
                        <div class="submenu-content">
                            <a href="pages/ui/session-timeout.html" class="menu-item">Session
                                Timeout</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="pages/ui/icons.html"><i class="ik ik-command"></i><span>Icons</span></a>
                    </div>
                    <div class="nav-lavel">Forms</div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-edit"></i><span>Forms</span></a>
                        <div class="submenu-content">
                            <a href="pages/form-components.html" class="menu-item">Components</a>
                            <a href="pages/form-addon.html" class="menu-item">Add-On</a>
                            <a href="pages/form-advance.html" class="menu-item">Advance</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="pages/form-picker.html"><i class="ik ik-terminal"></i><span>Form
                                Picker</span> <span class="badge badge-success">New</span></a>
                    </div>

                    <div class="nav-lavel">Tables</div>
                    <div class="nav-item">
                        <a href="pages/table-bootstrap.html"><i class="ik ik-credit-card"></i><span>Bootstrap
                                Table</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="pages/table-datatable.html"><i class="ik ik-inbox"></i><span>Data
                                Table</span></a>
                    </div>

                    <div class="nav-lavel">Charts</div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-pie-chart"></i><span>Charts</span> <span
                                class="badge badge-success">New</span></a>
                        <div class="submenu-content">
                            <a href="pages/charts-chartist.html" class="menu-item active">Chartist</a>
                            <a href="pages/charts-flot.html" class="menu-item">Flot</a>
                            <a href="pages/charts-knob.html" class="menu-item">Knob</a>
                            <a href="pages/charts-amcharts.html" class="menu-item">Amcharts</a>
                        </div>
                    </div>

                    <div class="nav-lavel">Apps</div>
                    <div class="nav-item">
                        <a href="pages/calendar.html"><i class="ik ik-calendar"></i><span>Calendar</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="pages/taskboard.html"><i class="ik ik-server"></i><span>Taskboard</span></a>
                    </div>

                    <div class="nav-lavel">Pages</div>

                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-lock"></i><span>Authentication</span></a>
                        <div class="submenu-content">
                            <a href="pages/login.html" class="menu-item">Login</a>
                            <a href="pages/register.html" class="menu-item">Register</a>
                            <a href="pages/forgot-password.html" class="menu-item">Forgot Password</a>
                        </div>
                    </div>
                    <div class="nav-item has-sub">
                        <a href="#"><i class="ik ik-file-text"></i><span>Other</span></a>
                        <div class="submenu-content">
                            <a href="pages/profile.html" class="menu-item">Profile</a>
                            <a href="pages/invoice.html" class="menu-item">Invoice</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="pages/layouts.html"><i class="ik ik-layout"></i><span>Layouts</span><span
                                class="badge badge-success">New</span></a>
                    </div>
                    <div class="nav-lavel">Other</div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-list"></i><span>Menu
                                Levels</span></a>
                        <div class="submenu-content">
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.1</a>
                            <div class="nav-item has-sub">
                                <a href="javascript:void(0)" class="menu-item">Menu Level 2.2</a>
                                <div class="submenu-content">
                                    <a href="javascript:void(0)" class="menu-item">Menu Level 3.1</a>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="menu-item">Menu Level 2.3</a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <a href="javascript:void(0)" class="disabled"><i
                                class="ik ik-slash"></i><span>Disabled Menu</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="javascript:void(0)"><i class="ik ik-award"></i><span>Sample
                                Page</span></a>
                    </div>
                    <div class="nav-lavel">Support</div>
                    <div class="nav-item">
                        <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Documentation</span></a>
                    </div>
                    <div class="nav-item">
                        <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Submit
                                Issue</span></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <aside class="right-sidebar">
        <div class="sidebar-chat" data-plugin="chat-sidebar">
            <div class="sidebar-chat-info">
                <h6>Chat List</h6>
                <form class="mr-t-10">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search for friends ...">
                        <i class="ik ik-search"></i>
                    </div>
                </form>
            </div>
            <div class="chat-list">
                <div class="list-group row">
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                        <figure class="user--online">
                            <img src="img/users/1.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Gene Newman</span> <span
                                class="username">@gene_newman</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                        <figure class="user--online">
                            <img src="img/users/2.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Billy Black</span> <span
                                class="username">@billyblack</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                        <figure class="user--online">
                            <img src="img/users/3.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Herbert Diaz</span> <span
                                class="username">@herbert</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                        <figure class="user--busy">
                            <img src="img/users/4.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Sylvia Harvey</span> <span
                                class="username">@sylvia</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                        <figure class="user--busy">
                            <img src="img/users/5.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Marsha Hoffman</span> <span
                                class="username">@m_hoffman</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                        <figure class="user--offline">
                            <img src="img/users/1.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Mason Grant</span> <span
                                class="username">@masongrant</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                        <figure class="user--offline">
                            <img src="img/users/2.jpg" class="rounded-circle" alt="">
                        </figure><span><span class="name">Shelly Sullivan</span> <span
                                class="username">@shelly</span></span>
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <div class="chat-panel" hidden>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                <span class="user-name">John Doe</span>
                <button type="button" class="close" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="card-body">
                <div class="widget-chat-activity flex-1">
                    <div class="messages">
                        <div class="message media reply">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="img/users/3.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Epic Cheeseburgers come in all kind of styles.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers make your knees weak.</p>
                            </div>
                        </div>
                        <div class="message media reply">
                            <figure class="user--offline">
                                <a href="#">
                                    <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers will never let you down.</p>
                                <p>They'll also never run around or desert you.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>A great cheeseburger is a gastronomical event.</p>
                            </div>
                        </div>
                        <div class="message media reply">
                            <figure class="user--busy">
                                <a href="#">
                                    <img src="img/users/5.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>There's a cheesy incarnation waiting for you no matter what you palete
                                    preferences are.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="img/users/1.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>If you are a vegan, we are sorry for you loss.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="javascript:void(0)" class="card-footer" method="post">
                <div class="d-flex justify-content-end">
                    <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                    <button class="btn btn-icon" type="submit"><i
                            class="ik ik-arrow-right text-success"></i></button>
                </div>
            </form>
        </div>
    </div>



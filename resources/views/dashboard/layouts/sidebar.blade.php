<div class="page-wrap">
    <div class="app-sidebar colored">
        <div class="sidebar-header">
            <a class="header-brand" href="index.html">
                <div class="logo-img">
                    <img src="{{ asset('template/src/img/brand-white.svg') }}" class="header-brand-img" alt="lavalite">
                </div>
                <span class="text">{{ __('DPS') }}</span>
            </a>
            <button type="button" class="nav-toggle"><i data-toggle="expanded"
                    class="ik ik-toggle-right toggle-icon"></i></button>
            <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
        </div>

        <div class="sidebar-content">
            <div class="nav-container">
                <nav id="main-menu-navigation" class="navigation-main">
                    <div class="nav-lavel">{{ __('Dashboard') }}</div>
                    <div class="nav-item active">
                        <a href="{{ route('dashboard') }}"><i
                                class="ik ik-bar-chart-2"></i><span>{{ __('Dashboard') }}</span></a>
                    </div>
                    @can('admin')
                        <div class="nav-lavel">{{ __('Settings') }}</div>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i class="ik ik-settings"></i><span>{{ __('Settings') }}</span>
                                <span class="badge badge-danger">10+</span></a>
                            <div class="submenu-content">
                                <a href="{{ route('admin.time.index') }}"
                                    class="menu-item">{{ __('Appointment Time') }}</a>
                                <a href="pages/widget-statistic.html" class="menu-item">Statistic</a>
                                <a href="pages/widget-data.html" class="menu-item">Data</a>
                                <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a>
                            </div>
                        </div>
                    @endcan
                    <div class="nav-item">
                        <a href="pages/navbar.html"><i class="ik ik-menu"></i><span>Navigation</span>
                            <span class="badge badge-success">New</span></a>
                    </div>
                    @can('admin')
                        <div class="nav-lavel">{{ __('Doctors') }}</div>
                        <div class="nav-item has-sub">
                            <a href="javascript:void(0)"><i
                                    class="ik .ik-briefcase                            "></i><span>{{ __('Doctors') }}</span>
                                <span class="badge badge-danger">10+</span></a>
                            <div class="submenu-content">
                                <a href="{{ route('admin.doctor.index') }}"
                                    class="menu-item">{{ __('Doctors') }}</a>
                                <a href="pages/widget-statistic.html" class="menu-item">Statistic</a>
                                <a href="pages/widget-data.html" class="menu-item">Data</a>
                                <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a>
                            </div>
                        </div>
                    @endcan
                    <div class="nav-lavel">Patients</div>
                    <div class="nav-item has-sub">
                        <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Widgets</span> <span
                                class="badge badge-danger">150+</span></a>
                        <div class="submenu-content">
                            <a href="pages/widgets.html" class="menu-item">Basic</a>
                            <a href="pages/widget-statistic.html" class="menu-item">Statistic</a>
                            <a href="pages/widget-data.html" class="menu-item">Data</a>
                            <a href="pages/widget-chart.html" class="menu-item">Chart Widget</a>
                        </div>
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
                            <img src="" class="rounded-circle" alt="">
                        </figure><span><span class="name">Gene Newman</span> <span
                                class="username">@gene_newman</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                        <figure class="user--online">
                            <img src="" class="rounded-circle" alt="">
                        </figure><span><span class="name">Billy Black</span> <span
                                class="username">@billyblack</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                        <figure class="user--online">
                            <img src="" class="rounded-circle" alt="">
                        </figure><span><span class="name">Herbert Diaz</span> <span
                                class="username">@herbert</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                        <figure class="user--busy">
                            <img src="" class="rounded-circle" alt="">
                        </figure><span><span class="name">Sylvia Harvey</span> <span
                                class="username">@sylvia</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                        <figure class="user--busy">
                            <img src="" class="rounded-circle" alt="">
                        </figure><span><span class="name">Marsha Hoffman</span> <span
                                class="username">@m_hoffman</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                        <figure class="user--offline">
                            <img src="" class="rounded-circle" alt="">
                        </figure><span><span class="name">Mason Grant</span> <span
                                class="username">@masongrant</span> </span>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                        <figure class="user--offline">
                            <img src="" class="rounded-circle" alt="">
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
                                    <img src="" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Epic Cheeseburgers come in all kind of styles.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers make your knees weak.</p>
                            </div>
                        </div>
                        <div class="message media reply">
                            <figure class="user--offline">
                                <a href="#">
                                    <img src="" class="rounded-circle" alt="">
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
                                    <img src="" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>A great cheeseburger is a gastronomical event.</p>
                            </div>
                        </div>
                        <div class="message media reply">
                            <figure class="user--busy">
                                <a href="#">
                                    <img src="" class="rounded-circle" alt="">
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
                                    <img src="" class="rounded-circle" alt="">
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

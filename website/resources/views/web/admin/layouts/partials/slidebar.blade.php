<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/beltei_group_in_cambodia.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">BelteiGroup</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        @can('IsAboveAdmin', Auth::user())
            <li class="menu-label">Information</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bi bi-house-fill"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul>
                    <li> <a href="{{ url('admin/user') }}"><i class="bi bi-circle"></i>User</a>
                    </li>
                    {{-- <li> <a href="index.html"><i class="bi bi-circle"></i>Blue Dashboard 1</a>
              </li> --}}
                </ul>
            </li>
        @endcan

        <li class="menu-label">BELTEI WebPages</li>
        @can('access-contruction-page', Auth::user())
            {{-- <li class="menu-label">BELTEI CONTRUCTION</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-buildings"></i>
                    </div>
                    <div class="menu-title">Beltei Contruction</div>
                </a>
                <ul>
                    <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>News</a>
                    </li>
                </ul>
            </li>
        @endcan


        @can('access-school-page', Auth::user())
            {{-- <li class="menu-label">BELTEI School</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bi bi-backpack2"></i>
                    </div>
                    <div class="menu-title">Beltei School</div>
                </a>
                <ul>
                    <li> 
                        <a href="{{ route('admin.school.certificate.index') }}"><i class="bi bi-circle"></i>Certificate</a>
                    </li>
                    <li> 
                        <a href="{{ route('admin.school.certificate.index') }}"><i class="bi bi-circle"></i>Grade A Students</a>
                    </li>
                </ul>
            </li>
        @endcan


        @can('access-university-page', Auth::user())
            {{-- <li class="menu-label">BELTEI University</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="lni lni-graduation"></i>
                    </div>
                    <div class="menu-title">Beltei University</div>
                </a>
                <ul>
                    <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>News</a>
                    </li>
                </ul>
            </li>
        @endcan


        @can('access-relation-page', Auth::user())
            {{-- <li class="menu-label">BELTEI International Relation</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="fadeIn animated bx bx-world"></i>
                    </div>
                    <div class="menu-title">International Relation</div>
                </a>
                <ul>
                    <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>News</a>
                    </li>
                </ul>
            </li>
        @endcan
        @can('access-tour-page', Auth::user())
            {{-- <li class="menu-label">BELTEI Tours And Travel</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="fadeIn animated bx bx-map-pin"></i>
                    </div>
                    <div class="menu-title">Tours And Travel</div>
                </a>
                <ul>
                    <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>News</a>
                    </li>
                </ul>
                
            </li>
        @endcan
        @can('access-testCenter-page', Auth::user())
            {{-- <li class="menu-label">BELTEI Test Center</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="lni lni-money-protection"></i>
                    </div>
                    {{-- <div class="menu-title {{ activeSegment('admin.testcenter.news') }}" >Beltei Test Center</div> --}}
                    <div class="menu-title" >Beltei Test Center</div>
                </a>
                <ul>
                    {{-- <li class="{{ activeSegment('admin.testcenter.news') }}"> <a href="{{ route('admin.testcenter.news.index') }}"><i class="bi bi-circle"></i>News</a> --}}
                    </li>
                </ul>
            </li>
        @endcan
        @can('access-charity-page', Auth::user())
            {{-- <li class="menu-label">BELTEI Charity</li> --}}
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="lni lni-money-protection"></i>
                    </div>
                    <div class="menu-title">Beltei Charity</div>
                </a>
                <ul>
                    <li> <a href="{{ url('admin/charity/news') }}"><i class="bi bi-circle"></i>News</a>
                    </li>
                    <li> <a href="{{ url('admin/charity/gallery') }}"><i class="bi bi-circle"></i>Gallery</a>
                    </li>
                    <li> <a href="{{ url('admin/charity/video') }}"><i class="bi bi-circle"></i>Video</a>
                    </li>
                </ul>
            </li>
        @endcan




        <li class="menu-label">Setting</li>
        <li>
            {{-- <a href="{{ route('admin.user.profile.edit', ['profile' => Auth::user()->id]) }}"> --}}
                <a href="">

                <div class="parent-icon"><i class="bx bx-user-circle"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li>
            <a href="">
                <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                {{-- <button class="dropdown-item" type="submit">
                <div class="d-flex align-items-center">
                    <div class=""><i class="bi bi-lock-fill"></i></div>
                    <div class="ms-3"><span>Logout</span></div>
                </div>
            </button> --}}
                <a type="submit">
                    <div class="parent-icon">
                        <i class="bi bi-lock-fill"></i>
                    </div>
                    <div class="menu-title">Logout</div>
                </a>
            </form>

        </li>

    </ul>
    <!--end navigation-->
</aside>

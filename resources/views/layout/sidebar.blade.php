<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path
                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                            id="path-1"></path>
                        <path
                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                            id="path-3"></path>
                        <path
                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                            id="path-4"></path>
                        <path
                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                            id="path-5"></path>
                    </defs>
                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                </g>
                                <g id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-detail"></i>
                <div data-i18n="Basic">User</div>
            </a>
        </li>
        <li class="menu-item {{ request()->routeIs('form-booking.*') ? 'active' : '' }}">
            <a href="{{ route('form-booking.index') }}" class="menu-link">
               <i class="menu-icon fa-solid fa-calendar-days"></i>
                <div data-i18n="Basic">Form Booking</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('view_all_order') ? 'active' : '' }}">
            <a href="{{ route('view_all_order') }}" class="menu-link">
               <i class="menu-icon fa-solid fa-eye"></i>
                <div data-i18n="Basic">View All Orders</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('manifest') ? 'active' : '' }}">
            <a href="{{ route('manifest') }}" class="menu-link">
               <i class="menu-icon fa-solid fa-inbox"></i>
                <div data-i18n="Basic">Manifest</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('de_manifest') ? 'active' : '' }}">
            <a href="{{ route('de_manifest') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-inbox"></i>
                <div data-i18n="Basic"> De-Manifest
                </div>
            </a>
        </li>


        <li class="menu-item {{ request()->routeIs('order_processing') ? 'active' : '' }}">
            <a href="{{ route('order_processing') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-cart-shopping"></i>
                <div data-i18n="Basic">Orders Processing</div>
            </a>
        </li>


        <li class="menu-item {{ request()->routeIs('bulk_status_update') ? 'active' : '' }}">
            <a href="{{ route('bulk_status_update') }}" class="menu-link">
                <i class="menu-icon fa-regular fa-square-check"></i>
                <div data-i18n="Basic">Bulk Status Update</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('order_status_update') ? 'active' : '' }}">
            <a href="{{ route('order_status_update') }}" class="menu-link">
                <i class="menu-icon fa-regular fa-square-check"></i>
                <div data-i18n="Basic"> Order Status Update</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('view_order_assign') ? 'active' : '' }}">
            <a href="{{ route('view_order_assign') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-eye"></i>
                <div data-i18n="Basic">View Order Assignment</div>
            </a>
        </li>

        <li class="menu-item {{ request()->routeIs('bussiness-account.index') ? 'active' : '' }}">
            <a href="{{ route('bussiness-account.index') }}" class="menu-link">
                <i class="menu-icon fa-regular fa-user"></i>
                <div data-i18n="Basic"> Bussiness Accounts</div>
            </a>
        </li>

        {{-- <li class="menu-item {{ request()->routeIs('reports') ? 'active' : '' }}">
            <a href="{{ route('reports') }}" class="menu-link">
                <i class="menu-icon fa-regular fa-file"></i>
                <div data-i18n="Basic">Reports</div>
            </a>
        </li> --}}



          <li class="menu-item {{ request()->routeIs('charges_reports') ? 'active' : '' }}">
          <div class="accordion accordion-flush mx-4" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed p-3" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="menu-icon fa-regular fa-file"></i> Report
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <a href="{{ route('charges_reports') }}" class="d-block mb-2">Charges Report</a>
                  <a href="{{ route('order_reports') }}" class="d-block mb-2">Order Report</a>
                  <a href="{{ route('comments_reports') }}" class="d-block mb-2">Comments Report</a>
                </div>
              </div>
            </div>
          </div>
        </li>





        <li class="menu-item {{ request()->routeIs('setting') ? 'active' : '' }}">
            <a href="{{ route('setting') }}" class="menu-link">
                <i class="menu-icon fa-solid fa-gear"></i>
                <div data-i18n="Basic">Setting</div>
            </a>
        </li>
        <li class="menu-item ">
            <a class="menu-link" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
            </a>

            <!-- Hidden form to handle the POST request -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>
</aside>

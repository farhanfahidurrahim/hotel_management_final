<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('/') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}"
                    alt="" width="50px"><img class="img-fluid for-dark"
                    src="{{ asset('assets/images/logo/logo.png') }}" width="50px" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        </div>
        @if (Auth::user()->role == 'admin')
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn">
                            <a href="{{ route('/') }}"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="" width="50px"></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">

                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('/') }}">
                                <i data-feather="home"></i><span>{{ trans('Dashboard') }}</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Division Management') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('division.index') }}">Add Division
                                    </a>
                                </li>

                            </ul>
                        </li>
                        {{-- Hotel Management --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Hotel Management') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.create') }}">Add New Hotels
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.index') }}">All Hotels List
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.rooms') }}">Hotel Rooms
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.rating') }}">Hotel Ratings
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- Manage Restaurant Booking --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('booking.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Manage Hotel Booking') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>

                        </li>
                        {{-- Restaurant Management --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Restaurant Management') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.create') }}">Add New Restaurants
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.index') }}">All Restaurants List
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.menus') }}">Restaurant Menus
                                    </a>
                                </li>
                                {{-- <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.foods') }}">Restaurant Menu Foods
                                    </a>
                                </li> --}}
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.ratings') }}">Restaurant Ratings
                                    </a>
                                </li>

                            </ul>
                        </li>
                        {{-- Restaurant Orders --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Restaurant Orders') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                {{-- <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.create') }}">Place Order
                                    </a>
                                </li>

                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.index') }}">All Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.pending') }}">Pending Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.inprogress') }}">In Progress Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.delivered') }}">Delivered Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.cancelled') }}">Cancelled Orders
                                    </a>
                                </li> --}}
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                     href="{{route('claimed.discount')}}">Claimed Discount
                                    </a>
                                </li>


                            </ul>
                        </li>


                        {{-- <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                        href="#">
                        <i data-feather="file-text"></i><span>{{ trans('Customer Reward') }}</span>
                        <div class="according-menu"><i
                                class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                        </div>
                    </a>
                    <ul class="sidebar-submenu"
                        style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                        <li>
                            <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                href="{{ route('reward.create') }}">Give Reward
                            </a>
                        </li>
                        <li>
                            <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                href="{{ route('reward.index') }}">Reward List
                            </a>
                        </li>

                    </ul>
                    </li> --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Vendor Management') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('vendor.create') }}">Add New Vendor
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('vendor.index') }}">Vendor List
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('campaign.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Campaign Management') }}</span>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                            </ul>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('customer.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Customer Management') }}</span>

                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">

                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('about-us.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Manage About Us') }}</span>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">

                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('privacy-policy.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Manage Privacy Policy') }}</span>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('help-support.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Manage Help & Support') }}</span>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                            </ul>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('terms-service.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Manage Terms of Service') }}</span>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">

                            </ul>
                        </li>
                        {{-- <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                        href="{{ route('deals.index') }}">
                        <i data-feather="file-text"></i><span>{{ trans('Popular Deals') }}</span>

                    </a>
                    <ul class="sidebar-submenu"
                        style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                    </ul>
                    </li> --}}

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('emergency.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Emergency Contacts') }}</span>

                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif
        @if (Auth::user()->role == 'vendor')
            <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                    <ul class="sidebar-links" id="simple-bar">
                        <li class="back-btn">
                            <a href="{{ route('/') }}"><img class="img-fluid"
                                    src="{{ asset('assets/images/logo/logo.png') }}" alt=""
                                    width="50px"></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">

                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('/') }}">
                                <i data-feather="home"></i><span>{{ trans('Dashboard') }}</span>
                            </a>
                        </li>

                        
                        {{-- Hotel Management --}}
                        
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Hotel Management') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                               @if (checkPermission('create_hotel',1))
                               <li>
                                <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                    href="{{ route('hotels.create') }}">Add New Hotels
                                </a>
                                </li>
                               @else
                                   
                               @endif
                                
                                @if (checkPermission('hotel_list',2))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.index') }}">All Hotels List
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                @if (checkPermission('room_list',6))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.rooms') }}">Hotel Rooms
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                @if (checkPermission('hotel_rating_list',9))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('hotels.rating') }}">Hotel Ratings
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                
                            </ul>
                        </li>
                       
                        

                        {{-- Manage Restaurant Booking --}}
                        @if (checkPermission('all_hotel_booking_list',12))
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="{{ route('booking.index') }}">
                                <i data-feather="file-text"></i><span>{{ trans('Manage Restaurant Booking') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                        </li>
                        @else
                            
                        @endif
                        
                        {{-- Restaurant Management --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Restaurant Management') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                @if (checkPermission('create_restaurant',18))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.create') }}">Add New Restaurants
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                @if (checkPermission('see_all_restaurant',17))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.index') }}">All Restaurants List
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                @if (checkPermission('all_restaurant_menus',21))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.menus') }}">Restaurant Menus
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                
                                {{-- <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.foods') }}">Restaurant Menu Foods
                                    </a>
                                </li> --}}
                                @if (checkPermission('all_restaurant_star',25))
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('restaurant.ratings') }}">Restaurant Ratings
                                    </a>
                                </li>
                                @else
                                    
                                @endif
                                

                            </ul>
                        </li>
                        {{-- Restaurant Orders --}}
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/forms'? 'active': '' }}"
                                href="#">
                                <i data-feather="file-text"></i><span>{{ trans('Restaurant Orders') }}</span>
                                <div class="according-menu"><i
                                        class="fa fa-angle-{{ request()->route()->getPrefix() == '/forms'? 'down': 'right' }}"></i>
                                </div>
                            </a>
                            <ul class="sidebar-submenu"
                                style="display: {{ request()->route()->getPrefix() == '/forms'? 'block;': 'none;' }}">
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.create') }}">Place Order
                                    </a>
                                </li>

                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.index') }}">All Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.pending') }}">Pending Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.inprogress') }}">In Progress Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.delivered') }}">Delivered Orders
                                    </a>
                                </li>
                                <li>
                                    <a class="submenu-title {{ in_array(Route::currentRouteName(), ['form-validation', 'base-input', 'radio-checkbox-control', 'input-group', 'megaoptions']) ? 'active' : '' }}"
                                        href="{{ route('order.cancelled') }}">Cancelled Orders
                                    </a>
                                </li>


                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        @endif
    </div>
</div>

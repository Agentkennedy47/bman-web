<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard') }}">View Dashboard</a></li>
                </ul>
            </li>

            <li class="nav-label">Pages</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-home"></i>
                    <span class="nav-text">Slides</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.slides') }}">All Slides</a></li>
                    <li><a href="{{ route('add.slides') }}">Add Slides</a></li>
                    {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">Compose</a></li>
                            <li><a href="./email-inbox.html">Inbox</a></li>
                            <li><a href="./email-read.html">Read</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li><a href="./app-calender.html">Calendar</a></li> --}}
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-address-card"></i>
                    <span class="nav-text">About</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('about.page') }}">About Section</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-th-list"></i>
                    <span class="nav-text">Testimonial</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.testimonials') }}">All Testimonials</a></li>
                    <li><a href="{{ route('add.testimonials') }}">Add Testimonials</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-money"></i>
                    <span class="nav-text">E-Currency</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('add.bitcoin') }}">Bitcoin</a></li>
                    <li><a href="{{ route('add.usdt') }}">USDT</a></li>
                    <li><a href="{{ route('add.perfectmoney') }}">Perfect Money</a></li>
                    <li><a href="{{ route('add.ethereum') }}">Ethereum</a></li>
                    <li><a href="{{ route('add.bitcoincash') }}">Bitcoin Cash</a></li>
                    <li><a href="{{ route('add.bnb') }}">BNB</a></li>    
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-mobile"></i>
                    <span class="nav-text">Data Plans</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">MTN</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all.mtn.data') }}">MTN Data Plans</a></li>
                            <li><a href="{{ route('add.mtn.data') }}">Add Data Plan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Airtel</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all.airtel.data') }}">Airtel Data Plans</a></li>
                            <li><a href="{{ route('add.airtel.data') }}">Add Data Plan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Glo</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all.glo.data') }}">Glo Data Plans</a></li>
                            <li><a href="{{ route('add.glo.data') }}">Add Data Plan</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">9mobile</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all.mobile.data') }}">9mobile Data Plans</a></li>
                            <li><a href="{{ route('add.mobile.data') }}">Add Data Plan</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-phone"></i>
                    <span class="nav-text">Contact</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('first.contact.number') }}">Contact Line 1</a></li>
                    <li><a href="{{ route('second.contact.number') }}">Contact Line 2</a></li>
                </ul>
            </li>         
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-link"></i>
                    <span class="nav-text">Social Media</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('facebook.link') }}">Facebook</a></li>
                    <li><a href="{{ route('instagram.link') }}">Instagram</a></li>
                    <li><a href="{{ route('twitter.link') }}">Twitter</a></li>
                </ul>
            </li>             
        </ul>
    </div>
</div>
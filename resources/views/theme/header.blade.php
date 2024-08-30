
<!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ asset('theme')}}" class="logo">
                        <img src="assets/images/logo.png">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#men">Men's</a></li>
                        <li class="scroll-to-section"><a href="#women">Women's</a></li>
                        <li class="scroll-to-section"><a href="#kids">Kid's</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Pages</a>
                            <ul>
                                <li><a href="{{ asset('about')}}">About Us</a></li>
                                <li><a href="{{ asset('products') }}">Products</a></li>
                                <li><a href="{{ asset('single-product') }}">Single Product</a></li>
                                <li><a href="{{ asset('contact') }}">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                       
                        <ul class="header-currency">
                            <li class="dropdown">
                                <button class="dropbtn"><img src="assets/images/currency.png" alt="" width="40px" height="30px"></button>
                                <div class="dropdown-content">
                                    @foreach($currencies as $currency)
                                        <a href="#" data-value="{{ $currency->code }}" data-symbol="{{ $currency->symbol }}">
                                            {{ $currency->code }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        </ul>

                        <ul class="header-language">
                            <li class="dropdown">
                                <button class="dropbtn">Select Language</button>
                                <div class="dropdown-content">
                                    @foreach($languages as $language)
                                        <a href="#" data-code="{{ $language->code }}" data-name="{{ $language->name }}">
                                            {{ $language->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        
                    </ul>    
                    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

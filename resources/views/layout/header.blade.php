<!-- Header -->
<header class="amazon-header" id="back_to_top">
  <a href="{{ route("index") }}">
    <div class="header-left">
      <img src="{{asset("assets/img/amazon-com-light.svg")}}" alt="Amazon" class="logo" />
      <div class="deliver">Deliver to Egypt</div>
    </div>
  </a>

  <div class="header-center">
    <select class="category">
      <option>All</option>
      <option>Books</option>
      <option>Electronics</option>
    </select>
    <input type="text" placeholder="Search Amazon" class="search-input" />
    <button class="search-btn">🔍</button>
  </div>
  <div class="header-right">
    <div class="account">
      @auth
        Hello, {{ Auth::user()->name }} <br>
        <strong>
          <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="background:none;border:none;color:#0066c0;cursor:pointer;">
              Logout
            </button>
          </form>
        </strong>
      @else
        Accounts & Lists<br>
        <strong><a href="{{ route('login') }}" style="color:#0066c0;">Hello, Sign in</a></strong>
      @endauth
    </div>

    <div class="orders">Returns<br /><strong>& Orders</strong></div>
    <div class="cart">🛒 Cart</div>
  </div>
</header>

<!-- start sub nav bar -->

<nav class="subnav">
  <ul>
    @auth
      @if(Auth::user()->role === 'admin' || Auth::user()->role === 'user')
        <a href="{{ route("profile.edit") }}">
          <li>Profile</li>
        </a>
      @endif
    @endauth

    <a href="{{ route("customer_service") }}">
      <li>Customer Service</li>
    </a>
    @auth
      @if(Auth::user()->role === 'admin')
        <a href="{{ route('admin.index') }}">
          <li>Admin</li>
        </a>
      @endif
    @endauth
  </ul>
</nav>

<!-- Flash Messages -->
@if(session('error'))
  <div id="flash-message" style="background:#ffcccc;color:#900;padding:10px;margin:10px auto;
                    width:100%;max-width:100%;text-align:center;border-radius:6px;">
    {{ session('error') }}
  </div>
@endif

<!-- end sub nav bar -->
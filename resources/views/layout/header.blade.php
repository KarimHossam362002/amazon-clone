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
      Hello, sign in<br /><strong>Account & Lists</strong>
    </div>
    <div class="orders">Returns<br /><strong>& Orders</strong></div>
    <div class="cart">🛒 Cart</div>
  </div>
</header>

<!-- start sub nav bar -->

<nav class="subnav">
  <ul>
    <li><span class="menu-icon">☰</span> All</li>
    <li>Today's Deals</li>
    <li>Registry</li>
    <li>Prime Video</li>
    <li>Gift Cards</li>
    <a href="{{ route("customer_service") }}">
      <li>Customer Service</li>
    </a>
    <li>Sell</li>
    <a href="{{ route("admin.index") }}">
      <li>Admin</li>
    </a>
  </ul>
</nav>

<!-- end sub nav bar -->
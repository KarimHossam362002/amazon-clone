@extends('layout.app')
@section('title', 'Customer Service')
@section('styles')
  <link rel="stylesheet" href="{{asset("assets/css/customer_service.css")}}" />
@endsection
@section('content')

  <header class="sub_header">
    <nav class="sub_nav">
      <ul class="sub_ul">
        <li><a href="{{ route("customer_service") }}">Customer Service</a></li>
        <li><a href="{{ route("index") }}">Home</a></li>
        <li><a href="#">Digital Services and Device Support</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Welcome to Amazon Customer Service</h1>
    <p>
      We can help you take care of most things here, sign in to get started.
    </p>
    <div class="cards_customer_service">
      <div class="card_customer_service" onclick="goToPage('page1.html')">
        <img src="{{asset("assets/img/customer_service/delivery.png")}}" alt="delivery Icon" />
        A delivery, order or return
      </div>
      <div class="card_customer_service" onclick="goToPage('page2.html')">
        <img src="{{asset("assets/img/customer_service/help.png")}}" alt="Help Icon" />
        Help with signing in
      </div>
      <div class="card_customer_service" onclick="goToPage('page3.html')">
        <img src="{{asset("assets/img/customer_service/prime.png")}}" alt="Prime Icon" />
        Prime
      </div>
      <div class="card_customer_service" onclick="goToPage('page4.html')">
        <img src="{{asset("assets/img/customer_service/devices.png")}}" alt="Devices Icon" />
        Kindle, Fire, Alexa, or other Amazon devices
      </div>
      <div class="card_customer_service" onclick="goToPage('page5.html')">
        <img src="{{asset("assets/img/customer_service/ebook.png")}}" alt="eBooks Icon" />
        eBooks, Prime Videos, Music, or Games
      </div>
      <div class="card_customer_service" onclick="goToPage('page6.html')">
        <img src="{{asset("assets/img/customer_service/payment.png")}}" alt="Payment Icon" />
        Payment, charges or gift cards
      </div>
      <div class="card_customer_service" onclick="goToPage('page7.html')">
        <img src="{{asset("assets/img/customer_service/security.png")}}" alt="Security Icon" />
        Address, security & privacy
      </div>
      <div class="card_customer_service" onclick="goToPage('page8.html')">
        <img src="{{asset("assets/img/customer_service/membership.png")}}" alt="Membership Icon" />
        Memberships, subscriptions or communications
      </div>
      <div class="card_customer_service" onclick="goToPage('page9.html')">
        <img src="{{asset("assets/img/customer_service/accessibility.png")}}" alt="Accessibility Icon" />
        Accessibility
      </div>
      <div class="card_customer_service" onclick="goToPage('page10.html')">
        <img src="{{asset("assets/img/customer_service/somthingelse.png")}}" alt="Something else Icon" />
        Something else
      </div>
      <div class="card_customer_service" onclick="goToPage('page11.html')">
        <img src="{{asset("assets/img/customer_service/report.png")}}" alt="Report Icon" />
        Report Something Suspicious
      </div>
    </div>
  </main>
@endsection
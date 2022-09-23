@extends('layouts.main')
@section('title', 'Dashboard | Manager')
@section('content')
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <h1 class="fw-bold">Resto</h1>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
      <a href="index.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    {{-- *: Menu sidebar --}}
    <li class="menu-item ">
      <a href="{{route("kategori")}}" class="menu-link">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-invoice" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
          <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
          <line x1="9" y1="7" x2="10" y2="7"></line>
          <line x1="9" y1="13" x2="15" y2="13"></line>
          <line x1="13" y1="17" x2="15" y2="17"></line>
       </svg>
        <div data-i18n="Analytics"> Category</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="index.html" class="menu-link">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
          <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
          <line x1="3" y1="6" x2="3" y2="19"></line>
          <line x1="12" y1="6" x2="12" y2="19"></line>
          <line x1="21" y1="6" x2="21" y2="19"></line>
       </svg>
        <div data-i18n="Analytics">Menu</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="index.html" class="menu-link">
       <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M3.5 5.5l1.5 1.5l2.5 -2.5"></path>
        <path d="M3.5 11.5l1.5 1.5l2.5 -2.5"></path>
        <path d="M3.5 17.5l1.5 1.5l2.5 -2.5"></path>
        <line x1="11" y1="6" x2="20" y2="6"></line>
        <line x1="11" y1="12" x2="20" y2="12"></line>
        <line x1="11" y1="18" x2="20" y2="18"></line>
     </svg>
        <div data-i18n="Analytics">Reporting</div>
      </a>
    </li>
  </ul>
</aside>
{{-- *: End Menu sidebar --}}
<nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar"
        >
          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="mt-3"><h3>Welcome Manager</h3></div>
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- Place this tag where you want the button to render. -->
              <li class="nav-item lh-1 me-3">
                <p class="mt-3">Muhammad Faiz</p>
              </li>

              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block">John Doe</span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-user me-2"></i>
                      <span class="align-middle">My Profile</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <i class="bx bx-cog me-2"></i>
                      <span class="align-middle">Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">
                      <span class="d-flex align-items-center align-middle">
                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                        <span class="flex-grow-1 align-middle">Billing</span>
                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="auth-login-basic.html">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-6 col-lg-4 order-0 mb-4">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h2 class="card-title me-2">Category</h2>
          </div>
          <div class="card-body">
            <h4 class="fw-light">0</h4>
          </div>
        </div>
      </div>
      <!--/ Order Statistics -->

      <!-- Expense Overview -->
      <div class="col-md-6 col-lg-4 order-1 mb-4">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h2 class="card-title me-2">Menu</h2>
          </div>
          <div class="card-body">
            <h4 class="fw-light">0</h4>
          </div>
        </div>
      </div>
      <!--/ Expense Overview -->

      <!-- Transactions -->
      <div class="col-md-6 col-lg-4 order-2 mb-4">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h2 class="card-title me-2">Reporting</h2>
          </div>
          <div class="card-body">
            <h4 class="fw-light">test</h4>
          </div>
        </div>
      </div>
      <!--/ Transactions -->
    </div>
  </div>
@endsection
@extends('layouts.main')
@section('title', 'Dashboard | Manager')
@section('content')
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
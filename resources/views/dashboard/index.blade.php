@extends('layouts.main')
@section('title', 'dashboard')
@section('content')
<h1>Halo, Admin</h1>
<div class="row my-5">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                 <div class="col-lg-6">
                    <i class="bi bi-journals"></i>
                 </div>
                 <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desk">
                    Books
                    </div>
                <div class="crad-count">
                    5
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4">
    <div class="card-data category">
        <div class="row">
             <div class="col-lg-6">
                <i class="bi bi-journals"></i>
             </div>
             <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                <div class="card-desk">
                Category
                </div>
            <div class="crad-count">
                5
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-lg-4">
    <div class="card-data user">
        <div class="row">
             <div class="col-lg-6">
                <i class="bi bi-journals"></i>
             </div>
             <div class="col-lg-6 d-flex flex-column justify-content-center align-items-end">
                <div class="card-desk">
                User
                </div>
            <div class="crad-count">
                5
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

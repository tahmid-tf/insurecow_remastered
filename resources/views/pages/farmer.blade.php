@extends('admin-master')

@section('content')
    <div class="container mt-5">

        <img src="{{ asset('img/logo2.png') }}" alt="" style="width: 170px; display: block; margin: auto">
        <br>

        <h1 class="text-center">Farmer Panel</h1>

        <section class="mt-4">
            <h2>Dashboard Features</h2>
            <ul>
                <li>View personal information.</li>
                <li>Access points like Animal Insurance, Farms, Cattle Registration, and Verification.</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Animal & Farms</h2>
            <ul>
                <li>View the number of animals with detailed information.</li>
                <li>View the number of farms and cattle verification reports.</li>
                <li>Muzzle detection API processes animal verification and generates reports.</li>
                <li>Create and update personal profile.</li>
                <li>Add animals like cattle, buffalo, and goats.</li>
                <li>Manage farms effectively.</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Animal Verification & Insurance</h2>
            <ul>
                <li>Deprecated feature: Animal info checking for cattle ownership verification.</li>
                <li>Insure animals directly or through Agritech company.</li>
                <li>Check insurance requests sent to insurance companies.</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Account Management</h2>
            <ul>
                <li>Change password and update address.</li>
            </ul>
        </section>
    </div>

@endsection

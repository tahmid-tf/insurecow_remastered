@extends('admin-master')

@section('content')

<div class="container mt-5">
    <h1 class="text-center">Insurance Company Panel</h1>

    <img src="{{ asset('img/logo2.png') }}" alt="" style="width: 170px; display: block; margin: auto">
    <br>

    <section class="mt-4">
        <h2>Dashboard Features</h2>
        <ul>
            <li>View due amounts for pending insurance requests.</li>
            <li>View pending insurance lists.</li>
            <li>View insured animal lists under the insurance company.</li>
            <li>View total income from insurance.</li>
            <li>Check if any insurance amount is due.</li>
            <li>View claimed cattle lists.</li>
        </ul>
    </section>

    <section class="mt-4">
        <h2>Policy Management</h2>
        <p>The insurance company will be able to create and manage package policies, including:</p>
        <ul>
            <li>Creating new insurance packages.</li>
            <li>Viewing and modifying existing package policies.</li>
        </ul>
    </section>

    <section class="mt-4">
        <h2>Insurance Requests & Transactions</h2>
        <ul>
            <li>View and process insurance requests from farmers and Agritech companies.</li>
            <li>Monitor total insurance transactions, including payments and claims.</li>
        </ul>
    </section>

    <section class="mt-4">
        <h2>Profile Management</h2>
        <p>The insurance company can manage and update its profile, including:</p>
        <ul>
            <li>Company Name</li>
            <li>Contact Information</li>
            <li>Address</li>
            <li>Authorized Personnel</li>
            <li>Business Registration Details</li>
        </ul>
    </section>
</div>




@endsection

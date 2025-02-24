@extends('admin-master')

@section('content')

<div class="container mt-5">

    <img src="{{ asset('img/logo2.png') }}" alt="" style="width: 170px; display: block; margin: auto">
    <br>

    <h1 class="text-center">Agritech Company Panel</h1>

    <section class="mt-4">
        <h2>Dashboard Features</h2>
        <ul>
            <li>View all registered farmers and register animals for individual farmers.</li>
            <li>View all registered animals under the Agritech company.</li>
            <li>Set permissions for farmers under the Agritech company.</li>
            <li>View insured animal lists where the Agritech company has insured animals with another insurance company.</li>
            <li>View due amounts for pending insurance requests.</li>
            <li>View pending insurance lists.</li>
            <li>View total number of claim lists for animals that have been claimed due to death by either farmers or the Agritech company.</li>
        </ul>
    </section>

    <section class="mt-4">
        <h2>Animal Insurance Transactions</h2>
        <p>The Agritech company will be able to view detailed records of all animal insurance transactions, including:</p>
        <ul>
            <li>Transaction ID</li>
            <li>Farmer details</li>
            <li>Animal details</li>
            <li>Insurance company information</li>
            <li>Premium amounts</li>
            <li>Payment status</li>
        </ul>
    </section>

    <section class="mt-4">
        <h2>Profile Management</h2>
        <p>The Agritech company can manage and update its profile, including:</p>
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

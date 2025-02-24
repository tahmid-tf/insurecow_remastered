@extends('admin-master')

@section('content')

    <div class="container mt-3">

        <img src="{{ asset('img/logo2.png') }}" alt="" style="width: 170px; display: block; margin: auto">
        <br>

        <h1 class="text-center">Super Admin Panel</h1>

        <section class="mt-4">
            <h2>Dashboard Overview</h2>
            <ul>
                <li>View number of registered companies</li>
                <li>Change user access permissions</li>
                <li>View all registered farmers</li>
                <li>Register animals for individual farmers</li>
                <li>View all animals belonging to specific farmers</li>
                <li>View total number of farms</li>
                <li>View total list of animals</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Farmer & Company Management</h2>
            <ul>
                <li>Register new farmers and companies</li>
                <li>View all registered companies along with associated farmers</li>
                <li>Register animals for farmers and view their animals</li>
                <li>Set permissions for specific farmers and companies</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Company Registration Requests</h2>
            <p>Super Admin will be able to view and approve/reject companies requesting to register in the portal.</p>
        </section>

        <section class="mt-4">
            <h2>Content Management System (CMS)</h2>
            <p>The Super Admin has access to update and manage the CMS system for the front page.</p>
        </section>
    </div>

@endsection

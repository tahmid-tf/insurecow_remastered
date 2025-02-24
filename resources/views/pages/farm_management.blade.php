@extends('admin-master')

@section('content')

    <div class="container mt-5">
        <h1 class="text-center">Farm Management</h1>

        <section class="mt-4">
            <h2>Dashboard Features</h2>
            <ul>
                <li>View total income from animals.</li>
                <li>View total and daily expenses related to animals.</li>
                <li>Monitor current business state (difference between income and expense).</li>
                <li>Check if the business is in a profit or loss state.</li>
                <li>View animal health information.</li>
                <li>View feeding & nutrition information.</li>
                <li>View breeding details.</li>
                <li>Export animal health, feeding & nutrition, and breeding information as Excel files.</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Farm & Animal Management</h2>
            <ul>
                <li>Create and manage farms.</li>
                <li>View all registered animals under each farm.</li>
                <li>Manage animal health records.</li>
                <li>Manage feeding and nutrition plans.</li>
                <li>Manage breeding schedules and history.</li>
            </ul>
        </section>

        <section class="mt-4">
            <h2>Financial Management</h2>
            <ul>
                <li>Manage income and sales information.</li>
                <li>Track and manage expense records.</li>
                <li>Oversee asset management.</li>
                <li>Handle budgeting and forecasting for farm operations.</li>
                <li>Calculate overall profit/loss.</li>
                <li>Calculate individual profit/loss for each farm or animal.</li>
            </ul>
        </section>
    </div>

@endsection

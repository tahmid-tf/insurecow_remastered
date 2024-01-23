@extends('super-admin.admin-panel.index')

@section('content')
    <main>
        <header
            class="page-header page-header-compact page-header-light border-bottom bg-white mb-4"
        >
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div
                        class="row align-items-center justify-content-between pt-3"
                    >
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="user"></i>
                                </div>
                                View All Packages - Company
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <div class="row">

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="col-xl-12">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">View All Packages - Company</div>
                        <div class="card-body">

                            {{--                            <div class="card-header">Extended DataTables</div>--}}
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Package Name</th>
                                        <th>Insurance Period</th>
                                        <th>Policy</th>
                                        <th>Coverage</th>
                                        <th>OFF %</th>
                                        <th>Rate [CTL %]</th>
                                        <th>Vat %</th>
                                        {{--                                        <th>Package Status</th>--}}
                                        {{--                                        <th>Actions</th>--}}
                                        <th>Edit</th>
                                    </tr>
                                    </thead>

                                    <tbody>


                                    @foreach($packages as $package)

                                        <tr>
                                            <td>{{ $package->package_name }}</td>
                                            <td>
                                                @if($package->insurance_period == 0.5)
                                                    6 months
                                                @elseif($package->insurance_period == 1)
                                                    1 year
                                                @elseif($package->insurance_period == 1.5)
                                                    1 year 5 months
                                                @elseif($package->insurance_period == 2.0)
                                                    2 years
                                                @elseif($package->insurance_period == 2.5)
                                                    2 years 5 months
                                                @elseif($package->insurance_period == 3.0)
                                                    3 Years
                                                @elseif($package->insurance_period > 3.0)
                                                    More than 3 years
                                                @endif
                                            </td>
                                            <td><a href="{{ asset('storage/'.$package->policy)  }}">File</a></td>
                                            <td>

                                                {{ $package->coverage }}

                                                {{--                                                @foreach (json_decode($package->coverage) as $item)--}}
                                                {{--                                                    @if ($item === 'ac')--}}
                                                {{--                                                        Accidental Coverage--}}
                                                {{--                                                    @elseif($item === 'fl')--}}
                                                {{--                                                        Flood Coverage--}}
                                                {{--                                                    @elseif($item === 'er')--}}
                                                {{--                                                        Earthquake Coverage--}}
                                                {{--                                                    @endif--}}

                                                {{--                                                    @if (!$loop->last)--}}
                                                {{--                                                        ,--}}
                                                {{--                                                    @endif--}}
                                                {{--                                                @endforeach--}}
                                            </td>
                                            {{--                                            <td>{{ json_decode($package->coverage) }}</td>--}}
                                            <td>{{ $package->discount }}%</td>
                                            <td>{{ $package->rate }}%</td>
                                            <td>{{ $package->vat }}%</td>
                                            {{--                                            <td>{{ $package->package_status }}</td>--}}
                                            {{--                                            <td>--}}

                                            {{--                                                <a href="{{ route('package_status', $package->id) }}">--}}
                                            {{--                                                    <button--}}
                                            {{--                                                        class="btn @if($package->package_status == 'active' ) btn-primary @else btn-danger @endif ">--}}
                                            {{--                                                        Status Mode--}}
                                            {{--                                                    </button>--}}
                                            {{--                                                </a>--}}

                                            {{--                                            </td>--}}

                                            <td>
                                                <a href="{{ route('package.edit', $package->id) }}">
                                                    <button
                                                        class="btn btn-primary">
                                                        Edit
                                                    </button>
                                                </a>
                                            </td>

                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{-- ---------------------------------------- Company Request Data ---------------------------------------- --}}



                            {{-- ---------------------------------------- Register Company/NGO/Bank ---------------------------------------- --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

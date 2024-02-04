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
                                Company - Insurance History
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">


            {{-- ------------------------------------------- Success Alert ------------------------------------------- --}}

            @if(session('success'))
                <div class="alert alert-success">
                    Decision successfully inserted
                </div>
            @endif

            {{-- ------------------------------------------- Success Alert ------------------------------------------- --}}

            <!-- Account page navigation-->
            <div class="row">
                <div class="col-xl-12">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Company - Insurance History</div>
                        <div class="card-body">

                            {{--                            <div class="card-header">Extended DataTables</div>--}}
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Package Info</th>
                                        {{--                                        <th>Company Name</th>--}}
                                        <th>Farmer Name</th>
                                        <th>Cattle Info</th>
                                        <th>Premium Policy</th>
                                        <th>Package Insurance Period</th>
                                        <th>Insurance Cost</th>
                                        <th>Insurance Status</th>
                                        <th>Send Quotation</th>
                                        {{--                                        <th>Payment History</th>--}}
                                        <th>View</th>
                                        {{--                                        <th>Insurance Status</th>--}}
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php $id = 0 ?>

                                    @foreach($insurance_history as $history)

                                        <tr>
                                            <td>{{ $id += 1 }}</td>
                                            <td>{!!  \App\Http\Controllers\Farmer\InsuranceRequestController::package_id($history->package_id) !!}</td>

                                            {{--  -------------------------------------------- Farmer Name -------------------------------------------- --}}

                                            @if($history->insurance_request_type == "single")

                                                <td>{!!  \App\Http\Controllers\Farmer\InsuranceRequestController::farmer_name($history->user_id) !!}</td>

                                            @else
                                                @php
                                                    $userIds = json_decode($history->user_id);
                                                    $uniqueNames = [];
                                                @endphp

                                                {{-- Check if user IDs are not empty --}}
                                                @if (!empty($userIds))
                                                    {{--                                                    <td>--}}
                                                    {{--                                                        @foreach ($userIds as $userId)--}}
                                                    {{--                                                            --}}{{-- Retrieve user name using User model --}}
                                                    {{--                                                            @php--}}
                                                    {{--                                                                $userName = \App\Models\User::find($userId)->name;--}}
                                                    {{--                                                            @endphp--}}

                                                    {{--                                                            --}}{{-- Display only unique names --}}
                                                    {{--                                                            @if (!in_array($userName, $uniqueNames))--}}
                                                    {{--                                                                {{ $userName }}--}}
                                                    {{--                                                                --}}{{-- Add the name to the unique names array --}}
                                                    {{--                                                                @php--}}
                                                    {{--                                                                    $uniqueNames[] = $userName;--}}
                                                    {{--                                                                @endphp--}}
                                                    {{--                                                                @if (!$loop->last)--}}
                                                    {{--                                                                    , --}}{{-- Add a comma if it's not the last item --}}
                                                    {{--                                                                @endif--}}
                                                    {{--                                                            @endif--}}
                                                    {{--                                                        @endforeach--}}
                                                    {{--                                                    </td>--}}


                                                    {{-- --------------------------- modified user list --------------------------- --}}

                                                    <td class="user-list">
                                                        @php
                                                            $uniqueNames = [];
                                                            $visibleUserCount = 0;
                                                        @endphp

                                                        @foreach ($userIds as $userId)
                                                            {{-- Retrieve user name using User model --}}
                                                            @php
                                                                $userName = \App\Models\User::find($userId)->name;
                                                            @endphp

                                                            {{-- Display only unique names --}}
                                                            @if (!in_array($userName, $uniqueNames))
                                                                <span class="user-item">{{ $userName }}</span>
                                                                {{-- Add the name to the unique names array --}}
                                                                @php
                                                                    $uniqueNames[] = $userName;
                                                                    $visibleUserCount++;
                                                                @endphp
                                                                @if (!$loop->last)
                                                                    @if ($visibleUserCount < 2)
                                                                        , {{-- Add a comma if it's not the last item and visibleUserCount is less than 2 --}}
                                                                    @else
                                                                        {{-- Do not add a comma for the third visible user --}}
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endforeach

                                                        <!-- Add more user items as needed -->


                                                        <a class="toggle-button" style="cursor: pointer">Show More</a>
                                                    </td>

                                                    {{-- --------------------------- modified user list --------------------------- --}}
                                                @else
                                                    <td>Warning - No User data found</td>
                                                @endif

                                            @endif

                                            {{--  -------------------------------------------- Farmer Name -------------------------------------------- --}}


                                            <td><a href="{{ route('company_view_cattle_info', $history->id) }}">Cattle
                                                    Info</a></td>
                                            <td>
                                                <a href="{!! asset("storage/".\App\Http\Controllers\Farmer\InsuranceRequestController::package_policy($history->package_id))  !!}">Package
                                                    Policy</a></td>

                                            {{-- -------------------------- Insurance Period -------------------------- --}}

                                            <td>
                                                @if($history->package_insurance_period == 0.5)
                                                    6 months
                                                @elseif($history->package_insurance_period == 1)
                                                    1 year
                                                @elseif($history->package_insurance_period == 1.5)
                                                    1 year 5 months
                                                @elseif($history->package_insurance_period == 2.0)
                                                    2 years
                                                @elseif($history->package_insurance_period == 2.5)
                                                    2 years 5 months
                                                @elseif($history->package_insurance_period == 3.0)
                                                    3 Years
                                                @elseif($history->package_insurance_period > 3.0)
                                                    More than 3 years
                                                @endif
                                            </td>

                                            {{-- -------------------------- Insurance Period -------------------------- --}}


                                            <td>{{ $history->insurance_cost }}/-</td>
                                            <td>{{ $history->insurance_status }}</td>

                                            @if($history->insurance_status == "received")
                                                <td>Policy Sent</td>

                                            @else
                                                <td>
                                                    <a href="{{ route('company_send_request',$history->id) }}"
                                                       class="btn btn-success">Send</a>
                                                </td>
                                            @endif

                                            {{--                                            <td>{{ \App\Http\Controllers\Farmer\InsuranceRequestController::insurance_buy_company($history->cattle_id) }}</td>--}}


                                            {{-- --------------------------- Insurance status wise operation from company side --------------------------- --}}

                                            @if($history->insurance_request_status != null)
                                                @if($history->insurance_request_status == "pending")
                                                    <td>
                                                        <a href="{{ route('company_insurance_detailed_view_with_package_v2',$history->id) }}"
                                                           class="btn btn-primary">View</a>
                                                    </td>
                                                @else
                                                    <td>{{ $history->insurance_request_status }}</td>
                                                @endif

                                            @else
                                                <td>-</td>
                                            @endif

                                            {{-- --------------------------- Insurance status wise operatio from company side --------------------------- --}}


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


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script>


        {{-- ----------------------------------- modified user list js code ----------------------------------- --}}

        $(document).ready(function () {
            var itemsToShow = 3;

            $('td.user-list').each(function () {
                var $td = $(this);
                var userItems = $td.find('.user-item');
                userItems.slice(itemsToShow).hide();

                $td.find('.toggle-button').click(function () {
                    userItems.slice(itemsToShow).toggle();
                    var buttonText = $(this).text() === 'Show More' ? 'Show Less' : 'Show More';
                    $(this).text(buttonText);

                    // Update visibleUserCount when toggling
                    $visibleUserCount = userItems.filter(':visible').length;

                    // Update commas based on the current visibleUserCount for this specific <td>
                    updateCommas($td);
                });
            });

            function updateCommas($td) {
                var userItems = $td.find('.user-item');
                var commas = $td.find('.comma');
                commas.remove(); // Remove existing commas

                if ($visibleUserCount > 1) {
                    // Add commas based on the visibleUserCount
                    for (var i = 1; i < $visibleUserCount; i++) {
                        $(userItems[i - 1]).after('<span class="comma">, </span>');
                    }
                }
            }
        });

        {{-- ----------------------------------- modified user list js code ----------------------------------- --}}


    </script>
@endsection

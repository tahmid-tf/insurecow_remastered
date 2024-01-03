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
                                Insurance For Animal [ Cash Payment ] - Company
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


                <div class="col-xl-12">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Insurance For Animal [ Cash Payment ] - Company</div>
                        <div class="card-body">


                            @if(session('success'))
                                <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            {{-- ---------------------------------------- Package Search
                            ---------------------------------------- --}}


                            <form
                                action="{{ route('company_view_insurance_acceptance_form_update', $insurance_request->id) }}"
                                method="post"
                                enctype="multipart/form-data">

                                @method('put')
                                {{ csrf_field() }}

                                <div class="row">


                                    {{-- ------------------------------ From A/C Name ------------------------------ --}}


                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >From A/C Name<span style="color: red">*</span></label
                                            >

                                            <input class="form-control"
                                                   name="company_name"
                                                   value="{{ \App\Models\User::find($insurance_request->insurance_requested_company_id)->name ?? "Name not found" }}"
                                                   style="background-color: white">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ From A/C Name ------------------------------ --}}


                                    {{-- ------------------------------ From A/C ------------------------------ --}}


                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >From A/C<span style="color: red">*</span></label
                                            >

                                            <input class="form-control"
                                                   name="from_ac" required value="{{ $insurance_request->from_ac }}">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ From A/C ------------------------------ --}}


                                    {{-- ------------------------------ To A/C Name ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >To A/C Name<span style="color: red">*</span></label
                                            >

                                            <input class="form-control"
                                                   name="to_ac_name"
                                                   value="{{ \App\Models\User::find($insurance_request->company_id)->name ?? "Name not found" }}"
                                                   readonly style="background-color: white">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ To A/C Name ------------------------------ --}}

                                    {{-- ------------------------------ To A/C ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >To A/C<span style="color: red">*</span></label
                                            >

                                            <input class="form-control" name="to_ac"
                                                   value="{{ $insurance_request->to_ac }}">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ To A/C ------------------------------ --}}

                                    {{-- ------------------------------ Bank Name ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Bank Name<span style="color: red">*</span></label
                                            >

                                            <input class="form-control"
                                                   name="bank_name"
                                                   value="{{ $insurance_request->bank_name }}">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ Bank Name ------------------------------ --}}

                                    {{-- ------------------------------ Branch Name ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Branch Name<span style="color: red">*</span></label
                                            >

                                            <input class="form-control" value="{{ $insurance_request->branch_name }}"
                                                   name="branch_name">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ Branch Name ------------------------------ --}}

                                    {{-- ------------------------------ Routing No ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Routing No<span style="color: red">*</span></label
                                            >

                                            <input class="form-control" value="{{ $insurance_request->routing_no }}"
                                                   name="routing_no">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ Routing No ------------------------------ --}}

                                    {{-- ------------------------------ Instruction ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Instruction</label
                                            >

                                            <input class="form-control" value="{{ $insurance_request->instruction }}"
                                                   name="instruction">
                                        </div>
                                    </div>

                                    {{-- ------------------------------ Instruction ------------------------------ --}}

                                    {{-- ------------------------------ Insurance Amount ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Insurance Amount<span style="color: red">*</span></label
                                            >

                                            <input class="form-control" value="{{ $insurance_request->insurance_cost }}"
                                                   name="insurance_cost" type="number"
                                                   id="insurance_cost_input" min="0">
                                        </div>
                                    </div>


                                    {{-- ------------------------------ Insurance Amount ------------------------------ --}}

                                    {{-- ------------------------------ Insurance Date ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Insurance Date<span style="color: red">*</span></label
                                            >

                                            <input class="form-control" value="<?= date('Y-m-d'); ?>"
                                                   name="insurance_date" required type="date">
                                        </div>
                                    </div>


                                    {{-- ------------------------------ Insurance Date ------------------------------ --}}

                                    {{-- ------------------------------ Insurance Expiration Date ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Insurance Expiration Date<span style="color: red">*</span></label
                                            >

                                            <input class="form-control"
                                                   value="{{ \App\Models\User::addYearsAndMonths($package->insurance_period)->format('Y-m-d') }}"
                                                   name="insurance_expiration_date" required type="date">
                                        </div>
                                    </div>


                                    {{-- ------------------------------ Insurance Expiration Date ------------------------------ --}}

                                    {{-- ------------------------------ Transaction Type ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Transaction Type<span style="color: red">*</span></label
                                            >


                                            <select name="transaction_type" class="form-select">
                                                <option>Cash</option>
                                                <option>Cheque</option>
                                                <option>Bank Transaction</option>
                                            </select>


                                        </div>
                                    </div>

                                    {{-- ------------------------------ Transaction Type ------------------------------ --}}

                                    {{-- ------------------------------ Transaction Attachment ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">


                                            <label class="small mb-1" for="inputLastName"
                                            >Transaction Attachment<span style="color: red">*</span></label
                                            >


                                            <input type="file" name="transaction_attachment" class="form-control">


                                        </div>
                                    </div>

                                    {{-- ------------------------------ Transaction Attachment ------------------------------ --}}

                                    {{-- ------------------------------ Transaction Acceptation ------------------------------ --}}

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">

                                            <label class="small mb-1" for="inputLastName"
                                            >Decision<span style="color: red">*</span></label
                                            >

                                            <select name="transaction_acceptation" class="form-select" required>
                                                <option selected disabled value="">Select Decision</option>
                                                <option value="a">Accept</option>
                                                <option value="r">Reject</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- ------------------------------ Transaction Acceptation ------------------------------ --}}


                                    {{-- ------------------------------ Insurance Period ------------------------------ --}}


                                    <div class="col-md-6">

                                        <label class="small mb-1" for="inputLastName" style="display: none;"
                                        >Insurance Period</label
                                        >

                                        <input class="form-control" value="{{ $package->insurance_period }}" readonly
                                               name="package_insurance_period" type="hidden">
                                    </div>

                                    {{-- ------------------------------ Insurance Period ------------------------------ --}}

                                    {{-- ------------------------------ Package ID ------------------------------ --}}


                                    <div class="col-md-6">

                                        <label class="small mb-1" for="inputLastName" style="display: none;"
                                        >Package ID</label
                                        >

                                        <input class="form-control" value="{{ $package->id }}" readonly
                                               name="package_id"
                                               type="hidden">
                                    </div>

                                    {{-- ------------------------------ Package ID ------------------------------ --}}

                                    {{-- ------------------------------ Company ID - The Insurance company where the animal
                                    is about to insured ------------------------------ --}}

                                    <div class="col-md-6">
                                        <br>

                                        <label class="small mb-1" for="inputLastName" style="display: none;"
                                        >Package - Company ID</label
                                        >

                                        <input class="form-control" value="{{ $package->user_id }}" readonly
                                               name="company_id" type="hidden">
                                    </div>

                                    {{-- ------------------------------ Company ID - The Insurance company where the animal
                                    is about to insured ------------------------------ --}}

                                    {{-- ------------------------------ Company Sum Insured Cost
                                    ------------------------------ --}}


                                    <div class="col-md-6">
                                        <br>

                                        <label class="small mb-1" for="inputLastName" style="display: none;"
                                        >Cattle Sum Insured</label
                                        >

                                        <input class="form-control" readonly id="cattle_sum_insurance" type="hidden">
                                    </div>

                                    {{-- ------------------------------ Company Sum Insured Cost
                                    ------------------------------ --}}


                                </div>

                                <br>

                                {{-- ------------------------------ Company Sum Insured Cost ------------------------------
                                --}}

                                <div class="row">
                                    <div class="col-md-6">

                                        <label class="small mb-1" for="inputLastName" style="display: none;"
                                        >Insurance Price</label
                                        >

                                        <input class="form-control" readonly id="cattle_insurance_price" type="hidden">
                                    </div>
                                </div>

                                {{-- ------------------------------ Company Sum Insured Cost ------------------------------ --}}

                                <br>

                                <input type="submit" value="Submit Information" class="btn btn-success"
                                       style="margin-top: -100px; margin-left: -7px">

                                {{-- -------------------------------------------------------- Insurance Table Data
                                -------------------------------------------------------- --}}

                                <div class="insurance_price_table_data_info" style="display: none">


                                    <h4>Insurance Price Details</h4>

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Insurance Period</th>
                                            <th>Rate</th>
                                            <th>OFF</th>
                                            <th>VAT</th>
                                            <th>Sum Insured</th>
                                            <th>Insurance Price</th>

                                        </tr>


                                        </thead>

                                        <tbody>
                                        <tr>
                                            <th>{{ $package->insurance_period }}</th>
                                            <th>{{ $package->rate }}%</th>
                                            <th>{{ $package->discount }}%</th>
                                            <th>{{ $package->vat }}%</th>
                                            <th id="sum_insured_data">Sum Insured</th>
                                            <th id="insurance_price_data">Insurance Price</th>

                                        </tr>
                                        </tbody>
                                    </table>

                                    <button class="btn btn-primary" type="submit">
                                        Request For Insurance
                                    </button>
                                </div>


                                {{-- -------------------------------------------------------- Insurance Table Data
                                -------------------------------------------------------- --}}

                            </form>


                            {{-- ---------------------------------------- Package Search
                            ---------------------------------------- --}}


                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- -------------------------------------------------------------- First input box script
        -------------------------------------------------------------- --}}

        <!-- Vanilla JavaScript code -->
        <script>
            // Wait for the document to be ready
            document.addEventListener('DOMContentLoaded', function () {
                // Get the select element
                var farmerList = document.getElementById('farmer_list');

                // Attach change event listener to the select element
                farmerList.addEventListener('change', function () {
                    // Get the selected option value
                    var selectedValue = farmerList.value;

                    // ---------------------------------------------- Farmer Id value ----------------------------------------------


                    // Make the AJAX request with the selectedValue as a parameter
                    window.axios.get(location.origin + "/company/farmers_cattle_list_filter/" + selectedValue)
                        .then(res => {
                            // Assuming res.data is the array of cattle objects
                            var cattleList = res.data.data;

                            // Get the select element
                            var selectElement = document.getElementById('animal_list');

                            // Clear existing options
                            selectElement.innerHTML = "";

                            // Create a new option element
                            var defaultOption = document.createElement('option');
                            defaultOption.value = ""; // You can set the value if needed
                            defaultOption.text = 'Select Cattle Data';
                            defaultOption.disabled = true;
                            defaultOption.selected = true;

                            // Append the new option to the select element
                            selectElement.appendChild(defaultOption);

                            // Create an option for each cattle in the response
                            cattleList.forEach(function (cattle) {

                                var option = document.createElement('option');
                                option.value = cattle.id; // Set the value of the option
                                option.text = cattle.cattle_name; // Set the text of the option
                                selectElement.appendChild(option); // Append the option to the select element
                            });
                        })
                        .catch(error => {
                            console.error('Error fetching cattle list:', error);
                        });

                    // ---------------------------------------------- Farmer Id value ----------------------------------------------

                });
            });
        </script>

        {{-- -------------------------------------------------------------- First input box script
        -------------------------------------------------------------- --}}

        {{-- -------------------------------------------------------------- second input box script
        -------------------------------------------------------------- --}}

        <script>

            let animal_list_select = document.querySelector("#animal_list");

            let cattle_sum_insurance = document.querySelector("#cattle_sum_insurance");
            let cattle_insurance_price = document.querySelector("#cattle_insurance_price");

            let cattle_sum_insured_table_text = document.querySelector("#sum_insured_data");
            let cattle_insurance_price_table_text = document.querySelector("#insurance_price_data");

            let insurance_price_table_data_info = document.querySelector(".insurance_price_table_data_info");

            let insurance_cost_input = document.querySelector("#insurance_cost_input");


            animal_list_select.addEventListener("change", function () {
                // Get the selected option
                let selectedOption = animal_list_select.options[animal_list_select.selectedIndex];

                // Log the selected data to the console
                // console.log("Selected Animal Data:", selectedOption.value);


                window.axios.get(location.origin + "/company/farmer_insurance_calculation/" + selectedOption.value + "/" + "{{ $package->id }}").then(res => {

                    cattle_sum_insurance.value = res.data.sum_insured;
                    cattle_insurance_price.value = Math.ceil(res.data.insurance_cost);

                    cattle_sum_insured_table_text.innerHTML = res.data.sum_insured + "/-";
                    cattle_insurance_price_table_text.innerHTML = Math.ceil(res.data.insurance_cost) + "/-";

                    insurance_cost_input.value = Math.ceil(res.data.insurance_cost);


                    insurance_price_table_data_info.style.display = "none";
                });
            });

        </script>

        {{-- -------------------------------------------------------------- second input box script
        -------------------------------------------------------------- --}}

    </main>

@endsection

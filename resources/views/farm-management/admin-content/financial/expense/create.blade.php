@extends('farm-management.admin-panel.index')

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
                                Farm Management - Expense Information
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
                        <div class="card-header">Farm Management - Expense Information</div>
                        <div class="card-body">

                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- ---------------------------------------- Farm Creation ---------------------------------------- --}}

                            {{--                            <form action="{{ route('expense.store') }}" method="post"--}}
                            {{--                                  enctype="multipart/form-data">--}}
                            {{--                                {{ csrf_field() }}--}}
                            {{--                                <!-- Form Group (username)-->--}}


                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <div class="row gx-3 mb-3">--}}
                            {{--                                            <div class="col-md-12">--}}

                            {{--                                                <label for="exampleFormControlSelect1" class="small mb-1">Animal--}}
                            {{--                                                    Name</label>--}}

                            {{--                                                <select class="form-select" id="exampleFormControlSelect1"--}}
                            {{--                                                        name="cattle_id">--}}
                            {{--                                                    @foreach($animal_data as $data)--}}
                            {{--                                                        <option--}}
                            {{--                                                            value="{{ $data->id }}">{{ $data->cattle_name }}</option>--}}
                            {{--                                                    @endforeach--}}
                            {{--                                                </select>--}}
                            {{--                                            </div>--}}

                            {{--                                        </div>--}}
                            {{--                                    </div>--}}

                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <div class="row gx-3 mb-3">--}}
                            {{--                                            <div class="col-md-12">--}}
                            {{--                                                <label for="expense_date" class="small mb-1">Expense Date</label>--}}
                            {{--                                                <input--}}
                            {{--                                                    type="date"--}}
                            {{--                                                    class="form-control"--}}
                            {{--                                                    id="expense_date"--}}
                            {{--                                                    name="expense_date"--}}
                            {{--                                                    placeholder="Enter expense date"--}}
                            {{--                                                    required--}}
                            {{--                                                />--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <div class="row gx-3 mb-3">--}}
                            {{--                                            <div class="col-md-12">--}}
                            {{--                                                <label for="description" class="small mb-1">Expense Description</label>--}}
                            {{--                                                <input--}}
                            {{--                                                    type="text"--}}
                            {{--                                                    class="form-control"--}}
                            {{--                                                    id="description"--}}
                            {{--                                                    name="description"--}}
                            {{--                                                    placeholder="Enter expense description"--}}
                            {{--                                                    required--}}
                            {{--                                                />--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}

                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <div class="row gx-3 mb-3">--}}
                            {{--                                            <div class="col-md-12">--}}
                            {{--                                                <label for="amount" class="small mb-1">Expense Amount</label>--}}
                            {{--                                                <input--}}
                            {{--                                                    type="number"--}}
                            {{--                                                    class="form-control"--}}
                            {{--                                                    id="amount"--}}
                            {{--                                                    name="amount"--}}
                            {{--                                                    placeholder="Enter expense amount"--}}
                            {{--                                                    step="0.01"--}}
                            {{--                                                    required--}}
                            {{--                                                />--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}

                            {{--                                </div>--}}

                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col-md-6">--}}
                            {{--                                        <div class="row gx-3 mb-3">--}}
                            {{--                                            <div class="col-md-12">--}}
                            {{--                                                <label for="category" class="small mb-1">Expense Category</label>--}}


                            {{--                                                <select--}}
                            {{--                                                    class="form-select"--}}
                            {{--                                                    id="category"--}}
                            {{--                                                    name="category"--}}
                            {{--                                                    required>--}}

                            {{--                                                    <option value="">Select Category</option>--}}

                            {{--                                                    <option value="Feed">Feed</option>--}}
                            {{--                                                    <option value="Veterinary care">Veterinary care</option>--}}
                            {{--                                                    <option value="Medications">Medications</option>--}}
                            {{--                                                    <option value="Breeding">Breeding</option>--}}
                            {{--                                                    <option value="Supplies">Supplies</option>--}}
                            {{--                                                    <option value="Equipment">Equipment</option>--}}
                            {{--                                                    <option value="Transportation">Transportation</option>--}}
                            {{--                                                    <option value="Registration and fees">Registration and fees</option>--}}
                            {{--                                                    <option value="Insurance">Insurance</option>--}}
                            {{--                                                    <option value="Labor">Labor</option>--}}
                            {{--                                                    <option value="Other">Other</option>--}}
                            {{--                                                </select>--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <button class="btn btn-primary" type="submit">--}}
                            {{--                                    Add Expense Information--}}
                            {{--                                </button>--}}
                            {{--                                <br><br>--}}
                            {{--                            </form>--}}

                            {{-- ---------------------------------------- Farm Creation ---------------------------------------- --}}

                            {{-- ---------------------------------------- Farm Creation - Under construction ---------------------------------------- --}}

                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-12">

                                                <label for="exampleFormControlSelect1" class="small mb-1">Animal
                                                    Name</label>

                                                <select class="form-select" id="cattle_id"
                                                        name="cattle_id">
                                                    @foreach($animal_data as $data)
                                                        <option
                                                            value="{{ $data->id }}">{{ $data->cattle_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-12">
                                                <label for="expense_date" class="small mb-1">Expense Date</label>
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    id="expense_date"
                                                    name="expense_date"
                                                    placeholder="Enter expense date"
                                                    required
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-12">
                                                <label for="description" class="small mb-1">Expense Description</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="description"
                                                    name="description"
                                                    placeholder="Enter expense description"
                                                    required
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-12">
                                                <label for="amount" class="small mb-1">Expense Amount</label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    id="amount"
                                                    name="amount"
                                                    placeholder="Enter expense amount"
                                                    step="0.01"
                                                    required
                                                />
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row gx-3 mb-3">
                                            <div class="col-md-12">
                                                <label for="category" class="small mb-1">Expense Category</label>


                                                <select
                                                    class="form-select"
                                                    id="category"
                                                    name="category"
                                                    required>

                                                    <option value="">Select Category</option>

                                                    <option value="Feed">Feed</option>
                                                    <option value="Veterinary care">Veterinary care</option>
                                                    <option value="Medications">Medications</option>
                                                    <option value="Breeding">Breeding</option>
                                                    <option value="Supplies">Supplies</option>
                                                    <option value="Equipment">Equipment</option>
                                                    <option value="Transportation">Transportation</option>
                                                    <option value="Registration and fees">Registration and fees</option>
                                                    <option value="Insurance">Insurance</option>
                                                    <option value="Labor">Labor</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-success" type="submit" id="list_expense_information">
                                    Add To List
                                </button>
                                <br><br>
                            </form>

                            {{-- ---------------------------------------- Farm Creation - Under construction ---------------------------------------- --}}

                            <table id="expenseTable" class="table">
                                <thead>
                                <tr>
                                    <th>Animal Name</th>
                                    <th>Expense Date</th>
                                    <th>Expense Description</th>
                                    <th>Expense Amount</th>
                                    <th>Expense Category</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="expenseTableBody"></tbody>
                            </table>


                            {{-- ---------------------------------------------------- Js Test code ---------------------------------------------------- --}}

                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    // Store the added expenses
                                    const expenses = [];

                                    // Form submission handler
                                    document.getElementById("list_expense_information").addEventListener("click", function (event) {
                                        event.preventDefault();

                                        // Get form values
                                        const cattleId = document.getElementById("cattle_id").value;
                                        const expenseDate = document.getElementById("expense_date").value;
                                        const description = document.getElementById("description").value;
                                        const amount = document.getElementById("amount").value;
                                        const category = document.getElementById("category").value;

                                        // Add data to the expenses array
                                        expenses.push({
                                            cattleId,
                                            expenseDate,
                                            description,
                                            amount,
                                            category
                                        });

                                        // Clear form fields
                                        document.getElementById("cattle_id").value = "";
                                        document.getElementById("expense_date").value = "";
                                        document.getElementById("description").value = "";
                                        document.getElementById("amount").value = "";
                                        document.getElementById("category").value = "";

                                        // Update the table
                                        updateTable();
                                    });

                                    // Function to update the table with added expenses
                                    function updateTable() {
                                        const tableBody = document.getElementById("expenseTableBody");

                                        // Clear existing rows
                                        tableBody.innerHTML = "";

                                        // Populate the table with expenses
                                        expenses.forEach(function (expense, index) {
                                            const row = tableBody.insertRow();

                                            // Insert data into cells
                                            const cells = Object.values(expense);
                                            cells.forEach(function (cellData) {
                                                const cell = row.insertCell();
                                                cell.textContent = cellData;
                                            });

                                            // Add a delete button to the last cell
                                            const deleteButton = document.createElement("button");
                                            deleteButton.textContent = "Delete";
                                            deleteButton.addEventListener("click", function () {
                                                deleteExpense(index);
                                            });

                                            row.insertCell().appendChild(deleteButton);
                                        });
                                    }

                                    // Function to delete an expense from the table
                                    function deleteExpense(index) {
                                        expenses.splice(index, 1);
                                        updateTable();
                                    }
                                });
                            </script>


                            {{-- ---------------------------------------------------- Js Test code ---------------------------------------------------- --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

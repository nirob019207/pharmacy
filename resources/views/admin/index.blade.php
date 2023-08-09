
@extends('admin.layouts.template')


@section('content')
<header>
    <h1>Manage Companies</h1>
    <a href="{{ route('addcompany') }}" class="btn btn-dark">
        Add Company
    </a>
</header>

<section class="page-body">
    <!-- If there is a flash alert named "company" -->
    <!-- Display the flash alert here -->

    <div class="card">
        <div class="card-header">Companies</div>
        <div class="card-table table-responsive">
            <table class="table table-vcenter table-nowrap">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Pharmacist</th>
                        <th>Updated At</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through the companies -->
                    <!-- Output company data in each row -->
                    <!-- If there are no companies, display a message -->
                </tbody>
            </table>
        </div>
        <!-- Display pagination links here -->
    </div>
</section>

@endsection



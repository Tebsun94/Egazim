@extends('layouts.app')

@section('content')
<div class="container-fluid">

    @if (session()->has('message'))
        <div class="alert alert-success mt-5">
            <p>{{session()->get('message')}}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 ml-sm-auto col-lg-12 px-4 inner-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Companies</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <table class="table table-bordered table-striped table-responsive-lg">
                <tr>
                    <th>Company ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>TIN</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->companyname}}</td>
                        <td>{{$company->category}}</td>
                        <td>{{$company->usertype}}</td>
                        <td>{{$company->taxidentifier}}</td>
                        <td>{{date_format($company->created_at, 'jS M Y')}}</td>
                        <td>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">

                                <a class="mx-2" href="{{ route('companies.show', $company->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>

                                <a class="mx-3" href="{{ route('companies.edit', $company->id) }}">
                                    <i class="fas fa-edit  fa-lg"></i>
                                </a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    {!! $companies->links() !!}
</div>



@endsection

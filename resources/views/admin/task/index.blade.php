@extends('admin.layout.index')

@section('title')
- customer
@endsection


@section('content')

    <div class="content-wrapper">
        <section class="users-list-wrapper">
            <!-- Filter starts -->
            <!-- <div class="users-list-filter px-2">
                <form>
                    <div class="row border rounded py-2 mb-2 mx-n2">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <label for="users-list-verified">Verified</label>
                            <fieldset class="form-group">
                                <select id="users-list-verified" class="form-control">
                                    <option value="Any">Any</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <label for="users-list-role">Role</label>
                            <fieldset class="form-group">
                                <select id="users-list-role" class="form-control">
                                    <option value="Any">Any</option>
                                    <option value="User">User</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <label for="users-list-status">Status</label>
                            <fieldset class="form-group">
                                <select id="users-list-status" class="form-control">
                                    <option value="Any">Any</option>
                                    <option value="Active">Active</option>
                                    <option value="Close">Close</option>
                                    <option value="Banned">Banned</option>
                                </select>
                            </fieldset>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                            <button type="reset" class="btn btn-primary btn-block users-list-clear glow mb-0">Clear</button>
                        </div>
                    </div>
                </form>
            </div> -->
            <!-- Filter ends -->

            <!-- Table starts -->
            <div class="users-list-table">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Datatable starts -->
                                    <div class="table-responsive">

                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>title </th>
                                                <th>description</th>
                                                <th>action </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($tasks as $c)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$c->title}} </td>
                                                <td>{{$c->description}}</td>

                                                <td>
                                                    <a href="{{url('dashboard/client/updated/'.$c->id)}}">
                                                        <i class="ft-edit"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="adddevice.html">
                                                        <i class="ft-smartphone"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Datatable ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table ends -->
        </section>

    </div>
@endsection

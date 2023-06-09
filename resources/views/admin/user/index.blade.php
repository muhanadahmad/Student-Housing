@extends('layouts.master')
@section('title', 'Users ')
@section('breadcrumb', 'User')

@section('content')
    <!-- row opened -->
    <div class="row row-sm">


        <!--div-->
        <div class="col-xl-12">
            <x-flash-message />

            <div class="card">

<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mt-4">
     <a class="modal-effect btn btn-outline-dark " data-effect="effect-super-scaled"  href="{{ route('user.create') }}">{{__("Add User")}}</a>

</div>

                <div class="card-body">
                    <h3 class="card-title">{{__("List Users")}}</h3>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>{{__("ID")}}</th>
                                    <th>{{__("Name")}}</th>
                                    <th>{{__("Email")}}</th>
                                    <th>{{__("Creaed At")}} </th>
                                    <th>{{__("Opreation")}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->index+1}}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">Opreation<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item"
                                                        href=" {{ route('user.edit', $user->id) }}">{{__("Update")}}
                                                    </a>
                                                    <form action="{{ route('user.destroy', $user->id) }}"
                                                        method="post">

                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" href="#"
                                                            data-target="#delete_invoice"><i
                                                                class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;{{__("Delete")}}
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9">{{__("No Data .")}}</td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                        {{$users->withQueryString()->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/div-->
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

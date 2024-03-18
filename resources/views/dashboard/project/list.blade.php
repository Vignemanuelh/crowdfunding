@extends('partials.dashboard.index')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Stats-->
        <div class="row g-6 g-xl-9">
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card h-100">
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Heading-->
                        <div class="fs-2hx fw-bold">237</div>
                        <div class="fs-4 fw-semibold text-gray-400 mb-7">Current Projects</div>
                        <!--end::Heading-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-wrap">
                            <!--begin::Chart-->
                            <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                <canvas id="kt_project_list_chart"></canvas>
                            </div>
                            <!--end::Chart-->
                            <!--begin::Labels-->
                            <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-400">Active</div>
                                    <div class="ms-auto fw-bold text-gray-700">30</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-400">Completed</div>
                                    <div class="ms-auto fw-bold text-gray-700">45</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Label-->
                                <div class="d-flex fs-6 fw-semibold align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-400">Yet to start</div>
                                    <div class="ms-auto fw-bold text-gray-700">25</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Budget-->
                <div class="card h-100">
                    <div class="card-body p-9">
                        <div class="fs-2hx fw-bold">$3,290.00</div>
                        <div class="fs-4 fw-semibold text-gray-400 mb-7">Project Finance</div>
                        <div class="fs-6 d-flex justify-content-between mb-4">
                            <div class="fw-semibold">Avg. Project Budget</div>
                            <div class="d-flex fw-bold">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr007.svg-->
                            <span class="svg-icon svg-icon-3 me-1 svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4 10L5.3 18.1C4.9 18.5 4.9 19.1 5.3 19.5C5.7 19.9 6.29999 19.9 6.69999 19.5L14.8 11.4L13.4 10Z" fill="currentColor" />
                                    <path opacity="0.3" d="M19.8 16.3L8.5 5H18.8C19.4 5 19.8 5.4 19.8 6V16.3Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->$6,570</div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="fs-6 d-flex justify-content-between my-4">
                            <div class="fw-semibold">Lowest Project Check</div>
                            <div class="d-flex fw-bold">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr006.svg-->
                            <span class="svg-icon svg-icon-3 me-1 svg-icon-danger">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4 14.8L5.3 6.69999C4.9 6.29999 4.9 5.7 5.3 5.3C5.7 4.9 6.29999 4.9 6.69999 5.3L14.8 13.4L13.4 14.8Z" fill="currentColor" />
                                    <path opacity="0.3" d="M19.8 8.5L8.5 19.8H18.8C19.4 19.8 19.8 19.4 19.8 18.8V8.5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->$408</div>
                        </div>
                        <div class="separator separator-dashed"></div>
                        <div class="fs-6 d-flex justify-content-between mt-4">
                            <div class="fw-semibold">Ambassador Page</div>
                            <div class="d-flex fw-bold">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr007.svg-->
                            <span class="svg-icon svg-icon-3 me-1 svg-icon-success">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.4 10L5.3 18.1C4.9 18.5 4.9 19.1 5.3 19.5C5.7 19.9 6.29999 19.9 6.69999 19.5L14.8 11.4L13.4 10Z" fill="currentColor" />
                                    <path opacity="0.3" d="M19.8 16.3L8.5 5H18.8C19.4 5 19.8 5.4 19.8 6V16.3Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->$920</div>
                        </div>
                    </div>
                </div>
                <!--end::Budget-->
            </div>
            <div class="col-lg-6 col-xxl-4">
                <!--begin::Clients-->
                <div class="card h-100">
                    <div class="card-body p-9">
                        <!--begin::Heading-->
                        <div class="fs-2hx fw-bold">49</div>
                        <div class="fs-4 fw-semibold text-gray-400 mb-7">Our Clients</div>
                        <!--end::Heading-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover mb-9">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                <img alt="Pic" src="assets/media/avatars/300-7.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                <img alt="Pic" src="assets/media/avatars/300-20.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                        <!--begin::Actions-->
                        <div class="d-flex">
                            <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">All Clients</a>
                            <a href="#" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Invite New</a>
                        </div>
                        <!--end::Actions-->
                    </div>
                </div>
                <!--end::Clients-->
            </div>
        </div>
        <!--end::Stats-->
        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack my-5">
            <!--begin::Heading-->
            <h2 class="fs-2 fw-semibold my-2">Projects
            <span class="fs-6 text-gray-400 ms-1">by Status</span></h2>
            <!--end::Heading-->
            <!--begin::Controls-->
            <div class="d-flex flex-wrap my-1">
                <div>
                    <a class="btn btn-primary btn-sm me-3" href="{{ route('pcreate') }}">Create</a>
                </div>
                <!--begin::Select wrapper-->
                <div class="m-0">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body fw-bold w-125px">
                        <option value="Active" selected="selected">Active</option>
                        <option value="Approved">In Progress</option>
                        <option value="Declined">To Do</option>
                        <option value="In Progress">Completed</option>
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Select wrapper-->
            </div>
            <!--end::Controls-->
        </div>
        <!--end::Toolbar-->
        @if (session('status'))
        <div class="alert  alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <!--begin::Row-->
        <div class="row g-6 g-xl-9">
            @foreach ($projects as $project )
            <!--begin::Col-->
            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <div class="card border-hover-primary">
                    <!--begin::Card header-->
                    <a href="{{ route('pedit', $project) }}">
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px w-50px bg-light">
                                    <img src="{{asset( "$project->image") }}" alt="image" class="p-3" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                @if($project->status == 0)
                                <span class="badge badge-light fw-bold me-auto px-4 py-3">Pending</span>
                                @else
                                <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">In Progress</span>
                                @endif
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                    </a>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <a href="{{ route('pedit', $project) }}" class="card border-hover-primary">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bold text-dark">{{ $project->title }}</div>
                            <!--end::Name-->
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7 h-75px overflow-hidden ">{{ $project->description }}</p>
                            <!--end::Description-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
                                <table>
                                    <tr>
                                        <td>
                                            <!--begin::Due-->
                                            <div class="col-6 border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                                <div class="fs-6 text-gray-800 fw-bold">{{ $project->start_date }}</div>
                                                <div class="fw-semibold text-gray-400">Start Date</div>
                                            </div>
                                            <!--end::Due-->
                                        </td>
                                        <td>
                                            <!--begin::Due-->
                                            <div class="col-6 border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                                <div class="fs-6 text-gray-800 fw-bold">{{ $project->end_date }}</div>
                                                <div class="fw-semibold text-gray-400">End Date</div>
                                            </div>
                                            <!--end::Due-->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!--begin::Budget-->
                                            <div class="col-6 border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                <div class="fs-6 text-gray-800 fw-bold">${{ $project->fund_collected }}</div>
                                                <div class="fw-semibold text-gray-400">Fonds collectés</div>
                                            </div>
                                            <!--end::Budget-->
                                        </td>
                                        <td>
                                            <!--begin::Budget-->
                                            <div class="col-6 border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                <div class="fs-6 text-gray-800 fw-bold">${{ $project->financial_goal }}</div>
                                                <div class="fw-semibold text-gray-400">Budget</div>
                                            </div>
                                            <!--end::Budget-->
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </a>
                        <!--end::Info-->
                        {{-- <!--begin::Progress-->
                        <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project 50% completed">
                            <div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <!--end::Progress--> --}}
                        <div class="row">
                            <div class="col-6">
                                <!--begin::Users-->
                            <div class="symbol-group symbol-hover">
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Emma Smith">
                                    <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                </div>
                                <!--begin::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Rudy Stone">
                                    <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--begin::User-->
                                <!--begin::User-->
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                    <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                </div>
                                <!--begin::User-->
                            </div>
                            <!--end::Users-->
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-end align-items-center " data-kt-filemanager-table-toolbar="selected">
                                    {{-- <button type="button" class="btn btn-danger" >Delete</button> --}}
                                    <div class="menu-item px-3">
                                        <a href="{{ route('pdelete', $project) }}" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Card body-->
                </div>
                <!--end::Card-->
            </div>
            @endforeach
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <div>
            {{-- {{ $projects->links() }} --}}
        </div>
    </div>
    <!--end::Container-->
</div>

@endsection

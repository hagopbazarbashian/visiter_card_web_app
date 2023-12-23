@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'User List'}}@endsection
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                <div class="d-flex align-items-center pt-3">
                   <div class="form-group">
                      <select type="select" class="form-control select2-basic-multiple" placeholder="No Action">
                         <option>No Action</option>
                         <option>Status</option>
                         <option>Delete</option>
                      </select>
                      <button class="btn btn-primary">Apply</button>
                   </div>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive rounded py-4 table-space">
                   <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
                      <thead>
                         <tr class="ligth">
                            <th>*</th>
                            <th>User Name</th>
                            <th>Photo</th>
                            <th>Full Name</th>
                            <th>Title</th>
                            <th>Department</th>
                            <th>Company</th>
                            <th>Headline</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>faceBook Link</th>
                            <th>Instagram Link</th>
                            <th>linkedin Link</th>
                            <th>Color</th>
                            <th>Status</th>
                            <th style="min-width: 100px;">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($customerregisters as $key=>$customerregister)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td>{{$customerregister->user->name}}</td>
                            <td><img src="user_image/{{ $customerregister->photo ?? 'null' }}" class="custom-responsive-img" alt="User Image" style="width: 85%;"></td>
                            <td>{{$customerregister->full_name}}</td>
                            <td>{{$customerregister->title}}</td>
                            <td>{{$customerregister->department}}</td>
                            <td>{{$customerregister->company}}</td>
                            <td>{{ \Illuminate\Support\Str::limit($customerregister->headline, 40, '...' ?? 'null') }}</td>
                            <td>{{$customerregister->email}}</td>
                            <td>{{$customerregister->phone}}</td>
                            <td>{{$customerregister->fb}}</td>
                            <td>{{$customerregister->ins}}</td>
                            <td>{{$customerregister->link}}</td>
                            <td style="background-color: {{ $customerregister->color }};">{{ $customerregister->color }}</td>
                            @if ($customerregister->user->status == 0)
                            <td><span class="badge bg-primary">Not active</span></td>
                            @else
                            <td><span class="btn btn-success">active</span></td>
                            @endif
                            <td>
                               <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Add" href="#">
                                     <form action="{{route('user.update',$customerregister->id)}}" method="">
                                        <span class="btn-inner">
                                           <i class="fa-solid fa-user-plus fa-xs"></i>
                                        </span>
                                      </form>
                                     </a>
                                  <a class="btn btn-sm btn-icon btn-danger rounded delete-btn" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#">
                                     <span class="btn-inner">
                                        <i class="fa-solid fa-trash fa-xs"></i>
                                     </span>
                                  </a>
                               </div>
                            </td>
                         </tr>
                        @endforeach
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
